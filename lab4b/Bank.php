<?php
class Bank {
    private $code;
    private $address;

    public function __construct($code, $address) {
        $this->code = $code;
        $this->address = $address;
    }

    public function manages() {
        return false;
    }

    public function maintains() {
        return false;
    }
}
?>