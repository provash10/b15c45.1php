<!-- //Connected/linkup this page with database -->
<?php
     include 'config.php';
?>

<!-- Delete Data Query -->
<?php
     
    if(isset($_GET['id'])){
         //Global variable
    //  $_GET[''];
    //  $_GET['id'];
     $id =$_GET['id'];

     //  $query ="DELETE FROM students WHERE id = 1";
      $query ="DELETE FROM students WHERE id = $id";
 
     //  mysqli_query($connection,$query);
      $deleteData = mysqli_query($connection,$query);
       
      //check it for testing
      if($deleteData){
          header('location:index.php');
     }
      else{
          echo "Filed to Delete Data!";
     }
    }
    
    
    // before if conditon

    //  //Global variable
    // //  $_GET[''];
    // //  $_GET['id'];
    // $id =$_GET['id'];

    // //  $query ="DELETE FROM students WHERE id = 1";
    //  $query ="DELETE FROM students WHERE id = $id";

    // //  mysqli_query($connection,$query);
    //  $deleteData = mysqli_query($connection,$query);
      
    //  //check it for testing
    //  if($deleteData){
    //      header('location:index.php');
    // }
    //  else{
    //      echo "Filed to Delete Data!";
    // }

    //index.php >>> <a href="#" class="btn btn-danger"> Delete</a>
    // <a href="delete.php" class="btn btn-danger"> Delete</a>
    //delete button a click korar sathe sathe delete.php page a nia jabe and je id delete korar jonno target kora hoyese seti delete kore dibe.
    //je button delete korbo seti delete korar jonno akta system korte hobe
    //system >> 
    //<a href="delete.php?id='.$id.'" class="btn btn-danger"> Delete</a>
    //delete a gele showing >>> http://localhost/B15/Class45/delete.php?id=1/2/3/ jeti dorbo seti dekhabe.
    //Query parameter a kono data thakle seti k dorar jonno $_GET name a akti global variable ase.
    // $_GET[''];
    // $_GET['id'] ;
    //<a href="delete.php?id='.$id.'" class="btn btn-danger"> Delete</a>
    // index.php >>> $id   = $row['id']; 
    // alada akta variable a rakbo.......
    // $id =$_GET['id'];
    // $query ="DELETE FROM students WHERE id = $id";
    // browser a keu id nia asle or likle error jeno na ase sejonno >>> full code k condition e rakte hobe.
    //if(isset($_GET['id'])){delete.php full code}


    // delete.php 

    //     <td>
    //         <a href="#" class="btn btn-primary"> Edit</a>
    //          // <a href="#" class="btn btn-danger"> Delete</a>
    //         // <a href="delete.php" class="btn btn-danger"> Delete</a>
    //         <a href="delete.php?id='.$id.'" class="btn btn-danger"> Delete</a>
    //     </td>
?>