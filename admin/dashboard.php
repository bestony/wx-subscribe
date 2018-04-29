<?php
/**
 * dashboard 返回
 *
 * @return string
 *
 */
function wxs_dashboard_widget_function() {
	if (wxs_is_user_admin() || wxs_is_user_client()) {
		echo "<p style='text-align:center;'><strong>您已成为本站的付费包年用户</strong></p>";
	} else {
		echo "<img src='" . wxs_get_QRCode() . "' style='width:100%'></img><p style='text-align:center'>支付完成后刷新页面</p>";
	}

}
/**
 * 添加dashboard
 *
 * @return [type] [description]
 */
function wxs_add_dashboard_widgets() {

	if (!wxs_is_user_admin()) {
		wp_add_dashboard_widget(
			'wxs-subscrib-widget',
			'订阅会员',
			'wxs_dashboard_widget_function'
		);
	}

}
add_action('wp_dashboard_setup', 'wxs_add_dashboard_widgets');
