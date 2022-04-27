<?php

// Controller to display web pages. Form posts and gets are done
// by controller Process.php
class Home extends Controller
{
    function __construct(UnitOfWork $unitOfWork)
    {
        parent::__construct($unitOfWork);
    }

    public function index()
    {
        //$items = $this->uow->WebStoreRep()->findAll();
        require PROJECT_ROOT . '/application/views/home/index.php';
    }

    public function tokens()
    {
        //$items = $this->uow->WebStoreRep()->findAll();
        require PROJECT_ROOT . '/application/views/home/tokens.php';
    }

    public function categories()
    {
        //$items = $this->uow->WebStoreRep()->findAll();
        require PROJECT_ROOT . '/application/views/home/categories.php';
    }

    public function specifics()
    {
        // For the demo, we will just hardcode a category search term 
        // to obtain a list of categories to populate our dropdown.
        $categories = $this->uow->eBayRep()->searchCategories("calculators");
        require PROJECT_ROOT . '/application/views/home/specifics.php';
    }

}
