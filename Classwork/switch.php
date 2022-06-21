<?php
$num1=1;
$num2=2;
switch ($choice="+") {
    case '+':
        $sum =$num1+$num2;
        echo($sum);
        break;
    
        case '-':
            $diff =$num1-$num2;
            echo($diff);
            break;

            case '*':
                $mul =$num1*$num2;
                echo($mul);
                break;
            
    default:
        echo("No action");
        break;
}
?>