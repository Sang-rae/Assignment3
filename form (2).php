<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCP file</title>
    <link href="styles.css" rel="stylesheet">
    
</head>

<body>
   <h1><b>Enter the SCP file into database</b></h1>
  
    <a href="index.php" class='btn3'>Back to Index page</a>
    
   

 
   
   
    <form method ="post" action="connection.php" class ="form-group">
        <br>
        <label>Enter the Item Number of the file:</label>
        <br>
        <input type="text" name="Item" placeholder="Item#"  >
        <br><br><br>

        <label>Enter the Class of the file:</label>
        <br>
        <input type="text" name="Class" placeholder="Class"  >
        <br><br><br>

        <label>Enter the Description of the file:</label>
        <br>
       
        <textarea name="Description" class="textarea">Description of file........</textarea>
        <br><br><br>

        <label>Enter the special Containment of file:</label>
        <br>
          <textarea name="Containment"  class="textarea">Special containment of file........</textarea>
      
        <br><br><br>

        <label>Enter Image of file:</label>
        <br>
        <input type="text" name="Image" placeholder="e.g images/SCP-000.jpg"  >
        <br><br><br>
        <input type="submit" name="submit"  value="Submit">
    </form>

</body>

</html>