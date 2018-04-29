<?php
function my_the_content_filter($content) {
	if (get_post_meta(get_the_ID(), '_subscribe_required')) {
		if (wxs_is_user_admin() || wxs_is_user_client()) {
			return $content;
		} else {
			return "本文需要订阅才能阅读";
		}

	} else {
		return $content;
	}

}

add_filter('the_content', 'my_the_content_filter');