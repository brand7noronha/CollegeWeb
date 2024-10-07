<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
    <?php
    echo $msg."<br>";

    foreach($results as $object){
        echo $object-> name."<br>";
    }
    ?>
</body>
</html>