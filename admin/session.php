<?php

class Session {

    // Khởi tạo session
    public static function init() {
        if (version_compare(phpversion(), '5.4.0', '<')) {
            if (session_id() == '') {
                session_start();
            }
        } else {
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }
        }
    }

    // Đặt giá trị session
    public static function set($key, $val) {
        $_SESSION[$key] = $val;
    }

    // Lấy giá trị session
    public static function get($key) {
        if (isset($_SESSION[$key])) {
            return $_SESSION[$key];
        } else {
            return false;
        }
    }

    // Kiểm tra session có tồn tại không
    public static function checkSession() {
        self::init();
        if (self::get("login") == false) {
            self::destroy();
            header("Location:login.php");
        }
    }

    // Kiểm tra đăng nhập
    public static function checkLogin() {
        self::init();
        if (self::get("login") == true) {
            header("Location:index.php");
        }
    }

    // Hủy session
    public static function destroy() {
        session_destroy();
        header("Location:login.php");
    }
}
?>
