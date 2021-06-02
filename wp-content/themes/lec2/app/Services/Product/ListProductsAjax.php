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
            $_GET['date_from'] = str_replace(":","-",$_GET['date_from']);

            $_GET['date_to'] = str_replace("/","-",$_GET['date_to']);
            $_GET['date_to'] = str_replace(".","-",$_GET['date_to']);
            $_GET['date_to'] = str_replace(":","-",$_GET['date_to']);

            $args = array(
                'numberposts'   =>  -1,
                'post_type'   =>  'product',
                'meta_query'   =>  array(
                    'relation'  =>  'AND',
                    array(
                        'key'   =>  'training_types_&&_execution_of_training_live_course_dates_&&_date',
                        'compare'   =>  'BETWEEN',
                        'value' =>  array($_GET['date_from'],$_GET['date_to']),
                    ),
                    array(
                        'key'   =>  'training_types_&&_execution_of_training_has_live_course',
                        'compare'   =>  '=',
                        'value' =>  1, 
                    )
                )
            );

            $objs = query_posts($args);

        }else{
            $objs = [];
        }

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


// http://lec2.local/wp-admin/admin-ajax.php?action=get_products&date_from=2021.05.25&date_to=2021.06.17
