<?php

/**
 * The ECSHOP Control panel member the data integration plug-in management program language file
 * ============================================================================
 * All right reserved (C) 2005-2007 Beijing Yi Shang Interactive Technology
 * Development Ltd.
 * Web site: http://www.ecshop.com
 * ----------------------------------------------------------------------------
 * This is a free/open source software;it mean that you can modify, use and
 * republish the program code, on the premise of that your behavior is not for
 * commercial purposes.
 * ============================================================================
 * $Author: sxc_shop $
 * $Id: integrate.php 16320 2009-06-23 09:42:41Z sxc_shop $
*/

$_LANG['integrate_name'] ='Tên';
$_LANG['integrate_version'] ='Phiên bản';
$_LANG['integrate_author'] ='Tác giả';

/* Hint an information*/
$_LANG['update_success'] ='Plug-in tích hợp dữ liệu thành viên được cấu hình thành công.';
$_LANG['install_confirm'] ="Xin đừng chỉnh sửa plug-in tích hợp được sử dụng. \nDữ liệu thành viên sẽ bị xóa nếu bạn chuyển đổi plug-in tích hợp, và bao gồm:\n thông tin thành viên, chi tiết tài khoản thành viên, địa chỉ nhận của thành viên, thưởng thành viên, thông tin khác, giỏ hàng. \r\n Bạn có chắc cài đặt plug-in tính hợp dữ liệu thành viên?";
$_LANG['need_not_setup'] = 'Bạn không cần thiết lập khi bạn sử dụng hệ thống ECSHOP';
$_LANG['neednot_sync'] ='Bạn không cần hoạt động đồng bộ, bởi vì hệ thống thành viên ECSHOP hiện tại đang được sử dụng.';
$_LANG['different_domain'] ='Các đối tượng tích hợp và ECSHOP được thiết lập không cùng một tên miền.<Br/>Dữ liệu thành viên của bạn có thể chia sẻ cho hệ thống, nhưng không thể đăng nhập vào cùng một lúc.';
$_LANG['points_set'] = 'Đổi thiết lập';
$_LANG['view_user_list'] = 'Xem diễn đàn thành viên';
$_LANG['view_install_log'] = 'Xem cài đặt đăng nhập';

$_LANG['integrate_setup'] ='Thiết lập plug-in tích hợp dữ liệu thành viên.';
$_LANG['continue_sync'] ='Tiếp tục đồng bộ dữ liệu thành viên.';
$_LANG['go_userslist'] ='Quay lại danh sách thành viên.';
$_LANG['user_help'] = '<pre>
Cách sử dụng:
     1:Nếu người sử dụng cần tích hợp với các hệ thống khác, bạn có thể cài đặt plug-ins tích hợp phù hợp với phiên bản sử dụng.
     2:Nếu bạn cần thay thế hệ thống tích hợp người dùng, plug-ins có thể được cài trực tiếp để hoàn tất việc tích hợp,
     trong khi các plug-in tíhc hợp trước sẽ tự động bỏ cài đặt.
     3:Nếu không cần hệ thống tích hợp người sử dụng, chọn plug-ins cài đặt ecshop, bạn có thể gỡ bỏ tất cả các plugin tích hợp.
                           </pre>';
/* Xem nhật ký cài đặt */
$_LANG['lost_install_log'] = 'Không tìm thấy nhật ký cài đặt';
$_LANG['empty_install_log'] = 'Nhật ký cài đặt rỗng';

/* Mục ngôn ngữ các form liên quan */
$_LANG['db_notice'] = 'Nhấp chuột “<font color="#000000">Tiếp theo</font>”đến trung tâm tích hợp đồng bộ hóa dữ liệu với thành viên diễn đàn. Nếu bạn không cần đồng bộ hóa dữ liệu, hãy nhấp vào“<font color="#000000">Lưu thông tin cấu hình trực tiếp</font>”';

$_LANG['lable_db_host'] ='Tên máy chủ lưu trữ cơ sở dữ liệu:';
$_LANG['lable_db_name'] ='Tên cơ sở dữ liệu:';
$_LANG['lable_db_chartset'] ='Bảng mã cơ sở dữ liệu:';
$_LANG['lable_is_latin1'] = 'Mã hóa latin';
$_LANG['lable_db_user'] ='Số tài khoản cơ sở dữ liệu:';
$_LANG['lable_db_pass'] ='Mật khẩu cơ sở dữ liệu:';
$_LANG['lable_prefix'] ='Tiền tố dữ liệu:';
$_LANG['lable_url'] ='URL hoàn chỉnh của hệ thống tích hợp:';
/* Các form biến ngôn ngữ liên quan */
$_LANG['cookie_prefix']          = 'Tiền tố COOKIE:';
$_LANG['cookie_salt']          = 'Chuỗi mã hóa COOKIE：';
$_LANG['button_next'] = 'Tiếp theo';
$_LANG['button_force_save_config'] = 'Lưu thông tin cấu hình trực tiếp';
$_LANG['save_confirm'] = 'Bạn có chắc là bạn muốn lưu cấu hình thông tin trực tiếp?';
$_LANG['button_save_config'] = 'Lưu thông tin cấu hình';

$_LANG['error_db_msg'] = 'Địa chỉ cơ sở dữ liệu, người dùng hoặc mật khẩu không đúng';
$_LANG['error_db_exist'] = 'Cơ sở dữ liệu không tồn tại';
$_LANG['error_table_exist'] = 'Diễn đàn tích hợp của bảng dữ liệu quan trọng không tồn tại, bạn điền thông tin không chính xác';

$_LANG['notice_latin1'] = 'Tùy chọn này sẽ điền các thông báo lỗi có thể dẫn đến tên người dùng không phải latinh không thể sử dụng';
$_LANG['error_not_latin1'] = 'Cơ sở dữ liệu tích hợp mã hóa latinh không được phát hiện. Vui lòng chọn lại';
$_LANG['error_is_latin1'] = 'Cơ sở dữ liệu tích hợp phát hiện mã hóa latinh! Vui lòng chọn lại';
$_LANG['invalid_db_charset'] = 'Dữ liệu tích hợp phát hiện % s ký tự cài đặt, nhiều hơn % s ký tự cài đặt';
$_LANG['error_latin1'] = 'Bạn điền các thông tin tích hợp dẫn đến lỗi nghiêm trọng, không thể hoàn tất việc tích hợp';

/* Kiểm tra tên giống như người sử dụng */
$_LANG['conflict_username_check'] = 'Kiểm tra xem thành viên cửa hàng và Diễn đàn thành viên tích hợp có tên trùng lặp';
$_LANG['check_notice'] = 'Trang này sẽ phát hiện người sử dụng và Diễn đàn trung tâm xem người dùng có cùng tên, hãy nhấp vào "bắt đầu kiểm tra trước", cùng một tên cho khu trung tâm, xin vui lòng chọn một cách tiếp cận người dùng mặc định';
$_LANG['default_method'] = 'Hệ thống phát hiện người sử dụng có tên trùng lặp, xin vui lòng cho người sử dụng lựa chọn một cách mặc định để giải quyết';
$_LANG['shop_user_total'] = 'Có tổng cộng% s người dùng được kiểm tra';
$_LANG['lable_size'] = 'Số lượng người dùng mỗi lần kiểm tra';
$_LANG['start_check'] = 'Bắt đầu kiểm tra';
$_LANG['next'] = 'Tiếp theo';
$_LANG['checking'] = 'Đang kiểm tra...(Vui lòng đừng đóng trình duyệt của bạn)';
$_LANG['notice'] = 'Đã kiểm tra %s / %s ';
$_LANG['check_complete'] = 'Kiểm tra hoàn thành';

/* Xử lý các trùng tên người sử dụng */
$_LANG['conflict_username_modify'] = 'Danh sách người sử dụng';
$_LANG['modify_notice'] = 'Đây là danh sách của tất cả Người sử dụng cùng tên và cách giải quyết. Nếu bạn đã xác nhận tất cả các hoạt động, nhấn "Bắt đầu tích hợp", hoạt động thay đổi tên của người dùng cần phải bấm nút "Lưu trang để thay đổi" có hiệu lực.';
$_LANG['page_default_method'] = 'Cùng một tên người dùng trong các phương pháp mặc định';
$_LANG['lable_rename'] = 'Người dùng cộng với hậu tố';
$_LANG['lable_delete'] = 'Xoá người dùng cùng tên và dữ liệu có liên quan';
$_LANG['lable_ignore'] = 'Cùng tên người dùng được giữ lại trung tâm, người sử dụng diễn đàn với tên giống như cùng một người dùng';
$_LANG['short_rename'] = 'Đổi tên người dùng';
$_LANG['short_delete'] = 'Xóa người dùng';
$_LANG['short_ignore'] = 'Giữ lại tên người dùng';
$_LANG['user_name'] = 'Tên người dùng';
$_LANG['email'] = 'Email';
$_LANG['reg_date'] = 'Ngày đăng ký';
$_LANG['all_user'] = 'Tất cả người dùng';
$_LANG['error_user'] = 'Cần chọn các hoạt động của người sử dụng trung tâm mua';
$_LANG['rename_user'] = 'Người dùng cần phải được đổi tên giống trong cửa hàng';
$_LANG['delete_user'] = 'Yêu cầu xóa tên người dùng trong cửa hàng';
$_LANG['ignore_user'] = 'Người dùng cần phải giữ lại ở cửa hàng';

$_LANG['submit_modify'] = 'Lưu thay đổi trang này';
$_LANG['button_confirm_next'] = 'Bắt đầu tích hợp';


/* Đồng bộ hóa */
$_LANG['user_sync'] = 'Đồng bộ hóa dữ liệu vào diễn đàn, và hoàn thành tích hợp';
$_LANG['button_pre'] = 'Trước';
$_LANG['task_name'] = 'Tên nhiệm vụ';
$_LANG['task_status'] = 'Tình trạng nhiệm vụ';
$_LANG['task_del'] = '%s số người dùng bị xóa trong cửa hàng';
$_LANG['task_rename'] = '%s tên người dùng đổi tên';
$_LANG['task_sync'] = '%s người dùng cần phải đồng bộ hóa với diễn đàn';
$_LANG['task_save'] = 'Lưu thông tin cấu hình, và hoàn tất tích hợp';
$_LANG['task_uncomplete'] = 'Không kết thúc';
$_LANG['task_run'] = 'Thực hiện (%s / %s)';
$_LANG['task_complete'] = 'Đã hoàn thành';
$_LANG['start_task'] = 'Bắt đầu nhiệm vụ';
$_LANG['sync_status'] = 'Đã đồng bộ %s / %s';
$_LANG['sync_size'] = 'Số lượng người dùng tích hợp mỗi lần';
$_LANG['sync_ok'] = 'Xin chúc mừng. Tích hợp thành công';

$_LANG['save_ok'] = 'Lưu thành công';

/* Các điểm cần thiết */
$_LANG['no_points'] = 'Diễn đàn không phát hiện các điểm có thể được trao đổi';
$_LANG['bbs'] = 'bbs';
$_LANG['shop_pay_points'] = 'Điểm tiêu thụ';
$_LANG['shop_rank_points'] = 'Điểm cấp bậc';
$_LANG['add_rule'] = 'Thêm quy tắc';
$_LANG['modify'] = 'Chỉnh sửa';
$_LANG['rule_name'] = 'Quy tắc trao đổi';
$_LANG['rule_rate'] = 'Tỷ lệ trao đổi';

/* Mục ngôn ngữ JS */
$_LANG['js_languages']['no_host'] ='Tên máy chủ lưu trữ cơ sở dữ liệu không thể để trống.';
$_LANG['js_languages']['no_user'] ='Tài khoản cơ sở dữ liệu không thể để trống.';
$_LANG['js_languages']['no_name'] ='Tên cơ sở dữ liệu không thể để trống.';
$_LANG['js_languages']['no_integrate_url']='Vui lòng nhập URL đối tượng tích hợp đầy đủ.';
$_LANG['js_languages']['install_confirm']="Xin vui lòng không chạy tích hợp hệ thống đối tượng trong việc thay đổi ngẫu nhiên. \\nBạn có chắc cài đặt plug-in tích hợp dữ liệu thành viên?";
$_LANG['js_languages']['num_invalid'] ='Các bản ghi dữ liệu đồng bộ có con số không phải là số nguyên';
$_LANG['js_languages']['start_invalid'] ='Vị trí bắt đầu của dữ liệu đồng bộ không phải là số nguyên';
$_LANG['js_languages']['sync_confirm'] ="Dữ liệu thành viên đồng bộ sẽ xây dựng lại bảng dữ liệu đích. \\nVui lòng lưu trữ dữ liệu của bạn trước khi thực hiện đồng bộ hóa. \\nBạn có chắc bắt đầu đồng bộ dữ liệu thành viên?";

$_LANG['cookie_prefix_notice'] = 'Phiên bản UTF8 có tiền tố cookie là xnW_，phiên bản GB2312/GBK có tiền tố cookie là KD9_.';

$_LANG['js_languages']['no_method'] = 'Xin chọn một cách mặc định để thực hiện';

$_LANG['js_languages']['rate_not_null'] = 'Tỷ lệ không được để trống';
$_LANG['js_languages']['rate_not_int'] = 'Tỷ lệ không phải số nguyên';
$_LANG['js_languages']['rate_invailed'] = 'Tỷ lệ không hợp lệ';
$_LANG['js_languages']['user_importing'] = 'Đang import người dùng vào UCenter...';

/* Ngôn ngữ lựa chọn UCenter */
$_LANG['ucenter_tab_base'] = 'Cài đặt cơ bản';
$_LANG['ucenter_tab_show'] = 'Cài đặt hiển thị';
$_LANG['ucenter_lab_id'] = 'ID UCenter áp dụng:';
$_LANG['ucenter_lab_key'] = 'Điểm UCenter truyền thông:';
$_LANG['ucenter_lab_url'] = 'Địa chỉ truy cập UCenter:';
$_LANG['ucenter_lab_ip'] = 'Địa chỉ IP UCenter :';
$_LANG['ucenter_lab_connect'] = 'Kế nối UCenter:';
$_LANG['ucenter_lab_db_host'] = 'Máy chủ cơ sở dữ liệu UCenter:';
$_LANG['ucenter_lab_db_user'] = 'Tên cơ sở dữ liệu người dùng UCenter:';
$_LANG['ucenter_lab_db_pass'] = 'Mật khẩu cơ sở dữ liệu Center:';
$_LANG['ucenter_lab_db_name'] = 'Tên cơ sở dữ liệu UCenter:';
$_LANG['ucenter_lab_db_pre'] = 'Tiền tố bảng UCenter:';
$_LANG['ucenter_lab_tag_number'] = 'Số lượng Tags hiển thị:';
$_LANG['ucenter_lab_credit_0'] = 'Tên điểm cấp bậc:';
$_LANG['ucenter_lab_credit_1'] = 'Tên điểm tiêu dùng:';
$_LANG['ucenter_opt_database'] = 'Hình thức cơ sở dữ liệu';
$_LANG['ucenter_opt_interface'] = 'Chế độ giao diện';

$_LANG['ucenter_notice_id'] = 'Giá trị cho các cửa hàng hiện tại ứng dụng ID UCenter, xin vui lòng không thay đổi';
$_LANG['ucenter_notice_key'] = 'Thông tin chính được sử dụng để chuyển thông tin giữa UCenter và ECShop mã hóa, có thể chứa bất kỳ chữ cái và số, thiết lập chính xác trong cùng UCenter và kết nối ECShop để bảo đảm thông tin liên lạc bình thường giữa hai hệ thống';
$_LANG['ucenter_notice_url'] = 'Giá trị sau khi bạn hoàn tất cài đặt UCenter sẽ được khởi tạo tại địa chỉ của bạn hoặc thư mục UCenter thay đổi tùy trường hợp, thay đổi này thường không thay đổi: http://www.sitename.com/uc_server (tận cùng không có"/")';
$_LANG['ucenter_notice_ip'] = 'Nếu máy chủ của bạn không thể truy cập thông qua tên miền UCenter, có thể nhập địa chỉ IP của máy chủ UCenter';
$_LANG['ucenter_notice_connect'] = 'Tùy thuộc vào môi trường mạng máy chủ để chọn phương pháp kết nối thích hợp';
$_LANG['ucenter_notice_db_host'] = 'Có thể local cũng có thể là một máy chủ cơ sở dữ liệu từ xa, nếu thay vì mặc định cổng MySQL là 3306, xin vui lòng điền vào mẫu sau: 127.0.0.1:6033';
$_LANG['uc_notice_ip'] = 'Một số nỗ lực để kết nối các quy trình có vấn đề, vui lòng điền vào địa chỉ IP của máy chủ, nếu bạn có UC và ECShop đặt trên máy chủ đó, chúng tôi khuyên bạn hãy thử điền vào 127.0.0.1';

$_LANG['uc_lab_url'] = 'URL của UCenter:';
$_LANG['uc_lab_pass'] = 'Mật khẩu người sáng lập UCenter:';
$_LANG['uc_lab_ip'] = 'IP của UCenter:';

$_LANG['uc_msg_verify_failur'] = 'Chứng thực không thành công';
$_LANG['uc_msg_password_wrong'] = 'Mật khẩu người sáng lập có lỗi';
$_LANG['uc_msg_data_error'] = 'Lỗi cài đặt dữ liệu';

$_LANG['ucenter_import_username'] = 'Nhập dữ liệu thành viên vào UCenter';
$_LANG['uc_import_notice'] = 'Nhắc nhở: các dữ liệu thành viên trước khi nhập vào phải đình chỉ tất cả các ứng dụng (như là Discuz!, SupeSite, v.v..)';
$_LANG['uc_members_merge'] = 'Phương pháp tích hợp thành viên';
$_LANG['user_startid_intro'] = '<p>ID thành viên cho khởi đầu này %s. Chằng hạn như ID ban đầu cho 888 sẽ trở thành thành viên của %s + 888 giá trị.</p>';
$_LANG['uc_members_merge_way1'] = 'UC sẽ làm việc với cùng tên người dùng và cùng một mật khẩu của người dùng tích hợp';
$_LANG['uc_members_merge_way2'] = 'UC sẽ làm việc với cùng tên người dùng và mật khẩu của người dùng không import của người dùng';
$_LANG['start_import'] = 'Bắt đầu import';
$_LANG['import_user_success'] = 'Dữ liệu thành viên import thành công vào UCenter';
$_LANG['uc_points'] = 'UCenter thiết lập các điểm cần thiết trong việc quản lý nền UCenter';
$_LANG['uc_set_credits'] = 'Thiết lập điểm trao đổi chương trình';
$_LANG['uc_client_not_exists'] = 'thư mục uc_client không tồn tại, hãy tải lên thư mục uc_client trong thư mục gốc và sau đó tích hợp';
$_LANG['uc_client_not_write'] = 'thư mục uc_client/data không cho ghi, vui lòng thiết lập uc_client/data cho phép ghi dữ liệu với 777';
$_LANG['uc_lang']['credits'][0][0] = 'Điểm cấp bậc';
$_LANG['uc_lang']['credits'][0][1] = '';
$_LANG['uc_lang']['credits'][1][0] = 'Điểm tiêu thụ';
$_LANG['uc_lang']['credits'][1][1] = '';
$_LANG['uc_lang']['exchange'] = 'Trao đổi UCenter';

?>