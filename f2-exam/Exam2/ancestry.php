<?php
 
class Ancestors
{
  public $prop1 = "--This is my Ancestry--";
 
  public function __construct()
  {
      echo ' ', __CLASS__, ' listed: ';
  }
 
  public function setProperty($newval)
  {
      $this->prop1 = $newval;
  }
 
  public function getProperty()
  {
      return $this->prop1 . " ";
  }
}
 
class Ellen_Chesterson extends Ancestors
{
  public function printancestry()
  {
      echo "Ellen Chesterson";
  }
}

class Cornelius_Chesterson extends Ellen_Chesterson
{
  public function printancestry()
  {
      echo "Cornelius Chesterson";
  }
} 

class Alfred_Green extends Cornelius_Chesterson
{
  public function printancestry()
  {
      echo "Alfred Green";
  }
} 

class Lucy_Green extends Alfred_Green
{
  public function printancestry()
  {
      echo "Lucy Green";
  }
} 

class Charles_Green extends Lucy_Green
{
  public function printancestry()
  {
      echo "Charles Green";
  }
} 

$obj1 = new Ellen_Chesterson;
$obj2 = new Cornelius_Chesterson;
$obj3 = new Alfred_Green;
$obj4 = new Lucy_Green;
$obj5 = new Charles_Green;

echo $obj1->printancestry();
echo $obj2->printancestry();
echo $obj3->printancestry();
echo $obj4->printancestry();
echo $obj5->printancestry();

echo $obj1->getProperty();
echo $obj2-->getProperty();
echo $obj3-->getProperty();
echo $obj4->getProperty();
echo $obj5->getProperty();
 
?>
