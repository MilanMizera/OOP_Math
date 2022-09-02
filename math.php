<?php

namespace math;

class Math
{
    public function addition($num1, $num2)
    {
        return $num1 + $num2;

    }

    public function subtraction($num1, $num2)
    {
        return $num1 - $num2;

    }

    public function divided($num1, $num2)
    {
        return $num1 / $num2;
    }

    public function multiplication($num1, $num2)
    {
        return $num1 * $num2;
    }

    public function calculation()
    {
        $num1= null;
        $num2= null;

        if (isset($_POST["submit"])) {
            $operation = $_POST ["operation"];
            $num1 = $_POST["number1"];
            $num2 = $_POST ["number2"];

            $num1 = str_replace(",", ".", $num1);
            $num2 = str_replace(",", ".", $num2);
        }

        if (is_numeric($num1) && is_numeric($num2)) {

            if ($operation === "+") {
                $this->addition($num1, $num2);
            }

            elseif ($operation === "-") {
                $this->subtraction($num1, $num2);
            }

            elseif ($operation === "/") {
                $this->divided($num1, $num2);
            }

            elseif ($operation === "*") {
                $this->multiplication($num1, $num2);
            }

        }

        else {
             $result = "Zadejte pouze čísla";
        }
    }
}