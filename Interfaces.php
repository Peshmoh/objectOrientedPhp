<?php
/*
    what I understood about interfaces is that they’re like a set of rules or a plan 
    that classes have to follow. It’s kind of like if we all agreed on the same way 
    to do something, but each person can do it a little differently.

    In this case, the interface is called Payment, and it has one rule: 
    any class that uses Payment must have a sendMoney method.

    So, Mpesa and BankTransfer both agree to follow the Payment plan, 
    but they send money in their own ways. Mpesa sends money using mobile phones, 
    while BankTransfer sends money through the bank. 
    Even though they do it differently, they both follow the same rule – they both have to use sendMoney.
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
