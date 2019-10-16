<?php

$conn = mysqli_connect("localhost","root","","sms");

if($conn)
{
    if(isset($_POST['sent']))
    {
        $firstname = $_POST['firstName'];
        $lastname = $_POST['lastName'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        
        $subject = "Contact Me";
        $msg = "Hii, I am ".$firstname." ".$lastname.".<br>".$message;
        
        if($firstname==null || $lastname==null || $email==null || $message==null)
        {
            echo "<script>alert('Please enter all the details...')</script>";
        }
        else
        {
            if(mail("soumyadipdaripa100@gmail.com",$subject,$msg))
            {
                echo "<script>alert('Your message has been sent..')</script>";
            }
            
            $sql = "insert into message(firstname, lastname, email, text) values('$firstname','$lastname','$email','$message')";
        
            $query = mysqli_query($conn,$sql);

        }
        header('Location: index.html');
    }
}
    
?>