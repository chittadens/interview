<?php
class Shape{
    // public function Area($radius){

    // }
    // public function Area($length,$breath){

    // }
    function __call($name,$arg){
        if($name=='area'){
            switch(count($arg)){
                case 1:
                    return 3.14*$arg[0]*$arg[0];
                case 2:
                    return $arg[0]*$arg[1];
            }
        }
    }
}
$obj=new Shape();
echo "Area of circle is ".$obj->area(4);
echo "<br>";
echo "Area of rectangle is ".$obj->area(5,4);
?>