<?php
class Customer {
    private $id;
    private $firstName;
    private $lastName;
    private $email;

    public function __construct($id, $firstName, $lastName, $email) {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
    }

    public function __toString() {
        return "ID: {$this->id}, Name: {$this->firstName} {$this->lastName}, Email: {$this->email}";
    }

    public function __call($method, $arguments) {
        $prefix = substr($method, 0, 3);
        $property = lcfirst(substr($method, 3));
        if ($prefix === 'get' && property_exists($this, $property)) {
            return $this->$property;
        } elseif ($prefix === 'set' && property_exists($this, $property)) {
            $this->$property = $arguments[0];
        }
    }

    public function __get($name) {
        if (property_exists($this, $name)) {
            return $this->$name;
        }
    }

    public function __set($name, $value) {
        if (property_exists($this, $name)) {
            $this->$name = $value;
        }
    }
}
?>