<html>
<head>
    <style>
        .fruits_table{
            text-align: center;
            width: 50%;
            height: 300px;
            font-size: 18px;
          
        }

.fruits_table,  td{
    border: 1px solid grey;
    border-collapse: collapse;
}
 .fruits_th{
    border: 1px solid white;
}
    .fruits_table .fruits_th{
    background-color: green;
    color: white;
}
 tr:hover{
    background-color: rgb(236, 237, 236);
   color: green;
}
    </style>
</head>

<body>
<?php include 'header.php';?>
    <pre>
            <?php
            //INDEX ARRAY PRACTIC+ FOREACH LOOP
            $cars = [
                "TOYOTA",
                "PASSO",
                "SWIFT",
                "HONDA",
                "CORROLA"
            ];
            echo '<h1>Names of the Cars </h1>';
            foreach ($cars as $car) {
                echo '<br>The car is: ' . " <b>$car</b>";
            }

            //ASSOCIATIVE ARRAY
            $colors = [
                "red" => "dark_red",
                "green" => "light_green",
                "blue" => "naviee_blue",
                "pink" => "babay_pink"
            ];
            echo "<h1>Names of the colors</h1>";
            $colors['pikachu'] = 'pikkag';
            $colors['red'] = 'light';
            foreach ($colors as $color => $value) {
                $colors["dark_black"] = "black";

                //adding one more color
            
                echo "<br> $color: $value";
            }
            echo "<br> <br>";
            var_dump($colors);

            // SHORT-HAND IF.. ELSE AMND TERNERY OPERATOR
            
            echo '<h1>TERNARY PRACTICE </h1>';
            $a = 10;
            $b = $a > 13 ? "Yes less" : "No not less";
            echo '<br>' . $b;

            $city = "LAHORE";
            $name = $city == "Islamabad" ? "<br>Yes <b>'ISALAMABAD'</b>" : "<br>NO NOT <b>ISALAMABAD</b> IT IS: <b>$city</b>";
            echo $name;

            // ACCESS ARRAY AND REPLACE
            
            $numbers = array(10, 90, 100, 200, 45, 78);
            echo "<br><b>BEFORE REPLACING NEW ARRAY AT POSITION 4 IS:</b>  $numbers[4]";
            echo '<br><b>AFTER REPLACING AT INDEX 4 IS: </b>' . $numbers[4] = 23;
            array_push($numbers, 900);
            foreach ($numbers as $number) {
                echo "<br>" . $number;
            }

            $plants = [
                "rose" => "red_rose",
                "tulip" => "white_tulip",
                "sunflower" => "small_sunflower"
            ];
            echo "<br>The type is: " . $plants["rose"];
            echo "<br>" . $plants["rose"] = "chanmbaili";
            array_push($plants, "cabbages");
            $plants["cabbages"] = "white_cabbages";
            foreach ($plants as $plant => $value) {
                echo "<br>$plant : $value";
            }

            // CREATE ARRAY
            $country = [
                "USA",
                "UK",
                "India",
                "China"
            ];

            // ADD ELEMENT AFTER CREATION
            $country[] = "Pakistan";
            $country[] = "japan";

            //PUSH ONE ELEMENT AT LAST
            array_push($country, 'Ittley');

            //PRINTING WHILE ARRAY
            foreach ($country as $cont) {
                echo "<br>" . $cont;
            }
            $fruits = array("Apple", "Banana", "Mango");
            //PUSH MULTIPLE ELEMENTS AT ONCE
            array_push($fruits, "kiwi", "Grapes", "Watermelon");
            var_dump($fruits);

            // DELETING ARRAY BY SUING SPLICE FUNCTION
            echo '<h1>REMIVING BY SPLAICE FUNCTION </h1>';
            array_splice($fruits, 0, 1);
            var_dump($fruits);

            //DELEETE BY USING UNSET FUNCTION
            echo '<h1>REMIVING BY UNSET FUNCTION </h1>';
            unset($fruits[1]);
            var_dump($fruits);


            //UNSET MULTIPLE ARRAY ITEMS "DELETE"
            $veg = [2 => "Cabbage", 1 => "Califlower", 4 => "potato", 3 => "Onion"];
            var_dump($veg);
            $change = array_diff($veg, ["Cabbage", "Onion"]);
            var_dump($change);
            array_pop($veg);
            var_dump($veg);

            array_shift($veg);
            var_dump($veg);



            //INDEXED ARRAY SORT
            $counting = array(1, 5, 7, 4, 2, 3, 10);
            rsort($counting);
            foreach ($counting as $count) {
                echo $count . " ";
                echo "<br>";
            }

            //ASSOCIATIVE ARRAY SORT
            $names = ["Amber" => 3, "Zainab" => 1, "Rukhsar" => 2, "Sakina" => 4];
            krsort($names);
            foreach ($names as $name => $value) {
                echo "$name:$value <br>";
            }


            //defining multidimensional array
            $fruits = array(
                array("Apple", 45, 56),
                array("Guava", 45, 13),
                array("Orange", 45, 14),
                array("Banana", 100, 70),
                array("Mango", 0, 100)
            );

            echo "<table class='fruits_table'>";
            echo "<tr>";
            $headers = array("FruitsName", "Sold", "Sold Out", "Total");
            foreach($headers as $header){
                echo "<th class='fruits_th'> $header </th>";
            }
            echo "</tr>";
            for($row = 0; $row < count($fruits); $row++){
                echo "<tr>";
                for($col = 0; $col < 3; $col++){
                    echo "<td>" . $fruits[$row][$col]. "</td>";
                }
                $total = $fruits[$row][1] + $fruits[$row][2];
                echo "<td>" .$total . "</td>";
            }
            
            echo "</table>";
                ?>
        </pre>
</body>

</html>