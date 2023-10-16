<?php
    class Book {
        private $isbn;
        private $title;
        private $author;
        private $available;

        public function __construct($isbn, $title, $author, $available) {
            $this->isbn = $isbn;
            $this->title = $title;
            $this->author = $author;
            $this->available = $available;
        }

        public function getCopy() {
            return $this->available > 0;
        }

        public function addCopy($num) {
            if ($num > 0) {
                $this->available += $num;
                return true;
            }
            return false;
        }

        public function __toString() {
            return "ISBN: {$this->isbn}, Title: {$this->title}, Author: {$this->author}, Available: {$this->available}";
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