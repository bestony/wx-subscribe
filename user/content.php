<?php
function wxs_my_the_content_filter($content) {
	if (get_post_meta(get_the_ID(), '_subscribe_required')) {
		if (wxs_is_user_admin() || wxs_is_user_client()) {
			return $content;
		} else {
			global $full_article_subscribe_required;
			return $full_article_subscribe_required;
		}

	} else {
		return $content;
	}

}

add_filter('the_content', 'wxs_my_the_content_filter');