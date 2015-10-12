<?php
 
class Taxonomy
{
  public $prop1 = "--This is my Taxonomy--";
 
  public function __construct()
  {
      echo ' ', __CLASS__, ' listed: ';
  }

}
 
class Domain extends Taxonomy
{
  public function printtaxonomy()
  {
      echo "Domain-Eukarya ";
  }
}

class Kingdom extends Domain
{
  public function printtaxonomy()
  {
      echo "Kingdom-Animalia ";
  }
} 

class Phylum extends Kingdom
{
  public function printtaxonomy()
  {
      echo "Phylum-Chordata";
  }
} 

class Class_ extends Phylum
{
  public function printtaxonomy()
  {
      echo "Class-Mammalia ";
  }
} 

class Order extends Class_
{
  public function printtaxonomy()
  {
      echo "Order-Primates ";
  }
} 

class Family extends Order
{
  public function printtaxonomy()
  {
      echo "Family-Hominidae ";
	  echo "Family-Cichildae ";
  }
} 

class Genus extends Family
{
  public function printtaxonomy()
  {
      echo "Genus-Homo ";
	  echo "Genus-Bos ";
  }
} 

class Species extends Genus
{
  public function printtaxonomy()
  {
      echo "Species-Homo Sapien ";
	  echo "Species-FelisCatus ";
  }
} 


$obj1 = new Domain;
$obj2 = new Kingdom;
$obj3 = new Phylum;
$obj4 = new Class_;
$obj5 = new Order;
$obj6 = new Family;
$obj7 = new Genus;
$obj8 = new Species;

echo $obj1->printtaxonomy();
echo $obj2->printtaxonomy();
echo $obj3->printtaxonomy();
echo $obj4->printtaxonomy();
echo $obj5->printtaxonomy();
echo $obj6->printtaxonomy();
echo $obj7->printtaxonomy();
echo $obj8->printtaxonomy();



 
?>
