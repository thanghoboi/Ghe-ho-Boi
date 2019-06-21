<?php

/**
 * ECSHOP Virtual card management
 * ============================================================================
 * All right reserved (C) 2005-2007 Beijing Yi Shang Interactive Technology
 * Development Ltd.
 * Web site: http://www.ecshop.com
 * ----------------------------------------------------------------------------
 * This is a free/open source software；it means that you can modify, use and
 * republish the program code, on the premise of that your behavior is not for
 * commercial purposes.
 * ============================================================================
 * $Author: liubo $
 * $Id: virtual_card.php 16308 2009-06-23 03:25:34Z liubo $
*/

/*------------------------------------------------------ */
//-- Thông tin thẻ
/*------------------------------------------------------ */
$_LANG['virtual_card_list'] = 'Danh sách thẻ ưu đãi';
$_LANG['lab_goods_name'] = 'Tên sản phẩm:';
$_LANG['replenish'] = 'Bổ sung';
$_LANG['lab_card_id'] = 'ID';
$_LANG['lab_card_sn'] = 'Số thẻ';
$_LANG['lab_card_password'] = 'Mật khẩu';
$_LANG['lab_end_date'] = 'Ngày hết hạn';
$_LANG['lab_is_saled'] = 'Đã bán';
$_LANG['lab_order_sn'] = 'Đơn hàng số';
$_LANG['action_success'] = 'Thực hiện thành công';
$_LANG['action_fail'] = 'Thực hiện thất bại';
$_LANG['card'] = 'Danh sách thẻ';

$_LANG['batch_card_add'] = 'Thêm hàng loạt sản phẩm';

$_LANG['separator'] = 'Ký tự ngăn cách';
$_LANG['uploadfile'] = 'Tải lên file';
$_LANG['sql_error'] = 'Số thẻ %s sai thông tin:<br /> ';

/*  Tin nhắn nhắc nhở */
$_LANG['replenish_no_goods_id'] = 'Thiếu tham số ID sản phẩm, không thể bổ sung sản phẩm';
$_LANG['replenish_no_get_goods_name'] = 'Tham số ID sản phẩm sai, không thể lấy tên sản phẩm';
$_LANG['drop_card_success'] = 'Xóa thành công';
$_LANG['batch_drop'] = 'Xóa hàng loạt';
$_LANG['drop_card_confirm'] = 'Bạn có chắc xóa hồ sơ này?';
$_LANG['card_sn_exist'] = 'Thẻ số %s đã tồn tại, xin vui lòng nhập lại';
$_LANG['go_list'] = 'Quay lại';
$_LANG['continue_add'] = 'Tiếp tục thêm';
$_LANG['uploadfile_fail'] = 'Upload file thất bại';
$_LANG['batch_card_add_ok'] = 'Đã thêm %s hồ sơ';

$_LANG['js_languages']['no_card_sn'] = 'Số thẻ hoặc mật khẩu thẻ là trống.';
$_LANG['js_languages']['separator_not_null'] = 'Ký tự ngăn cách không được để trống.';
$_LANG['js_languages']['uploadfile_not_null'] = 'Vui lòng chọn file upload.';



$_LANG['use_help'] = 'Giúp dỡ:' .
        '<ol>' .
          '<li>Tập tin tải lên phải là file CSV<br />' .
              'Điền vào tất cả các dòng ID thẻ, mật khẩu, thời hạn, những mục thiết lập tắt của \',\' hoặc \';\' . nhưng không hỗ trợ \'rỗng\'<br />'.
          '<li>Mật khẩu và thời hạn có thể trống, định dạng thời hạn kiểu \'2009-11-6\' or \'2009/11/6\''.
          '<li>Bạn nên sử dụng ký tự latinh để tránh xảy ra lỗi.</li>' .
        '</ol>';

/*------------------------------------------------------ */
//-- Thay đổi chuỗi mã hóa
/*------------------------------------------------------ */

$_LANG['virtual_card_change'] = 'Thay đổi chuỗi mã hóa';
$_LANG['user_guide'] = 'Hướng dẫn sử dụng:' .
        '<ol>' .
          '<li>Mã hóa sử dụng cho chuỗi ID và mật khẩu của thẻ ưu đãi</li>' .
          '<li>Chuỗi mã hóa được lưu trữ trong includes/lib_code.php, hằng số tương ứng là AUTH_KEY</li>' .
          '<li>Nếu bạn muốn thay đổi chuỗi mã hóa, bạn nên sửa đổi lib_code.php, thiết lập OLD_AUTH_KEY là chuỗi mã hóa cũ, thiết lập AUTH_KEY như là chuỗi mã hóa mới; và nhập chuỗi xâu mã hóa cũ và mã hóa mới vào hộp textbox, kiểm tra \'Xác nhận\' và nhấn vào nút</li>' .
        '</ol>';
$_LANG['label_old_string'] = 'Chuỗi mã hóa cũ';
$_LANG['label_new_string'] = 'Chuỗi mã hóa mới';

$_LANG['invalid_old_string'] = 'Chuỗi mã hóa cũ sai';
$_LANG['invalid_new_string'] = 'Chuỗi mã hóa mới sai';
$_LANG['change_key_ok'] = 'Thay đổi chuỗi mã hóa thành công';
$_LANG['same_string'] = 'Chuỗi mã hóa cũ và mới giống nhau';

$_LANG['update_log'] = 'Cập nhật hồ sơ';
$_LANG['old_stat'] = 'Tổng cộng có %s hồ sơ. %s hồ sơ mã hóa bằng chuỗi mới, %s hồ sơ mã hóa bằng chuỗi cũ(chờ cập nhật), %s hồ sơ mã hóa bằng chuỗi không rõ.';
$_LANG['new_stat'] = '<strong>Cập nhật thành công</strong>, bây giờ %s hồ sơ được mã hóa bằng chuỗi mới, %s hồ sơ mã hóa bằng chuỗi không rõ.';
$_LANG['update_error'] = 'Cập nhật sai: %s';
$_LANG['js_languages']['updating_info'] = '<strong>Đang cập nhật</strong>(mỗi lần 100 hồ sơ)';
$_LANG['js_languages']['updated_info'] = '<strong>Đã cập nhật</strong> <span id=\"Đã cập nhật\">0</span> hồ sơ.';
?>