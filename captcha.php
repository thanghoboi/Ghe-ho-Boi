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
define('INIT_NO_SMARTY', true);

require(dirname(__FILE__) . '/includes/init.php');
require(ROOT_PATH . 'includes/cls_captcha.php');

$img = new captcha(ROOT_PATH . 'data/captcha/', $_CFG['captcha_width'], $_CFG['captcha_height']);
@ob_end_clean(); //清除之前出现的多余输入
if (isset($_REQUEST['is_login']))
{
    $img->session_word = 'captcha_login';
}
$img->generate_image();

?>