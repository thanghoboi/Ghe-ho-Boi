<?php
/*
插件名称: 统计数组数量
描    述: 统计数组数量
作    者: David@thietkewebecshop.com
版    本: 1.0
作者网站: http://www.thietkewebecshop.com/
*/

/*

array     数组
*/

function hula_count($atts) {
	return count($atts['array']);
}

?>
