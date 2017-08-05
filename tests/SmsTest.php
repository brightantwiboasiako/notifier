<?php
/**
 * Created by PhpStorm.
 * User: brightantwiboasiako
 * Date: 8/4/17
 * Time: 11:59 PM
 */

namespace Tests;


use Notifier\Notifier;
use Notifier\Sms\Contracts\SmsActivity;
use Notifier\Sms\Contracts\SmsChannel;
use Notifier\Sms\Contracts\SmsNotifiable;
use Notifier\Transport;
use PHPUnit\Framework\TestCase;

class SmsTest extends TestCase
{

    public function testCanGetPhoneNumber(){

        $number = '0501373573';

        $notifier = \Mockery::mock('SmsNotifier');
        $notifier->shouldReceive('getPhoneNumber')->andReturn($number);

        $this->assertEquals($number, $notifier->getPhoneNumber());

    }



    public function testCanSendSms(){

        $number = '0501373573';
        $notifier = \Mockery::mock(SmsNotifiable::class);
        $notifier->shouldReceive('getPhoneNumber')->andReturn($number);

        $activity = \Mockery::mock(SmsActivity::class);
        $activity->shouldReceive('onSms')->andReturn('Hello Bright!');

        $sms = \Mockery::mock(SmsChannel::class);
        $sms->shouldReceive('notify')->andReturn('sent!');

        $response = Notifier::send($activity)->to($notifier)->on([$sms]);

        $this->assertEquals(null, $response);

    }



}