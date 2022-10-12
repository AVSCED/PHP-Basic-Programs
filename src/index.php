<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php  
    echo("Task 1");
    echo nl2br("\n");
    // Sum of Two Numbers
    $a = 10;
    $b = 11 ;
    echo("Sum of Two Numbers-");
    echo ($a + $b);

    echo nl2br("\n"); 
    echo nl2br("\n");
    echo("Task 2");
    echo nl2br("\n");

    //Counting from 5 to 15
    echo "Counting from 5 to 15 is Printed Below :" ;
    echo nl2br("\n");
    for ($i = 5 ; $i <= 15 ; $i++) {
        echo ($i) ;
        echo nl2br("\n");
    }

    echo nl2br("\n"); 
    echo nl2br("\n");
    echo("Task 3");
    echo nl2br("\n");

    //Check student grade based on the marks
    $a=82;
    if ($a >=60)
    {
        echo "Your Marks are in first division" ;
    }
    elseif ($a>=45 && $a<=59) {
        echo "Your Marks are in second Divison" ;
    }
    elseif ($a>=33 && $a<=44) {
        echo "Your Marks are in Third Division" ;
    }elseif ($a<=32) {
        echo "You failed !!!!!" ; 
    }
    echo nl2br("\n"); 
    echo nl2br("\n");
    
    //To show day of the week
    echo("Task 4");
    echo nl2br("\n");
    
    $d = 3 ;
    switch ($d) {
        case '1':
            echo "Today is Monday";
            break;

            case '2':
                echo "Today is Tuesday";
                break;
                case '3':
                    echo "Today is Wednesday";
                    break;
                    case '4':
                        echo "Today is Thursday";
                        break;
                        case '5':
                            echo "Today is Friday";
                            break;
                            case '6':
                                echo "Today is Saturday";
                                break;
                                case '7':
                                    echo "Today is Sunday";
                                    break;
        default:
           echo " Enter Valid Week day !";
            break;
    }
    echo nl2br("\n"); 
    echo nl2br("\n");
    echo("Task 5");
    echo nl2br("\n");

    //Calculate factorial of a number using for loop
    $f = 10 ;$fc =1;
    for ($i=1;$i<=$f;$i++)
    {
     $fc=$fc * $i;
    }
    echo ("Factorial of $f is $fc");
    echo nl2br("\n"); 
    echo nl2br("\n");
    echo("Task 6");
    echo nl2br("\n");
    // Printing “Welcome to the PHP World”

    $str = "Welcome to the ";
    echo ("$str PHP World");
    echo nl2br("\n"); 
    echo nl2br("\n");
    echo("Task 7");
    echo nl2br("\n");
    //To print 2 php variables using single echo statement.

    $var1 = 3;
    $var2 = 5;
    echo ("First number is $var1 and second number is $var2");

    echo nl2br("\n"); 
    echo nl2br("\n");
    echo("Task 8");
    echo nl2br("\n");
    //To print chess board
    echo "Chess Board as follow:";
    echo "<table width='320px' height='320px' border='1px' >";
     for ($i=1; $i<=8 ;$i++)
     {
        echo "<tr>";
        for($j=1 ; $j<=8 ; $j++)
        {
            if(($i+$j)%2 ==0)
            {
                echo "<td height='40px'  width='40px' bgcolor='white' ></td>";
            }
            else
            {
                echo "<td height='40px'  width='40px' bgcolor='black' ></td>";
            }
           
        }
        echo "</tr>";
     }
     echo "</table>";

    ?>
</body>
</html>