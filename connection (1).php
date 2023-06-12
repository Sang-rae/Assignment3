<?php
//Database credentials
$user="a30066205_Kim";
$db="a30066205_SCP Assignment3";
$pw="Maylove0224";

//Database connection
$connection = new mysqli('localhost',$user,$pw,$db);
//variable that returns all records in the database

$result=$connection->query("select* from SCP");

//data from form.php(create record

if(isset($_POST['submit']))
{
    //create variables from our posted from data
    $Item =$_POST['Item'];
    $Class =$_POST['Class'];
    $Description=$_POST['Description'];
    $Containment=$_POST['Containment'];
    $Image=$_POST['Image'];
    
    //create a sql insert command
    $insert ="insert into SCP(Item, Class, Description, Containment,Image)
    values('$Item', '$Class' , '$Description' ,'$Containment', '$Image')";
    
    if($connection->query($insert) === TRUE)
    {
        echo"
        <h1>Record added successfully</h2>
        <p><a href='index.php'>Return to index page</a></p>
        
        ";
    }
    else
    {
        echo"
        <h1>Error adding record</h2>
        <p><a href='form.php'>Return to form</a></p>
        
        ";
    }

}  

// update record
 

if(isset($_POST['update']))
{
    //create variables from our posted from data
    $ID=$_POST['ID'];
    $Item =$_POST['Item'];
    $Class =$_POST['Class'];
    $Description=$_POST['Description'];
    $Containment=$_POST['Containment'];
    $Image=$_POST['Image'];
    
    //create update sql command/query
    $update ="update SCP set Item='$Item', Class='$Class', Description='$Description', Containment='$Containment',Image='$Image' where ID='$ID'";
    
 if($connection ->query($update)=== TRUE)
 {
     echo "
       <h1> Record updated successfully</h1>
       <p><a href ='index.php'> Returen to index page</a></p>
     ";
 }
 else
 {   echo " 
     <h1>Error updating data</h1>
     <p>{$connection->error}</p>
     <p><a href='update.php'>Return to form</a></p>
     ";
 
}
}





       

   //delete record function
        if(isset($_GET['delete']))
        {
            $ID=$_GET['delete'];
            
            //delete squl command
            $delete="delete from SCP where ID=$ID";
        
            
            if($connection->query($delete) === TRUE)
            {
              echo"
             
              <h1>Record Deleted successfully</h1>
             <p><a href='index.php'>Return to index page</a></p>
              
              ";  
            }else
            {
                 echo"
             
              <h1>Record NOT Deleted</h1>
              <p>{$connection->error}</p>
              <p><a href='index.php>Return to index page</a></p>
              
              ";  
            }
            
        }

        
?>