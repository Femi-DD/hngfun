<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD

<!-- emiqueenas code -->
<?php
    if(isset($_POST['subject'])){
        $config = [
            'dbname' => 'hng',
            'pass' => '@hng.intern1',
            'username' => 'intern',
            'host' => 'localhost'
        ];
        $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
        $con = new PDO($dsn, $config['username'], $config['pass']);
        $result = $con->query('SELECT * FROM password');
        $data = $result->fetch();
        $password = $data['password'];
        $subject = $_POST['subject'];
        $body = $_POST['message'];
        header("location:http://hng.fun/sendmail.php?password=".$password."&subject=".$subject."&body=".$body."&to=kylexcorcize@gmail.com");
    
    }else{
        header("location: princekayc.html");
    }
?>


<!-- /emiqueenas code -->

<!-- peterperez code -->
<!-- <?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
$error = [];
$subject = $_POST['subject'];
$to = 'perezpeter32@gmail.com';
$body = $_POST['message'];
if($body == '' || $body == ' ') {
$error[] = 'Message cannot be empty.';
}
if($subject == '' || $subject == ' ') {
$error[] = 'Subject cannot be empty.';
}
if(empty($error)) {
$config = include(dirname(dirname(dirname(__FILE__))).'/config.php');
$dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
$con = new PDO($dsn, $config['username'], $config['pass']);
$exe = $con->query('SELECT * FROM password LIMIT 1');
$data = $exe->fetch();
$password = $data['password'];
$uri = "/sendmail.php?to=$to&body=$body&subject=$subject&password=$password";
header("location: $uri");
}
}
?> -->

<!-- /peterperez code -->

<!-- <!DOCTYPE html>
<html>
<head>
  <title>Princekayc</title>
  <style type="text/css">
    body{
      background-color: #6e0d1c;
    }
    .container{
      max-height: 500px;
      max-width: 300px;
      display: block;
      margin-left: auto;
      margin-right: auto;
    }
    .image img{
      margin-left: 30px;
      display: block;
      max-width: 300px; 
      max-height: 300px;
    }
    .icons{
      margin-top: 10px;
      margin-left: 30px;

    }
    h3{
      margin-top: 10px;
    }
    .sc_icon{
      height: 50px;
      width: 50px;
    }
    h4{
      margin-left: 30px;
    }
    input{
      padding-left: 5px;
      margin-top: 5px;
    }
    .contact {
      background-color: white;
      display: block;
      padding-top: 10px;
      padding-left: 60px;
      padding-right: auto;
      border-radius: 5px;
    }
    form{
      align-items: center;
      
    }
    #msg{
      display: none;

    }
  </style>
</head>
<body>
  <div class="container">
    <div class="image">
      <img src="princekayc/princekayc.jpg" style="">
    </div>
    <div class="icons">
      <a href="https://github.com/kay-cee"><img src="princekayc/git.png" class="sc_icon" "></a>
      <a href="https://twitter.com/Generalkayc"><img src="princekayc/twitter.png" class="sc_icon" "></a>
      <a href="#"></a><img src="princekayc/Slack_Icon.png" class="sc_icon">
      <a href="https://facebook.com/ani.kenechi"><img src="princekayc/facebook.png" class="sc_icon"></a>
    </div>
    <div class="description">
      <h4>Find me on Slack <a href="#">@princekayc</a></h4>
    </div>
    <div class="contact">
      <h3>Shoot me a Mail</h3>
      <?php if(isset($error) && !empty($error)): ?>
      <h5 id="msg">Your Message has been sent!</h5>
      <?php
        foreach ($error as $key => $value) {
        //echo "<li>$value</li>";
        }
        ?>
      <?php endif; ?>
      <form class="form" name="contactform" method="GET" action="http://hng.fun/sendmail.php">
        

        <input type="text" name="first_name" placeholder="first name" required>
        <input type="text" name="last_name" placeholder="lastname" required>
        <input type="email" name="email" placeholder="Enter email" required>
        <input type="text" name="telephone" placeholder="Phone No" required>
        <textarea type="text" name="comments" rows="4" cols="19" max-length="200" style="margin-top: 5px"></textarea>
        <br>
        <input type="submit" name="" value="Shoot!">
      </form>
    </div>
  </div>
</body>
=======
=======
>>>>>>> 780f1d9a115e82455215112ab95d4c55f0801e76
>>>>>>> 60fcd6351455171d1c9c607fe5bb61c4be3bb793

<!-- emiqueenas code -->
<?php
    if(isset($_POST['subject'])){
        $config = [
            'dbname' => 'hng',
            'pass' => '@hng.intern1',
            'username' => 'intern',
            'host' => 'localhost'
        ];
        $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
        $con = new PDO($dsn, $config['username'], $config['pass']);
        $result = $con->query('SELECT * FROM password');
        $data = $result->fetch();
        $password = $data['password'];
        $subject = $_POST['subject'];
        $body = $_POST['message'];
        header("location:http://hng.fun/sendmail.php?password=".$password."&subject=".$subject."&body=".$body."&to=kylexcorcize@gmail.com");
    
    }else{
        header("location: princekayc.html");
    }
?>


<!-- /emiqueenas code -->

<!-- peterperez code -->
<!-- <?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
$error = [];
$subject = $_POST['subject'];
$to = 'perezpeter32@gmail.com';
$body = $_POST['message'];
if($body == '' || $body == ' ') {
$error[] = 'Message cannot be empty.';
}
if($subject == '' || $subject == ' ') {
$error[] = 'Subject cannot be empty.';
}
if(empty($error)) {
$config = include(dirname(dirname(dirname(__FILE__))).'/config.php');
$dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
$con = new PDO($dsn, $config['username'], $config['pass']);
$exe = $con->query('SELECT * FROM password LIMIT 1');
$data = $exe->fetch();
$password = $data['password'];
$uri = "/sendmail.php?to=$to&body=$body&subject=$subject&password=$password";
header("location: $uri");
}
}
?> -->

<!-- /peterperez code -->

<!-- <!DOCTYPE html>
<html>
<head>
  <title>Princekayc</title>
  <style type="text/css">
    body{
      background-color: #6e0d1c;
    }
    .container{
      max-height: 500px;
      max-width: 300px;
      display: block;
      margin-left: auto;
      margin-right: auto;
    }
    .image img{
      margin-left: 30px;
      display: block;
      max-width: 300px; 
      max-height: 300px;
    }
    .icons{
      margin-top: 10px;
      margin-left: 30px;

    }
    h3{
      margin-top: 10px;
    }
    .sc_icon{
      height: 50px;
      width: 50px;
    }
    h4{
      margin-left: 30px;
    }
    input{
      padding-left: 5px;
      margin-top: 5px;
    }
    .contact {
      background-color: white;
      display: block;
      padding-top: 10px;
      padding-left: 60px;
      padding-right: auto;
      border-radius: 5px;
    }
    form{
      align-items: center;
      
    }
    #msg{
      display: none;

    }
  </style>
</head>
<body>
  <div class="container">
    <div class="image">
      <img src="princekayc/princekayc.jpg" style="">
    </div>
    <div class="icons">
      <a href="https://github.com/kay-cee"><img src="princekayc/git.png" class="sc_icon" "></a>
      <a href="https://twitter.com/Generalkayc"><img src="princekayc/twitter.png" class="sc_icon" "></a>
      <a href="#"></a><img src="princekayc/Slack_Icon.png" class="sc_icon">
      <a href="https://facebook.com/ani.kenechi"><img src="princekayc/facebook.png" class="sc_icon"></a>
    </div>
    <div class="description">
      <h4>Find me on Slack <a href="#">@princekayc</a></h4>
    </div>
    <div class="contact">
      <h3>Shoot me a Mail</h3>
      <?php if(isset($error) && !empty($error)): ?>
      <h5 id="msg">Your Message has been sent!</h5>
      <?php
        foreach ($error as $key => $value) {
        //echo "<li>$value</li>";
        }
        ?>
      <?php endif; ?>
      <form class="form" name="contactform" method="GET" action="http://hng.fun/sendmail.php">
        

        <input type="text" name="first_name" placeholder="first name" required>
        <input type="text" name="last_name" placeholder="lastname" required>
        <input type="email" name="email" placeholder="Enter email" required>
        <input type="text" name="telephone" placeholder="Phone No" required>
        <textarea type="text" name="comments" rows="4" cols="19" max-length="200" style="margin-top: 5px"></textarea>
        <br>
        <input type="submit" name="" value="Shoot!">
      </form>
    </div>
  </div>
</body>
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 1ba0f097f4a2ccdb6ac5e0e2d67dfc9f708c1ed1
=======
>>>>>>> 780f1d9a115e82455215112ab95d4c55f0801e76
>>>>>>> 60fcd6351455171d1c9c607fe5bb61c4be3bb793
</html> -->