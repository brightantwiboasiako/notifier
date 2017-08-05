<?php
/**
 * Created by PhpStorm.
 * User: brightantwiboasiako
 * Date: 8/4/17
 * Time: 11:32 PM
 */

namespace Notifier\Sms\Contracts;

use Notifier\Contracts\Channel;

/**
 * Interface SmsChannel
 * @package Notifier\Sms\Contracts
 */
interface SmsChannel extends Channel
{
    /**
     * @param SmsNotifiable $notifiable
     * @param SmsActivity $activity
     * @return void
     */
    public function notify(SmsNotifiable $notifiable, SmsActivity $activity);
}