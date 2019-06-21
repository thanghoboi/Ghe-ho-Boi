<?php

/**
 * ECSHOP auction language file
 * ============================================================================
 * All right reserved (C) 2005-2007 Beijing Yi Shang Interactive Technology
 * Development Ltd.
 * Web site: http://www.ecshop.com
 * ----------------------------------------------------------------------------
 * This is a free/open source software；it means that you can modify, use and
 * republish the program code, on the premise of that your behavior is not for
 * commercial purposes.
 * ============================================================================
 * $Author: wangleisvn $
 * $Id: auction.php 16992 2010-01-19 08:45:49Z wangleisvn $
*/

/* menu */
$_LANG['auction_list'] = 'Danh sách đấu giá';
$_LANG['add_auction'] = 'Thêm sự kiện đấu giá';
$_LANG['edit_auction'] = 'Sửa sự kiện đấu giá';
$_LANG['auction_log'] = 'Nhật ký đấu giá';
$_LANG['continue_add_auction'] = 'Tiếp tục thêm đấu giá';
$_LANG['back_auction_list'] = 'Quay lại danh sách đấu giá';
$_LANG['add_auction_ok'] = 'Thêm đấu giá thành công';
$_LANG['edit_auction_ok'] = 'Sửa đấu giá thành công';
$_LANG['settle_deposit_ok'] = 'Xử lý phí đảm bảo đóng băng thành công';

/* list */
$_LANG['act_is_going'] = 'Hiển thị các hoạt động';
$_LANG['act_name'] = 'Tên hoạt động';
$_LANG['goods_name'] = 'Tên sản phẩm';
$_LANG['start_time'] = 'Thời gian bắt đầu';
$_LANG['end_time'] = 'Thời gian kết thúc';
$_LANG['deposit'] = 'Phí đảm bảo';
$_LANG['start_price'] = 'Giá khởi điểm';
$_LANG['end_price'] = 'Mua ngay';
$_LANG['amplitude'] = 'Giá mỗi lần trả';
$_LANG['auction_not_exist'] = 'Bạn muốn hoạt động bán đấu giá không tồn tại';
$_LANG['auction_cannot_remove'] = 'Việc bán đấu giá đã nhận được một giá thầu, không nên xóa';
$_LANG['js_languages']['batch_drop_confirm'] = 'Bạn có chắc chắn muốn xóa các hoạt động bán đấu giá được lựa chọn?';
$_LANG['batch_drop_ok'] = 'Hoạt động được hoàn tất (nó đã được bán đấu giá dự thầu không nên xóa)';
$_LANG['no_record_selected'] = 'Không chọn hồ sơ';

/* info */
$_LANG['label_act_name'] = 'Tên hoạt động đấu giá:';
$_LANG['notice_act_name'] = 'Nếu để trống, kiểm tra tên hàng hóa bán đấu giá (tên sử dụng chỉ cho nền, tương lai sẽ không được hiển thị)';
$_LANG['label_act_desc'] = 'Sự kiện được mô tả trong đấu giá';
$_LANG['label_search_goods'] = 'Theo mã số hàng hóa, tên hàng hóa, hoặc biến Tìm kiếm';
$_LANG['label_goods_name'] = 'Tên sản phẩm đấu giá';
$_LANG['label_start_time'] = 'Thời gian bắt đầu đấu giá';
$_LANG['label_end_time'] = 'Thời gian kết thúc đấu giá';
$_LANG['label_status'] = 'Tình trạng hiện tại:';
$_LANG['label_start_price'] = 'Giá khởi điểm:';
$_LANG['label_end_price'] = 'Giá mua ngay:';
$_LANG['label_no_top'] = 'Không có giá cao nhất để mua ngay';
$_LANG['label_amplitude'] = 'Tỷ lệ tăng:';
$_LANG['label_deposit'] = 'Phí bảo đảm:';
$_LANG['bid_user_count'] = 'Người mua có %s đấu thầu';
$_LANG['settle_frozen_money'] = 'Làm thế nào để giải quyết với các quỹ đóng băng của người mua?';
$_LANG['unfreeze'] = 'Thôi đóng băng phí bảo đảm';
$_LANG['deduct'] = 'Sau khi chiết khấu tác động của phí bảo đảm';
$_LANG['invalid_status'] = 'Tình trạng hiện tại không chính xác';
$_LANG['no_deposit'] = 'Không có tiền gởi yêu cầu xử lý';
$_LANG['unfreeze_auction_deposit'] = 'Thôi đóng băng phí bảo đảm: %s';
$_LANG['deduct_auction_deposit'] = 'Sau khi giảm giá hiệu quả của các phiên đấu giá trái phiếu: %s';

$_LANG['auction_status'][PRE_START] = 'Chưa bắt đầu';
$_LANG['auction_status'][UNDER_WAY] = 'Đang thực hiện';
$_LANG['auction_status'][FINISHED] = 'Đã kết thúc';
$_LANG['auction_status'][SETTLED] = 'Đã kết thúc';

$_LANG['pls_search_goods'] = 'Xin vui lòng tìm kiếm hàng hóa';
$_LANG['search_result_empty'] = 'Không tìm thấy hàng hóa, xin tìm lại';

$_LANG['pls_select_goods'] = 'Xin vui lòng lựa chọn hàng hóa bán đấu giá';
$_LANG['goods_not_exist'] = 'Bạn muốn bán đấu giá hàng hóa không tồn tại';

$_LANG['js_languages']['start_price_not_number'] = 'Giá khởi đầu không phải là con số';
$_LANG['js_languages']['end_price_not_number'] = 'Giá khởi đầu không phải là con số';
$_LANG['js_languages']['end_gt_start'] = 'Một giá lớn hơn giá khởi điểm';
$_LANG['js_languages']['amplitude_not_number'] = 'Tỷ lệ tăng không phải là định dạng đúng (con số)';
$_LANG['js_languages']['deposit_not_number'] = 'Phí đảm bảo không phải là định dạng đúng (con số)';
$_LANG['js_languages']['start_lt_end'] = 'Thời gian ba918 đầu bán đấu giá không được vượt quá thời gian kết thúc';
$_LANG['js_languages']['search_is_null'] = 'Không tìm thấy sản phẩm nào, xin thực hiện lại';

/* log */
$_LANG['bid_user'] = 'Người mua';
$_LANG['bid_price'] = 'Trả giá';
$_LANG['bid_time'] = 'Thời gian';
$_LANG['status'] = 'Tình trạng';

?>