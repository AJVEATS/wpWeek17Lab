<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>
            Task 1: Arrays   
        </title>
    </head>
    <body>
        <h1>Task 1: Arrays</h1>
        <?php
            $numberArray = array(1,2,3,4,5,6,7,8,9,10);
            echo "Array value retrival using a foreach loop: ";
            foreach($numberArray as $value) {
                echo $value;
            }

            echo "<br>Array value retrival using a for loop: ";
            for($row = 0; $row < 10; $row++){
                echo $numberArray[$row];
            }

            $students = array("A. Veats" => 2, "G. Warris" => 3, "D. Tyson" => 2, "L. Turner" => 2, "S. Dadd" => 2);
            foreach($students as $key => $value){
                if($value === 2){
                    echo "<br>".$key." is a second year student";
                }
                //echo $key."<br>";
                //echo $value."<br>";
            }

            $students3D = array("A. Veats" => array("Year" => 2, "Sex" => "M"),"G. Warris" => array("Year" => 2, "Sex" => "M"),"S. Dadd" => array("Year" => 2, "Sex" => "F"),"D. Tyson" => array("Year" => 2, "Sex" => "M"),"K. Warzocha" => array("Year" => 2, "Sex" => "Yes"));
            foreach($students3D as $key => $value){
                foreach($value as $key1 => $value1){
                    if($value1 === "M"){
                        echo "<br>".$key." sex is ".$value1;
                    }
                }
            }
        ?>
    </body>    
</html>