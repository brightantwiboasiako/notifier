<?php
/**
 * Created by PhpStorm.
 * User: brightantwiboasiako
 * Date: 8/4/17
 * Time: 11:19 PM
 */

namespace Notifier\Sms\Contracts;


use Notifier\Contracts\Notifiable;

/**
 * Interface SmsNotifiable
 * @package Notifier\Sms\Contracts
 */
interface SmsNotifiable extends Notifiable
{

    /**
     * Gets the phone number of the notifiable
     *
     * @return string
     */
    public function getPhoneNumber();

}