<?php
session_start();

include("connect.php");

$login = $_POST['name'];
$loginpass =$_POST['password'];

 if((isset($login)) || (isset($loginpass)))
 {


    $query = "select * from login where
        username='$login' and password=('$loginpass')";
      $result = mysqli_query($dbc, $query) or die($query."<br/><br/>".mysql_error($dbc));

// There cannot be 2 users with same username
      if (mysqli_num_rows($result)!=1)
        {
          die ("Wrong credentials");
        }


 $row = mysqli_fetch_array($result);


if ($row['password'] == $loginpass)
  {
    $_SESSION['sec'] = $row['section'];
    //echo ("successfully logged in");
    header('Location: main.html');
  }


  }
  else
  {

    //echo "<p> form  hasn't been submitted</p>";
    //Visitor needs to enter a name and password
    echo "<h1>Please Log In</h1> <form method='post' action='index2.php'>";
    echo "<p>Username: <input type='text'name='name'></p>";
    echo "<p>Password: <input type='password' name='password'></p>";
    echo "<p><input type='submit' name='submit' value='Log In'></p></form>";
 }


 ?>
