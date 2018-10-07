<?php
    
    require('Phpmessage.php');

    class MessageBoard {
        var $messages = array();

            function _construct(){
                $this->receiveMessage();
                $this->loadData();
                $this->showAllMessages();
                $this->showForm();
            }
            function receiveMessage(){
                $this->saveData();
            }

            function loadData(){

            }
            function showAllMessages(){
                foreach($this->messages as $m){
                    $m->show();

                }
            }
            function showForm(){
                echo "<form action='' method='POST'>";
                echo "Name: "."<input type='text' name='username'>"."<br>";
                echo "Content: "."<input type='text' name='content' >";
                echo "<input type='submit'>";
                echo "</form>"
            }
    }
    $mb = new MessageBoard();

?>