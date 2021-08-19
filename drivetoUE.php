<?php
if(isset($_GET['submit'])){
    $id=$_GET['id'];
$homepage= file_get_contents('https://drive.google.com/u/0/uc?id='.$id.'&export=download');
echo $homepage;
}
else{
    echo "
    <!DOCTYPE html>
    <html>
    <head>
    <meta name='viewport' content='width=device-width'>
    <title>
    your drive
    </title>
    <style>
    body{
    display:flex;
    text-align:center;
    align-content:center;
    justify-content:center;
    align-items:center;
    justify-items:center;
    }
    #texts{
    padding:20px;
    }
    #sub{
        padding:20px;
    }
    </style>
    </head>
    <body>
    <form action='' method='get'>
    <input type='text' id='texts' name='id'>
    <input type='submit' id='sub' value='view me' name='submit'>
    </form>
    </body>
    </html>";
}
?>