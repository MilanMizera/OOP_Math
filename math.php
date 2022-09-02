<?php

namespace math;

class Math
{
    public function catchNumbers()
    {
        if (isset($_POST["submit"])) {
            $operation = $_POST ["operation"];
            $num1 = $_POST["number1"];
            $num2 = $_POST ["number2"];

            $num1 = str_replace(",", ".", $num1);
            $num2 = str_replace(",", ".", $num2);
        }

        if (is_numeric($num1) && is_numeric($num2)) {

            if ($operation == "+") {
                addition($num1, $num2);
            }

            elseif ($operation == "-") {
                subtraction($num1, $num2);
            }

            elseif
            ($operation == "/") {
                divided($num1, $num2);
            }

            elseif
            ($operation == "*") {
                multiplication($num1, $num2);
            }

        } else {
            $result = "Zadejte pouze čísla";
        }
    }

    public function addition($num1, $num2)
    {
        $result = $num1 + $num2;
    }

    public function subtraction($num1, $num2)
    {
        $result = $num1 - $num2;
    }

    public function divided($num1, $num2)
    {
        $result = $num1 / $num2;
    }

    public function multiplication($num1, $num2)
    {
        $result = $num1 * $num2;
    }

}