<html>
    <head>
        <title>My Website</title>
    </head>
    <body>
        <h1>My Website</h1>
        <p>Hello World!</p>
        <?php echo 'Hello World!'; ?> 
        <br> 
        <?php 
        $name = 'Roberto Luna Rojas';
        echo 'Hello ' . $name;
        ?>
        <br>
        <?php
        // http://localhost/php-fundamentals/03-variables.php?name=Ferras
        $name = $_GET['name'];
        echo 'Hello ' . $name;
         ?>
    </body>
</html>
