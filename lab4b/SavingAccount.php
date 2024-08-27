<?php
require_once 'Account.php';

class SavingAccount extends Account {
    public function __construct($number, $balance) {
        parent::__construct($number, $balance);
    }

    public function withdraw($amount) {
        return false;
    }

    public function deposit($amount) {
        return false;
    }

    public function createTransaction() {
        return false;
    }
}
?>