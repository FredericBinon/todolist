<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="./style.css" type="text/css" />
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <div class='principal'>
    <div class="Oui">
		  <h2>Tasks you still have to do</h2>
      <?php
      $file="todo.json";
      $current=file_get_contents($file);
      ?>
      <ul>
        <?php echo "$current"?>
      </ul>
	  </div>
  <hr/>
     <h2>Tasks done</h2>
  </div>
</body>
</html>
