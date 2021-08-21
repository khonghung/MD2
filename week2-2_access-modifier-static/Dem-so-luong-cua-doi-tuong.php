<?php

class Application {
     private $name;
     public static $count = 0;

     public function __construct($name) {
        $this->name = $name;
        self::$count++;
     }
    public function __toString() {
        return "Application name" . $this->name;
    }

    }

    echo "Total object count : " . Application::$count."<br/>";
    $obj1 = new Application ("App one");
    echo "Total object count : " . Application::$count."<br/>";
    $obj2 = new Application ("App two");
    echo "Total object count : " . Application::$count."<br/>";
    echo $obj1 . "<br/>";
    echo $obj2 . "<br/>";