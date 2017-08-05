<?php
/**
 * Created by PhpStorm.
 * User: brightantwiboasiako
 * Date: 8/4/17
 * Time: 11:10 PM
 */

namespace Notifier\Contracts;


/**
 * Interface Transport
 * @package Notifier\Contracts
 */
interface Transport
{

    /**
     * @param array $channels
     * @return void
     */
    public function on(array $channels);

    /**
     * @param Notifiable $notifiable
     * @return Transport
     */
    public function to(Notifiable $notifiable);

}