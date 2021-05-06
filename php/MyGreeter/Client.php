<?php

/*
 * This file is part of the Monolog package.
 *
 * (c) Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace MyGreeter;

/**
 * Lets you easily generate greeting formatter for testing. 
 * *
 * @author Litong  <937577252@qq.com>
 */
class Client
{
	/**
	 * [$Greeting Array]
	 * @var array
	 */
    private $greetingMessage = [
		'早上好',
		'下午好',
		'晚上好'
	];

	public function __construct(){
		$this->myTimeZone = $this->setMyTimeZone();
	}

	/**
	 * [set_MyTime_Zone Setting the time zone]
	 * @param    string     $param [time zone]
	 */
	public function setMyTimeZone( $param = 'Asia/Shanghai'){
		return date_default_timezone_set($param);
	}
	/**
	 * [getGreeting return the current time greeting by default]
	 * @Author   litong
	 * @DateTime 2021-04-29
	 * @return   [string]            [greetingMessage]
	 */
	public function getGreeting(){
		echo $this->getGreetingByTime();
		exit;
	}

	/**
	 * [getGreetingByTime return greeting statement by time]
	 * @Author   litong
	 * @DateTime 2021-05-06
	 * @param    [int]     $param [0~23]
	 * @return   [string]   $this->greetingMessage
	 */
	protected function getGreetingByTime($param = ""){
		$timeArray = range(0,23);
		$param = !empty($param) && in_array($param, $timeArray) ? $param : date("H");

		$result = $this->greetingMessage[2];

		if ($param >= 6 && $param <= 12 ) {
			$result =  $this->greetingMessage[0];
		} 
		else if ($param > 12 && $param <= 18) {
			$result =  $this->greetingMessage[1];
		}
		return $result;
	}
}