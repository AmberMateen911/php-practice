<html>

<body>
    <link rel="stylesheet" href="style.css">
<?php include 'header.php';?>
    <pre>
        <?php

        // DEGFINING MULTIDIMENSIONAL TABLE 
        $cars = array(
            array("TOYOTA", 22, 45),
            array("HILUX", 70, 30),
            array("SWIFT", 287, 60),
            array("MEHRAN", 0, 768),
            array("PASSO", 90, 67)
        );

        echo "<table border = 1>";
        $headers = array("Name", "Sold", "In Stock", "Total");
        echo "<tr>";
        //printing header content
        foreach ($headers as $header) {

            echo "<th>$header</th>";
        }
        echo "</tr>";


        //printing data inside table 
        for ($row = 0; $row < count($cars); $row++) {
            echo "<tr>";
            for ($col = 0; $col < 3; $col++) {
                echo "<td>" . $cars[$row][$col] . "</td>";
            }

            $total = $cars[$row][1] + $cars[$row][2];
            echo "<td> $total </td>";

        }





        //DENING AND SORTING MULTIDIMENSIONAL ARRAY
        


        $cars = array(
            array("TOYOTA", 22, 45),
            array("HONDA", 60, 30),
            array("SWIFT", 265, 60),
            array("PASSO", 0, 68),
            array("CORROLA", 0, 0)
        );

        // Check for sorting parameter
        $sort_by = isset($_GET['sort']) ? $_GET['sort'] : '';
        $sort_order = isset($_GET['order']) ? $_GET['order'] : 'asc'; // Default to ascending
        
        // Sort the array based on the selected column
        if ($sort_by !== '') {
            usort($cars, function ($a, $b) use ($sort_by, $sort_order) {
                // Calculate total for comparison
                $totalA = $a[1] + $a[2]; // Sold + In Stock
                $totalB = $b[1] + $b[2]; // Sold + In Stock
        
                // Determine which value to compare based on the sort_by index
                $valueA = ($sort_by == 0) ? $a[0] : (($sort_by == 1) ? $a[1] : (($sort_by == 2) ? $a[2] : $totalA));
                $valueB = ($sort_by == 0) ? $b[0] : (($sort_by == 1) ? $b[1] : (($sort_by == 2) ? $b[2] : $totalB));

                if ($sort_order === 'asc') {
                    return $valueA <=> $valueB; // Ascending order
                } else {
                    return $valueB <=> $valueA; // Descending order
                }
            });
        }

        echo "<table border='1' id='carTable'>";
        echo "<br><br><br><br> <h1>IT WILL PERFORM SORTING HERE </h1><br>";
        $headers = array("Name", "Sold", "In Stock", "Total");
        echo "<tr>";
        // Printing header content with sorting links
        foreach ($headers as $index => $header) {
            // Determine the new order for the next click
            $new_order = ($sort_by == $index && $sort_order == 'asc') ? 'desc' : 'asc';
            // Create a link for sorting by the respective column
            echo "<th><a href='?sort=$index&order=$new_order#carTable'>$header</a></th>"; // Ensure the anchor points to the table
        }
        echo "</tr>";

        // Printing data inside table
        foreach ($cars as $row) {
            echo "<tr>";
            foreach ($row as $col) {
                echo "<td>" . $col . "</td>";
            }
            $total = $row[1] + $row[2];
            echo "<td>$total</td>";
            echo "</tr>";
        }
        echo "</table>";
        ?>
    </pre>
</body>

</html>