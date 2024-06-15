<?php
interface Employee{
    function getSalary();
    function setSalary($salary);
    function getRole();
}
class Manager implements Employee {
    private $salary, $employees=array();
    function addEmployee(Employee $employee){
        $this->employees+=array($employee);
    }
    function getEmployees(){
        return $this->employees;
    }
    function getSalary()
    {
        return $this->salary;
    }
    function setSalary($salary)
    {
        $this->salary=$salary;
    }
    function getRole()
    {
        return static::class;
    }
}
class Developer implements Employee{
    private $salary, $programmingLanguage;
    function setProgrammingLanguage($programmingLanguage){
        $this->programmingLanguage=$programmingLanguage;
    }
    function getProgrammingLanguage(){
        return $this->programmingLanguage;
    }
    function getSalary()
    {
        return $this->salary;
    }
    function setSalary($salary)
    {
        $this->salary=$salary;
    }
    function getRole()
    {
        return static::class;
    }
}
class Designer implements Employee{
    private $salary, $designingTool;
    function setDesigningTool($designingTool){
        $this->designingTool=$designingTool;
    }
    function getDesigningTool(){
        return $this->designingTool;
    }
    function getSalary()
    {
        return $this->salary;
    }
    function setSalary($salary)
    {
        $this->salary=$salary;
    }
    function getRole()
    {
        return static::class;
    }
}
$designer = new Designer();
$designer->setSalary(5000);
$designer->setDesigningTool("Houdini");
echo $designer->getRole()."\n";

$manager = new Manager();
$manager->addEmployee($designer);
print_r($manager->getEmployees());