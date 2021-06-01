<?php


namespace App\Components\Hooks\Admin\PostTypes\Classes;


use App\Components\AcfFields\Consts\PostTypes\Format as Field;
use App\Components\Hooks\Admin\PostTypes\Abstracts\AbstractPostType;

class Format extends AbstractPostType
{

    protected  $label           = 'Format';
    protected  $singleName      = 'Format';
    protected  $name            = Field::_NAME;
    protected  $time            = Field::_TIME;
    protected  $format          = Field::_FORMAT;
    protected  $cost            = Field::_COST;
    protected  $menuIcon        = 'dashicons-book';
    protected  $support         = array('title');

    public function selfHook()
    {

        // die();
        // $this->registerTax('training-category', 'Training Categories', 'Training', true);

        //get custom field text
    global $wpdb;
    $sql = "SELECT DISTINCT(meta_value) FROM wp_postmeta WHERE meta_key = 'format'";
    $customFieldText = $wpdb->get_results($sql);
    // debug($customFieldText,yes);

    //update custom field text to post(object)
    $sql = "SELECT `post_title` FROM `wp_posts` WHERE `post_type` = 'format' AND `post_status` = 'publish'";
    $customFieldObj = $wpdb->get_results($sql);
    // debug($customFieldObj,yes);

    
    foreach($customFieldText as $fText){
        $exist = 0;
        foreach($customFieldObj as $fObject){
            if($fObject->post_title == $fText->meta_value){
                $exist ++;
            }
        }
        if($exist == 0){
            $format = array(
                'post_title'    => $fText->meta_value,
                'post_status'   => 'publish',
                'post_author'   => 1,
                'post_type' => 'format'
            );
            
            // Insert the post into the database
            wp_insert_post( $format );
        }
    }
        

            //update custom field text to post(object)
        $customFieldObj = $wpdb->get_results($sql);
        // debug($customFieldObj,true);
        foreach($customFieldObj as $fObject){
            $exist = false;
            foreach($customFieldText as $fText){
                if(strcmp($fObject->post_title, $fText->meta_value) == 0){
                    $exist = true;
                    continue;
                }
            }
            if($exist == false){
                global $wpdb;
                $wpdb->query("DELETE FROM `wp_posts` WHERE `post_type` = 'format' AND `post_title` LIKE  '{$fObject->post_title}'");
            }
        }
    }

    public function adminColumns($defaults)
    {
        // TODO: Implement adminColumns() method.
        return [
            'cb'                =>  $defaults['cb'],
            'title'             =>  __('Name','lec2_text_domain'),
            'thumbnail'         =>  __('Thumbnail','lec2_text_domain'),
            'category'          =>  __('Categories','lec2_text_domain'),
        ];
    }

    public function adminColumnsContent($columnName, $postID)
    {
        // TODO: Implement adminColumnsContent() method.
        // if($columnName == 'thumbnail'){
        //     $url = get_the_post_thumbnail_url($postID);
        //     if($url){
        //         echo "<img src='{$url}' class='table-thumbnail' >";
        //     }
        // }
        // if($columnName == 'category'){
        //     $categories = get_the_terms($postID, 'training-category');
        //     $termNames = [];
        //     if($categories){
        //         foreach($categories as $term) {
        //             $termNames[] = $term->name;
        //         }
        //     }
        //     echo implode(', ', $termNames);
        // }
    }
}