<?php
//Interface segrigation Principle ISP : 
//which tells that class should not be forced to immplement the interface which are not in use .

//consider we have an interface Ivehicle which is having two meothds Ifly and IDrive 
// and we have to create a class flying class which inculdes iDrive and IFly methods of interface Ivehicle

interface Ivehicle{
    function Ifly();
    function Idrive();
}

class CarFly implements Ivehicle{
    // for car fly which crated cars here they can even drive and fly 
    function Ifly(){

        return "I can Fly ";
    }

    function Idrive(){

        return "I can Drive";
    }
}

class Car implements Ivehicle{
    // this should drive only , so here we have to throw error for Ifly 
    function Ifly(){
        throw new Exception("throw errors");
    }

    function Idrive(){
        return "I can Drive";
    }

}

// in the above case Car class is forcing to immplement both , this should not happen in interface seggrigation proncple 

// solution : instaed of creating large interface , create interface with less fucntions 
// and where ever its needed inculdes the multiple inheritance 

interface Vechicle{
    function Idrive();
}
interface Fly{
    function Ifly();
}

class CarCopy implements Vechicle{
    function Idrive(){
        return "i can drive";
    }
}

class CarFlyCopy implements Vechicle,Fly{
 
    function Idrive(){
        return "i can drive";
    }

    function Ifly(){
        return "i can fly ";
    }
    
}


?>