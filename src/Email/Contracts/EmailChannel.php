<?php
/**
 * Created by PhpStorm.
 * User: brightantwiboasiako
 * Date: 8/4/17
 * Time: 11:46 PM
 */

namespace Notifier\Email;


use Notifier\Contracts\Channel;

/**
 * Interface EmailChannel
 * @package Notifier\Email
 */
interface EmailChannel extends Channel
{

    /**
     * @param EmailNotifiable $notifiable
     * @param EmailActivity $activity
     * @return void
     */
    public function notify(EmailNotifiable $notifiable, EmailActivity $activity);

}