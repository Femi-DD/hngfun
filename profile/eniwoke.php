<?php
    if(isset($_POST['submit'])){

        $config = include('../config.php');
        $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
            
        $con = new PDO($dsn, $config['username'], $config['pass']);
    
        $exe = $con->query('SELECT * FROM password LIMIT 1');
        $data = $exe->fetch();
        $password = $data['password'];

        $subject = $_POST['subject'];
        $body = $_POST['body'];
        header("location:http://hng.fun/sendmail.php?password=".$password."&subject=".$subject."&body=".$body."&to=eniwokepdm@gmail.com");

    }else{
        header("location: eniwokecornelius.html");
    }
?>
