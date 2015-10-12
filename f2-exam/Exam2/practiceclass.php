<?php

abstract class ParentClass {
    public function doSomething() {
        echo "done.\n";
    }
}

class ChildClass extends ParentClass {
    public function doSomething() {
        echo "attempting something.\n";
        parent::doSomething();
    }
}

$obj = new ChildClass();
$obj->doSomething();

?>