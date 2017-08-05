<?php
/**
 * Created by PhpStorm.
 * User: brightantwiboasiako
 * Date: 8/4/17
 * Time: 11:38 PM
 */

namespace Notifier\Sms\Contracts;


use Notifier\Contracts\Activity;

/**
 * Interface SmsActivity
 * @package Notifier\Sms
 */
interface SmsActivity extends Activity
{

    /**
     * @return mixed
     */
    public function onSms();

}