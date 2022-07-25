
<?php
$dir = "./post/";
if($_GET['post']==""){


// Sort in ascending order - this is default
$a = scandir($dir);

// Sort in descending order

//print_r($a);
//print_r($b);
foreach ($a as &$value) {
    if ( strlen($value)>3 ){
        
        $value=str_replace(".txt","",$value);
        ?>
        <a href="?post=<?=$value ?>"><?=$value ?></a>
<hr>
        <?php
    }
}
// $arr is now array(2, 4, 6, 8)
unset($value); // break the reference with the last element
//$a = substr("",6);
}else{
    //echo 'post';
    
    $apost=file_get_contents($dir.$_GET['post'] . ".txt");
echo "<h1>".substr($apost,5)."</h1>";
echo "<br>";
echo  $apost;  
}
?>