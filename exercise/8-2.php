


<?php

class BankAccount
{
    private $cash;
    const ACCNO = 1234;
    private $accountNumber_new;
    private $balance = 100000;

    public function __construct($accountNumber_new)
    {

        $this->accountNumber_new = $accountNumber_new;
    }

    public function deposit($cash)
    {
        $this->cash = $cash;
        if ($this->accountNumber_new == self::ACCNO) {
            echo "The balance originally is " . ($this->balance);
            echo "<br>";
            echo " now the balance  after deposit " . $this->balance = $this->balance + $this->cash;
            echo "<br><hr>";
        } else {
            echo "please enter a valid Acc no. ";
        }

    }

    public function withdraw($cash)
    {
        $this->cash = $cash;
        if ($this->accountNumber_new == self::ACCNO) {
            echo "the net balance is " . ($this->balance);
            echo "<br>";
            echo " now the balance  after withdraw " . $this->balance = $this->balance - $this->cash;
            echo "<br>";
        } else {
            echo "please enter a valid Acc no. ";
        }

    }

    public function bal($balance)
    {
        $this->balance = $balance;
    }
    public function updateBal()
    {
        echo "test <br>";
        $this->balance = $this->balance + $this->cash;
        echo "<br>".$this->balance . "<br>";
    }
}


?>





