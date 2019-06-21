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

require(dirname(__FILE__) . '/includes/init.php');

/*------------------------------------------------------ */
//-- 证书反查
/*------------------------------------------------------ */
$session_id = empty($_POST['session_id']) ? '' : trim($_POST['session_id']);

if (!empty($session_id))
{

    $sql = "SELECT sesskey FROM " . $ecs->table('sessions') . " WHERE sesskey = '" . $session_id . "' ";
    $sesskey = $db->getOne($sql);
    if ($sesskey != '')
    {
        exit('{"res":"succ","msg":"","info":""}');
    }
    else
    {
        exit('{"res":"fail","msg":"error:000002","info":""}');
    }
}
else
{
    exit('{"res":"fail","msg":"error:000001","info":""}');
}

?>