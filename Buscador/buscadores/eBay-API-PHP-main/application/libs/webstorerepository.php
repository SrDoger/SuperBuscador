<?php 
class WebStoreRepository
{
    private $connection;
    
    public function __construct(PDO $connection = null)
    {
        $this->connection = $connection;
    }

    // Put all your other CRUD functions here to manage the items
    // in your inventory.
}