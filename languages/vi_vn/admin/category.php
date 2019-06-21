<?php

/**
 * ECSHOP Commodity category management language file
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
 * $Id: category.php 15885 2009-04-30 05:49:32Z sxc_shop $
*/

/* Commodity category field information */
$_LANG['cat_id'] = 'ID';
$_LANG['cat_name'] = 'Tên';
$_LANG['isleaf'] = 'Không cho phép';
$_LANG['noleaf'] = 'Cho phép';
$_LANG['keywords'] = 'Từ khóa';
$_LANG['cat_desc'] = 'Mô tả';
$_LANG['parent_id'] = 'Danh mục cha';
$_LANG['sort_order'] = 'Phân loại';
$_LANG['measure_unit'] = 'Đơn vị số lượng';
$_LANG['delete_info'] = 'Xóa đã chọn';
$_LANG['category_edit'] = 'Sửa danh mục';
$_LANG['move_goods'] = 'Di chuyển sản phẩm';
$_LANG['cat_top'] = 'Danh mục top';
$_LANG['show_in_nav'] = 'Hiển thị trong menu';
$_LANG['cat_style'] = 'Kiểu danh mục tài liệu';
$_LANG['is_show'] = 'Hiển thị';
$_LANG['show_in_index'] = 'Đưa lên trang chủ';
$_LANG['notice_show_in_index'] = 'Cài đặt này đưa sản phẩm lên mục Sản phẩm bán chạy, Sản phẩm mới, Sản phẩm hot trên trang chủ.';
$_LANG['goods_number'] = 'Số lượng hàng hóa';
$_LANG['grade'] = 'Mức giá của số lượng';
$_LANG['notice_grade'] = 'Tùy chọn này thể hiện mức giá thấp nhất và cao nhất của danh mục, bằng 0 là không chia mức giá, cho phép tối đa 10 mức giá.';
$_LANG['short_grade'] = 'Mức giá';

$_LANG['nav'] = 'Menu';
$_LANG['index_new'] = 'Mới nhất';
$_LANG['index_best'] = 'Đặc biệt';
$_LANG['index_hot'] = 'Hot';

$_LANG['back_list'] = 'Quay về danh mục.';
$_LANG['continue_add'] = 'Tiếp tục thêm danh mục.';

$_LANG['notice_style'] = 'Bạn có thể bố trí sản phẩm theo phong cách css riêng. Nếu như file css ở mục themes thì gõ ：themes/style.css';

/* Prompting message */
$_LANG['catname_empty'] = 'Xin vui lòng nhập tên danh mục!';
$_LANG['catname_exist'] = 'Tên danh mục đã tồn tại.';
$_LANG["parent_isleaf"] = 'Các danh mục không phải là danh mục cuối!';
$_LANG["cat_isleaf"] = 'Danh mục không thể xóa, vì nó là không phải danh mục cuối hay có sản phẩm bên trong.';
$_LANG["cat_noleaf"] ='Danh mục này có danh mục con, bạn không thể sửa đổi danh mục thành danh mục cuối!';
$_LANG["is_leaf_error"] ='Danh mục cha đang chọn không phải là danh mục hoặc danh mục con của danh mục hiện tại!';
$_LANG['grade_error'] = 'Số lượng mức giá chỉ có thể là một số nguyên trong khoảng 0-10';

$_LANG['catadd_succed'] = 'Thêm danh mục thành công!';
$_LANG['catedit_succed'] = 'Chỉnh sửa danh mục thành công!';
$_LANG['catdrop_succed'] = 'Xóa danh mục thành công!';
$_LANG['catremove_succed'] = 'Di chuyển danh mục thành công!';
$_LANG['move_cat_success'] = 'Di chuyển danh mục thành công!';

$_LANG['cat_move_desc'] = 'Di chuyển danh mục nào?';
$_LANG['select_source_cat'] = 'Vui lòng chọn danh mục bạn muốn di chuyển.';
$_LANG['select_target_cat'] = 'Vui lòng chọn danh mục đích.';
$_LANG['source_cat'] = 'Từ danh mục';
$_LANG['target_cat'] = 'di chuyển đến';
$_LANG['start_move_cat'] = 'Submit';
$_LANG['cat_move_notic'] = 'Đang thêm sản phẩm hoặc quản lý sản phẩm, nếu muốn thay đổi sản phẩm trong danh mục, bạn có thể dùng chức năng này quản lý sản phẩm.';

$_LANG['cat_move_empty'] = 'Bạn chưa chọn đúng danh mục!';

$_LANG['sel_goods_type'] = 'Xin chọn danh mục';
$_LANG['sel_filter_attr'] = 'Xin chọn tính năng sắp xếp';
$_LANG['filter_attr'] = 'Tính năng sắp xếp';
$_LANG['filter_attr_notic'] = 'Tính năng sắp xếp dùng để phân loại trước việc lựa chọn hàng hóa';
$_LANG['filter_attr_not_repeated'] = 'Tính năng sắp xếp không được trùng lặp.';

/*JS language item*/
$_LANG['js_languages']['catname_empty'] = 'Tên danh mục không được bỏ trống!';
$_LANG['js_languages']['unit_empyt'] = 'Đơn vị số lượng không được bỏ trống!';
$_LANG['js_languages']['is_leafcat'] ="Bạn đã chọn danh mục là một danh mục cuối. \\n Danh mục cha không được là danh mục cuối.";
$_LANG['js_languages']['not_leafcat'] =" Bạn đã chọn danh mục không thể là một danh mục lớp dưới cùng. \\nDanh mục chuyển giao sản phẩm chỉ có thể được hoạt động giữa các danh mục lớp dưới cùng.";
$_LANG['js_languages']['filter_attr_not_repeated'] = 'Thuộc tính sắp xếp không được trùng lặp.';
$_LANG['js_languages']['filter_attr_not_selected'] = 'Vui lòng chọn thuộc tính sắp xếp';

?>