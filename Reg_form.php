<?php 
 
    if(isset($_POST['submit'])){
        $first = $_POST['first'];
        $surname = $_POST['last'];
        $email = $_POST['email'];
        $phone =$_POST['num'];
        echo "Successful!!!";
        echo  "<br>Name: ".$surname.' '.$first,
              "<br>Email: ".$email,
              "<br>Phone number: ".$phone;
    }
?>
<br><br>
<h1>Registration Form</h1><br>
<form method="POST" action="form_handler.php">
 <input type="text" name="first" placeholder="Firstname"><br><br>
 <input type="text" name="last" placeholder="Surname"><br><br>
 <input type="text" name="email" placeholder="Email address"><br><br>
 <input type="text" name="num" placeholder="Phone number"><br><br>
 <input type="submit" name="submit" value="submit">
</form>




