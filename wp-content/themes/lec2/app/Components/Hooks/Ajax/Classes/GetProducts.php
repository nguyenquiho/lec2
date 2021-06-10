<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019-08-14
 * Time: 16:33
 */

namespace App\Components\Hooks\Ajax\Classes;

use App\Components\Hooks\Ajax\AbstractAjax;
use App\Services\Training\ListTrainingsAjax;
use App\Services\Product\ListProductsAjax;
/**
 * Class GetPartnerListing - Get more partner
 *
 * @package App\Components\Hooks\Ajax\Classes
 */
class GetProducts extends AbstractAjax
{
    protected $functions = [ 'get_products' =>  'getProducts'];

    /**
     * getMorePartner
     */

    public function to_24_hour($datetime){
      $datetime = str_replace("/","-",$datetime);
      $date = substr($datetime, 0, 10);
      $hours = substr($datetime, 11, 2);
      $minutes = substr($datetime, 14, 2);
      $seconds = '00';
      $meridiem = (strtolower($meridiem)=='am') ? 'am' : 'pm';
      return $date.date(' H:i:s', strtotime("{$hours}:{$minutes}:{$seconds} {$meridiem}"));
    }

    public function getProducts(){

      $products = new ListProductsAjax();
      $data = $products->execute();

      $time_zone_client = $products->getTimeZone();
      $timezoneWPSetting = $products->getTimeZoneWPSetting();
      foreach($data as $item_key=>$item_value){
        foreach($item_value['custom_data']['training_types'] as $training_type_key=>$training_type_value){
          $item_value['custom_data']['training_types'][$training_type_key]['execution_of_training']['live_course_dates'] = [];
          foreach($training_type_value['execution_of_training']['live_course_dates'] as $key=>$value){
            $new_date = $this->to_24_hour($value['date']);
            $date = date_create($new_date, timezone_open($timezoneWPSetting));
            date_timezone_set($date, timezone_open($time_zone_client));
            $date = $date->format('d-m-Y H:i:s');
            $item_value['custom_data']['training_types'][$training_type_key]['execution_of_training']['live_course_dates'][]['date'] = $date;
          }
        }
        $data[$item_key] = $item_value;
      }

    //get products filter by category ID
    //   $cat_ids = $_GET['cat_ids'];
    //   $cat_ids = explode(",", $cat_ids);
    //   $args = array(
    //     'post_type'      => 'product',
    //     'posts_per_page' => $_GET['total_products'],
    //     // 'p' =>  1372,
    //     // 'post__in' => array(1372,1373,1370)
    //     // 'category__and' => array( 2, 6 )
    //     'tax_query' => array(
    //       array(
    //           'taxonomy' => 'product_cat',
    //           'field'    => 'term_id',
    //           // 'terms'    => array(29,31),
    //           'terms'    => $cat_ids,
    //           'operator' => 'IN'
    //       ),
    //   ),
    // );


    //get products filter by category Name
  //   global $wpdb;
  //   $term_ids=array();
  //   $cat_Args="SELECT * FROM $wpdb->terms
  //   INNER JOIN `wp_term_taxonomy`
  //   ON `$wpdb->terms`.`term_id` = `wp_term_taxonomy`.`term_id`
  //   WHERE `wp_terms`.`name` LIKE '%".$_REQUEST['cat_names']."%'
  //   AND `wp_term_taxonomy`.`taxonomy` = 'product_cat'";
  //   // die($cat_Args);
  //   $cats = $wpdb->get_results($cat_Args, OBJECT);
  //   array_push($term_ids,$cats[0]->term_id);

  //   //debug($term_ids);

  //   $cat_names = $_GET['cat_names'];
  //   $cat_names = explode(",", $cat_names);
  //   $args = array(
  //     'post_type'      => 'product',
  //     'posts_per_page' => $_GET['total_products'],
  //     // 'category_name' => 'tools',
  //     // 'p' =>  1372,
  //     // 'post__in' => array(1372,1373,1370)
  //     // 'category__and' => array( 2, 6 )
  //     'tax_query' => array(
  //       array(
  //           'taxonomy' => 'product_cat',
  //           'field'    => 'term_id',
  //           'terms'    => $term_ids,
  //           // 'compare' => 'LIKE',
  //           // 'terms'    => $cat_ids,
  //           'operator' => 'IN'
  //       ),
  //   ),
  // );

  // $args = array(
  //   'post_type'  => 'product',
  //   'meta_query' => array(
  //       array(
  //           'key'     => 'training_types_0_cost',
  //           'value'   => '99$',
  //           'compare' => 'LIKE'
  //         ),
  //     ),
  // );


  //Processing
  // $args = array(
  // 'post_type'  => 'product',
  // 'meta_query' => array(
  //   'relation' => 'AND',
  //     array(
  //         'key'     => 'training_types_9_format',
  //         'value'   => 'online',
  //         'compare' => 'LIKE'
  //       ),
  //     array(
  //         'key'     => 'training_types_0_cost',
  //         'value'   => '100$',
  //         'compare' => '>'
  //       ),
  //   ),
  // );

  // $args = array(
  // 'post_type'  => 'product',
  // 'meta_query' => array(
  //   'relation' => 'OR',
  //   ),
  // );

  // for($i=0;$i<2;$i++){
  //   $args['meta_query'][] = array(
  //     'relation' => 'AND',
  //     array(
  //       'key'     => "'training_types_'.$i.'_training_types'",
  //       'value'   => 833,
  //     ),
  //     array(
  //       'key'     => "'training_types_'.$i.'_cost'",
  //       'value'   => '99$'
  //     ),
  //   );
  // }


  // $products = query_posts($args);

  // // debug($products,true);


  // global $wpdb;
  //     $cost = $_GET['cost'];
  //     // if(is_numeric($cost[0] )){
  //       //$cost = floatval($cost);

  //       // echo $cost;
  //       //if($cost != 0){
  //         $query = <<<EOT
  //         SELECT * FROM wp_posts AS p LEFT JOIN wp_postmeta AS mt1 ON p.id = mt1.post_id LEFT JOIN wp_postmeta AS mt2 ON mt1.post_id = mt2.post_id
  //         WHERE
  //           p.post_type = 'product' AND
  //             ( mt1.meta_key LIKE 'training_types_%_training_type' AND mt1.meta_value = {$_GET['training_type_id']} ) AND
  //             ( mt2.meta_key LIKE 'training_types_%_cost' AND lec2_floatval("$,d,Y",mt2.meta_value) >= {$cost}) AND
  //             ( REPLACE(mt1.meta_key, '_training_type', '') = REPLACE(mt2.meta_key, '_cost', '') )
  //         GROUP BY p.id
  //         EOT;
  //         $products = $wpdb->get_results( $query );
  //         // echo $query;
  //         // die();
          wp_send_json([
          'status'  =>  '200',
          'function'  =>  'Function test',
          'message' =>  'Successfully',
          'total_items' => count($data),
          'products'  => $data
        ]);
        //}
        // else{
        //   echo $sql;
        //   wp_send_json([
        //     'status'  =>  '200',
        //     'function'  =>  'Function test',
        //     'message' =>  'Error: Invalid input',
        //   ]);
        // }

      // }else{
      //   // $cost = (int) filter_var($_GET['cost'], FILTER_SANITIZE_NUMBER_INT);
      //   $cost = filter_var( $_GET['cost'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION );
      //   $symbols = str_replace( $cost, '', $_GET['cost']);
      //   // echo $cost.'--';
      //   // echo $symbols;
      //   // die();
      //   wp_send_json([
      //     'status'  =>  '200',
      //     'function'  =>  'Function test',
      //     'message' =>  'Đang làm',
      //   ]);
      // }




  }
}
