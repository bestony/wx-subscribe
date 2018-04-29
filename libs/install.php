<?php
global $wxs_db_version;
$wxs_db_version = '1.0';
/**
 * 创建数据库
 * @return [type] [description]
 */
function wxs_install() {
	global $wpdb;
	global $wxs_db_version;

	$table_name = $wpdb->prefix . 'subscribe_order';

	$charset_collate = $wpdb->get_charset_collate();

	$sql = "CREATE TABLE $table_name (
		id mediumint(9) NOT NULL AUTO_INCREMENT,
		time datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
		user_id mediumint(9) NOT NULL,
		title tinytext NOT NULL,
		note text NULL,
		order_no varchar(55) DEFAULT '' NOT NULL,
		status varchar(20) NOT NULL,
		pay_url tinytext NULL,
		paid_at datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
		payjs_no varchar(100) DEFAULT '' NOT NULL,
		PRIMARY KEY  (id)
	) $charset_collate;";

	$wpdb->query($sql);
	add_option('wxs_db_version', $wxs_db_version);
}

/**
 * 插入测试数据
 * @return [type] [description]
 */
function wxs_install_data() {
	global $wpdb;

	$table_name = $wpdb->prefix . 'subscribe_order';

	$wpdb->insert(
		$table_name,
		array(
			'time' => current_time('mysql'),
			'title' => "测试文章",
			'note' => "测试用户 - 测试文章",
			"order_no" => wxs_get_new_order(),
			"status" => "SUCCESS",
			"user_id" => 1,
			'paid_at' => current_time('mysql'),
		)
	);
}