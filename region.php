<?php


/**
 * Ghế Nằm Hồ Bơi
 * ============================================================================
 * * Ghế Nằm Hồ Bơi đang được triển khai tại công ty Ngọc Hùng
 * Website: https://thanghoboi.com
 * ----------------------------------------------------------------------------
 * Các bạn có thể tải về và sử dụng
 * ============================================================================
 * $Author: Nguyễn Lân $
 * $Id: pm.php 17217 2019-06-21 06:29:08Z liubo $
*/

define('IN_ECS', true);
define('INIT_NO_USERS', true);
define('INIT_NO_SMARTY', true);

require(dirname(__FILE__) . '/includes/init.php');
require(ROOT_PATH . 'includes/cls_json.php');

header('Content-type: text/html; charset=' . EC_CHARSET);

$type   = !empty($_REQUEST['type'])   ? intval($_REQUEST['type'])   : 0;
$parent = !empty($_REQUEST['parent']) ? intval($_REQUEST['parent']) : 0;

$arr['regions'] = get_regions($type, $parent);
$arr['type']    = $type;
$arr['target']  = !empty($_REQUEST['target']) ? stripslashes(trim($_REQUEST['target'])) : '';
$arr['target']  = htmlspecialchars($arr['target']);

$json = new JSON;
echo $json->encode($arr);

?>