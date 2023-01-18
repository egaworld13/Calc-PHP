<?php 
class Calc{
  public $operator;
  public $num1;
  public $num2;

  public function __construct(string $one, int $two, int $three)
  {
    $this->operator =$one;
    $this->num1 =$two;
    $this->num2 =$three;
  }
  public function calculator(){
    switch ($this->operator) {
      case 'add':
        $reuslt = $this->num1+$this->num2;
        return $reuslt;
        break;
      case 'sub':
        $reuslt = $this->num1-$this->num2;
        return $reuslt;
        break;
      case 'div':
        $reuslt = $this->num1/$this->num2;
        return $reuslt;
        break;
      case 'mul':
        $reuslt = $this->num1*$this->num2;
        return $reuslt;
        break; 
      
      default:
        echo"Error!";
        break;
    }
  }
}
  ?>