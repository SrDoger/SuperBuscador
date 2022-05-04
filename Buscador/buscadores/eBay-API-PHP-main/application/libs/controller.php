<?php
require PROJECT_ROOT . '/application/libs/unitofwork.php';

// Base controller class. Don't use this directly. All your controllers should
// inherit from this class.
class Controller
{
    protected $uow = null;

    /**
     * Whenever a controller is created, open a database connection too. 
     * The idea behind is to have ONE connection
     * that can be used by multiple models 
     * (there are frameworks that open one connection per model).
     */
    function __construct(UnitOfWork $unitOfWork)
    {
        $this->uow = $unitOfWork;
    }

    // Load the model with the given name.
    public function loadModel($model_name)
    {
        require '../application/models/' . strtolower($model_name) . '.php';
        // return new model (and pass the database connection to the model)
        return new $model_name($this->uob);
    }
}
