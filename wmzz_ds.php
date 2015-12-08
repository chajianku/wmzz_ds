<?php
/*
Plugin Name: 多说/友言 评论
Version: 1.5
Plugin URL: http://zhizhe8.net
Description: 在首页显示 多说/友言 评论系统
Author: 无名智者
Author Email: kenvix@vip.qq.com
Author URL: http://zhizhe8.net
For: V3.4+
*/
if (!defined('SYSTEM_ROOT')) { die('Insufficient Permissions'); } 

function wmzz_ds_showds() {
	echo '<br/><br/>'.option::get('wmzz_ds_code');
}

function wmzz_ds_addaction_navi() {
	echo '<li><a href="index.php?mod=admin:setplug&plug=wmzz_ds"><span class="glyphicon glyphicon-comment"></span> 多说/友言评论插件管理</a></li>';
}

addAction('index_2','wmzz_ds_showds');
addAction('login_page_3','wmzz_ds_showds');
addAction('navi_3','wmzz_ds_addaction_navi');
?>