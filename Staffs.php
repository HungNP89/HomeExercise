<?php
/**
 * 
 */
class Staffs extends Person
{
    function __construct($fname=null , $lname=null,$yob=null)
    {
        $this->setFname($fname);
        $this->setLname($lname);
        $this->setYOB($yob);
    }
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