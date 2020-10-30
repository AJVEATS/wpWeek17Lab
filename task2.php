<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>
            Task 2: Creating improved array union code   
        </title>
    </head>
    <body>
        <h1>Task 2: Creating improved array union code</h1>
        <?php
            $numberArray1 = array(1,2,3,4,5);
            $numberArray2 = array(6,7,8,9,10);
            //$joinedArray = array_merge($numberArray1, $numberArray2);
            foreach($numberArray2 as $value){
                array_push($numberArray1, $value);
            }
            echo "numberArray1 joined with numberArray2: ";
            foreach($numberArray1 as $value) {
                echo $value;
            }
        ?>
    </body>    
</html>