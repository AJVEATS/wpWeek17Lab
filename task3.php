<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>
            Task 3: Function Rewrite   
        </title>
    </head>
    <body>
        <h1>Task 3: Function Rewrite</h1>
        <?php
            $numberArray1 = array(1,2,3,4,5);
            $numberArray2 = array(6,7,8,9,10);
            //$joinedArray = array_merge($numberArray1, $numberArray2);
            merge($numberArray1,$numberArray2);
            function merge($array1, $array2) {
                foreach($array2 as $value){
                    array_push($array1, $value);
                }
                echo "numberArray1 joined with numberArray2: ";
                foreach($array1 as $value) {
                    echo $value;
                } 
            }
        ?>
    </body>    
</html>