<?php
/**
 * Created by PhpStorm.
 * User: brightantwiboasiako
 * Date: 8/4/17
 * Time: 11:12 PM
 */

namespace Notifier;

use Notifier\Contracts\Activity;
use Notifier\Contracts\Notifiable;
use Notifier\Contracts\Transport as TransportInterface;

/**
 * Class Transport
 * @package Notifier
 */
class Transport implements TransportInterface
{

    /**
     * @var Notifiable
     */
    private $notifiable;


    /**
     * @var Activity
     */
    private $activity;


    /**
     * Transport constructor.
     * @param Activity $activity
     */
    public function __construct(Activity $activity)
    {
        $this->activity = $activity;
    }

    /**
     * Sends the notifications across the given channels
     *
     * @param array $channels
     */
    public function on(array $channels)
    {
        foreach($channels as $channel){
            $channel->notify($this->notifiable, $this->activity);
        }
    }

    /**
     * Gets the notifiable entity to be notified
     *
     * @param Notifiable $notifiable
     * @return $this
     */
    public function to(Notifiable $notifiable)
    {
        $this->notifiable = $notifiable;
        return $this;
    }


}