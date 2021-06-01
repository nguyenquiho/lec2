<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019-08-14
 * Time: 16:33
 */

namespace App\Components\Hooks\Ajax\Classes;

use App\Components\Hooks\Ajax\AbstractAjax;
// use App\Services\Product\ListProductsAjax;
/**
 * Class GetPartnerListing - Get more partner
 *
 * @package App\Components\Hooks\Ajax\Classes
 */
class GetProductsFormat extends AbstractAjax
{
    protected $functions = [ 'get_products_format' =>  'getProductsFormat'];

    /**
     * getMorePartner
     */
    public function getProductsFormat(){
      $trainingTypeId = $_GET['training_type_id'];
      $formatID = $_GET['format_id'];
      global $wpdb;
      $sql = "SELECT `post_title` FROM `wp_posts` WHERE `ID` = '{$formatID}' LIMIT 1";
      $formats = $wpdb->get_results($sql);
      if(empty($formats)){
        $products = array();
      }else{
        $query = <<<EOT
        SELECT * FROM wp_posts AS p LEFT JOIN wp_postmeta AS mt1 ON p.id = mt1.post_id LEFT JOIN wp_postmeta AS mt2 ON mt1.post_id = mt2.post_id
        WHERE
            p.post_type = 'product' AND
            ( mt1.meta_key LIKE 'training_types_%_training_type' AND mt1.meta_value = {$_GET['training_type_id']} ) AND
            ( mt2.meta_key LIKE 'training_types_%_format' AND mt2.meta_value LIKE '{$formats[0]->post_title}')
        GROUP BY p.id
        EOT;
        
        $products = $wpdb->get_results( $query );
      }



      
      // debug($query,true);
      wp_send_json([
        'status'  =>  '200',
        'function'  =>  'GetProductsFormat',
        'message' =>  'Successfully',
        'total_items' => count($products),
        'products'  => $products
      ]);
  }
}

// http://lec2.local/wp-admin/admin-ajax.php?action=get_products_format&training_type_id=833&format_id=4271