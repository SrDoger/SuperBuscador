<?php
// Simplified itemSpecific object returned by eBay. Contains elements to 
// populate UI.
class ItemSpecific
{
    public $itemRID;
    public $catID;
    public $specificKey;
    public $specificValue;
    public $displayKey;
    public $isRequired;
    public $isMulti;
    public $isFreeForm;
    public $dataType;
    public $userPrompt;
    public $maxLength;
    public $suggestedValues;

    public function __construct($rid, $catID, $specific, $val)
    {
        $this->itemRID = $rid;
        $this->catID = $catID;
        $this->specificKey = $specific->localizedAspectName;
        $this->specificValue = $val;
        $this->isRequired = $specific->aspectConstraint->aspectRequired;
        $this->isMulti = $specific->aspectConstraint->itemToAspectCardinality == 'MULTI';
        $this->isFreeForm = $specific->aspectConstraint->aspectMode == 'FREE_TEXT';
        $this->dataType = $specific->aspectConstraint->aspectDataType;  //DATE,NUMBER,STRING,STRING_ARRAY
        $usage = ucwords(strtolower($specific->aspectConstraint->aspectUsage));
        if ($specific->aspectConstraint->aspectRequired)
        {
            $usage = 'REQUIRED';
        }
        $this->displayKey = $specific->localizedAspectName . " : (" . $usage . ")";
        if (property_exists($specific->aspectConstraint, 'aspectMaxLength'))
        {
            $this->maxLength = $specific->aspectConstraint->aspectMaxLength;
        }
        $this->suggestedValues = [];
        // Create a user prompt
        if (property_exists($specific, 'aspectValues') && count($specific->aspectValues) > 0)
        {
            // Get suggested values if we have any
            foreach ($specific->aspectValues as $choice) {
                array_push($this->suggestedValues, $choice->localizedValue);
            }
            if ($this->isMulti) {
                $this->userPrompt = 'Select all that apply';
            } 
            elseif ($this->isFreeForm) {
                $this->userPrompt = 'Enter a value or select from list';
            }
            else {
                $this->userPrompt = 'Select a value from the list';
            }         
        }
        else 
        {
            if ($this->dataType == 'DATE') {
                $this->userPrompt = 'Enter a date';
            }
            elseif ($this->dataType == 'NUMBER') {
                $this->userPrompt = 'Enter numbers only';
            }
            else {
                $this->userPrompt = 'Enter value';
                if ($this->maxLength > 0)
                {
                    $this->userPrompt = $this->userPrompt . " (Max chars: " . $this->maxLength . ")";
                }
            }
        }
    }
}
