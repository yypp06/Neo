<?php

    class Message{
        var $name;
        var $time;
        var $content;

        function _construct($n, $t, $c){
            $this->name = $n;
            $this->time = $t;
            $this->content = $c;
        }
        function show(){
            echo "Name: ".$this->name."<br>";
            echo "Time: ".$this->time."<br>";
            echo "Content: ".$this->content."<br>";
            echo "==================================="<"br">;


        }
    }
?>