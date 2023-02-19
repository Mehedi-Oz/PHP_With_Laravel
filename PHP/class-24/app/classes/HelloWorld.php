<?php


namespace App\classes;


class HelloWorld
{
    public $firstName, $lastName;
    public $x, $y, $z, $amount, $card, $bank;

    //function starts with __ is a magic method function that is executed at the very beginning of the execution
    public function __construct()
    {
        //$this is own class object, -> is object operator or php object
        $this->firstName = "Muhammad";
        $this->lastName = "Hasan";
        $this->x = 32;
        $this->z = 8;
        $this->y = 31;
        $this->amount = 11000;
        $this->card = 'debit';
        $this->bank = 'one';

    }

    public function index()
    {
//        echo $this->firstName . ' ' . $this->lastName;
//        echo '<br> <br> Arithmetic-Operator <br>';
//        echo $this->x += $this->z;
//        echo '<br>';
//        echo $this->x -= $this->z;
//        echo '<br>';
//        echo $this->x *= $this->z;
//        echo '<br>';
//        echo $this->x /= $this->z;
//        echo '<br>';
//        echo $this->x %= $this->y;
//        echo '<br>';
//
//
//        //Increment-Decrement
//        echo '<br> Increment-Decrement <br>';
//        echo $this->y++;
//        echo '<br>';
//        echo ++$this->y;
//        echo '<br>';
//        echo $this->y--;
//        echo '<br>';
//        echo --$this->y;
//        echo '<br>';
//
//
//        //Equal-Operator
//        echo '<br> Equal-Operator <br>';
//        echo $this->x == $this->y;
//        echo '<br>';
//        echo $this->x === $this->y;
//        echo '<br>';
//        echo $this->x != $this->y;
//        echo '<br>';
//        echo $this->x !== $this->y;
//        echo '<br>';
//
//
//        //Logical-Operator
//        echo '<br> Logical-Operator <br>';
//        echo ($this->x <= $this->y) and ($this->x >= $this->y);
//        echo '<br>';
//        echo '<br>';
//
//        echo ($this->x <= $this->y) || ($this->x >= $this->y);
//        echo '<br>';
//        echo '<br>';
//
//
//        //Statement
//        //SINGLE LINE
//
//        //Conditional
//        //IF, ELSE_IF, IF-ELSEIF-ELSE, SWITCH
//
//        //REPEATED
//        //FOR, WHILE, DO-WHILE, FOREACH
//
//
////        if (condition){
////            //statement
////        }
//
//        if ($this->x == $this->y) {
//            echo "NOT-EQUAL <br>";
//
//        } else
//            echo "EQUAL";
//
//
//        if ($this->x !== $this->y) {
//            echo '<br>';
//            echo $this->x;
//            echo '<br>';
//        }
//
//        switch ($this->z) {
//            case 10:
//                echo '10';
//                break;
//            case 20:
//                echo '20';
//                break;
//            case 30:
//                echo '30';
//                break;
//            case 40:
//                echo '40';
//                break;
//            default:
//                echo '50';
//        }

        if ($this->amount >= 10000) {
            echo " <br> Eligible For Discount <br> ";

            if ($this->card == 'Credit') {
                echo " <br> Eligible For 20% Discount <br> ";

                if ($this->bank == 'city') {
                    echo "<br>  Your Discounted amount is 20%";
                } elseif ($this->bank == 'one') {
                    echo "<br>  Your Discounted amount is 15%";
                }
            } elseif ($this->card == 'debit') {
                echo " <br> Eligible For 25% Discount <br> ";

                if ($this->bank == 'city') {
                    echo "<br>  Your Discounted amount is 25%";
                } elseif ($this->bank == 'one') {
                    echo "<br>  Your Discounted amount is 20%";
                }
            }
        } else
            echo " <br> Not Eligible For Discount <br> ";
    }
}