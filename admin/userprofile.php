<?php

add_action('profile_personal_options', 'extra_profile_fields');

/**
 * 用户详情页增加新的内容
 * @param  User $user WordPress 的 用户信息
 * @return [type]       [description]
 */
function extra_profile_fields($user) {
	global $current_user;
	wp_get_current_user();
	/**
	 * 输出表头
	 */
	echo <<<EOF
<table class="form-table">
		<tbody>
			<tr class="user-admin-bar-front-wrap">
EOF;
/**
 * 判断是否是管理员
 */
	if (wxs_is_user_admin()) {
		?>
<th scope="row">订阅状态</th>
			<td><fieldset>管理员无需订阅
			</fieldset>
			</td>
	<?php
} else {
		/**
		 * 判断是否已经订阅
		 */
		if (wxs_is_user_client()) {
			?>
			<th scope="row">订阅状态</th>
			<td><fieldset>您已是订阅用户</fieldset>
			</td>
			<?php
} else {
			?>
			<th scope="row">订阅状态</th>
			<td><fieldset><img src='https://postimg.aliavv.com/newmbp/t2pai.jpg'></img><p>支付完成后刷新页面</p>
			</fieldset>
			</td>
			<?php
}
	}

	echo <<<EOF
</tr>

		</tbody>
		</table>
EOF;

}
