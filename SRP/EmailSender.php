<?php

include("User.php");
class EmployeeSms{
    public  function  sendEmail(){

        $user=new User();
        $data=$user->getUserList();

        foreach($data as $value){

            print_r("Sent an email to ".$value);
            echo "\n";

        }
       
     }

    
}

$em=new EmployeeSms();

$em->sendEmail();
?>