<?php
require PROJECT_ROOT . '/application/libs/webstorerepository.php';
require PROJECT_ROOT . '/application/libs/eBayrepository.php';

class UnitOfWork
{
    private $myDatabaseConnection;
    private $webstore;
    private $eBay;

    public function __construct()
    {
         // set the (optional) options of the PDO connection. in this case, we set the fetch mode to
        // "objects", which means all results will be objects, like this: $result->user_name !
        // For example, fetch mode FETCH_ASSOC would return results like this: $result["user_name] !
        // @see http://www.php.net/manual/en/pdostatement.fetch.php
        $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);

        // generate a database connection, using the PDO connector
        // @see http://net.tutsplus.com/tutorials/php/why-you-should-be-using-phps-pdo-for-database-access/
        //$this->myDatabaseConnection = new PDO(DBSTORE_DSN, DBSTORE_USER, DBSTORE_PASS, $options);
        $this->webstore = new WebStoreRepository($this->myDatabaseConnection);
        $this->eBay = new eBayRepository(AUTHORIZATION);
     }

     public function WebStoreRep()
     {
          return $this->webstore;
     }

     public function eBayRep()
     {
         return $this->eBay;
     }

     public function __destruct()
     {
         $myDatabaseConnection = null;
     }
}