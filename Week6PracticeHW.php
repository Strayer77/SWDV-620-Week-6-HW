
<!doctype html>
<?php
    $name = "Matt";
?>
<html>
    <head>
        <title>Week 6 Practice Questions</title>
        <?php
        //passes variable in php to javascript code
                echo '<script>';
                echo 'var name = ' . json_encode($name) . ';';
                echo 'document.write("Your name is: " + name);';
                echo '</script>';
        ?>
    </head>
    <body>
    </body>
</html>