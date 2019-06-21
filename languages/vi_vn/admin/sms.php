<?php
/**
 * ECSHOP Short message module language file
 * ============================================================================
 * All right reserved (C) 2005-2007 Beijing Yi Shang Interactive Technology
 * Development Ltd.
 * Web site: http://www.ecshop.com
 * ----------------------------------------------------------------------------
 * This is a free/open source software；it means that you can modify, use and
 * republish the program code, on the premise of that your behavior is not for
 * commercial purposes.
 * ============================================================================
 * $Author: testyang $
 * $Id: sms.php 14227 2008-03-10 06:37:24Z testyang $
*/

/* Danh mục */
$_LANG['register_sms'] = 'Đăng ký hoặc kích hoạt tài khoản SMS.';

/* Register or enable sms */
$_LANG['email'] = 'Email';
$_LANG['password'] = 'Mật khẩu';
$_LANG['domain'] = 'Domain';
$_LANG['error_tips'] = 'Xin vui lòng vài Thiết lập cửa hàng -> Cài đặt nhắn tin để đăng ký và cấu hình đúng các dịch vụ nhắn tin SMS!';
$_LANG['register_new'] = 'Đăng ký';
$_LANG['enable_old'] = 'Kích hoạt tài khoản';

/* Dịch vụ tin nhắn Sms đặc biệt */
$_LANG['sms_user_name'] = 'Tên đăng nhập:';
$_LANG['sms_password'] = 'Mật khẩu:';
$_LANG['sms_domain'] = 'Domain:';
$_LANG['sms_num'] = 'Số dịch vụ SMS đặc biệt:';
$_LANG['sms_count'] = 'Số lượng gởi SMS:';
$_LANG['sms_total_money'] = 'Tổng số tiền:';
$_LANG['sms_balance'] = 'Số dư:';
$_LANG['sms_last_request'] = 'Thời gian yêu cầu mới nhất:';
$_LANG['disable'] = 'Vô hiệu hóa dịch vụ SMS';

/* Gởi sms */
$_LANG['phone'] = 'Số di động nhận';
$_LANG['user_rand'] = 'Cấp bậc thành viên nhận tin nhắn';
$_LANG['phone_notice'] = 'có nhiều số điện thoại thì cách nhau bởi dấu phẩy.';
$_LANG['msg'] = 'Tin nhắn';
$_LANG['msg_notice'] = '250 ký tự là nhiều nhất';
$_LANG['send_date'] = 'Thời gian gởi';
$_LANG['send_date_notice'] = 'Định dạng là YYYY-MM-DD HH:II. Nếu nó trống thì gởi ngay lập tức.';
$_LANG['back_send_history'] = 'Quay về lịch sự gởi';
$_LANG['back_charge_history'] = 'Quay về lịch sử nạp tiền';

/* Giao diện truy vấn hồ sơ */
$_LANG['start_date'] = 'Ngày bắt đầu';
$_LANG['date_notice'] = 'Định dạng:YYYY-MM-DD. Được phép trống.';
$_LANG['end_date'] = 'Ngày kết thúc';
$_LANG['page_size'] = 'Hiển thị mỗi trang';
$_LANG['page_size_notice'] = 'Có thể trống, hiển thị 20 hồ sơ mỗi trang.';
$_LANG['page'] = 'Số lượng trên trang';
$_LANG['page_notice'] = 'Có thể trống, thể hiện sẽ hiển thị tất cả trên một trang.';
$_LANG['charge'] = 'Nhập số tiền bạn muốn nạp tiền';

/* Thông tin xác nhận hành động */
$_LANG['history_query_error'] = 'Xin lỗi, có lỗi trong quá trình truy vấn.';
$_LANG['enable_ok'] = 'Xin chúc mừng, bạn đã kích hoạt dịch vụ SMS thành công!';
$_LANG['enable_error'] = 'Xin lỗi, bạn kích hoạt dịch vụ SMS thất bại.';
$_LANG['disable_ok'] = 'Bạn thoát dịch vụ SMS thành công.';
$_LANG['disable_error'] = 'Thoát dịch vụ SMS thất bại.';
$_LANG['register_ok'] = 'Xin chúc mừng, bạn đăng ký dịch vụ sms thành công!';
$_LANG['register_error'] = 'Xin lỗi, bạn đăng ký dịch vụ sms đã thất bại.';
$_LANG['send_ok'] = 'Xin chúc mừng, tin nhắn của bạn đã được gửi thành công!';
$_LANG['send_error'] = 'Xin lỗi, có lỗi trong quá trình gửi.';
$_LANG['error_no'] = 'Đánh dấu lỗi';
$_LANG['error_msg'] = 'Mô tả lỗi';
$_LANG['empty_info'] = 'Dịch vụ SMS đặc biệt của bạn trống.';

/* Hồ sơ Điện thoại di động bổ sung */
$_LANG['order_id'] = 'ID Đơn hàng';
$_LANG['money'] = 'Số tiền nạp';
$_LANG['log_date'] = 'Ngày nạp tiền';

/* logs gởi tin */
$_LANG['sent_phones'] = 'Số di dộng gởi';
$_LANG['content'] = 'Nội dung';
$_LANG['charge_num'] = 'Thanh toán';
$_LANG['sent_date'] = 'Ngày gởi';
$_LANG['send_status'] = 'Tình trạng gởi';
$_LANG['status'][0] = 'Thất bại';
$_LANG['status'][1] = 'Thành công';
$_LANG['user_list'] = 'Tất cả thành viên';
$_LANG['please_select'] = 'Vui lòng chọn cấp độ thành viên';

/* Tin nhắn nhắc nhở */
$_LANG['test_now'] = '<span style="color:red;"></span>';
$_LANG['msg_price'] = '<span style="color:green;">0.1 Nhân dân tệ cho mỗi tin nhắn (áp dụng tại China)</span>';

/* API thông tin lỗi trả về */
//--đăng ký
$_LANG['api_errors']['register'][1] = 'Tên miền không được để trống.';
$_LANG['api_errors']['register'][2] = 'Hộp thư không hợp lệ.';
$_LANG['api_errors']['register'][3] = 'Tên đăng nhập đã tồn tại.';
$_LANG['api_errors']['register'][4] = 'Lỗi không xác định.';
$_LANG['api_errors']['register'][5] = 'Lỗi cổng.';
//--Gain balance
$_LANG['api_errors']['get_balance'][1] = 'Mật khẩu không hợp lệ.';
$_LANG['api_errors']['get_balance'][2] = 'Người dùng bị vô hiệu hóa.';
//--Gởi sms
$_LANG['api_errors']['send'][1] = 'Mật khẩu không hợp lệ.';
$_LANG['api_errors']['send'][2] = 'Độ dài nội dung SMS không hợp lệ.';
$_LANG['api_errors']['send'][3] = 'Thời gian gởi không được trước thời gian hiện tại.';
$_LANG['api_errors']['send'][4] = 'Lỗi số.';
$_LANG['api_errors']['send'][5] = 'Số dư không đủ.';
$_LANG['api_errors']['send'][6] = 'Tài khoản đã ngừng.';
$_LANG['api_errors']['send'][7] = 'Lỗi cổng.';
//--Lịch sử bản gởi
$_LANG['api_errors']['get_history'][1] = 'Mật khẩu không hợp lệ.';
$_LANG['api_errors']['get_history'][2] = 'Không có hồ sơ.';
//-- Xác minh người dùng
$_LANG['api_errors']['auth'][1] = 'Lỗi mật khẩu.';
$_LANG['api_errors']['auth'][2] = 'Không có thành viện.';

/* Thông tin lỗi server người sử dụng */
$_LANG['server_errors'][1] = 'Lỗi thông tin đăng ký không hợp lệ.';//ERROR_INVALID_REGISTER_INFO
$_LANG['server_errors'][2] = 'Lỗi thông tin kích hoạt không hợp lệ.';//ERROR_INVALID_ENABLE_INFO
$_LANG['server_errors'][3] = 'Lỗi thông tin gởi không hợp lệ.';//ERROR_INVALID_SEND_INFO
$_LANG['server_errors'][4] = 'Lỗi truy vấn lịch sử không hợp lệ.';//ERROR_INVALID_HISTORY_QUERY
$_LANG['server_errors'][5] = 'Lỗi nhận dạng thông tin không hợp lệ.';//ERROR_INVALID_PASSPORT
$_LANG['server_errors'][6] = 'Lỗi URL không hợp lệ.';//ERROR_INVALID_URL
$_LANG['server_errors'][7] = 'Lỗi hồi đáp rỗng.';//ERROR_EMPTY_RESPONSE
$_LANG['server_errors'][8] = 'Lỗi file xml không hợp lệ.';//ERROR_INVALID_XML_FILE
$_LANG['server_errors'][9] = 'Lỗi tên nút không hợp lệ.';//ERROR_INVALID_NODE_NAME
$_LANG['server_errors'][10] = 'Lỗi không thể lưu trữ.';//ERROR_CANT_STORE

/* Mục ngôn ngữ Client JS */
//--Đăng ký hoặc hỗ trợ
$_LANG['js_languages']['password_empty_error'] = 'Vui lòng nhập mật khẩu.';
$_LANG['js_languages']['username_empty_error'] = 'Vui lòng nhập tên đăng nhập.';
$_LANG['js_languages']['username_format_error'] = 'Định dạng tên đăng nhập không hợp lệ.';
$_LANG['js_languages']['domain_empty_error'] = 'Domain không thể trống.';
$_LANG['js_languages']['domain_format_error'] = 'Định dạng Domain không hợp lệ.';
$_LANG['js_languages']['send_empty_error'] = 'Gửi số điện thoại và gửi ít nhất là điền vào một đánh giá!';

//--Gởi
$_LANG['js_languages']['phone_empty_error'] = 'Vui lòng nhập số điện thoại.';
$_LANG['js_languages']['phone_format_error'] = 'Định dạng số điện thoại thành viên không hợp lệ.';
$_LANG['js_languages']['msg_empty_error'] = 'Vui lòng nhập nội dung tin nhắn.';
$_LANG['js_languages']['send_date_format_error'] = 'Định dạng thời gian không hợp lệ.';
//--Hồ sơ lịch sử
$_LANG['js_languages']['start_date_format_error'] = 'Định dạng thời gian bắt đầu không hợp lệ.';
$_LANG['js_languages']['end_date_format_error'] = 'Định dạng thời hạn không hợp lệ.';
//--Recharge
$_LANG['js_languages']['money_empty_error'] = 'Vui lòng nhập số tiền trả mà bạn muốn trả.';
$_LANG['js_languages']['money_format_error'] = 'Định dạng số tiền không hợp lệ.';
?>