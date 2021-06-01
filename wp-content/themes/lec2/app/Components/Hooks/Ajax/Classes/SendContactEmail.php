<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019-08-14
 * Time: 16:33
 */

namespace App\Components\Hooks\Ajax\Classes;

use App\Components\Hooks\Ajax\AbstractAjax;
use App\Components\Validations\Classes\Contact;
use App\Services\EmailTemplates\ContactForm;
use App\Services\Helper;

/**
 * Class SendContactEmail - Send contact email
 *
 * @package App\Components\Hooks\Ajax\Classes
 */
class SendContactEmail extends AbstractAjax
{
    protected $functions = [ 'send_contact' =>  'sendContact'];

    /**
     * Create an application
     */
    public function sendContact(){
        $sendContactEmail = new ContactForm();
        $validation = new Contact();
        $data = Helper::stripTagArray($_POST);
        $result = $validation->setRequest($data)->validate();
        if($result->getResult()){
            $isSent =  $sendContactEmail->setData($data)->execute();
            if($isSent){
                wp_send_json(array(
                    'status'    => true,
                    'message'   => __('Your contact email was sent successfully','lec2_text_domain')
                ));
            }
            else{
                wp_send_json(array(
                    'status'    => false,
                    'message'   => __('Your contact email could not be sent','lec2_text_domain')
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