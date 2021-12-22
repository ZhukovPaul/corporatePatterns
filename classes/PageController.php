<?

abstract class PageController
{
     
    abstract public function process();

    public function __construct()
    {
        $this->request = new Request();    
        $this->registry = SessionRegistry::getInstance();    
        $this->conf = new Conf();
        $confDB = $this->conf->get("db");
        $this->db = new DB($confDB["host"],$confDB["dbName"],$confDB["user"],$confDB["pass"]); 
    }

    abstract public function init();

    public function render($resource = null,  $request = null)
    {   
        $conf = new Conf();
        if(!is_null($resource)){
            include $resource;
        }
    }

    public function getRequest()
    {
        # code...
    }
}