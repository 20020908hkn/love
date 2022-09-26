<?php
/**
 * XDING WeChat Public Platform
 * 微信公众号 PHP 版推送信息
 * @page      配置页
 */

/** 开启 Session 配置 */
session_start();
require 'function.php';

/** 微信公众号信息配置 */
$WXconfig=array(
	'app_id' => 'wxd31d110315222686', //公众号appId
	'app_secret' => 'e76b0085deb768055e68896f7ada27de', //公众号appSecret
	'template_id' => 'GuSiWBcqb78MtGW0tzzOno2R3O9V2pEnrm-xR_VRTyQ', //模板消息id
	'user' => array('oZOSg6qV5D0bPnyG1m9OT6HA5Y8') //接收公众号消息的微信号，如果有多个，需要在()里用英文逗号间隔，例如('君临','小君')
);

/** 微信程序信息配置 */
$INFOconfig=array(
	'region' => '洛阳', //所在地区，可为城市，区，县，同时支持国外城市，例如伦敦
	'birthday1' => array('name'=>'韦鑫冉','birthday'=>'2023-5-4'), //修改名字为对应需要显示的名字，生日为公历哦~ 格式：2022-8-3
	'birthday2' => array('name'=>'','birthday'=>''), //同上
	'love_date'=>'2022-7-31', //同上
	"note_ch"=>'早~宝贝，在新的一天里要开开心心！快快乐乐！顺顺利利哦~ 爱你', // 金句中文，如果设置了，则会显示这里的。
	"note_en"=>'I never stopped loving you, I just unshowing it.' //金句英文
);

