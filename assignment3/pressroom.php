<!DOCTYPE html>
<html>
<body>

<h1>BIOmedix press room</h1>

<p>Welcome to the BIOmedix press room, click on a publication from the archive.</p>

<p>
Archive:<br>
<ul>
<li><a href="pressroom.php?pub=11-04-2014.html">April 2014</a></li>
<li><a href="pressroom.php?pub=09-05-2014.html">May 2014</a></li>
</ul>
</p>

<?php
$input = $_REQUEST['pub'];

if (empty($input))
  {
  exit();
  }
else
  {
  echo "<p><hr></p>";
  if(!file_exists($input))
    {
    exit("File not found: " . $input);
    }
    else
    {
    $file=fopen($input,"r");
    echo "You requested " . $input . "<br>";
    while(!feof($file)) {echo fgets($file);}
    fclose($file);
    }
  }
?>

</body>
</html>
