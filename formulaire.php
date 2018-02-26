
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <div class='principal'>
	  <form method="post" action="todolist.php" name="formulaire" id="formulaire" class="textarea">
      <input type="textarea" name="area" placeholder="New task">
	  	<button type="submit" name="submit" form="formulaire">Add</button>
	  </form>
    <?php
      if (isset($_POST['area'])){
          $area =  trim($_POST['area']);
        if (!empty($area)){
          $sanetize = filter_var($area, FILTER_SANITIZE_STRING);

            $file="todo.json";
            $current=file_get_contents($file);
            $current.="<li><input type='checkbox'><label>$sanetize</label><button class='delete'>Delete</button></li> \n";
            file_put_contents($file,$current);
        }
        else{
          echo "Please write your task in the input.";
          $sanetize="";
        }
      }
    ?>
  </div>
<hr/>
</body>
</html>
