<?php
class Calculator {
private $_fval, $_sval;
public function __construct( $fval, $sval ) {
$this->_fval = $fval;
$this->_sval = $sval;
}
public function add() {
return $this->_fval + $this->_sval;
}
public function subtract() {
return $this->_fval - $this->_sval;
}
public function multiply() {
return $this->_fval * $this->_sval;
}
public function divide() {
return $this->_fval / $this->_sval;
}
}



$UseCalculator = new Calculator(15, 10); 
echo "Addition ".$UseCalculator-> add()."\n<br>"; 
echo "Multiplay ".$UseCalculator-> multiply()."\n<br>"; 
echo "Subtract ".$UseCalculator-> subtract()."\n<br>"; 
echo "Divide ".$UseCalculator-> divide()."\n<br>"; 


?>