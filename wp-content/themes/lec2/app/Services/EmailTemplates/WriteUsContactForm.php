<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019-08-14
 * Time: 16:31
 */

namespace App\Services\EmailTemplates;


use App\Components\AcfFields\Consts\Pages\ThemeOptions;

/**
 * Class WriteUsContactForm - Contact email
 * @package App\Services\EmailTemplates
 */
class WriteUsContactForm extends AbstractEmailTemplates
{

    /**
     * @var array
     */
    protected $data = [];

    /**
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param array $data
     * @return WriteUsContactForm
     */
    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }

    /**
     * These tags below will be replaced by text
     *
     * @var array
     */
    protected $tags  = [
        'headers'    => [
            '{name}'              => 'name',
            '{surname}'              => 'surname'
        ],
        'subject'    => [
            '{name}'                  => 'name'
        ],
        'body'       => [
            '{name}'              => 'name',
            '{surname}'              => 'surname',
            '{email}'                  => 'email',
            '{phone}'           => 'phone',
            '{message}'            => 'message'
        ]
    ];

    /**
     * Create a boy for email
     */
    public function createConfigurationBody()
    {
        $themeOptions = $this->themeOptions;

        $headerFrom             = $this->email();
        $subject                = "Contact";
        $body                   = $this->renderEmail();
        $recipientEmail         = isset($themeOptions[ThemeOptions::_CONTACT_RECIPIENT_EMAIL]) ? $themeOptions[ThemeOptions::_CONTACT_RECIPIENT_EMAIL] : '';
        //send for external emails which will come from contact form
        if(isset($this->data['to_email']) && $this->data['to_email'] != ''){
            $recipientEmail = $this->data['to_email'];
        }

        $this->config['headers'][]      = "From: {$headerFrom}";
        $this->config['subject']        = $subject;
        $this->config['body']           = $body;
        $this->recipient                = $recipientEmail;

    }

    public function renderEmail(){
        $emailContent = '<table bgcolor="#CCC" style="font-family:Helvetica,san-serif;color:#444" width="100%">
  <tbody>
    <tr>
      <td style="padding:0 20px">
        <table align="center" bgcolor="white" cellpadding="0" cellspacing="0" style="margin-top:20px;margin-bottom:20px;border-radius:7px;width:100%;max-width:550px">
          <tbody>
            <tr bgcolor="#1C3054" height="100">
              <td style="padding:20px 30px;border-radius:7px 7px 0 0"> <a href="" target="_blank"> <img alt="logo" border="0" width="39px" height="60px" style="float:left" src="'.get_site_url().'/wp-content/themes/lec2/resources/views/frontend/dist/assets/images/logo-desktop-w.png'.'" class="logo"> </a> </td>
            </tr>
            <tr>
              <td style="padding:30px 10px 10px"> <b>From:</b> '.$this->fullName().' </td>
            </tr>
            <tr>
              <td style="padding:10px">
                <b>Message:</b> 
                <p>'.$this->message().'</p>
                <p style="padding-top:10px">Phone : '.$this->phone().'</p>
                <p>Email : '.$this->email().'</p>
              </td>
            </tr>
            <tr>
              <td style="padding:20px 10px;font-size:13px;color:#5c5c5c;text-align:center"> LEC2 © 2020. All rights reserved. </td>
            </tr>
          </tbody>
        </table>
      </td>
    </tr>
  </tbody>
</table>';
        return $emailContent;
    }

    /**
     * Replace full name tag
     *
     * @return mixed|string
     */
    public function fullName(){
        return (isset($this->data['name']) ? $this->data['name'] : '')." ".(isset($this->data['surname']) ? $this->data['surname'] : '');
    }

    /**
     * Replace email tag
     *
     * @return mixed|string
     */
    public function email(){
        return isset($this->data['email']) ? $this->data['email'] : '';
    }

    /**
     * Replace phone tag
     *
     * @return mixed|string
     */
    public function phone(){
        return isset($this->data['phone']) ? $this->data['phone'] : '';
    }

    /**
     * Replace description tag
     *
     * @return mixed|string
     */
    public function message(){
        return isset($this->data['message']) ? $this->data['message'] : '';
    }

}