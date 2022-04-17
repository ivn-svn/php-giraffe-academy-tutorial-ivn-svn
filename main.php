<!DOCTYPE html>
<html>

<body>
    <h1>Svetlin´s PHP</h1>

    <?php 



echo "The author is $name. $name started working on this by following a YouTube tutorial. For more info, contact $name";


$favcolor = "red";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}
?>
 


</body>

</html>