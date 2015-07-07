<?php

function __autoload($class){
    require str_replace('\\', '/', $class) . '.php';
}


$cat = new Cat ('garfield');

echo $cat->getName () === 'garfield'; // true

?>
    <br>

<?php

echo $cat->meow () === 'Cat garfield is saying meow';