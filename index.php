<?php   
include("includes/header.php");
//delet enskeld task



$newtodo = new Todo();
if (isset ($_GET['delete'])){
  $delete  = intval ($_GET['delete']);
  $newtodo -> delettodo($delete);
}

?>



<div class="content">
    <div class="main"> 
        <div class ="input"><form method="POST" >
            <div class = "error">
                <?php         
                if (isset($_SESSION["error"])){
                echo$_SESSION["error"];
                }
                unset($_SESSION["error"]);
                ?>
            </div>
                <label> lägg till task: </label> 
                <br>
                <input type="text" name="todo" placeholder="skriva nya tasks . . .">
                <button type="submit" name="submit"> Lägg till </button>
           
        </form>  

 </div>

<?php

$newtodo = new Todo();
if(isset($_POST["todo"])) {
  $todo = $_POST["todo"];
   $newtodo ->settodo($todo);
    }
    $list = $newtodo-> gettodo();
    foreach($list as $index => $todo){
 
       echo "<article class= 'divtask'>$todo <a class='button' href= 'index.php?delete=$index'><p> delete </p> </a> </article> ";
  }



?>



 <div  class="rensa">

   <p> <a href="rensa.php">Rensa allt </a> </p>
              

  </div>

 </div>
<?php   
include("includes/footer.php")
?>

