<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

echo '<h2>Students</h2>';
$student1= new Students();
$student1->setFname('Kakeru');
$student1->setLname('Takegi');
$student1->setYOB('1998');
$student1->setAge('1998');
$student1->setCourses('$courses');
$student1->setPoints('10');
echo 'Firstname : '.$student1->getFname();
echo '<br>Lastname : '.$student1->getLname();
echo '<br>Year of birth : '.$student1->getYOB();
echo '<br>Age : '.$student1->getAge();
echo '<br>Courses : '.$student1->getCourses()[0];
echo '<br>Credit : '.$student1->getPoints();

echo '<h2>Teachers</h2>';
$teacher = new Teachers();
$teacher->setFname('Rimura');
$teacher->setLname('Tempest');
$teacher->setYOB('1980');
$teacher->setAge('1980');
$teacher->setsubjects('$subjects');
$teacher->setdepartment('Professional');
echo 'Firstname : '.$teacher->getFname();
echo '<br>Lastname : '.$teacher->getLname();
echo '<br>Year of birth : '.$teacher->getYOB();
echo '<br>Age :'.$teacher->getAge();
echo '<br>Courses : '.$teacher->getsubjects()[1];
echo '<br>Credit : '.$teacher->getdepartment();

echo '<h2>Staffs</h2>';
echo '<p>1.</p>';
$staff1 = new Staffs();
$staff1->setFname('????');
$staff1->setLname('???');
$staff1->setYOB('1995');
$staff1->setAge('1995');
$staff1->setvacancy('$vacancy');
echo 'Firstname : '.$staff1->getFname();
echo '<br>Lastname : '.$staff1->getLname();
echo '<br>Year of birth : '.$staff1->getYOB();
echo '<br>Age :'.$staff1->getAge();
echo '<br>Vacancy : '.$staff1->getvacancy()[0];

echo '<p>2.</p>';
$staff2 = new Staffs();
$staff2->setFname('??????');
$staff2->setLname('????');
$staff2->setYOB('1985');
$staff2->setAge('1985');
$staff2->setvacancy('$vacancy');
echo 'Firstname : '.$staff2->getFname();
echo '<br>Lastname : '.$staff2->getLname();
echo '<br>Year of birth : '.$staff2->getYOB();
echo '<br>Age :'.$staff2->getAge();
echo '<br>Vacancy : '.$staff2->getvacancy()[1];

?>