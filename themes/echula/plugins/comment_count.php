<?php
/*

Tác giả: nguyenhuy86@gmail.com
Phiên bản: 1.0
Website : http://www.thietkewebecshop.com/
*/

/*

id        商品id
type      评论类别 0为商品 1为文章
*/

function hula_comment_count($atts) {
	$id = !empty($atts['id']) ? intval($atts['id']) : 0;
	$type = !empty($atts['type']) ? intval($atts['type']) : 0;
	$count = $GLOBALS['db']->getOne('SELECT COUNT(*) FROM ' .$GLOBALS['ecs']->table('comment').
		" WHERE id_value = '$id' AND comment_type = '$type' AND status = 1 AND parent_id = 0");
	return $count;
}

?>
