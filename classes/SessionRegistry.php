<?

class SessionRegistry implements Registry
{
    private static $instance = null ;
   
    private function __construct(){
        session_start();
    }

    public static function getInstance()
    {
        if( is_null(self::$instance) ){
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function set($key,$value)
    {   
        $_SESSION[__CLASS__][$key] = $value;
    }

    public function get($key){
        if($_SESSION[__CLASS__][$key] != "")
            return $_SESSION[__CLASS__][$key];
    }

}