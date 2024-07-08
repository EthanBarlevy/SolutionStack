<?php
    /** -------------------------------------------
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
    private $Age = 0;
    public $myInt = 0;

    public function HaveBirthday(){
        $this->Age = $this->Age + 1;
        return $this->Age;
    }
}
?>