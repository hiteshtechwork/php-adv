<?php
// Interface

interface PaymentInterface{

    public function payNow();
    public function paymentProcess();
}

interface LoginInterface{

    public function loginFirst();
}


class Paypal implements PaymentInterface , LoginInterface {
    public function loginFirst(){}
    public function payNow(){}
    public function paymentProcess(){
        $this->loginFirst();
        $this->payNow();
    }
}
class BankTransfer implements PaymentInterface , LoginInterface {
    public function loginFirst(){}
    public function payNow(){}
    public function paymentProcess(){
        $this->loginFirst();
        $this->payNow();
    }
}
class Visa implements PaymentInterface{
    public function payNow(){}
    public function paymentProcess(){

        $this->payNow();
    }
}
class Cash implements PaymentInterface{
    public function payNow(){}
    public function paymentProcess(){

        $this->payNow();
    }
}

class BuyProduct{
    public function pay(PaymentInterface $paymentType){
        $paymentType->paymentProcess();
        // $paymentType->payNow();

    }
    // public function onlinePay(LoginInterface $paymentType){
    //     $paymentType->paymentProcess();
    // }
}

$paymentType = new Cash();
$buyProduct = new BuyProduct();
$buyProduct->pay($paymentType);     //inside the method we are here passing the OBJECT as an argument.
