<!DOCTYPE html>
<html>

<head>
  <title>Insert Page page</title>
</head>

<body>
  <center>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "web");

    // Check connection
    if ($conn === false) {
      die("ERROR: Could not connect. "
        . mysqli_connect_error());
    }

    $first_name = $_REQUEST['first_name'];
    $last_name = $_REQUEST['last_name'];
    $email = $_REQUEST['email'];
    $number = $_REQUEST['Number'];
    
    $message = $_REQUEST['Message'];
    
    



    $sql = "INSERT INTO form VALUES ('$first_name',
            '$last_name','$email','$number','$message')";

    if (mysqli_query($conn, $sql)) {
      echo "<h3>Your message has been sent successfully. Thank You.</h3>";

      echo nl2br("\n$first_name\n $last_name\n $email\n $number\n  $message\n");
    } else {
      echo "ERROR: Sorry! Your message was not sent. Please try again.  $sql. "
        . mysqli_error($conn);
    }


    mysqli_close($conn);
    ?>
  </center>
</body>

</html>