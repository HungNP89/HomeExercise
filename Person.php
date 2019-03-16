<?php
/**
 * 
 */
abstract class Person
{
    private $firstName;
    private $lastName;
    private $yearOfBirth;
    private $Age;

    public function setFname($value)
    {
        $this->firstName=$value;
    }
    public function setLname($value)
    {
        $this->lastName=$value;
    }
    public function setYOB($value)
    {
        $this->yearOfBirth=$value;
    }
    public function getFname()
    {
        return $this->firstName;
    }
    public function getLname()
    {
        return $this->lastName;
    }
    public function getYOB()
    {
        return $this->yearOfBirth;
    }
    public function setAge($value)
    {
        $this->Age=$value;
    }
    public function getAge()
    {
        return date('Y')-$this->Age;
    }
}

?>
