<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update a record in SCP file database</title>
    <link href="styles.css" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>
   <h1><b>Update the SCP file in the database</b></h1>
   
    <a href="index.php" class='btn3'>Back to Index page</a>
    
   

    
   
    <?php
    
    include "connection.php";
    $ID = $_GET['update'];
    $record = $connection->query("select * from SCP where ID=$ID");
    $array=$record->fetch_assoc();
    
    
    ?>
     
   
    <form method ="post" action="connection.php" class ="form-group">
         <input type="hidden" name="ID" value="<?php echo $array['ID']; ?>">
        <br>
        <label>Update the Item Number of the file:</label>
        <br>
        <input type="text" name="Item" value="<?php echo $array['Item']; ?>">  
        <br><br><br>

        <label>Update the Class of the file:</label>
        <br>
        <input type="text" name="Class" value="<?php echo $array['Class']; ?>">  
        <br><br><br>

        <label>Updatethe Description of the file:</label>
        <br>
       
        <textarea name="Description" value="<?php echo $array['Description']; ?>"> Description of file......</textarea>
        <br><br><br>

        <label>Update the special Containment of file:</label>
        <br>
          <textarea name="Containment"  value="<?php echo $array['Containment']; ?>"> Special containment of file........</textarea>
      
        <br><br><br>

        <label>Update Image of file:</label>
        <br>
        <input type="text" name="Image"  placeholder="e.g images/SCP-000.jpg" value="<?php echo $array['Image']; ?>">  
        <br><br><br>
        <input type="submit" name="update" value="Update record">
    </form>

</body>

</html>