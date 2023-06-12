
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
  
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
 
    <title>SCP Files</title>
</head>

<body>
    <header>

        <div class="logo-img"><img src="images/scplogo.jpg" alt="SCP Logo" width="150" height="80"></div>
        <div class="name">
            <p>SCP File Database</p>
        </div>
    
      </header>
    <div class="motto">Secure, Contain, Protect</div>
   
 
    <?php include 'connection.php'; ?>
   <div class="navbar">
        <a href="index.php">Home</a>

        <div class="dropdown">
            <button class="dropbtn">SCP-Files
                <i class="fa fa-caret-down"></i>
          
            </button>
            <div class="dropdown-content">
 
              <?php foreach($result as $link): ?>
              <li class="nav-item active"><a href="index.php?link='<?php echo $link['Item']; ?>'" class="nav-link text-light"><?php echo $link['Item']; ?></a></li>
      
          <?php endforeach; ?>
            </div>

        </div>
        <a href="form.php">Add the file</a>
      
    </div>



        <?php
        
       if(isset($_GET['link']))
        {
            
            $Item = trim($_GET['link'], "'");
        
        //run sql query to retrieve record based on GET value
        $record = $connection->query("select * from SCP where Item ='$Item'");
        
        //turn record into associative row
        $array = $record->fetch_assoc();
        
        //variables to hold our id, update and delete values
        $ID=$array ['ID'];
         $update="update.php?update=" . $ID;
          $delete="connection.php?delete=" . $ID;
          
       
        
        //display contents of row in HTML
        echo "
        
     
        <div class='bodyContainer'>
     <p><b>Item:</b>{$array['Item']}</p>
     <p><b>Class:</b>{$array['Class']}</p>
  
     <p><b>Description:</b>{$array['Description']}</p>
     <p><b>Containment:</b>{$array['Containment']}</p>
     <p><b>Image:</b><br> <div class='IMAGE'><img src='{$array['Image']}' width='300' height='300' ></div></p>
     
    
 <div class='Button'>
    <a href='{$update}' button type='button' class='btn1'</button> Update Record</a>
    <a href='{$delete}' button type='button' class='btn2'</button> Delete Record</a>

    </div>
    
</div>

        ";
        }
        else
        { 
        //default view
        echo "
            <h1><b><br> Welcome to the SCP File database. <br><br>
            Click on the SCP-Files above to view from the database.</b> </h1>
            ";
        
        }
        
      
       
       ?>
    </div>
   
    
  
</body>

</html>