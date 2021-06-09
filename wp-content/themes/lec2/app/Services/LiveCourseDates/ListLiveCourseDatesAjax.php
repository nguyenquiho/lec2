<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019-07-29
 * Time: 17:00
 */

namespace App\Services\LiveCourseDates;

use App\Services\AbstractListingAjax;

/**
 * Class ListTrainings
 * List all Training and paginate them.
 * If you want to get objects and paginate, please make your own class extend from AbstractListingObjects
 * - But we don't need paginate for training so that i  make this class extend from AbstractService
 *
 * @package App\Services\Training
 */
class ListLiveCourseDatesAjax extends AbstractListingAjax
{
    public function getTimeZone(){ ?>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script type="text/javascript">
        function createCookie(e,t,o){var i;if(o){var n=new Date;n.setTime(n.getTime()+24*o*60*60*1e3),i="; expires="+n.toGMTString()}else i="";url=window.location.href,document.cookie=escape(e)+"="+escape(t)+i+"; path="+url}$(document).ready(function(){createCookie("time_zone_client",Intl.DateTimeFormat().resolvedOptions().timeZone,"1")});
        </script>
        <?php
        return $_COOKIE["time_zone_client"];
    }

    public function execute()
    {
        global $wpdb, $wp_query;
        if(isset($_GET['date_from']) || isset($_GET['date_to'])){
        $time_zone_client = $this->getTimeZone();
        $timezoneWPSetting = wp_timezone_string();

            if (strpos($timezoneWPSetting, '/') === false) {
                $tz_offset = get_option('gmt_offset');
                switch($tz_offset){
                    case -12: $timezoneWPSetting = 'Etc/GMT+12';break;
                    case -11.5: $timezoneWPSetting = 'Etc/GMT+11.5';break;
                    case -11: $timezoneWPSetting = 'Etc/GMT+11';break;
                    case 12.75: $timezoneWPSetting = 'Pacific/Chatham';break;
                    case 13: $timezoneWPSetting = 'Pacific/Apia';break;
                    case 13.75: $timezoneWPSetting = 'Pacific/Chatham';break;
                    case 14: $timezoneWPSetting = 'Pacific/Kiritimati';break;
                    default: $timezoneWPSetting = timezone_name_from_abbr("", $tz_offset * 3600, false);
                }
            }
            $date_from = date_create($_GET['date_from'], timezone_open($time_zone_client));
            date_timezone_set($date_from, timezone_open($timezoneWPSetting));
            $date_from = $date_from->format('Y-m-d H:i:s');

            $date_to = date_create($_GET['date_to'], timezone_open($time_zone_client));
            date_timezone_set($date_to, timezone_open($timezoneWPSetting));
            $date_to = $date_to->format('Y-m-d H:i:s');

            $query = <<<EOT
            SELECT *  FROM `wp_postmeta` WHERE `meta_key` LIKE 'training_types_%_execution_of_training_live_course_dates_%_date'
            AND ( meta_value BETWEEN '{$date_from}' AND '{$date_to}' )
            EOT;
            $objs = $wpdb->get_results( $query );

            foreach($objs as $obj){
                $date = date_create($obj->meta_value, timezone_open($timezoneWPSetting));
                date_timezone_set($date, timezone_open($time_zone_client));
                $date = $date->format('Y-m-d H:i:s');
                $obj->meta_value = $date;
            }
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


// http://lec2.local/wp-admin/admin-ajax.php?action=get_live_course_dates&date_from=2021-05-24%2001:36:01&date_to=2021-06-17%2011:17:01
