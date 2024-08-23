<?php
session_start();

function Fibonacci($number) { /// fibonacci function
    if ($number == 0) {
        return 0;     
    } elseif ($number == 1) { 
        return 1;     
    } else {
        return (Fibonacci($number-1) + Fibonacci($number-2));
    } 
} 
function Factorial($number){ // factorial function
    $factorial = 1; 
    for ($i = 1; $i <= $number; $i++){ 
    $factorial = $factorial * $i; 
    } 
    return $factorial; 
} 
function solveQuadratic($a, $b, $c) { //Quadrati function
    $discriminant = $b**2 - 4*$a*$c; 
  
    if ($discriminant > 0) { 
        $root1 = (-$b + sqrt($discriminant)) / (2*$a); 
        $root2 = (-$b - sqrt($discriminant)) / (2*$a); 
        return [$root1, $root2]; 
    } else if ($discriminant == 0) { 
        $root = -$b / (2*$a); 
        return [$root]; 
    } else { 
        return [];
    } 
} 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['num2'])) {
        $num1 = intval($_POST['num1']);
        $num2 = intval($_POST['num2']);
        $ope = $_POST['ope'];

        switch ($ope) {
            case 'add':
                $result = $num1 + $num2;
                break;
            case 'sub':
                $result = $num1 - $num2;
                break;
            case 'mul':
                $result = $num1 * $num2;
                break;
            case 'div':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = 'Division by zero error';
                }
                break;
            case 'rem':
                if ($num2 != 0) {
                    $result = $num1 % $num2;
                } else {
                    $result = 'Invalid input value for remainder';
                }
                break;
            case 'ave':
                $result = ($num1 + $num2) / 2;
                break;
            case 'pow':
                $result = $num1 ** $num2;
                break;
            case 'rec':
                $result = $num1 * $num2;
                break;
            case 'tri':
                $result = ($num1 * $num2) / 2;
                break;
            case 'fib':
               $arr = [];
               for ($i = 0; $i < $num2; $i++){   
                array_push($arr, Fibonacci($i));
               } 
            $result = join(", ", $arr);
                break;
            case 'cir':
                $result = pi() * ($num2 ** 2);
                break;
            case '':
                $result = solveQuadratic($num1, $num2, $num3);;
                break;
            case 'fac':
                $result = Factorial($num2);
                break;
            default:
                $result = 'Invalid operation';
        }

        if(isset($_POST['num3']) && $ope == "qua"){
            $num3 = $_POST['num3'];
            $answer = solveQuadratic($num1, $num2, $num3);
            $result = implode(', ', $answer);

            $_SESSION['num3'] = $num3;
        } 

        $_SESSION['num1'] = $num1;
        $_SESSION['num2'] = $num2;
        $_SESSION['ope'] = $ope;
        $_SESSION['result'] = $result;

        header('Location: form.php');
        exit();
    } else {
        $_SESSION['result'] = 'Invalid request';
        header('Location: main.php');
        exit();
    }
} else {
    $_SESSION['result'] = 'Invalid request';
    header('Location: main.php');
    exit();
}
?>
