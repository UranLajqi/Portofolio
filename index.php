<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css files/style.css">
    <script src="https://unpkg.com/react@17/umd/react.development.js" crossorigin></script>
    <script src="https://unpkg.com/react-dom@17/umd/react-dom.development.js" crossorigin></script>
    <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>
</head>
<body>

    <header id="header">
    </header>

    <?php 
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "skills";
        
        $conn = new mysqli($servername, $username, $password, $dbname);
        
        if(!$conn){
            die('Could not Connect My Sql:' .mysql_error());
        }
    ?>
    <section id="skills">
        
    </section>

    <script src="react files/Header.js" type="text/babel"></script>

</body>
</html>