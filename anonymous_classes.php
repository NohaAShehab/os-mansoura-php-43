<?php


interface DisplayMsg {
    const font='bold';
    public function printMsg(string $msg);
}


class Application {
    private $displayer;
    public function getDisplayer(): DisplayMsg {
        return $this->displayer;
    }
    public function setPrinter(DisplayMsg $dismsg) {
        $this->displayer = $dismsg;
    }
}

$p =  new Application();
$p2=  new Application();


$p->setPrinter(new class implements DisplayMsg{
    function printMsg(string $msg)
    {
       echo "<h1>{$msg} </h1>";
    }
});

$obj1=$p->getDisplayer();
var_dump($obj1);
$obj1->printMsg("Hello from object 1 ");


$p2->setPrinter(new class implements DisplayMsg{
    function printMsg(string $msg)
    {
        echo "<h3 style='color:red;'>{$msg} </h3>";
    }
});

$obj2=$p2->getDisplayer();
var_dump($obj2);
$obj2->printMsg("Hello from object 2 ");



//class Mymessage implements  DisplayMsg{
//    function printMsg(string $msg)
//    {
//        echo "<h1> {$msg} </h1>";
//        // TODO: Implement printMsg() method.
//    }
//}
//
//$message = new Mymessage();
//$p->setPrinter($message);
//
//echo "----";



