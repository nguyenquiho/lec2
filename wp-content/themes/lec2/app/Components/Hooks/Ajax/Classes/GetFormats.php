<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019-08-14
 * Time: 16:33
 */

namespace App\Components\Hooks\Ajax\Classes;

use App\Components\Hooks\Ajax\AbstractAjax;

/**
 * Class GetPartnerListing - Get more partner
 *
 * @package App\Components\Hooks\Ajax\Classes
 */
class GetFormats extends AbstractAjax
{
    protected $functions = [ 'get_formats' =>  'getFormats'];

    /**
     * getMorePartner
     */
    public function getFormats(){
      global $wpdb;
      $sql = "SELECT `ID`,`post_title` FROM `wp_posts` WHERE `post_type` = 'format' AND `post_status` = 'publish'";
      $formats = $wpdb->get_results($sql);

      wp_send_json([
        'status'  =>  '200',
        'function'  =>  'getFormats',
        'message' =>  'Successfully',
        'total_items' => count($formats),
        'formats'  => $formats
      ]);

  }
}