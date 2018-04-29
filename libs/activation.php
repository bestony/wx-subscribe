<?php

/**
 * 激活函数，创建一个新的角色：订阅会员
 * @return [type] [description]
 */
function wxs_add_roles_on_plugin_activation() {
	add_role('client', __(
		'付费会员'),
		array(
			'read' => true,
		)
	);
}
/**
 * 反激活函数，删除创建的角色
 * @return [type] [description]
 */
function wxs_del_roles_on_plugin_activation() {
	remove_role('client');
}