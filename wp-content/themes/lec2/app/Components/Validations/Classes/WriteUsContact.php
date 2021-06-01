<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019-08-21
 * Time: 10:32
 */

namespace App\Components\Validations\Classes;

use App\Components\Validations\Abstracts\AbstractValidation;

/**
 * Class WriteUsContact - This is used for validating contact request
 * @package App\Components\Validations\Classes
 */
class WriteUsContact extends AbstractValidation
{

    /**
     * Validate these fields below
     *
     * @var array
     */
    protected $validatedFields = [
        'name'   => ['required' => 'Please insert name'],
        'email'         => [
            'required'  => 'Please insert email address',
            'email'     => 'Please insert a valid email address',
        ],
        'phone'   => ['required' => 'Please insert phone'],
        'message'   => ['required' => 'Please insert message']
    ];

}