<?php

// Single page responibility : its tells that each class must does the one and only one responisibilty by
// doing this we can mainiatin code readability and mainatnce as well can be easily debug and wont harm to other part 
//of code 

 class User{

    //consider user class which is handing two functionlities 
    //1.get the data from database 
    //2.convert it to an csv format 
    //3.and also send an email to each user 

    // but the bellow code is not consider as single page responisible , bcz all the functionality are placed in 
    // one class , so make it as singlepage responislabe keep all the other actions at other classes 
    // NOTE : we can keep one or more method in same class , but make sure that all are does the same functions 
    //EX : user functionlity can be placed in this class , like some more methods to set username , list users , delete user etc


    public function getUserList(){

        //write qury to get data from database , 
        // but as of now consider some dummy data is listied in this methods

        //$sql = "select username from users ;"
        // $res=pg_query($sql);

        $res=['preeti','mudaka','amgoh','rachu'];

        return $res;
      
    
    }

    // public function csvFormat(){

    //     return "Csv format data";
    // }

    // public function sendEmail(){
    //     return "send email to each user";
    // }

}

?>