<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019-08-14
 * Time: 11:56
 */

namespace App\Services\EmailTemplates;
use App\Components\AcfFields\Consts\Pages\ThemeOptions;
use App\Container;

/**
 * Class AbstractEmailTemplates
 * @package App\Services\EmailTemplates
 */
abstract class AbstractEmailTemplates
{

    /**
     * @var string
     */
    protected $name  = 'apply_cv_email';

    /**
     * @var array
     */
    protected $config = [
        'subject'       => '',
        'body'          => '',
        'headers'       => [],
        'attachments'   => [],
    ];

    /**
     * @var string
     */
    protected $recipient  = '';

    /**
     * @var array
     */
    protected $themeOptions = [];

    /**
     * Replaced tags
     *
     * @var array
     */
    protected $tags = [];

    /**
     * @return string
     */
    public function getRecipient()
    {
        return $this->recipient;
    }

    /**
     * @param string $recipient
     * @return AbstractEmailTemplates
     */
    public function setRecipient($recipient)
    {
        $this->recipient = $recipient;
        return $this;
    }

    /**
     * Send email
     *
     * @return bool
     */
    public function send(){
        return  wp_mail($this->recipient,$this->config['subject'], $this->config['body'] , $this->config['headers'], $this->config['attachments']);
    }

    /**
     * Execute
     */
    public function execute(){
        $this->themeOptions = Container::getInstance()->getThemeOptions();
        $this->createConfigurationBody();
        $this->replaceTags();
        return $this->send();
    }

    /**
     * Create the configuration's body
     */
    public abstract function createConfigurationBody();

    /**
     * Replace the tags in the body
     */
    public function replaceTags(){

        if(is_array($this->tags) && count($this->tags) > 0){

            foreach ($this->tags as $position => $contents){
                $oldBody = $this->config[$position];
                foreach ($contents as $replacedKey => $replacedText){
                    $function = call_user_func([$this,$replacedText]);
                    $oldBody =  str_replace($replacedKey, $function, $oldBody);
                }
                $this->config[$position] = $oldBody;
            }
        }
    }

}