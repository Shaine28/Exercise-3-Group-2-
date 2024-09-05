<!DOCTYPE html> 
<html lang = "en"> 
<head> 
    <meta charset = "UTF-8"> 
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0"> 
    <title>GROUP 2 - EXERCISE #3</title> 
</head> 

<body>
    <h1 style = "margin-left: 20px; font-family: Georgia">
        <?php 
            echo "This is function <i>file_get_contents():</i>" . "<br>";
            echo file_get_contents("C:\Users\Racan Fam\Desktop\New Folder\Group 2.txt"); 
        ?>
    </h1>

    <h2 style = "color: blue; margin-left: 20px; font-family: Georgia">
        <?php 
            echo "This is function <i>file_put_contents():</i>" . "<br>";
            echo file_put_contents("C:\Users\Racan Fam\Desktop\New folder\Group 2.txt", "Hi again! We are Group 2!") . "<br>";
        ?>
    </h2>

    <h3 style = "color: red; margin-left: 20px; font-family: Georgia">
        <?php 
            echo "This is function <i>file_exists():</i>" . "<br>";
            echo file_exists("C:\Users\Racan Fam\Desktop\New folder\Group 2.txt") . "<br>";
        ?>
    </h3>

    <h4 style = "color: brown; margin-left: 20px; font-family: Georgia">
        <?php
            echo "This is function <i>file():</i>" . "<br>";
            print_r(file("C:\Users\Racan Fam\Desktop\New folder\Group 2.txt"));
        ?>
    </h4>
</body>