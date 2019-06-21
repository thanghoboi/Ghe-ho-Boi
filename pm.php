<?php

/**
 * Ghế Nằm Hồ Bơi
 * ============================================================================
 * * Ghế Nằm Hồ Bơi đang được triển khai tại công ty Ngọc Hùng
 * Website: http://www.ecshop.com锛
 * ----------------------------------------------------------------------------
 * Các bạn có thể tải về và sử dụng
 * ============================================================================
 * $Author: Nguyễn Lân $
 * $Id: pm.php 17217 2019-06-21 06:29:08Z liubo $
*/

define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');
if (empty($_SESSION['user_id'])||$_CFG['integrate_code']=='ecshop')
{
    ecs_header('Location:./');
}

uc_call("uc_pm_location", array($_SESSION['user_id']));
//$ucnewpm = uc_pm_checknew($_SESSION['user_id']);
//setcookie('checkpm', '');

?>
