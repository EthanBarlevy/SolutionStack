<?php
    /* --------------------------------------------
     * sample person class 
     * 
     * descrpition:
     * omg its oop
     * 
     * @version 1.0
     * @author new dude
     * --------------------------------------------
     */

class PersonClass
{
    public $FirstName;
    public $LastName;
    private $Age;
    public $myInt;

    public function HaveBirthday(){
        $this->Age = $this->Age + 1;
        return $this->Age;
    }
}
?>