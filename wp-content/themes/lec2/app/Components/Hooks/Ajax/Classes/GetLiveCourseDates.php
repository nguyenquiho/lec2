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
use App\Services\LiveCourseDates\ListLiveCourseDatesAjax;
/**
 * Class GetPartnerListing - Get more partner
 *
 * @package App\Components\Hooks\Ajax\Classes
 */
class GetLiveCourseDates extends AbstractAjax
{
    protected $functions = [ 'get_live_course_dates' =>  'getLiveCourseDates'];

    /**
     * getMorePartner
     */
    public function getLiveCourseDates(){
        $live_course_dates = new ListLiveCourseDatesAjax();
        $data = $live_course_dates->execute();
        wp_send_json([
            'status'  =>  '200',
            'function'  =>  'Function test',
            'message' =>  'Successfully',
            'total_items' => count($data),
            'products'  => $data
          ]);
  }
}