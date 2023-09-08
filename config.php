<?php
/**
 * XDING WeChat Public Platform
 * 微信公众号 PHP 版推送信息
 *
 * @copyright  Copyright (c) 2022 XDING  (https://i4coder.com)
 * @page      配置页
 */

/** 开启 Session 配置 */
session_start();
require 'function.php';

/** 微信公众号信息配置 */
$WXconfig=array(
	'app_id' => 'wx7fbdbb9920019642', //公众号appId
	'app_secret' => 'f6fbda7b87fe18812913fbb5f4a72363', //公众号appSecret
	'template_id' => '1', //模板消息id
	'user' => array('oSiiv6RbfsOJuyURVV6QIct4GRns,oSiiv6Sr5c6vAjz-gR8fOk2qOUMU') //接收公众号消息的微信号，如果有多个，需要在()里用英文逗号间隔，例如('小明','小丁')
);

/** 微信程序信息配置 */
$INFOconfig=array(
	'region' => '天津', //所在地区，可为城市，区，县，同时支持国外城市，例如伦敦
	'birthday1' => array('name'=>'静静','birthday'=>'2003-5-6'), //修改名字为对应需要显示的名字，生日为公历哦~ 格式：2022-8-3
	'birthday2' => array('name'=>'','birthday'=>''), //同上
	'love_date'=>'', //同上
	"note_ch"=>'早~姐，虽然你很普通，但很值得，耀眼是你与生俱来的资格', // 金句中文，如果设置了，则会显示这里的，如果为空，默认会读取金山的每日金句
	"note_en"=>'I never stopped loving you, I just unshowing it.' //金句英文
);

