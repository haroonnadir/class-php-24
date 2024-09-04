<?php
if (class_exists('MyClass')) {
    echo 'MyClass exists!';
} else {
    echo 'MyClass does not exist.';
}


if (interface_exists('MyInterface')) {
    echo 'MyInterface exists!';
} else {
    echo 'MyInterface does not exist.';
}


class MyClass {
    public function myMethod() {}
}
$obj = new MyClass();
if (method_exists($obj, 'myMethod')) {
    echo 'myMethod exists!';
} else {
    echo 'myMethod does not exist.';
}

trait MyTrait {}
if (trait_exists('MyTrait')) {
    echo 'MyTrait exists!';
} else {
    echo 'MyTrait does not exist.';
}


class MyClass {
    public $myProperty;
}
$obj = new MyClass();
if (property_exists($obj, 'myProperty')) {
    echo 'myProperty exists!';
} else {
    echo 'myProperty does not exist.';
}


class MyClass {}
$obj = new MyClass();
if (is_a($obj, 'MyClass')) {
    echo 'obj is an instance of MyClass!';
} else {
    echo 'obj is not an instance of MyClass.';
}


class ParentClass {}
class ChildClass extends ParentClass {}
$obj = new ChildClass();
if (is_subclass_of($obj, 'ParentClass')) {
    echo 'obj is a subclass of ParentClass!';
} else {
    echo 'obj is not a subclass of ParentClass.';
}

?>