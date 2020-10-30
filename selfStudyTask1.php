<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>
            Self Study Task 1: Foreign Language Directory   
        </title>
    </head>
    <body>
        <h1>Self Study Task 1: Foreign Language Directory</h1>
        <form action="selfStudyTask1.php" method="POST">
                <label>Enter the word that you want to find:</label>
                <input type="text" name="searchTerm"><br>
                <input type="submit" name="submit" value="submit">
        </form>
        <?php
            $germanDirectory = array("one" => array("Description: " => "The number 1", "Translation: " => "eins"),
            "two" => array("Description" => "The number 2", "Translation: " => "zwei"),
            "three" => array("Description" => "The number 3", "Translation: " => "drei"),
            "four" => array("Description" => "The number 4", "Translation: " => "vier"),
            "five" => array("Description" => "The number 5", "Translation: " => "funf"));

            $searchTerm = $_POST['searchTerm'];
            $searchTerm = strtolower($searchTerm);
           
            if(isset($_POST['submit'])){
                echo "Word: ".$searchTerm;
                foreach($germanDirectory as $key => $value){
                    if($searchTerm === $key){
                        foreach($value as $key1 => $value1){
                            echo "<br>".$key1." ".$value1;
                        }
                    }
                }
            }
            
        ?>
    </body>    
</html>