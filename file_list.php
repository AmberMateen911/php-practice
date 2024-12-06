<?php 
// $path = "c_file";
// $items = scandir($path);
// $items = array_diff($items, array( ".", ".."));
// foreach($items as $item){
//     echo "<a href=c_file/$item>$item</a>";
//     echo "<br>";
// }

// $path = "uploads";
// $items = scandir($path);

// foreach($items as $item){
// echo "<a href=upload/$item><img src=$item >$item</a>";
// echo "<br>";

// }


$path = "uploads";
$items = scandir($path); 
echo " <div class='images'> "  ;
foreach ($items as $item) {
    // Filter out the current and parent directory entries
    if ($item !== '.' && $item !== '..') {
        // Check if the item is an image file
        if (preg_match('/\.(jpg|jpeg|png|gif)$/i', $item)) {     
          
            echo "<a  href='$path/$item'><img src='$path/$item' alt='$item' '></a>";
          
        }         
}
}
echo " </div><br>";

?>

<hmtl>
    <style>
        .images{
            display: flex;
            gap:10px;
            flex-wrap: wrap;
            margin: 0 auto;
        }

        .images a{
            width: 20%;
           
        }

        .images img{
            width: 100%;
            height: 90%;
            object-fit: cover;
        }
    </style>
    <body>
        
    </body>
</hmtl>