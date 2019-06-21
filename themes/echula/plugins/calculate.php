<?php
/*
插件名称: 计算
描    述: 使用指定公式计算
作    者: David@thietkewebecshop.com
版    本: 1.0
作者网站: http://www.thietkewebecshop.com/
*/

/*

number    原始数值
formula   公式
*/

function hula_calculate($atts) {
	eval('$result='.$atts['number'].$atts['formula'].';');
	return $result;
}

?>
