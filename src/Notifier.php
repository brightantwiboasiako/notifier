<?php
/**
 * Created by PhpStorm.
 * User: brightantwiboasiako
 * Date: 8/4/17
 * Time: 11:09 PM
 */

namespace Notifier;


use Notifier\Contracts\Activity;
use Notifier\Contracts\Transport as TransportInterface;

class Notifier
{

    /**
     * @param Activity $activity
     * @return TransportInterface
     */
    public static function send(Activity $activity){
        return new Transport($activity);
    }

}