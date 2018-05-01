<?php
function wxs_plugin_orders() {
	if (!current_user_can('manage_options')) {
		wp_die(__('您无权修改本页设置'));
	}
	global $wpdb;
	$table_name = $wpdb->prefix . 'subscribe_order';
	/**
	 * 输出页面内容
	 */
	echo '<div class="wrap"><h2>订单页面</h2>';
	echo <<<EOF
<table class="widefat">
	<thead>
	<th class="row-title">ID</th>
		<th>订单标题</th>
		<th>订单号</th>
		<th>支付状态</th>
		<th>下单时间</th>
		<th>备注</th>
		<th>操作</th>
	</thead>
	<tbody>
EOF;

	$data = $wpdb->get_results('SELECT id,title,order_no,status,time,note FROM ' . $table_name);

	foreach ($data as $order) {
		if ($order->status == 'UNPAY') {
			$str = '<a class="button-primary" target="_blank" href="/wxs_cancel_order?id=' . $order->id . '" />取消订单</a>';
		} else {
			$str = '';
		}
		echo '<tr class="form-invalid">
		<td class="row-title">' . $order->id . '</td>
		<td>' . $order->title . '</td>
		<td>' . $order->order_no . '</td>
		<td>' . $order->status . '</td>
		<td>' . $order->time . '</td>
		<td>' . $order->note . '</td>
		<td>' . $str . '</td>
		</tr>';
	}

	echo <<<EOF
	</tbody>
</table>
EOF;
	echo '</div>';
}