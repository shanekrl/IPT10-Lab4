<?php
class ATM {
    private $location;
    private $managedBy;

    public function __construct($location, $managedBy) {
        $this->location = $location;
        $this->managedBy = $managedBy;
    }

    public function identifies($cardNumber) {
        return false;
    }

    public function transactions($transaction) {
        return false;
    }
}
?>