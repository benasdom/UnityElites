
<?php 
if(isset($_POST['submit'])){

 $UN=mysqli_real_escape_string($conn,$_POST['submit']);
 $rename=mysqli_real_escape_string($conn,$_POST['dir']);
 $newname=mysqli_real_escape_string($conn,$_POST['indir']);
 $UPFiles=$_FILES['site']['name'];
 $tmpName=$_FILES['site']['tmp_name'];
 $fileSize=$_FILES['site']['size'];
 $fileError=$_FILES['site']['error'];
 $fileType=$_FILES['site']['type'];
 $fileExt=explode(".",$UPFiles);
 $fileActExt=strtolower(end($fileExt));
 $allowed= array("html","css","php","js");
 $uehots="C:\unityelites\UEhosting";
 $UPN=$newname.".".$fileActExt;

 $dates=date("y-m-d-h:i:s:a");
 ?>
  <?php
  

  /* EMAIL VERIFICATION*/ 




if (mkdir($uehots."/$rename", 0777))

{
    if (in_array($fileActExt,$allowed))
    {
    if ($fileError===0){
        if ($fileSize < 1000000000){
    
            $fileDestination=$rename.'/'.$UPN;

           
         
   
  
            move_uploaded_file($tmpName,$fileDestination);
  
           
            }
        }
        else {echo"too big";}
    }
    else {echo "error";}
    
    
    
    
    
    
    
    
    
    echo "Your site has been hosted in $rename";}
else{
    echo "Sorry your site failed to be uploaded into our systems";
}
}

?>




