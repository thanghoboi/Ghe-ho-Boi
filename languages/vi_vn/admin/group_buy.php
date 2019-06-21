<?php

/**
 * ECSHOP Control panel associates product language file
 * ============================================================================
 * All right reserved (C) 2005-2007 Beijing Yi Shang Interactive Technology
 * Development Ltd.
 * Web site: http://www.ecshop.com
 * ----------------------------------------------------------------------------
 * This is a free/open source software；it mean that you can modify, use and
 * republish the program code, on the premise of that your behavior is not for
 * commercial purposes.
 * ============================================================================
 * $Author: zblikai $
 * $Id: group_buy.php 15646 2009-02-23 08:33:00Z zblikai $
*/

/* Tiêu đề trang hiện tại và tên liên kết có thể sử dụng */
$_LANG['group_buy_list'] = 'List mua chung';
$_LANG['add_group_buy'] = 'Thêm mua chung';
$_LANG['edit_group_buy'] = 'Chỉnh sửa';

/* Trang danh sách cộng tác */
$_LANG['goods_name'] = 'Tên sản phẩm';
$_LANG['start_date'] = 'Thời gian bắt đầu';
$_LANG['end_date'] = 'Thời gian kết thúc';
$_LANG['deposit'] = 'Bảo hiểm';
$_LANG['restrict_amount'] = 'Số lượng giới hạn';
$_LANG['gift_integral'] = 'Điểm thưởng';
$_LANG['valid_order'] = 'Đặt hàng';
$_LANG['valid_goods'] = 'Đặt mua sản phẩm';
$_LANG['current_price'] = 'Giá hiện tại';
$_LANG['current_status'] = 'Trạng thái';
$_LANG['view_order'] = 'Xem đơn hàng';

/* Thêm/Chỉnh sửa trang cộng tác */
$_LANG['goods_cat'] = 'Danh mục';
$_LANG['all_cat'] = 'Tất cả danh mục';
$_LANG['goods_brand'] = 'Thương hiệu';
$_LANG['all_brand'] = 'Tất cả thương hiệu';

$_LANG['label_goods_name'] = 'Sản phẩm mua chung:';
$_LANG['notice_goods_name'] = 'Vui lòng tìm kiếm sản phẩm, tạo danh sách tùy chọn...';
$_LANG['label_start_date'] = 'Thời gian bắt đầu:';
$_LANG['label_end_date'] = 'Thời gian kết thúc:';
$_LANG['notice_datetime'] = '(Năm Tháng Ngày - Giờ)';
$_LANG['label_deposit'] = 'Bảo hiểm:';
$_LANG['label_restrict_amount'] = 'Số lượng giới hạn:';
$_LANG['notice_restrict_amount']= 'Khi hết số lượng, mua chung sẽ tự động dừng. Số 0 có nghĩa là không giới hạn số lượng.';
$_LANG['label_gift_integral'] = 'Số điểm hiện tại:';
$_LANG['label_price_ladder'] = 'Bước giá:';
$_LANG['notice_ladder_amount'] = 'Số lượng giới hạn';
$_LANG['notice_ladder_price'] = 'Giá';
$_LANG['label_desc'] = 'Mô tả:';
$_LANG['label_status'] = 'Trạng thái';
$_LANG['gbs'][GBS_PRE_START] = 'Chuẩn bị';
$_LANG['gbs'][GBS_UNDER_WAY] = 'Đang tiến hành';
$_LANG['gbs'][GBS_FINISHED] = 'Kết thúc nhưng chưa bán được';
$_LANG['gbs'][GBS_SUCCEED] = 'Thành công';
$_LANG['gbs'][GBS_FAIL] = 'Thất bại';
$_LANG['label_order_qty'] = 'Số lượng đơn hàng / Số lượng đơn hàng hiệu quả:';
$_LANG['label_goods_qty'] = 'Số lượng sản phẩm / Số lượng sản phẩm hiệu quả:';
$_LANG['label_cur_price'] = 'Giá hiện tại:';
$_LANG['label_end_price'] = 'Giá kết thúc:';
$_LANG['label_handler'] = 'Điều hành:';
$_LANG['error_group_buy'] = 'Mua chung không tồn tại.';
$_LANG['error_status'] = 'Bạn không thể thực hiện hành động trong trạng thái hiện tại!';
$_LANG['button_finish'] = 'Kết thúc';
$_LANG['notice_finish'] = '(Thiết lập ngày kết thúc như là ngày hiện tại)';
$_LANG['button_succeed'] = 'Thành công';
$_LANG['notice_succeed'] = '(Cập nhật giá đơn hàng)';
$_LANG['button_fail'] = 'Thất bại';
$_LANG['notice_fail'] = '(Hủy đơn hàng, bảo hiểm hoàn trả tiền vào số dư tài khoản, lý do thất bại có thể được ghi trong hướng dẫn)';
$_LANG['cancel_order_reason'] = 'Mua chung thất bại.';
$_LANG['js_languages']['succeed_confirm'] = 'Hành động không đảo ngược, bạn có chắc thiết lập mua chung là thành công?';
$_LANG['js_languages']['fail_confirm'] = 'Hành động không đảo ngược, bạn có chắc thiết lập mua thoe nhóm là thất bại?';
$_LANG['button_mail'] = 'Gởi email';
$_LANG['notice_mail'] = '(Thông báo khách hàng phải trả phần tiền còn lại của vận chuyển)';
$_LANG['mail_result'] = 'Có %s đơn hàng có hiệu lực, gởi %s email thành công.';
$_LANG['invalid_time'] = 'Bạn nhập một thời gian mua không hợp lệ.';

$_LANG['add_success'] = 'Thêm thành công';
$_LANG['edit_success'] = 'Chỉnh sửa thành công';
$_LANG['back_list'] = 'Quay lại';
$_LANG['continue_add'] = 'Tiếp tục thêm';

/* Gởi Thêm/Chỉnh sửa cộng tác */
$_LANG['error_goods_null'] = 'Vui lòng chọn sản phẩm mua chung!';
$_LANG['error_goods_exist'] = 'Đây là mua chung cho sản phẩm bạn chọn!';
$_LANG['error_price_ladder'] = 'Vui lòng nhập giá trị bước giá mua chung!';
$_LANG['error_restrict_amount'] = 'Số lượng bán ít hơn thang giá nên không là số lượng lớn nhất';

$_LANG['js_languages']['error_goods_null'] = 'Vui lòng chọn sản phẩm mua chung!';
$_LANG['js_languages']['error_deposit'] = 'Bảo hiểm phải là một số nguyên!';
$_LANG['js_languages']['error_restrict_amount'] = 'Số lượng giới hạn phải là số nguyên!';
$_LANG['js_languages']['error_gift_integral'] = 'Điểm hiện tại phải là số nguyên!';
$_LANG['js_languages']['search_is_null'] = 'Đã không tìm kiếm bất kỳ sản phẩm nào, xin vui lòng tìm kiếm lại';

/* Xóa cộng tác */
$_LANG['js_languages']['batch_drop_confirm'] = 'Bạn có chắc xóa các mua chung được chọn?';
$_LANG['error_exist_order'] = 'Đây là đơn hàng mua chung, không thể xóa!';
$_LANG['batch_drop_success'] = '%s hồ sơ đã xóa thành công.(Bạn không thể xóa mua chung với đơn hàng)';
$_LANG['no_select_group_buy'] = 'Mua chung không có hồ sơ về hoạt động của bạn!';

/* logs hoạt động */
$_LANG['log_action']['group_buy'] = 'Sản phẩm cộng tác';

?>