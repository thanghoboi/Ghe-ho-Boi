<?php
/*
插件名称: 首页滚动广告横幅
描    述: 首页滚动广告横幅，直接使用原来的flash轮播广告的数据。
作    者: David@thietkewebecshop.com
版    本: 1.1
作者网站: http://www.thietkewebecshop.com/
*/

/*

form      模板模块 默认是library/hula_slider_banner.lbi
*/


function hula_slider_banner($atts) {
	$str = '';
	$need_cache = $GLOBALS['smarty']->caching;
	$banner = array();
	if (file_exists(ROOT_PATH . DATA_DIR . '/flash_data.xml')) {
		if (!preg_match_all('/item_url="([^"]+)"\slink="([^"]+)"\stext="([^"]*)"\ssort="([^"]*)"/', file_get_contents(ROOT_PATH . DATA_DIR . '/flash_data.xml'), $list, PREG_SET_ORDER)) {
			preg_match_all('/item_url="([^"]+)"\slink="([^"]+)"\stext="([^"]*)"/', file_get_contents(ROOT_PATH . DATA_DIR . '/flash_data.xml'), $list, PREG_SET_ORDER);
		}
		if (!empty($list)) {
			foreach ($list as $key => $val) {
				if ($val[4] != '-1'){
					$val[4] = isset($val[4]) ? $val[4] : 0;
					$banner[] = array('src'=>$val[1],'url'=>$val[2],'text'=>$val[3],'sort'=>$val[4]);
				}
			}
			foreach ($banner as $key => $val) {
				$sort[$key] = $val['sort'];
			}
			array_multisort($sort, SORT_DESC, $banner);
			$GLOBALS['smarty']->assign('banner', $banner);
			$form = (!empty($atts['form'])) ? $atts['form'] : 'library/hula_slider_banner.lbi';
			$str= $GLOBALS['smarty']->fetch($form);
		}

	}
	$GLOBALS['smarty']->caching = $need_cache;
	return $str;
}

?>
