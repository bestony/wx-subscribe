<?php
/**
 * from shortcode.php
 */
function wxs_shortode_subscribe($atts, $content = null) {
	global $subscribe_required;
	global $current_user;
	wp_get_current_user();
	if (is_user_logged_in()) {
		/**
		 * 登陆后进行角色判断
		 */
		if (wxs_is_user_admin()) {
			/**
			 * 管理员直接输出内容
			 */
			return $content;
		} else {
			if (wxs_is_user_client()) {
				/**
				 * 订阅会员直接输出内容
				 */
				return $content;
			} else {
				/**
				 * 未订阅者提示需要订阅
				 */
				return $subscribe_required;
			}

		}
	} else {
		return $subscribe_required;
	}
}
add_shortcode('subscribe', 'wxs_shortode_subscribe');

function wxs_add_quicktags() {
	/**
	 * 判断是否是 Quick Tags JS
	 *
	 */
	if (wp_script_is('quicktags')) {
		?>
	    <script type="text/javascript">
	    	/**
	    	 * 添加新的按钮，放在最后的位置
	    	 */
	    QTags.addButton( 'wxs_subscribe', '付费阅读', '[subscribe]', '[/subscribe]', '', '付费阅读', 149);
	    </script>
	<?php
}
}
add_action('admin_print_footer_scripts', 'wxs_add_quicktags');
