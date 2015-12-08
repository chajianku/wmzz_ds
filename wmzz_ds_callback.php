<?php
if (!defined('SYSTEM_ROOT')) { die('Insufficient Permissions'); } 

function callback_init() {
	option::add('wmzz_ds_code');
}

function callback_remove() {
	option::del('wmzz_ds_code');
}
?>