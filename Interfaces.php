<?php
/*
    An interface is like a plan. Classes that use the interface must follow the plan 
    and create the methods defined in the interface. This example shows how Mpesa 
    and BankTransfer can both have a sendMoney method because they use the Payment interface.
*/

interface Payment {
    public function sendMoney($amount);
}

class Mpesa implements Payment {
    public function sendMoney($amount) {
        echo "Sending Ksh $amount via Mpesa\n";
    }
}

class BankTransfer implements Payment {
    public function sendMoney($amount) {
        echo "Sending Ksh $amount via Bank Transfer\n";
    }
}

$mpesa = new Mpesa();
$mpesa->sendMoney(1000);  // Output: Sending Ksh 1000 via Mpesa

$bank = new BankTransfer();
$bank->sendMoney(5000);  // Output: Sending Ksh 5000 via Bank Transfer
?>
