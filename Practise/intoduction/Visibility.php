<?php
/**
 * Define MyClass
 *Property Visibility
 */
// class MyClass
// {
//     public $public = 'Public';
//     protected $protected = 'Protected';
//     private $private = 'Private';

//     function printHello()
//     {
//         echo $this->public;
//         echo $this->protected;
//         echo $this->private;
//     }
// }

// $obj = new MyClass();
// echo $obj->public; // Works
// // echo $obj->protected; // Fatal Error
// // echo $obj->private; // Fatal Error
// $obj->printHello(); // Shows Public, Protected and Private


// /**
//  * Define MyClass2
//  */
// class MyClass2 extends MyClass
// {
//     // We can redeclare the public and protected properties, but not private
//     public $public = 'Public2';
//     protected $protected = 'Protected2';

//     function printHello()
//     {
//         echo $this->public;
//         echo $this->protected;
//         // echo $this->private;
//     }
// }

// $obj2 = new MyClass2();
// echo $obj2->public; // Works
// // echo $obj2->protected; // Fatal Error
// // echo $obj2->private; // Undefined
// $obj2->printHello(); // Shows Public2, Protected2, Undefined

/**
 * Define MyClass
 *Method Visibility
 */
// class MyClass
// {
//     // Declare a public constructor
//     public function __construct() { }

//     // Declare a public method
//     public function MyPublic() { }

//     // Declare a protected method
//     protected function MyProtected() { }

//     // Declare a private method
//     private function MyPrivate() { }

//     // This is public
//     function Foo()
//     {
//         $this->MyPublic();
//         $this->MyProtected();
//         $this->MyPrivate();
//     }
// }

// $myclass = new MyClass;
// $myclass->MyPublic(); // Works
// // $myclass->MyProtected(); // Fatal Error
// // $myclass->MyPrivate(); // Fatal Error
// $myclass->Foo(); // Public, Protected and Private work


// /**
//  * Define MyClass2
//  */
// class MyClass2 extends MyClass
// {
//     // This is public
//     function Foo2()
//     {
//         $this->MyPublic();
//         $this->MyProtected();
//         $this->MyPrivate(); // Fatal Error
//     }
// }

// $myclass2 = new MyClass2;
// $myclass2->MyPublic(); // Works
// $myclass2->Foo2(); // Public and Protected work, not Private

// class Bar 
// {
//     public function test() {
//         $this->testPrivate();
//         $this->testPublic();
//     }

//     public function testPublic() {
//         echo "Bar::testPublic\n";
//     }
    
//     private function testPrivate() {
//         echo "Bar::testPrivate\n";
//     }
// }

// class Foo extends Bar 
// {
//     public function testPublic() {
//         echo "Foo::testPublic\n";
//     }
    
//     private function testPrivate() {
//         echo "Foo::testPrivate\n";
//     }
// }

// $myFoo = new Foo();
// $myFoo->test(); // Bar::testPrivate 
//                 // Foo::testPublic
/**
 * Define MyClass
 *Constant Visibility
 */
class MyClass
{
    // Declare a public constant
    public const MY_PUBLIC = 'public';

    // Declare a protected constant
    protected const MY_PROTECTED = 'protected';

    // Declare a private constant
    private const MY_PRIVATE = 'private';

    public function foo()
    {
        echo self::MY_PUBLIC;
        echo self::MY_PROTECTED;
        echo self::MY_PRIVATE;
    }
}

$myclass = new MyClass();
MyClass::MY_PUBLIC; // Works
MyClass::MY_PROTECTED; // Fatal Error
MyClass::MY_PRIVATE; // Fatal Error
$myclass->foo(); // Public, Protected and Private work


/**
 * Define MyClass2
 */
class MyClass2 extends MyClass
{
    // This is public
    function foo2()
    {
        echo self::MY_PUBLIC;
        echo self::MY_PROTECTED;
        echo self::MY_PRIVATE; // Fatal Error
    }
}

$myclass2 = new MyClass2;
echo MyClass2::MY_PUBLIC; // Works
$myclass2->foo2(); // Public and Protected work, not Private
?>