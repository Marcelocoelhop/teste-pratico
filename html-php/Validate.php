<?php 

class Validate {
    public static function name($name)
    {
        return $name != null;
    }

    public static function email($email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }

    public static function password($password)
    {
        return strlen($password) >= 8;
    }
}

?>