<?php

interface UserInterface {

    public function getName();

    public function setName();

    public function getPassword();

    public function setPassword();

    public function saveData();
}

interface AdminInterface extends UserInterface {

    public function delete();
}

class UserAdmin implements User {

    public $name;
    private $age;

    public function __construct($nameValue, $ageValue) {
        $this->name = $nameValue;
        $this->age = $ageValue;
    }

    public function saveData() {
        var_dump($this->age . ' ' . $this->name);
    }

    public function getName() {
        return $this->name;
    }

    public function setName($nameValue) {
        $this->name = $nameValue;
    }

    public function getPassword() {
        
    }

    public function setPassword() {
        
    }

    public function delete() {
        
    }

}

interface GuestInterface extends UserInterface {

    public function pay();
}

class UserGuest implements GuestInterface {

    public $name;
    private $age;

    public function __construct($nameValue, $ageValue) {
        $this->name = $nameValue;
        $this->age = $ageValue;
    }

    public function saveData() {
        var_dump($this->age . ' ' . $this->name);
    }

    public function getName() {
        return $this->name;
    }

    public function setName($nameValue) {
        $this->name = $nameValue;
    }

    public function getPassword() {
        
    }

    public function setPassword() {
        
    }

    public function pay() {
        
    }

}
