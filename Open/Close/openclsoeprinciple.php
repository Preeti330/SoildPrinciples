<?php

// Open Close Principle which tells that code is open for extensions but not for modifications 
// i.e Close principle tells , we can extend the entite but we cant modify the entiete 

// let consider , we have to calculate the area of circle , squre .. 
//  if in future if its needed calulute area of reactangle,tariangle ...?? then every time we gave to come and modify the 
// Area class , so to avoid this .


/*
class Area{
    
    public function circleArea($r){
        return 3.45 * $r;
    }

    public function squreArea($a,$b){
        return $a*$b;
    }

}
*/

// create an interface class with shape method to define method itself by other class 
// and immplement interface to calulate area based on shape 


interface Area{

    public function area();

}


class CircleArea implements Area{
//  $r;
   public function __construct( $radius) {
    $this->r = $radius;
   } 
    public function area(){
        return 3.14 * $this->r;
    }

}

class ReactangleArea implements Area{

    public function __construct($height,$width) {
        $this->height = $height;
        $this->width = $width;
    }

    public function area(){
        return $this->height * $this->width;
    }

}


$a=new ReactangleArea(2,2);
print_r($a->area());
echo "\n";
$b=new CircleArea(5);
print_r($b->area());


// hence it makes sures that the above Area interface  is use to change the shape of objct as its needed 
// instaed of modifying the same class on every time , 
// so its allowing for extensions and not for modification of Area 


?>