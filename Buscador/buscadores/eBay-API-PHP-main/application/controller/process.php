<?php
require PROJECT_ROOT . '/application/models/itemSpecific.php';
// Class Process
// Controller to perform all action requests 
// and database updates
class Process extends Controller
{
    function __construct(UnitOfWork $unitOfWork)
    {
        parent::__construct($unitOfWork);
    }

    // Return array of ItemSpecifics
    public function getItemSpecifics(int $itemRID, int $catID)
    {
        $itemSpec = [];
        $itemAspect = $this->uow->eBayRep()->getItemAspects($catID);
        if (count($itemAspect->aspects) > 0)
        {
            foreach($itemAspect->aspects as $aspect)
            {
                // Get the user value for the current aspect
                $key = $aspect->localizedAspectName;
                $value = NULL;
                // foreach($specValues as $spec)
                // {
                //     if ($spec['SpecKey'] == key)
                //     {
                //         $value = $spec['SpecValue'];
                //         break;
                //     }
                // }
                $itemSpec[] = new ItemSpecific($itemRID, $catID, $aspect, $value);
            }
        }
        return $itemSpec;
    }

    // Return array of key, display, and value.
    // spec is an array of ItemSpecific objects;
    public function getDisplaySpecifics(int $itemRID, int $catID, $spec = NULL)
    {
        $display = [];
        $itemSpecifics = is_null($spec) ? $this->getItemSpecifics($itemRID, $catID) : $spec;
        $count = 0;
        foreach ($itemSpecifics as $specific)
        {
            $display[] = array('key' => $specific->specificKey, 'display'=>$specific->displayKey, 'value'=>$specific->specificValue);
            $count+=1;
        }
        //Print out the array in a JSON format.
        header('Content-Type: application/json');
        echo json_encode($display);        
    }

    public function loadSpecifics(int $item, int $category)
    {
        $itemRID = $item;
        $catID = $category;
        $itemSpecifics = $this->getItemSpecifics($itemRID, $catID);
        require PROJECT_ROOT . '/application/views/specificsBody.php';
    }

    // ACTION: for ajax to get all categories that contain term.
    public function searchCategories()
    {
        if (!isset($_GET['term']))
        {
            return;     
        }
        $term = $_GET['term'];
        $response = $this->uow->eBayRep()->searchCategories($term);
        //Print out the array in a JSON format.
        header('Content-Type: application/json');
        echo json_encode($response);        
    }
}
