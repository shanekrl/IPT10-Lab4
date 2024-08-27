<?php

class Profile {
    private $lastName;
    private $firstName;
    private $middleName;
    private $email;
    private $address;
    private $favoriteQuote;

    
    public function __construct($lastName, $firstName, $middleName) {
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        $this->middleName = $middleName;
    }

    public function getCompleteName() {
        return $this->firstName . ' ' . $this->middleName . ' ' . $this->lastName;
    }

 
    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    
    public function getAddress() {
        return $this->address;
    }

    public function setAddress($address) {
        $this->address = $address;
    }

    
    public function getFavoriteQuote() {
        return $this->favoriteQuote;
    }

    public function setFavoriteQuote($quote) {
        $this->favoriteQuote = $quote;
    }
}

?>