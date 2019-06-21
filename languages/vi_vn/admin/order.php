<?php



/**

 * ECSHOP Orders management language file

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

 * $Id: order.php 16308 2009-06-23 03:25:34Z liubo $

 */



/* Tìm kiếm đơn hàng*/

$_LANG['order_sn'] = 'Mã số đơn hàng';

$_LANG['consignee'] = 'Người nhận';

$_LANG['all_status'] = 'Tình trạng';



$_LANG['cs'][OS_UNCONFIRMED] = 'Chưa xác nhận';

$_LANG['cs'][CS_AWAIT_PAY] = 'Chờ trả tiền';

$_LANG['cs'][CS_AWAIT_SHIP] = 'Chờ vận chuyển';

$_LANG['cs'][CS_FINISHED] = 'Kết thúc';

$_LANG['cs'][PS_PAYING] = 'Thanh toán';

$_LANG['cs'][OS_CANCELED] = 'Hủy bỏ';

$_LANG['cs'][OS_INVALID] = 'Không hợp lệ';

$_LANG['cs'][OS_RETURNED] = 'Trả lại';



/* Tình trạng đơn hàng */

$_LANG['os'][OS_UNCONFIRMED] = 'Chưa xác nhận';

$_LANG['os'][OS_CONFIRMED] = 'Đã xác nhận';

$_LANG['os'][OS_CANCELED] = 'Đã hủy bỏ';

$_LANG['os'][OS_INVALID] = 'Không hợp lệ';

$_LANG['os'][OS_RETURNED] = 'Trả lại';

$_LANG['os'][OS_SPLITED] = 'Đã được một đơn';

$_LANG['os'][OS_SPLITING_PART] = 'Đã được chuyển (một số sản phẩm)';



$_LANG['ss'][SS_UNSHIPPED] = 'Chưa vận chuyển';

$_LANG['ss'][SS_PREPARING] = 'Chuẩn bị';

$_LANG['ss'][SS_SHIPPED] = 'Đã vận chuyển';

$_LANG['ss'][SS_RECEIVED] = 'Đã nhận';

$_LANG['ss'][SS_SHIPPED_PART] = 'Đã chuyển một phần';

$_LANG['ss'][SS_SHIPPED_ING] = 'Đang vận chuyển';// Shipped in



$_LANG['ps'][PS_UNPAYED] = 'Chưa thanh toán';

$_LANG['ps'][PS_PAYING] = 'Thanh toán';

$_LANG['ps'][PS_PAYED] = 'Đã thanh toán';



$_LANG['ss_admin'][SS_SHIPPED_ING] = 'Giao hàng tận nơi (Tình trạng tương lai: Không vận chuyển)';

/* Hoạt động đơn hàng */

$_LANG['label_operable_act'] = 'Hoạt động thực thi hiện tại:';

$_LANG['label_action_note'] = 'Ghi chú hành động:';

$_LANG['label_invoice_note'] = 'Ghi chú hóa đơn:';

$_LANG['label_invoice_no'] = 'Hóa đơn số:';

$_LANG['label_cancel_note'] = 'Nguyên nhân hủy:';

$_LANG['notice_cancel_note'] = '(Ghi chú trong tin nhắn của chủ cửa hàng)';

$_LANG['op_confirm'] = 'Xác nhận';

$_LANG['op_pay'] = 'Thanh toán';

$_LANG['op_prepare'] = 'Phân phối';

$_LANG['op_ship'] = 'Vận chuyển';

$_LANG['op_cancel'] = 'Hủy bỏ';

$_LANG['op_invalid'] = 'Không hợp lệ';

$_LANG['op_return'] = 'Trả lại';

$_LANG['op_unpay'] = 'Thiết lập chưa thanh toán';

$_LANG['op_unship'] = 'Chưa vận chuyển';

$_LANG['op_cancel_ship'] = 'Hủy bỏ vận chuyển';

$_LANG['op_receive'] = 'Đã nhận';

$_LANG['op_assign'] = 'Được giao';

$_LANG['op_after_service'] = 'Dịch vụ sau bán hàng';

$_LANG['act_ok'] = 'Thực hiện thành công';

$_LANG['act_false'] = 'Thực hiện thất bại';

$_LANG['act_ship_num'] = 'Vận chuyển nhiều hơn số lượng đặt hàng';

$_LANG['act_good_vacancy'] = 'Hết hàng';

$_LANG['act_good_delivery'] = 'Đã vận chuyển';

$_LANG['notice_gb_ship'] = 'Lưu ý: các hoạt động mua theo nhóm chưa giải quyết xong và không thể được vận chuyển';

$_LANG['back_list'] = 'Quay về danh sách đơn hàng.';

$_LANG['op_remove'] = 'Xóa bỏ';

$_LANG['op_you_can'] = 'Bạn có thể thực hiện';

$_LANG['op_split'] = 'Tạo hoá đơn';

$_LANG['op_to_delivery'] = 'Để giao hàng';



/* Danh sách đơn hàng */

$_LANG['order_amount'] = 'Số tiền đơn hàng';

$_LANG['total_fee'] = 'Tổng số tiền';

$_LANG['shipping_name'] = 'Phương thức vận chuyển';

$_LANG['pay_name'] = 'Phương thức thanh toán';

$_LANG['address'] = 'Địa chỉ';

$_LANG['order_time'] = 'Thời gian';

$_LANG['detail'] = 'Xem chi tiết';

$_LANG['phone'] = 'Điện thoại';

$_LANG['group_buy'] = '(Mua theo nhóm)';

$_LANG['error_get_goods_info'] = 'Lỗi thông tin đơn đặt hàng';

$_LANG['exchange_goods'] = '(Điểm trao đổi)';



$_LANG['js_languages']['remove_confirm']='Tất cả thông tin sẽ bị xóa nếu bạn xóa đơn hàng. Bạn có chắc xóa nó?';



/* Tìm kiếm đơn hàng */

$_LANG['label_order_sn'] = 'Đơn hàng số:';

$_LANG['label_all_status'] = 'Tình trạng:';

$_LANG['label_user_name'] = 'Người mua:';

$_LANG['label_consignee'] = 'Người nhận:';

$_LANG['label_email'] = 'Email:';

$_LANG['label_address'] = 'Địa chỉ:';

$_LANG['label_zipcode'] = 'Mã bưu điện:';

$_LANG['label_tel'] = 'Điện thoại:';

$_LANG['label_mobile'] = 'Điện thoại di động:';

$_LANG['label_shipping'] = 'Phương thức vận chuyển:';

$_LANG['label_payment'] = 'Phương thức thanh toán:';

$_LANG['label_order_status'] = 'Tình trạng đơn hàng:';

$_LANG['label_pay_status'] = 'Tình trạng thanh toán:';

$_LANG['label_shipping_status'] = 'Tình trạng vận chuyển:';

$_LANG['label_area'] = 'Địa điểm:';

$_LANG['label_time'] = 'Theo một thời gian duy nhất:';



/* Chi tiết đơn hàng */

$_LANG['prev'] = 'Đơn hàng trước';

$_LANG['next'] = 'Đơn hàng kế tiếp';

$_LANG['print_order'] = 'In đơn hàng';

$_LANG['print_shipping'] = 'In vận chuyển';

$_LANG['print_order_sn'] = 'Đơn hàng số:';

$_LANG['print_buy_name'] = 'Người mua:';

$_LANG['label_consignee_address'] = 'Địa chỉ tiếp nhận';

$_LANG['no_print_shipping'] = 'Xin lỗi, không in';

$_LANG['suppliers_no'] = 'Tại vị trí của tôi(không có nhà cung cấp)';

$_LANG['restaurant'] = 'Nhà hàng';



$_LANG['order_info'] = 'Thông tin đơn hàng';

$_LANG['base_info'] = 'Thông tin cơ bản';

$_LANG['other_info'] = 'Thông tin khác';

$_LANG['consignee_info'] = 'Thông tin người nhận';

$_LANG['fee_info'] = 'Thông tin chi phí';

$_LANG['action_info'] = 'Thông tin hoạt động';

$_LANG['shipping_info'] = 'Thông tin vận chuyển';



$_LANG['label_how_oos'] = 'Chưa có hàng sẵn:';

$_LANG['label_how_surplus'] = 'Số dư có sẵn:';

$_LANG['label_pack'] = 'Đóng gói:';

$_LANG['label_card'] = 'Thiệp:';

$_LANG['label_card_message'] = 'Lời chúc trong thiệp:';

$_LANG['label_order_time'] = 'Thời gian đặt hàng:';

$_LANG['label_pay_time'] = 'Thời gian thanh toán:';

$_LANG['label_shipping_time'] = 'Thời gian vận chuyển:';

$_LANG['label_sign_building'] = 'Xây dựng chữ ký:';

$_LANG['label_best_time'] = 'Thời gian giao hàng tốt nhất:';

$_LANG['label_inv_type'] = 'Loại hóa đơn:';

$_LANG['label_inv_payee'] = 'Tiêu đề hóa đơn:';

$_LANG['label_inv_content'] = 'Nội dung hóa đơn:';

$_LANG['label_postscript'] = 'Bổ sung:';

$_LANG['label_region'] = 'Khu vực:';



$_LANG['label_shop_url'] = 'URL:';

$_LANG['label_shop_address'] = 'Địa chỉ:';

$_LANG['label_service_phone'] = 'Số điện thoại:';

$_LANG['label_print_time'] = 'Thời gian in:';



$_LANG['label_suppliers'] ='Chọn nhà cung cấp:';

$_LANG['label_agency'] = 'Văn phòng:';

$_LANG['suppliers_name'] = 'Nhà cung cấp';



$_LANG['product_sn'] = 'Mã sản phẩm';

$_LANG['goods_info'] = 'Thông tin sản phẩm';

$_LANG['goods_name'] = 'Tên sản phẩm';

$_LANG['goods_name_brand'] = 'Tên sản phẩm [ Thương hiệu ]';

$_LANG['goods_sn'] = 'NO.';

$_LANG['goods_price'] = 'Giá';

$_LANG['goods_number'] = 'Số lượng';

$_LANG['goods_attr'] = 'Thuộc tính';

$_LANG['goods_delivery'] = 'Số lượng vận chuyển';

$_LANG['goods_delivery_curr'] = 'Số lượng giao hàng đơn lẻ';

$_LANG['storage'] = 'Lưu trữ';

$_LANG['subtotal'] = 'Tổng';

$_LANG['label_total'] = 'Tổng số:';

$_LANG['label_total_weight'] = 'Tổng trọng lượng hàng hóa:';



$_LANG['label_goods_amount'] ='Tổng số lượng hàng hóa:';

$_LANG['label_discount'] = 'Giảm giá:';

$_LANG['label_tax'] = 'Hóa đơn thuế:';

$_LANG['label_shipping_fee'] ='Tiền vận chuyển:';

$_LANG['label_insure_fee'] ='Tiền bảo hiểm:';

$_LANG['label_insure_yn'] = 'Bảo hiểm?(Y/N):';

$_LANG['label_pay_fee'] ='Tiền thanh toán:';

$_LANG['label_pack_fee'] ='Tiền đóng gói:';

$_LANG['label_card_fee'] ='Tiền thiệp:';

$_LANG['label_money_paid'] ='Tiền thanh toán:';

$_LANG['label_surplus'] ='Sử dụng số dư:';

$_LANG['label_integral'] ='Sử dụng điểm:';

$_LANG['label_bonus'] ='Sử dụng thưởng:';

$_LANG['label_order_amount'] ='Tổng số tiền đơn hàng:';

$_LANG['label_money_dues'] ='Tổng số tiền phải trả:';

$_LANG['label_money_refund'] ='Tiền hoàn lại:';

$_LANG['label_to_buyer'] ='Tin nhắn cửa hàng:';

$_LANG['save_order'] ='Lưu đơn hàng';

$_LANG['notice_gb_order_amount'] = '(Lưu ý: Mua theo nhóm nếu có số dư ký quỹ lần đầu tiên chỉ trả tiền đặt cọc và trả tiền tương ứng)';



$_LANG['action_user'] ='Khách hàng';

$_LANG['action_time'] ='Thời gian';

$_LANG['order_status'] ='Tình trạng đơn hàng';

$_LANG['pay_status'] ='Tình trạng thanh toán';

$_LANG['shipping_status'] ='Tình trạng vận chuyển';

$_LANG['action_note'] ='Ghi chú';

$_LANG['pay_note'] = 'Lưu ý thanh toán';



$_LANG['sms_time_format'] = 'Giờ/phút/giây';

$_LANG['order_shipped_sms'] ='Đơn hàng của bạn %s đã được vận chuyển đến %s. [%s]';

$_LANG['order_splited_sms'] = 'Đơn hàng của bạn %s, %s là %s [%s]';

$_LANG['order_removed'] ='Xóa đơn hàng thành công.';

$_LANG['return_list'] ='Quay lại danh sách đơn hàng';



/* Gợi ý xử lý đơn hàng */

$_LANG['surplus_not_enough'] ='Đơn hàng sử dụng %s số dư để trả, hiện tại khách hàng thiếu số dư.';

$_LANG['integral_not_enough']='Đơn hàng sử dụng %s điểm để trả, hiện nay khách hàng thiếu điểm.';

$_LANG['bonus_not_available']='Đơn hàng sử dụng thưởng để trả, thưởng không thể sử dụng ngay bây giờ.';



/* Thông tin người mua hàng hóa */

$_LANG['display_buyer'] ='Hiển thị thông tin người mua';

$_LANG['buyer_info'] ='Thông tin người mua';

$_LANG['pay_points'] ='Điểm tiêu dùng';

$_LANG['rank_points'] ='Điểm cấp bậc';

$_LANG['user_money'] ='Số dư tài khoản';

$_LANG['email'] ='E-mail';

$_LANG['rank_name'] ='Cấp bậc thành viên';

$_LANG['bonus_count'] ='Số lượng thưởng';

$_LANG['zipcode'] ='Mã vùng';

$_LANG['tel'] ='Số điện thoại';

$_LANG['mobile'] ='Số di động';



/* Kết hợp các đơn đặt hàng */

$_LANG['order_sn_not_null'] ='Xin điền vào mã số đơn hàng kết hợp';

$_LANG['two_order_sn_same'] ='Mã số đơn hàng kết hợp không được giống nhau.';

$_LANG['order_not_exist'] ='Đơn hàng %s không tồn tại.';

$_LANG['os_not_unconfirmed_or_confirmed']='%s của tình trạng đơn hàng không phải "Chưa xác nhận" hoặc "Xác nhận".';

$_LANG['ps_not_unpayed'] ='Đơn hàng %s có tình trạng thanh toán không phải là "Chưa thanh toán".';

$_LANG['ss_not_unshipped'] ='Đơn hàng %s tình trạng vận chuyển không phải là "Chưa vận chuyển".';

$_LANG['order_user_not_same']='Hai đơn hàng thuộc về hai khách hàng khác nhau';

$_LANG['merge_invalid_order'] = 'Xin lỗi, các đơn hàng mà bạn chọn không được phép kết hợp.';



$_LANG['from_order_sn'] ='Đơn hàng chính:';

$_LANG['to_order_sn'] ='Đơn hàng phụ:';

$_LANG['merge'] ='Kết hợp';

$_LANG['notice_order_sn'] ='Khi hai đơn hàng không giống nhau, thông tin đơn hàng sau khi kết hợp theo tiêu chuẩn của đơn hàng chínhb(chẳng hạn như: Phương thức thanh toán, Vận chuyển, Đóng gói, Thiệp chúc mừng, Thưởng v.v...).';

$_LANG['js_languages']['confirm_merge'] = 'Bạn có chắc muốn kết hợp hai đơn hàng?';



/* Hướng dẫn tiến trình */

$_LANG['pls_select_order'] = 'Xin chọn các hoạt động mà bạn muốn đặt hàng';

$_LANG['no_fulfilled_order'] ='Không có điều kiện đáp ứng để thực hiện đơn hàng.';

$_LANG['updated_order'] ='Những đơn hàng gần đây:';

$_LANG['order'] = 'Đơn hàng：';

$_LANG['confirm_order'] = 'Không thể sửa đổi để xác nhận';

$_LANG['invalid_order'] = 'Không thể sửa đổi để không hợp lệ';

$_LANG['cancel_order'] = 'Không thể sửa đổi để hủy bỏ';

$_LANG['remove_order'] = 'Không thể xóa';



/* Chỉnh sửa mẫu in đơn hàng */

$_LANG['edit_order_templates']='Chỉnh sửa mẫu in đơn hàng';

$_LANG['template_resetore'] ='Khôi phục mẫu';

$_LANG['edit_template_success']='Chỉnh sửa mẫu in đơn hàng thành công!';

$_LANG['remark_fittings'] ='(Phụ kiện)';

$_LANG['remark_gift'] ='(Quà tặng)';

$_LANG['remark_favourable'] = '(Sản phẩm ưu đãi)';

$_LANG['remark_package'] = '(Đóng gói ưu đãi)';



/* Thống kê nguồn đơn hàng */

$_LANG['from_order'] ='Nguồn đặt hàng:';

$_LANG['from_ad_js'] ='Quảng cáo:';

$_LANG['from_goods_js'] ='Giao hàng bên ngoài trạm JS';

$_LANG['from_self_site'] ='Từ trang web';

$_LANG['from'] ='Từ trang web:';



/* Thêm, chỉnh sửa đơn hàng */

$_LANG['add_order'] ='Thêm đơn hàng';

$_LANG['edit_order'] ='Chỉnh sửa đơn hàng';

$_LANG['step']['user'] ='Xin chọn thành viên bạn muốn đặt hàng.';

$_LANG['step']['goods'] ='Chọn sản phẩm';

$_LANG['step']['consignee'] ='Cấu hình thông tin người nhận';

$_LANG['step']['shipping'] ='Chọn phương thức vận chuyển';

$_LANG['step']['payment'] ='Phương thức thanh toán';

$_LANG['step']['other'] ='Tạo thông tin khác';

$_LANG['step']['money'] ='Thiết lập số tiền';

$_LANG['anonymous'] ='Khách lạ';

$_LANG['by_useridname'] ='Tìm kiếm theo mã số hoặc tên thành viên';

$_LANG['button_prev'] ='Lùi';

$_LANG['button_next'] ='Tiếp';

$_LANG['button_finish'] ='Hoàn thành';

$_LANG['button_cancel'] ='Hủy bỏ';

$_LANG['name'] ='Tên';

$_LANG['desc'] ='Mô tả';

$_LANG['shipping_fee'] ='Phí vận chuyển';

$_LANG['free_money'] ='Giới hạn miễn phí';

$_LANG['insure'] ='Phí bảo hiểm';

$_LANG['pay_fee'] ='Tiền hoa hồng';

$_LANG['pack_fee'] ='Chi phí đóng gói';

$_LANG['card_fee'] ='Chi phí thiệp chúc mừng';

$_LANG['no_pack'] ='Không muốn đóng gói';

$_LANG['no_card'] ='Không muốn thiệp chúc mừng';

$_LANG['add_to_order'] ='Thêm vào đơn hàng';

$_LANG['calc_order_amount'] ='Tính tổng số tiền đơn hàng';

$_LANG['available_surplus'] ='Có thể dùng số dư:';

$_LANG['available_integral'] ='Có thể dùng điểm:';

$_LANG['available_bonus'] ='Có thể dùng thưởng:';

$_LANG['admin'] ='Thêm bởi Quản trị viên';

$_LANG['search_goods'] ='Tìm kiếm theo ID sản phẩm, tên, mã số.';

$_LANG['category'] ='Danh mục';

$_LANG['brand'] ='Thương hiệu';

$_LANG['user_money_not_enough']='Khách hàng thiếu số dư';

$_LANG['pay_points_not_enough']='Khách hành thiếu điểm';

$_LANG['money_paid_enough'] ='Số tiền phải trả phải lớn hơn tổng số tiền sản phẩm và các chi phí khác, xin vui lòng hoàn lại tiền.';

$_LANG['price_note'] ='Thông báo: Đã bao gồm giá các thuộc tính được đánh dấu trong giá sản phẩm.';

$_LANG['select_pack'] ='Chọn đóng gói';

$_LANG['select_card'] ='Chọn thiệp chúc mừng';

$_LANG['select_shipping'] ='Chọn phương thức vận chuyển';

$_LANG['want_insure'] ='Tôi muốn có bảo hiểm';

$_LANG['update_goods'] ='Cập nhật sản phẩm';

$_LANG['notice_user'] ='<Strong>Chý ý:</Strong>Kết quả tìm kiếm chỉ hiển thị 20 hồ sơ đầu tiên, nếu không tìm thấy thành viên tương ứng, hãy tìm một cách chính xác. Hơn nữa, nếu các thành viên đăng ký từ diễn đàn này và không đăng ký tại cửa hàng, có thể cũng không tìm ra, cần đăng ký tại các cửa hàng đầu tiên.';

$_LANG['amount_increase'] ='Bởi vì bạn sửa đổi đơn hàng, làm cho tổng số tiền đơn hàng tăng, cần phải trả thêm tiền.';

$_LANG['amount_decrease'] ='Bởi vì bạn sửa đổi đơn hàng, làm cho tổng số tiền đơn hàng giảm, cần phải hoàn lại tiền.';

$_LANG['continue_shipping'] ='Bởi vì bạn sửa đổi khu vực nơi người nhận, làm cho phương thức vận chuyển không còn có thể được sử dụng, vui lòng chọn lại phương thức vận chuyển.';

$_LANG['continue_payment'] ='Bởi vì bạn sửa đổi phương thức vận chuyển, làm cho phương thức thanh toán ban đầu không còn có thể được sử dụng, xin vui lòng chọn lại phương thức vận chuyển.';

$_LANG['refund'] = 'Trả lại';

$_LANG['cannot_edit_order_shipped']='Bạn không thể sửa đổi phương thức vận chuyển đơn hàng.';

$_LANG['address_list'] ='Chọn từ địa chỉ người nhận hiện tại:';

$_LANG['order_amount_change'] ='Tổng số tiền đặt hàng từ %s thay đổi thành %s.';

$_LANG['shipping_note'] ='Thông báo: Do sản phẩm trong đơn hàng đã được vận chuyển, sửa đổi phương thức vận chuyển không thay đổi tiền vận chuyển và bảo hiểm.';

$_LANG['change_use_surplus'] = 'Chỉnh sửa đơn hàng %s, thay đổi việc sử dụng tiền tạm ứng';

$_LANG['change_use_integral'] = 'Chỉnh sửa đơn hàng %s, thay đổi việc sử dụng số điểm trả tiền';

$_LANG['return_order_surplus'] = 'Vì bị hủy bỏ, không hợp lệ hoặc quay lại hành động, quay lại để thanh toán cho việc sử dụng các tính năng nâng cao của đơn hàng %s';

$_LANG['return_order_integral'] = 'Vì bị hủy bỏ, không hợp lệ hoặc quay lại hành động, quay lại để thanh toán cho việc sử dụng điểm của đơn hàng %s';

$_LANG['order_gift_integral'] = 'Điểm quà tặng đơn hàng %s';

$_LANG['return_order_gift_integral'] = 'Quay lại hoặc bởi vì hành động vận chuyển, quay trở lại để cho đơn đặt hàng cho %s điểm';

$_LANG['invoice_no_mall'] = '&nbsp;&nbsp;&nbsp;&nbsp;Nhiều mã số hóa đơn, cách nhau bằng dấu phẩy ","';



$_LANG['js_languages']['input_price'] = 'Giá nhập vào';

$_LANG['js_languages']['pls_search_user'] ='Vui lòng tìm kiếm và chọn thành viên.';

$_LANG['js_languages']['confirm_drop'] ='Xác nhận để xóa sản phẩm?';

$_LANG['js_languages']['invalid_goods_number']='Số lượng sản phẩm không đúng';

$_LANG['js_languages']['pls_search_goods'] ='Vui lòng tìm kiếm và chọn sản phẩm.';

$_LANG['js_languages']['pls_select_area'] = 'Xin vui lòng chọn khu vực';

$_LANG['js_languages']['pls_select_shipping']='Vui lòng chọn phương thức vận chuyển.';

$_LANG['js_languages']['pls_select_payment'] ='Vui lòng chọn phương thức thanh toán.';

$_LANG['js_languages']['pls_select_pack'] ='Xin chọn đóng gói.';

$_LANG['js_languages']['pls_select_card'] ='Xin chọn thiệp.';

$_LANG['js_languages']['pls_input_note'] = 'Xin chọn ghi chú.';

$_LANG['js_languages']['pls_input_cancel'] = 'Xin điền lý do hủy bỏ!';

$_LANG['js_languages']['pls_select_refund'] = 'Xin chọn phương thức hoàn trả.';

$_LANG['js_languages']['pls_select_agency'] = 'Xin chọn văn phòng.';

$_LANG['js_languages']['pls_select_other_agency'] = 'Đơn hàng thuộc về văn phòng đã chọn. Hãy lựa chọn một văn phòng khác.';

$_LANG['js_languages']['loading'] = 'Đang tải...';



/* Thực hiện đơn hàng */

$_LANG['order_operate'] = 'Thực hiện đơn hàng:';

$_LANG['label_refund_amount'] = 'Tiền trả lại:';

$_LANG['label_handle_refund'] = 'Phương thức trả lại:';

$_LANG['label_refund_note'] = 'Lưu ý trả lại:';

$_LANG['return_user_money'] = 'Quay về số dư thành viên';

$_LANG['create_user_account'] = 'Tạo ra đơn hoàn trả';

$_LANG['not_handle'] = 'Không thực hiện tiến trình, chọn mục này khi thực hiện một lỗi';



$_LANG['order_refund'] = 'Đơn hàng trả lại: %s.';

$_LANG['order_pay'] = 'Đơn hàng thanh toán: %s.';



$_LANG['send_mail_fail'] = 'Gởi email thất bại';



$_LANG['send_message'] = 'Gởi/xem tin nhắn';



/* Thực hiện hóa đơn */

$_LANG['delivery_operate'] = 'Thực hiện hóa đơn:';

$_LANG['delivery_sn_number'] = 'Số Serial của hóa đơn:';

$_LANG['invoice_no_sms'] = 'Nhập mã hóa đơn';



/* tìm kiếm hóa đơn */

$_LANG['delivery_sn'] = 'Hóa đơn';



/* Tình trạng hóa đơn */

$_LANG['delivery_status'][0] = 'Bình thường';

$_LANG['delivery_status'][1] = 'Trả lại';

$_LANG['delivery_status'][2] = 'Đã vận chuyển';



/* Nhãn hóa đơn */

$_LANG['label_delivery_status'] = 'Tình trạng hóa đơn';

$_LANG['label_delivery_time'] = 'Tổng thời gian';

$_LANG['label_delivery_sn'] = 'Số Serial của hóa đơn';

$_LANG['label_add_time'] = 'Thời gian đặt hàng';

$_LANG['label_update_time'] = 'Thời gian vận chuyển';

$_LANG['label_send_number'] = 'Số lượng vận chuyển';



/* 发货单提示 */

$_LANG['tips_delivery_del'] = 'Xóa hóa đơn thành công!';



/* Trở lại một thao tác đơn */

$_LANG['back_operate'] = 'Lưu ý thực hiện hoàn trả:';



/* Trở lại một nhãn hiệu duy nhất */

$_LANG['return_time'] = 'Thời gian hoàn trả:';

$_LANG['label_return_time'] = 'Thời gian hoàn trả';



/* 退货单提示 */

$_LANG['tips_back_del'] = 'Trả về xóa duy nhất thành công!';



$_LANG['goods_num_err'] = 'Trong kho, xin vui lòng chọn lại!';

?>