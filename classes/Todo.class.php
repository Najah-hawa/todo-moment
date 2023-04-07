<?php
class Todo{
//properties 
private $todo;
private $todo_list = []; 



//constructor
function __construct(){
    //check ig file exists 
    if(!file_exists("todo.json")){
        file_put_contents("todo.json", "[]");
    }
    //read content of file
$json = file_get_contents("todo.json");
$this-> todo_list = json_decode($json);

}


//methods
//set todo 
public function settodo(string $todo):bool {

    if( strlen ($todo) > 5){
        $this->todo= $todo; 
        $this ->savetodo();
    return true;
    }else {
        $error = "<p> Ange en task med minst fem bokstäver. </p>";
        $_SESSION["error"]=  $error;
     
        return false;
    }
   
}

//save todo 
public function savetodo() : bool {

 //check if todo send 
    if(isset ($this->todo)){
       array_push($this->todo_list, $this->todo);    // add to array 
       //save to json 
      //konvetera till json
       $json = json_encode($this->todo_list);
       file_put_contents("todo.json", $json);
    return true;  
    }else {
    return false;
    }
   

}


//return todo list 
public function gettodo():array {
    return $this->todo_list;

}

}

