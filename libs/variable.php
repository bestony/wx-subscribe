<?php

/**
 * 需要配置插件的输出
 * @var string
 */
$merchant_need_set = <<<EOF
<div id='notice' class='updated fade'>
	<p>距离开启微信订阅还差最后一步，点击前往
		<a href='/wp-admin/admin.php?page=wxs-options-list'>配置页面</a>
		设置或前往
		<a href='https://payjs.cn/ref/MDNXMD' target='_blank'>PayJs官网</a>
		注册商户。
	</p>
</div>
EOF;

$subscribe_required = <<<EOF
<div
	style="
		text-align:center;padding:40px 0px;
		line-height:40px;
		background:repeating-linear-gradient(45deg,#ccc, #fff 4px, #eee 0,#666 1px);">
	<span
		style="background-color:#fff;padding:10px 20px;">

			<a href="/wp-admin/profile.php" style="color:red;font-weight:600;">订阅</a>后查看

	</span>
</div>
EOF;

$full_article_subscribe_required = <<<EOF
<div style="
		text-align:center;padding:40px 0px;
		line-height:300px;
		background:repeating-linear-gradient(45deg,#ccc, #fff 4px, #eee 0,#666 1px);">
	<span style="background-color:#fff;padding:10px 20px;">

			本文需要<a href="/wp-admin/profile.php" style="color:red;font-weight:600;">订阅</a>后查看

	</span>
</div>
EOF;
