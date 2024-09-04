<?php
echo __LINE__;  // Outputs the current line number


echo __FILE__;  // Outputs the full path of the current file


echo __DIR__;  // Outputs the directory of the current file


function myFunction() {
    echo __FUNCTION__;  // Outputs 'myFunction'
}
myFunction();


class MyClass {
    public function getClassName() {
        return __CLASS__;  // Outputs 'MyClass'
    }
}
$obj = new MyClass();
echo $obj->getClassName();


class MyClass {
    public function myMethod() {
        echo __METHOD__;  // Outputs 'MyClass::myMethod'
    }
}
$obj = new MyClass();
$obj->myMethod();


echo __NAMESPACE__;  // Outputs 'MyNamespace'


trait MyTrait {
    public function getTraitName() {
        return __TRAIT__;  // Outputs 'MyTrait'
    }
}
class MyClass {
    use MyTrait;
}
$obj = new MyClass();
echo $obj->getTraitName();

?>