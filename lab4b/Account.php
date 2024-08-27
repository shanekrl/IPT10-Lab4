<?php
abstract class Account {
    protected $number;
    protected $balance;

    public function __construct($number, $balance) {
        $this->number = $number;
        $this->balance = $balance;
    }

    abstract public function deposit($amount);
    abstract public function withdraw($amount);
    abstract public function createTransaction();
}
?>