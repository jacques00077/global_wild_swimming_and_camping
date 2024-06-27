<!DOCTYPE html>
<html>
    <head>
        <title>Set up</title>
        <link rel="stylesheet" href="style.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    </head>
    
<body class="s-bo">
    
    <?php 
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'gwsc1000';

    //create connection
    $conn = new mysqli($servername, $username, $password);

    //check connection
    if($conn -> connect_error){
        die('Connection Failed!: ') . $conn-> connect_error . '</p>';
    }

    // create database
    $conn = new mysqli($servername, $username, $password);
    $sql = 'Create database '. $dbname;

    //check sql query
    if($conn -> query($sql)=== true) {
        echo '<p class="success"> Database Created Successful </p>';
    }
    else{
        echo '<p class="error"> Error Creating Database </p>';
    }

    // creating the tables
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = 'CREATE TABLE IF NOT EXISTS `signup` ( 
        `id` int(5) NOT NULL AUTO_INCREMENT,
        `fullname` VARCHAR(20) NOT NULL,  
        `email` VARCHAR(30) NOT NULL ,
        `phone` VARCHAR(20) NOT NULL, 
        `password` VARCHAR(8) NOT NULL,
         PRIMARY KEY (`id`),
         UNIQUE KEY `email` (`email`)
         )';

         //checking if the query works
         if($conn -> query($sql)=== true) {
            echo '<p class="success"> Table SignUp Created Successful </p>';
        }
        else{
            echo '<p class="error"> Error Creating Table SignUp</p>';
        }

      

        $sql = 'CREATE TABLE IF NOT EXISTS `login` (
            `id` int(3) NOT NULL AUTO_INCREMENT,
            `email` varchar(35) NOT NULL,
            `password` varchar(35) NOT NULL,
            PRIMARY KEY (`id`),
            UNIQUE KEY `email` (`email`),
            UNIQUE KEY `password` (`password`)
            )';
    
             //checking if the query works
             if($conn -> query($sql)=== true) {
                echo '<p class="success"> Table Login Created Successful </p>';
            }
            else{
                echo '<p class="error"> Error Creating Table Login</p>';
            }

            $sql = 'CREATE TABLE IF NOT EXISTS `user` (
                `id` int NOT NULL AUTO_INCREMENT,
                `username` varchar(50) NOT NULL,
                `password` varchar(50) NOT NULL,
                `firstname` varchar(30) NOT NULL,
                `surname` varchar(30) NOT NULL,
                `email` varchar(35) NOT NULL,
                PRIMARY KEY (`id`)
                )';
        
                 //checking if the query works
                 if($conn -> query($sql)=== true) {
                    echo '<p class="success"> Table User Created Successful </p>';
                }
                else{
                    echo '<p class="error"> Error Creating Table User</p>';
                }

                $sql = 'CREATE TABLE IF NOT EXISTS `contact` ( 
                    `id` int(3) NOT NULL AUTO_INCREMENT,
                    `first_name` VARCHAR(20) NOT NULL, 
                    `last_name` VARCHAR(20) NOT NULL ,
                    `phone` VARCHAR(20) NOT NULL,
                    `email` VARCHAR(30) NOT NULL , 
                    `message` VARCHAR(255) NOT NULL,
                     PRIMARY KEY (`id`),
                     UNIQUE KEY `email` (`email`)
                     )';
            
                     //checking if the query works
                     if($conn -> query($sql)=== true) {
                        echo '<p class="success"> Table Contact Created Successful </p>';
                    }
                    else{
                        echo '<p class="error"> Error Creating Table Contact </p>';
                    }

                    $sql = 'CREATE TABLE IF NOT EXISTS `pitches` (
                        `id` int NOT NULL AUTO_INCREMENT,
                        `name` varchar(35) NOT NULL,
                        PRIMARY KEY (`id`),
                        UNIQUE KEY `name` (`name`)
                      )';
                
                         //checking if the query works
                         if($conn -> query($sql)=== true) {
                            echo '<p class="success"> Table Pitch Search Created Successful </p>';
                        }
                        else{
                            echo '<p class="error"> Error Creating Table Pitch Search </p>';
                        }
                        $conn -> close();
    ?>

<a href="login.php" class="btn">Log In</a>
</body>
</html>