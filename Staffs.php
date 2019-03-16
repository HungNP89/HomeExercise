<?php
/**
 * 
 */
class Staffs extends Person
{
    public $vacancy=array();
    public function getvacancy()
    {
        return $this->vacancy;
    }
    public function setvacancy($vacancy)
    {
        $vacancy=array('Cleaner','Caretaker');
        $this->vacancy=$vacancy;
    }
}
?>