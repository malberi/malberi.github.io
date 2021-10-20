<?php


if($_POST["message"]) {


mail("ola@malberi.co", "Here is the subject line",


$_POST["insert your message here"]. "From: an@email.address");


}
//redirect
header("Location:index.html");

?>