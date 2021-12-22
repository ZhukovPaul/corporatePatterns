<?

class DB
{
    private $user = "";
    private $pass = "";
    private $host = "";
    private $dbName = "";
    private $dbh ; 


    public function __construct($host, $dbName, $user, $pass)
    {
        $this->host = $host;
        $this->dbName = $dbName;
        $this->user = $user;
        $this->pass = $pass;
        try {
            $this->dbh = new PDO("mysql:host={$this->host};dbname=$this->dbName", $this->user, $this->pass);
        }catch(PDOException $e){
            echo "Exception {$e}<br>";
        }
    }
    
    public function execute(String $query = null) 
    {
        $sth = $this->dbh->prepare($query);

        $sth->execute();
        
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function insert(String $query = null){
        $sth = $this->dbh->prepare($query);

        $sth->execute();
        return $this->dbh->lastInsertId();
       
    }


}