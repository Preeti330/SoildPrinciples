<?php
// LSP : liskov Subsitution principle 

// which tells that subclass should be having all the functionlities or methods or parent class .
// or sublace should be replce the super class . 

// here we can over ride the methods  of parent class , but we cant throw errors or other modifications 

// consider the Employe class having calulateBounus() to calculate bouns and getSalary() for getting salary 

// lets consider , parmentEmployee class is having getSalary() and calculate bouns meothds , 
// i.e parmentemployee which is replacig its parent class with all mothods 

// and lets take contrctEmpolyee can get only salay , and he is not applicable for any kind of bounus 

// so in ContractEmpoyee class over ride calculateBouns andn throgh an error
// as nromal flow its throws error but it breks LSP , bcz this class is not actully follwing as its parents 
// so to work this in LSP , we have keep calculateBounus in any other class then empolyee 


class Employe{
    public function getSalary(){
        return 100;
    }

    public function calculateBouns(){
        return 50;
    }
}

class PermanentEmployee extends Employe{
    // over rides the meothd can be accepcted 
    public function calculateBouns(){
        return 80;
    }
}


class ContractEmployee extends Employe{

    // over rides the meothd can be accepcted 
    public function calculateBouns(){
        throw new Exception('Sorry , Contarctor are not applicable for Bouns..!!');
    }
}

class Main{
    
public function __construct() {
    //Follow the LSP 
    $pEmployee=new PermanentEmployee();
    print_r($pEmployee->getSalary());
    echo "\n";
    print_r($pEmployee->calculateBouns());
    echo "\n";  
    
    
    $cEmployee=new ContractEmployee();
    print_r($cEmployee->getSalary());
    echo "\n";
    // construct empoyee voilates the LSP  // even though its thrws error but its not follwing LSP 
    print_r($cEmployee->calculateBouns());
    echo "\n"; 
}

}

new Main();

?>