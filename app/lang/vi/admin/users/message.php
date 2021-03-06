<?php

return array(

    'accepted'                  => 'Bạn đã xác nhận tài sản này thành công.',
    'declined'                  => 'Bạn đã từ chối tài sản này thành công.',
    'user_exists'               => 'Người dùng thật sự tồn tại!',
    'user_not_found'            => 'Người dùng [:id] không tồn tại.',
    'user_login_required'       => 'Trường đăng nhập thì bắt buộc',
    'user_password_required'    => 'Mật khẩu thì bắt buộc.',
    'insufficient_permissions'  => 'Không có đủ quyền.',
    'user_deleted_warning'      => 'Người dùng này đã bị xóa. Bạn sẽ phải phục hồi người dùng này để chỉnh sửa nó hoặc khởi gán nó đến tài sản mới.',
    'ldap_not_configured'        => 'Tích hợp LDAP thì chưa được cấu hình cho cài đặt này.',


    'success' => array(
        'create'    => 'Người dùng đã được tạo thành công.',
        'update'    => 'Người dùng đã được cập nhật thành công.',
        'delete'    => 'Người dùng đã được xóa thành công.',
        'ban'       => 'Người dùng đã bị cấm thành công.',
        'unban'     => 'Phục hồi người dùng bị cấm thành công.',
        'suspend'   => 'Đã tạm ngưng người dùng thành công.',
        'unsuspend' => 'Đã phục hồi người dùng bị tạm ngưng thành công.',
        'restored'  => 'Người dùng đã được phục hồi thành công.',
        'import'    => 'Nhập danh sách người dùng thành công.',
    ),

    'error' => array(
        'create' => 'Có vấn đề xảy ra khi tạo người dùng. Xin thử lại lần nữa.',
        'update' => 'Có vấn đề xảy ra khi cập nhật người dùng. Xin thử lại lần nữa.',
        'delete' => 'Có vấn đề xảy ra khi xóa người dùng. Xin thử lại lần nữa.',
        'unsuspend' => 'Có vấn đề xảy ra khi phục hồi người dùng bị tạm ngưng. Xin thử lại.',
        'import'    => 'Có vấn đề xảy ra khi nhập danh sách người dùng. Xin thử lại.',
        'asset_already_accepted' => 'Tài sản này đã được chấp thuận.',
        'accept_or_decline' => 'Bạn phải chấp nhận hoặc từ chối tài sản này.',
        'ldap_could_not_connect' => 'Không thể kết nối đến máy chủ LDAP. Xin vui lòng kiểm tra lại cấu hình máy chủ LDAP của bạn ở trong tập tin cấu hình LDAP. <br>Lỗi từ máy chủ LDAP:',
        'ldap_could_not_bind' => 'Không thể liên kết đến máy chủ LDAP. Xin vui lòng kiểm tra lại cấu hình máy chủ LDAP của bạn ở trong tập tin cấu hình LDAP. <br>Lỗi từ máy chủ LDAP: ',
        'ldap_could_not_search' => 'Không thể tìm thấy máy chủ LDAP. Xin vui lòng kiểm tra cấu hình cài đặt máy chủ LDAP của bạn ở trong tập tin cấu hình LDAP. <br>Lỗi từ máy chủ LDAP:',
        'ldap_could_not_get_entries' => 'Không thể lấy các mục từ máy chủ LDAP. Xin vui lòng kiểm tra lại cấu hình máy chủ LDAP của bạn ở trong tập tin cấu hình LDAP. <br>Lỗi từ máy chủ LDAP:',
    ),

    'deletefile' => array(
        'error'   => 'Tập tin không xóa được. Xin vui lòng thử lại.',
        'success' => 'Tập tin đã xóa thành công.',
    ),

    'upload' => array(
        'error'   => 'Tập tin không tải lên được. Xin vui lòng thử lại.',
        'success' => 'Tập tin đã tải lên thành công.',
        'nofiles' => 'Bạn đã không chọn tập tin nào để tải lên',
        'invalidfiles' => 'Một hoặc nhiều tập tin của bạn có dung lượng quá lớn hoặc loại tập tin không cho phép tải lên. Chỉ cho phép những loại tập tin png, gif, jpg, doc, docx, pdf, and txt.',
    ),

);
