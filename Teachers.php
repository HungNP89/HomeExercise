<?php
/**
 * 
 */
class Teachers extends Person
{
    public $department;
    public $subjects=array();
    public function getsubjects()
    {
        return $this->subjects;
    }
    public function setsubjects($subjects)
    {
        $subjects=array('PHP programming','Calculus');
        $this->subjects=$subjects;
    }
    public function getdepartment()
    {
        return $this->department;
    }
    public function setdepartment($department)
    {
        $this->department=$department;
    }
}
?>