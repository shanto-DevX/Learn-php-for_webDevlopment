<?
// If Statement
/* $age = 18;

if($age >= 18){
    echo "$age You are Adult & You can Voted!";
} */
?>



<?
//  if else Statement
/* $age = 17;

if($age >= 18){
    echo "Your Age is : $age You are Adult & You can Voted!";
}else{
    echo "Your Age is : $age You are Not Adult & You can't Voted!";
} */
?>

<?
// else If Statement
/* $age = 19;

if($age >= 18){
    echo "Your Age is : $age You are Adult & You can Voted!";
}elseif($age <= 18){
    echo "Your Age is : $age You are Not Adult & You can't Voted!";
}
else{
    echo "Wrong Input";
} */
?>
<?
$day = "staterday";

switch($day){
    case "friday":
        echo "Its off day";
        break;
    case "staterday":
        echo "Its Working Day";
        break;
    default:
    echo "Working day";
}
?>