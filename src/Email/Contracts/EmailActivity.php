<?php
/**
 * Created by PhpStorm.
 * User: brightantwiboasiako
 * Date: 8/4/17
 * Time: 11:45 PM
 */

namespace Notifier\Email;


use Notifier\Contracts\Activity;

/**
 * Interface EmailActivity
 * @package Notifier\Email
 */
interface EmailActivity extends Activity
{

    /**
     * Gets the email resource to be sent
     *
     * @return mixed
     */
    public function onEmail();

}