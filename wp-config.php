<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define('DB_NAME', 'handmad');

/** Username của database */
define('DB_USER', 'admin');

/** Mật khẩu của database */
define('DB_PASSWORD', 'admin');

/** Hostname của database */
define('DB_HOST', 'localhost');

/** Database charset sử dụng để tạo bảng database. */
define('DB_CHARSET', 'utf8mb4');

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'jrUvVr2yIEP(P#hgTijwus6YuPK7Fj_3T/5#nYFb-4F0=0/.a6@u`Dj&R44`jv>}');
define('SECURE_AUTH_KEY',  '~/>4cW^,??mXDQhW_l6tNOH#U9N:A!1Sxw#od($sJ#CLe *Tyn~DT7HEKdB*qn ,');
define('LOGGED_IN_KEY',    '$5n4HTT1aV>81uGHj$/bs>t<ZGWZ*h_[b/&PV[S|hDgJ,,VK$v.puE}fg|Dt@<)f');
define('NONCE_KEY',        'I^`k/L0QH;C /b1SYau_!,[x&Nu;3-f>+M&]l3?oaDXm^$-O@Gw}nL%}A.ku@9%k');
define('AUTH_SALT',        'T(s5W 4LRm]xi[s!AM-%-#*mS_*y5K=pnGTar(X)fStl+1ZFifv-Mq!G*v|0kx]Z');
define('SECURE_AUTH_SALT', 'FVY6O]96xx;1|y/_OlQ||avHwF*4POzhvQ4{u(5j(v,bkm/|g)cb^qBAqK4,MG,>');
define('LOGGED_IN_SALT',   'XR%M8u+3k;79dkqLeSZh+ ,@;Q}%M3PBa(%}del}CMvz_vpM,s:mj[X{3rhXCr_-');
define('NONCE_SALT',       'zEYSs.4890R2l.SsE>5Df0UZ1|si5zMkA; {nIy1]hgyzox0h7tvzX4)2m&:{>x%');

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
define('WP_MEMORY_LIMIT', '3000M');
