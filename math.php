<?php

namespace math;

class Math
{
     public function addition($num1, $num2)
    {
        return $num1 + $num2;

    }

    private function subtraction($num1, $num2)
    {
        return $num1 - $num2;

    }

    private function divided($num1, $num2)
    {
        return $num1 / $num2;
    }

    private function multiplication($num1, $num2)
    {
        return $num1 * $num2;
    }

    public function calculation()
    {
        $num1= null;
        $num2= null;
        $result=null;
        $operation=null;

        if (isset($_POST["submit"])) {
            $operation = $_POST ["operation"];
            $num1 = $_POST["number1"];
            $num2 = $_POST ["number2"];

            $num1 = str_replace(",", ".", $num1);
            $num2 = str_replace(",", ".", $num2);
        }

        if (is_numeric($num1) && is_numeric($num2)) {

            if ($operation === "+") {
                 return $this->addition($num1, $num2);

            }

            elseif ($operation === "-") {
                 return $this->subtraction($num1, $num2);

            }

            elseif ($operation === "/") {
                return $this->divided($num1, $num2);

            }

            elseif ($operation === "*") {
                return $this->multiplication($num1, $num2);
            }

        }

        else {
             return "Zadejte pouze čísla";

        }
    }
}