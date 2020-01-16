<?php
$films = array(
            "comedy" => array (
                            0 => "Pink Panther",
                           1 => "johnny English",
                            2 => "Tommy Boy"),
            "action" => array (
                            0 => "Die Hard",
                            1 => "Expendables"),
            "epic" => array (
                            0 => "The Lord of the Rings"),
            "Romance" => array (
                            0 => "Romeo and Juliet")
);
$favorites = array(
   array(
       "name" => "Dave Punk",
       "phone" => "5689741523",
       "email" => "davepunk@gmail.com",
   ),
   array(
       "name" => "Monty Smith",
       "phone" => "2584369721",
       "email" => "montysmith@gmail.com",
   ),
   array(
       "name" => "John Flinch",
       "phone" => "9875147536",
       "email" => "johnflinch@gmail.com",
   )
);
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Map202</title>
</head>

<body>
<?php
echo 'Table 1';
echo '<table border="1">';
echo '<tr><th>Movies</th><th>Genre</th></tr>';
foreach( $films as $film=>$values )
{
    
    foreach( $values as $key )
    {
echo '<tr>';
echo '<td>'.$key.'</td>';
echo '<td>'.$film.'</td>'; 
echo '</tr>';
    }


   
}


echo '</table>';
echo '<br>';
echo 'Table 2';
echo '<table border="1">';
echo '<tr><th>Name</th><th>Phone</th><th>Email</th></tr>';
foreach( $favorites as $items )
{
    echo '<tr>';
    foreach( $items as $key=>$values )
    {

echo '<td>'.$values.'</td>'; 

    }
echo '</tr>';

   
}
echo '</table>';

?>

</body>

</html>
