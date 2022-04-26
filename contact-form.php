<?php
$Name = $_REQUEST['name'];
$contact = $_REQUEST['phone'];
$Email = $_REQUEST['email'];
$message= $_REQUEST['message'];


   if (empty ($Name) || empty($email) || empty($message))
{
    echo "Please fill all the fields";
}
else{
    mail("webtriggers11@gmail.com", "MedLab-Ware Message", $message ,"From:$Name <$email>");
    echo "<script type='text/javascript'> alert('your message sent sucessfully')
    window.history.log(-1);

    </script>";
    
}
?>