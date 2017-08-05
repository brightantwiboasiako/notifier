<?php
/**
 * Created by PhpStorm.
 * User: brightantwiboasiako
 * Date: 8/4/17
 * Time: 11:46 PM
 */

namespace Notifier\Email;


use Notifier\Contracts\Notifiable;

interface EmailNotifiable extends Notifiable
{

    /**
     * Gets the email address
     *
     * @return mixed
     */
    public function getEmailAddress();

}