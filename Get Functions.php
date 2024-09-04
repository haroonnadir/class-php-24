<?php
class MyClass {}
$obj = new MyClass();
echo get_class($obj);  // Outputs 'MyClass'


class ParentClass {}
class ChildClass extends ParentClass {}
echo get_parent_class('ChildClass');  // Outputs 'ParentClass'


class MyClass {
    public function methodOne() {}
    public function methodTwo() {}
}
print_r(get_class_methods('MyClass'));
// Outputs: Array ( [0] => methodOne [1] => methodTwo )


class MyClass {
    public $prop1 = 'value1';
    private $prop2 = 'value2';
}
print_r(get_class_vars('MyClass'));
// Outputs: Array ( [prop1] => value1 )


class MyClass {
    public $prop1 = 'value1';
    private $prop2 = 'value2';
}
$obj = new MyClass();
print_r(get_object_vars($obj));
// Outputs: Array ( [prop1] => value1 )



class MyClass {
    public function getClassName() {
        return get_called_class();
    }
}
$obj = new MyClass();
echo $obj->getClassName();  // Outputs 'MyClass'



class MyClass {}
print_r(get_declared_classes());
// Outputs: Array ( [0] => MyClass [1] => stdClass ... )

interface MyInterface {}
print_r(get_declared_interfaces());
// Outputs: Array ( [0] => MyInterface [1] => Iterator ... )



trait MyTrait {}
print_r(get_declared_traits());
// Outputs: Array ( [0] => MyTrait [1] => ArrayAccess ... )


class OriginalClass {}
class_alias('OriginalClass', 'AliasClass');
$obj = new AliasClass();
echo get_class($obj);  // Outputs 'OriginalClass'

?>