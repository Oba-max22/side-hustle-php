 <?php 
    /*********** ARRAYS********************/ 
    // 1)Numeric Array
    // 2)Associative Array
    // 3)Multi-dimensional Array

    // Numeric Arrays
    echo "<h1>Numeric Arrays</h1>";

    //Array declaration
    $Playernames = array("Pierre-Emerick Aubameyang","Robert Lewandowski","Christiano Ronaldo Jr","Zlatan Ibrahimovic","Son Heung-min","Neymar Jnr");

    echo "The 1st player in our array is: ".$Playernames[0]."<br>";
    echo "The 2nd player in our array is: ".$Playernames[1]."<br>";
    echo "The 3rd player in our array is: ".$Playernames[2]."<br>";
    echo "The 4th player in our array is: ".$Playernames[3]."<br>";
    echo "The 5th player in our array is: ".$Playernames[4]."<br>";



    // Associative Arrays
    echo "<h1>Associative Arrays</h1>";

    $Nationality = array(
                        $Playernames[0] => "GABON",
                        $Playernames[1] => "POLAND",
                        $Playernames[2] => "PORTUGAL",
                        $Playernames[3] => "ITALY",
                        $Playernames[4] => "SOUTH KOREA",
                        $Playernames[5] => "BRAZIL"
                    );
    
    $Football_clubs = array(
                        $Playernames[0] => "Arsenal",
                        $Playernames[1] => "Bayern Munich",
                        $Playernames[2] => "Juventus",
                        $Playernames[3] => "Ac Milan",
                        $Playernames[4] => "Tottenham Hotspur",
                        $Playernames[5] => "Paris Saint-Germain"

                    );

    for($i=0;$i<count($Playernames);$i++) {
        echo "$Playernames[$i] is from <strong>".$Nationality["$Playernames[$i]"]."</strong>"." and he plays for <strong>".$Football_clubs["$Playernames[$i]"]."</strong><br>";
    }



    echo "<br>";
    for($i=0;$i<100; $i++) {
        echo "_";
    };
    echo "<br>";

    // Multi-dimensional Arrays
    echo "<h1>Multi-dimensional Arrays</h1>";

   $languages = array(
                    $Playernames[0] => array("French","Spanish","German","English","Italian"),
                    $Playernames[1] => array("Polish","English","German"),
                    $Playernames[2] => array("Portuguese","English","Spanish","Italian"),
                    $Playernames[3] => array("English", "Swedish", "Italian", "French", "Spanish", "Bosnian"),
                    $Playernames[4] => array("Korean","German", "English"),
                    $Playernames[5] => array("Spanish", "Portuguese")
   ); 

   for($i=0; $i< count($Playernames); $i++) {
       echo $Playernames[$i]."<br>";
   };
   
    echo "<br>";
    for($i=0;$i<100; $i++) {
        echo "_";
    };
    echo "<br>";
    
    // For Loops
    echo "<h1>For Loops</h1>";

   foreach($Football_clubs as $fc) {
        echo $fc."<br>";

};
   
?>