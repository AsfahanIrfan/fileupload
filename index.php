<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        
        function sConsole(e) {
            event.preventDefault(e);
  var data = document.getElementById("file");
  console.log(data.value);
  
}
    </script>
</head>

<body>
  
    <form name="" id="" method="post" onsubmit="sConsole(e)" action="read_f.php" enctype="multipart/form-data">
    <input type="file" id="file" />    
    <button type="submit" name="add_data">Submit</button>
    </form>

     <?php
    // if (!empty($_POST['add_data'])) {
    //     echo 'Hello';
    // }
    ?> 

</body>

</html> -->
<!DOCTYPE html>  
<html>  
<head>  
<title>Techno Smarter Tutorials</title>
</head> 
<body> 
<form method="post" enctype="multipart/form-data" action="file.php">
<label>Select CSV File:</label>
<input type="file" name="file">
<br>
<input type="submit" name="submit" value="Import">
</form>
</body>  
</html>