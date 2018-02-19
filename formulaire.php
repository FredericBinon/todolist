
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
  <main>
    <div class="ajout">
		  <h2 style="font-style: 'Hervetica';">Add a new task.</h2>
	  </div>
	  <form method="post" action="todolist.php" name="formulaire" id="formulaire" class="textarea">
      <input type="textarea" name="area" placeholder="New task">
	  	<button type="submit" name="submit" form="formulaire">Add</button>
	  </form>
    <?php
      if (isset($_POST['area'])){
          $area =  trim($_POST['area']);
        if (!empty($area)){
          $sanetize = filter_var($area, FILTER_SANITIZE_STRING);
          echo $sanetize;
        }
        else{
          echo "There is a problem";
        }
      }

    $file="todo.json";
    $current=file_get_contents($file);
    $current.=$sanetize ."\n";
    file_put_contents($file,$current);
    ?>
  </main>
</body>
</html>
