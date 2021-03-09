<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Types</title>
</head>
<body>
    <?php 
        //variables.
    
        $name = "Shehroz";
        $num = 100;
        //$num-ber = 10;
        //$0number;
        echo $name . $num;
        echo "<br/>";
        echo $name . " " . $num;
        $display = "<h1>Hello World</h1>";
    
        echo $display;
    
        //Basic Math Operations
        echo 5 + 5;
        echo "<br/>";
        echo 5 / 5;
        echo "<br/>";
        echo 5 * 5;
        echo "<br/>";
        echo 5 - 5;
        echo "<br/>";
        echo 10 % 5;
        echo "<br/>";
        echo "<br/>";
    
        $num1 = 10;
        $num2 = 20;
        $sum = $num1 + $num2;
        #we can also add comment like this.
        echo "Sum = " .  $sum;
        echo "<br/>";
        echo "<br/>";
        echo "<br/>";
        //arrays
        $list = array(2,5, '453', 'Asad', '<h1>Hello World</h1>');
        //the below line will throw error 'array to string conversion'.
        #echo $list;
        print_r($list);
        echo "<br/>";
        echo $list[0];
        echo "<br/>";
        echo $list[4];
        echo "<br/>";
    
        $numbers = [3,2,9, 'Hello World'];
        print_r($numbers);
        echo "<br/>";
        echo $numbers[3];
        echo "<br/>";   
        echo "<h1>Associative Array</h1>";
        //Associative Array.
        $names = ['Asad', 'Hammad', 'Noman'];
        print_r($names);
        echo "<br/>";
        $namesNew = ['member_1' => 'Asad', 'member_2' => 'Hammad', 'member_3' => 'Noman'];
        print_r($namesNew);
        echo "<br/>";
        echo $namesNew['member_1'];
        echo "<br/>";
        //using associative array we create key , value pairs.
        $marks_std_one = ['Physics' => 75, 'Computer' => 89, 'Maths' => 93];
        echo "<h3>Marks of Student 1: </h3>";
        echo "Physics: " . $marks_std_one['Physics'];
        echo "<br/>";
        echo "Maths: " . $marks_std_one['Maths'];
    
        /* 
        Step 1: Make 2 variables called number1 and number2 and set 1 to value 10 and the other 20:
        
        Step 2: Add the two variables and display the sum with echo:

        Step3: Make 2 Arrays with the same values, one regular and the other associative
         */
    ?>
</body>
</html>