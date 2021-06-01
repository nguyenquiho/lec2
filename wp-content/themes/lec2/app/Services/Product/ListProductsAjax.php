<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019-07-29
 * Time: 17:00
 */

namespace App\Services\Product;

use App\Services\AbstractListingAjax;

/**
 * Class ListTrainings
 * List all Training and paginate them.
 * If you want to get objects and paginate, please make your own class extend from AbstractListingObjects
 * - But we don't need paginate for training so that i  make this class extend from AbstractService
 *
 * @package App\Services\Training
 */
class ListProductsAjax extends AbstractListingAjax
{
    public function execute()
    {
        global $wpdb, $wp_query;
        if(isset($_GET['cost_from']) || isset($_GET['cost_to'])){
            $costFrom = $_GET['cost_from'];
            $costTo = $_GET['cost_to'];
            if(!isset($_GET['cost_from'])){
                $costFrom = 0;
            }   
            $compare = "BETWEEN $costFrom AND $costTo";
            
            $query = <<<EOT
            SELECT * FROM wp_posts AS p LEFT JOIN wp_postmeta AS mt1 ON p.id = mt1.post_id LEFT JOIN wp_postmeta AS mt2 ON mt1.post_id = mt2.post_id
            WHERE
                p.post_type = 'product' AND
                ( mt1.meta_key LIKE 'training_types_%_training_type' AND mt1.meta_value = {$_GET['training_type_id']} ) AND
                ( mt2.meta_key LIKE 'training_types_%_cost' AND lec2_floatval("$,d,Y",mt2.meta_value) $compare) AND
                ( REPLACE(mt1.meta_key, '_training_type', '') = REPLACE(mt2.meta_key, '_cost', '') )
            GROUP BY p.id
            EOT;
        }
        elseif(isset($_GET['date_from']) && isset($_GET['date_to'])){
            $_GET['date_from'] = str_replace("/","-",$_GET['date_from']);
            $_GET['date_from'] = str_replace(".","-",$_GET['date_from']);

            $_GET['date_to'] = str_replace("/","-",$_GET['date_from']);
            $_GET['date_to'] = str_replace(".","-",$_GET['date_from']);

            $query = "SELECT `post_id` FROM wp_postmeta WHERE `meta_key` LIKE 'execution_of_training_live_course_dates_%_date' AND DATE_FORMAT(`meta_value`,'%Y-%m-%d') BETWEEN '{$_GET['date_from']}' AND '{$_GET['date_to']}' GROUP BY `post_id`";
            $results = $wpdb->get_results( $query );
            // $query = <<<EOT
            // SELECT * FROM wp_posts AS p LEFT JOIN wp_postmeta AS mt1 ON p.id = mt1.post_id LEFT JOIN wp_postmeta AS mt2 ON mt1.post_id = mt2.post_id
            // WHERE
            //     p.post_type = 'product' AND
            //     ( mt1.meta_key LIKE 'execution_of_training_live_course_dates_%_date' AND mt1.meta_value BETWEEN {$_GET['date_from']} AND {$_GET['date_to']} )
            // GROUP BY p.id
            // EOT;
            // die($query);
            $array = array();
            foreach($results as $re){
                $array[] = $re->post_id;
            }
            $array = implode("','",$array);
            // debug($array,true);
            $query = <<<EOT
            SELECT * FROM wp_posts AS p LEFT JOIN wp_postmeta AS mt1 ON p.id = mt1.post_id
            WHERE
                p.post_type = 'product' AND
                ( mt1.meta_key LIKE 'training_types_%_training_type' AND mt1.meta_value IN ('{$array}') )
            GROUP BY p.id
            EOT;
            
            // $products = $wpdb->get_results( $query );
            $objs = $wpdb->get_results( $query );
    
            // debug($query,true);
        }
        else{
            $objs = array();
        }

        // debug($query,true);
        $objs = $wpdb->get_results( $query );

        $returnData = [];

        if(is_array($objs) && count($objs) > 0){
            foreach ($objs as $obj){
                $returnData[] = $this->parseData($obj);
            }
        }

        $this->postsFound = $wp_query->found_posts;

        wp_reset_postdata();
        return $returnData;
    }
}