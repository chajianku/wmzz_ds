<?php
if (!defined('SYSTEM_ROOT')) { die('Insufficient Permissions'); } 
if (ROLE != 'admin') { msg('权限不足!'); }

if (isset($_GET['setting'])) {
	option::set('wmzz_ds_code', htmlspecialchars_decode($_POST['wmzz_ds_code']));
	ReDirect('index.php?mod=admin:setplug&plug=wmzz_ds&ok');
}