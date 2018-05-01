<?php

/**
 * @Author: Bestony
 * @Date:   2018-05-01 11:50:48
 * @Last Modified by:   Bestony
 * @Last Modified time: 2018-05-01 11:52:43
 */
function wxs_plugin_helpcenter() {
	if (!current_user_can('manage_options')) {
		wp_die(__('您无权修改本页设置'));
	}
	?>
	<div class="wrap">

	<h1>微信订阅插件 · 使用帮助中心</h1>
		<div id="poststuff">

		<div id="post-body" class="metabox-holder columns-2">

			<!-- main content -->
			<div id="post-body-content">

				<div class="meta-box-sortables ui-sortable">

					<div class="postbox">

						<h2><span>插件配置说明</span></h2>

						<div class="inside">
							<p>1. 访问 <a href="https://payjs.cn/ref/MDNXMD">Pay.js 官网</a>，进入后台。<br><img src="https://postimg.aliavv.com/newmbp/p66nx.png" width="500"></p>
							<p>2. 在 Payjs 后台的「会员中心」栏目获取到商户ID和接口通信密钥。<br><img src="https://postimg.aliavv.com/newmbp/m0bq8.png" width="500"></p>
							<p>3. 将配置填写在 WordPress 后台的「插件配置」页面中的对应位置。<br><img src="https://postimg.aliavv.com/newmbp/anjub.png" width="500"></p>
							<p>4. 插件完成配置～</p>
						</div>
						<!-- .inside -->

					</div>
					<!-- .postbox -->

				</div>
				<!-- .meta-box-sortables .ui-sortable -->

			</div>
			<!-- post-body-content -->

			<!-- sidebar -->
			<div id="postbox-container-1" class="postbox-container">

				<div class="meta-box-sortables">

					<div class="postbox">

						<h2><span>如何联系到我？</span></h2>

						<div class="inside">
							<p>点击下方按钮，既可通过邮件联系到我。如果你希望加入我们的微信交流群，请在邮件中附上您的微信号，我将单独加您，并将您拉到微信群内</p>
							<p style="font-weight: bold">您有任何问题，都可以直接通过邮件与我取得联系</p>
							<a target="_blank" href="http://mail.qq.com/cgi-bin/qm_share?t=qm_mailme&email=UjA3ISZ8Jj08KxI0PSo-Mzs_fDE9Pw" style="text-decoration:none;"><img src="http://rescdn.qqmail.com/zh_CN/htmledition/images/function/qm_open/ico_mailme_12.png"/></a>

						</div>
						<!-- .inside -->

					</div>
					<!-- .postbox -->

				</div>
				<!-- .meta-box-sortables -->

			</div>
			<!-- #postbox-container-1 .postbox-container -->

		</div>
		<!-- #post-body .metabox-holder .columns-2 -->

		<br class="clear">
	</div>
	<!-- #poststuff -->
	</div>
	<?php
}