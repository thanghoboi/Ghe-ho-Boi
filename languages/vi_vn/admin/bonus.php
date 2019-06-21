<?php

/**
 * ECSHOP Bonus type/Bonus management program
 * ============================================================================
 * All right reserved (C) 2005-2007 Beijing Yi Shang Interactive Technology
 * Development Ltd.
 * Web site: http://www.ecshop.com
 * ----------------------------------------------------------------------------
 * This is a free/open source software；it means that you can modify, use and
 * republish the program code, on the premise of that your behavior is not for
 * commercial purposes.
 * ============================================================================
 * $Author: sxc_shop $
 * $Id: bonus.php 16320 2009-06-23 09:42:41Z sxc_shop $
*/
/* Bonus type feild information */
$_LANG['bonus_type'] = 'Loại thưởng';
$_LANG['bonus_list'] = 'Danh sách thưởng';
$_LANG['type_name'] = 'Tên';
$_LANG['type_money'] = 'Tiền thưởng';
$_LANG['min_goods_amount'] = 'Số lượng đơn đặt hàng tối thiểu';
$_LANG['notice_min_goods_amount'] = 'Chỉ có tổng số lượng hàng hóa để được con số này trong đơn hàng mới được thưởng kèm theo';
$_LANG['min_amount'] = 'Giới hạn ít nhất';
$_LANG['max_amount'] = 'Giới hạn cao nhất';
$_LANG['send_startdate'] = 'Ngày bắt đầu';
$_LANG['send_enddate'] = 'Ngày kế thúc';

$_LANG['use_startdate'] = 'Ngày bắt đầu';
$_LANG['use_enddate'] = 'Ngày kết thúc';
$_LANG['send_count'] = 'Số lượng cung cấp';
$_LANG['use_count'] = 'Số lượng sử dụng';
$_LANG['send_method'] = 'Phương thức cung cấp';
$_LANG['send_type'] = 'Loại';
$_LANG['param'] = 'Thông số';
$_LANG['no_use'] = 'Chưa sử dụng';
$_LANG['yuan'] = 'VNĐ';
$_LANG['user_list'] = 'List thành viên';
$_LANG['type_name_empty'] = 'Tên loại thưởng không được để trống!';
$_LANG['type_money_empty'] = 'Số tiền thưởng không được để trống!';
$_LANG['min_amount_empty'] = 'Giới hạn thấp nhất của hóa đơn của loại thưởng không được để trống!';
$_LANG['max_amount_empty'] = 'Giới hạn cao nhất của hóa đơn của loại thưởng không được để trống!';
$_LANG['send_count_empty'] = 'Số lượng của loại thưởng không được để trống!';

$_LANG['send_by'][SEND_BY_USER] = 'Bởi người dùng';
$_LANG['send_by'][SEND_BY_GOODS] = 'Bởi sản phẩm';
$_LANG['send_by'][SEND_BY_ORDER] = 'Bởi tiền đơn hàng';
$_LANG['send_by'][SEND_BY_PRINT] = 'Off line';
$_LANG['report_form'] = 'Báo cáo';
$_LANG['send'] = 'Gởi';
$_LANG['bonus_excel_file'] = 'Danh sách thông tin thưởng offline ';

$_LANG['goods_cat'] = 'Danh mục';
$_LANG['goods_brand'] = 'Thương hiệu';
$_LANG['goods_key'] = 'Từ khóa';
$_LANG['all_goods'] = 'Tùy chọn sản phẩm';
$_LANG['send_bouns_goods'] = 'Cung cấp các loại thưởng sản phẩm';
$_LANG['remove_bouns'] = 'Xóa thưởng';
$_LANG['all_remove_bouns'] = 'Xóa tất cả';
$_LANG['goods_already_bouns'] = 'Sản phẩm đã được cung cấp bởi loại thưởng khác!';
$_LANG['send_user_empty']='Bạn không chọn thành viên  nhận thưởng, xin vui lòng quay trở lại!';
$_LANG['batch_drop_success'] = ' %d thưởng đã bị xóa.';
$_LANG['sendbonus_count'] = 'Tổng cộng cuang cấp %d phần thưởng.';
$_LANG['send_bouns_error'] ='Gởi thưởng thành viên không chính xác, vui lòng thử lại!';
$_LANG['no_select_bonus'] = 'Bạn chưa chọn thành viên loại bỏ thưởng.';
$_LANG['bonustype_edit'] = 'Chỉnh sửa loại thưởng';
$_LANG['bonustype_view'] = 'Xem chi tiết';
$_LANG['drop_bonus'] = 'Xóa';
$_LANG['send_bonus'] = 'Cung cấp';
$_LANG['continus_add'] = 'Tiếp tục thêm laoị thưởng';
$_LANG['back_list'] = 'Quay về danh sách loại thưởng';
$_LANG['continue_add'] = 'Tiếp tục thêm thưởng';
$_LANG['back_bonus_list'] = 'Quay về danh sách thưởng';
$_LANG['validated_email'] = 'Chỉ cho người sử dụng chứng thực thông qua thanh toán thư của các gói đỏ';

/* Prompting message */
$_LANG['attradd_succed'] = 'Thực hiện thành công!';
$_LANG['js_languages']['type_name_empty'] = 'Xin nhập tên loại thưởng!';
$_LANG['js_languages']['type_money_empty'] = 'Xin nhập giá loại thưởng!';
$_LANG['js_languages']['order_money_empty'] = 'Xin nhập số tiền đơn hàng!';
$_LANG['js_languages']['type_money_isnumber'] = 'Loại tiền không phải là chữ số!';
$_LANG['js_languages']['order_money_isnumber'] = 'Tiền đơn hàng phải là định dạng số!';
$_LANG['js_languages']['bonus_sn_empty'] = 'Xin nhập mã số thưởng!';
$_LANG['js_languages']['bonus_sn_number'] = 'Mã số thưởng phải là con số!';
$_LANG['send_count_error'] = 'Số lượng cung cấp thưởng phải là chữ số!';
$_LANG['js_languages']['bonus_sum_empty'] = 'Xin nhập thưởng số lượng bạn muốn cung cấp!';
$_LANG['js_languages']['bonus_sum_number'] = 'Số lượng cung cấp thưởng phải là số nguyên!';
$_LANG['js_languages']['bonus_type_empty'] = 'Vui lòng chọn loại tiền thưởng!';
$_LANG['js_languages']['user_rank_empty'] = 'Xin chỉ định cấp bậc thành viên!';
$_LANG['js_languages']['user_name_empty'] = 'Hãy chọn ít nhất một thành viên!';
$_LANG['js_languages']['invalid_min_amount'] = 'Xin vui lòng nhập một mức tối thiểu của đơn đặt hàng (các con số lớn hơn 0)';
$_LANG['js_languages']['send_start_lt_end'] = 'Ngày bắt đầu thưởng không được lớn hơn ngày kết thúc';
$_LANG['js_languages']['use_start_lt_end'] = 'Ngày sử dụng thưởng không được lớn hơn ngày kết thúc';

$_LANG['order_money_notic'] = 'Miễn là số tiền giá trị của đơn đặt hàng sẽ được phát hành gói đỏ cho người sử dụng';
$_LANG['type_money_notic'] = 'Các loại thưởng có thể bù đắp tiền';
$_LANG['send_startdate_notic'] = 'Các loại thưởng có thể được cung cấp duy nhất thời điểm hiện tại giữa thời gian bắt đầu và kết thúc.';
$_LANG['use_startdate_notic'] = 'Chỉ có thời gian hiện thời giữa ngày bắt đầu và kết thúc, loại gói màu đỏ mới có thể được sử dụng';
$_LANG['type_name_exist'] = 'Tên loại đã tồn tại!';
$_LANG['type_money_error'] = 'Số tiền phải là con số và lớn hơn 0';
$_LANG['bonus_sn_notic'] = 'MẸO: Mã số thưởng gồm có 6 bit hạt nhân số 4 bit số ngẫu nhiên.';
$_LANG['creat_bonus'] = 'Tạo';
$_LANG['creat_bonus_num'] = 'Mã số thưởng';
$_LANG['bonus_sn_error'] = 'Mã số thưởng phải là con số!';
$_LANG['send_user_notice'] = 'Xin vui lòng nhập tên đăng nhập khi bạn cung cấp thưởng cho người sử dụng, nhiều người dùng ngăn cách bởi dấu (,) <br /> như: wjz, Liry, zwj';

/* Bonus information field */
$_LANG['bonus_id'] = 'ID';
$_LANG['bonus_type_id'] = 'Loại tiền';
$_LANG['send_bonus_count'] = 'Số lượng thưởng';
$_LANG['start_bonus_sn'] = 'Mã số bắt đầu';
$_LANG['bonus_sn'] = 'Mã số kết thúc';
$_LANG['user_id'] = 'Thành viên';
$_LANG['used_time'] = 'Thời gian';
$_LANG['order_id'] = 'Mã số đơn hàng';
$_LANG['send_mail'] = 'Gởi mail';
$_LANG['emailed'] = 'Thông báo email';
$_LANG['mail_status'][BONUS_NOT_MAIL] = 'Không gởi';
$_LANG['mail_status'][BONUS_MAIL_FAIL] = 'Gởi mail thất bại';
$_LANG['mail_status'][BONUS_MAIL_SUCCEED] = 'Gởi mail thành công!';

$_LANG['sendtouser'] = 'Cung cấp thưởng cho thành viên chỉ định';
$_LANG['senduserrank'] = 'Cung cấp thưởng cho cấp bậc thành viên';
$_LANG['userrank'] = 'Cấp bậc thành viên';
$_LANG['select_rank'] = 'Tất cả thành viên';
$_LANG['keywords'] ='Từ khóa: ';
$_LANG['userlist'] ='Danh sách thành viên: ';
$_LANG['search_users'] ='Tìm thành viên';
$_LANG['confirm_send_bonus'] ='Gởi';
$_LANG['bonus_not_exist'] = 'Thưởng không tồn tại.';
$_LANG['success_send_mail'] = 'Gởi %d mails thành công.';
$_LANG['send_continue'] = 'Tiếp tục gởi thưởng.';
$_LANG['send_to_user'] = 'Phân phát phong bì màu đỏ cho thành viên.';
?>