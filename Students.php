<?php
/**
 * 
 */
class Students extends Person
{
    function __construct($fname=null , $lname=null,$yob=null)
    {
        $this->setFname($fname);
        $this->setLname($lname);
        $this->setYOB($yob);
    }
    public $creditPoints;
    public $courses=array();
    public function getCourses()
    {
        return $this->courses;
    }
    public function setCourses($courses)
    {
        $courses=array('PHP programming','Calculus');
        $this->courses=$courses;
    }
    public function getPoints()
    {
        return $this->creditPoints;
    }
    public function setPoints($creditPoints)
    {
        $this->creditPoints=$creditPoints;
    }
}
?>