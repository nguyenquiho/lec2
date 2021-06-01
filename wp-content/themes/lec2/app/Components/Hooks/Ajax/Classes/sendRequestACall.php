<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019-08-14
 * Time: 16:33
 */

namespace App\Components\Hooks\Ajax\Classes;

use App\Components\Hooks\Ajax\AbstractAjax;
use App\Components\Validations\Classes\RequestACall;
use App\Services\EmailTemplates\RequestACallForm;
use App\Services\Helper;

/**
 * Class SendContactEmail - Send contact email
 *
 * @package App\Components\Hooks\Ajax\Classes
 */
class sendRequestACall extends AbstractAjax
{
    protected $functions = [ 'send_request_a_call' =>  'sendRequestACall'];

    /**
     * Create an application
     */
    public function sendRequestACall(){
        $sendRequestACall = new RequestACallForm();
        $validation = new RequestACall();
        $data = Helper::stripTagArray($_POST);
        $result = $validation->setRequest($data)->validate();
        if($result->getResult()){
            $isSent =  $sendRequestACall->setData($data)->execute();
            if($isSent){
                wp_send_json(array(
                    'status'    => true,
                    'message'   => __('Your request was sent successfully','lec2_text_domain')
                ));
            }
            else{
                wp_send_json(array(
                    'status'    => false,
                    'message'   => __('Your request could not be sent','lec2_text_domain')
                ));
            }

        }
        else{
            wp_send_json(array(
                'status'            => $result->getResult(),
                'failure_key'       => $result->getFailureKey(),
                'message'           => __($result->getMessage(),'lec2_text_domain')
            ));
        }


    }
}