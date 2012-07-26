<?php

/*usual arrays
 * 
 * $names = array(
    'Jessy',
    'Andrew',
    'Roman',
    'Alex',
    'Tony',
);
 *
 */


$names = array(
  'american' =>  'Jefri',
  'russian' => 'Андрей',
  'mexican' =>'Roman',
  'eglish' => 'Alex',
  'span' =>'Tom',
  'latvian' => 'Inga'  
);

echo $names['span'];
 
 
if (isset($_REQUEST['check'])) {
echo $_POST['name'];    
}



?>

<form action="index.php?check" method="post" />
    Name: <input type="text" name="name" /><br />
    <input type="submit" value="Print name" />
    
</form>