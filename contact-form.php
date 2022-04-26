<?php

$Name = $_REQUEST['name'];
$Email = $_REQUEST['email'];
$Phone = $_REQUEST['phone'];
$Message = $_REQUEST['message'];
$header = $Email;
if(empty($Name) && empty($Email) && empty($Message)){
    echo ('Please fill all the fields');
}
else{
    mail("webtriggers11@gmail.com", "Message From webTriggers.com - ".$Subject,"Name: ".$Name."Phone: " .$Phone." Message: " .$Message." Email: ".$Email, $header);
    echo "alert('Your Message sent successfully')";
    echo "<meta http-equiv='refresh' content='0'>";
}


?>