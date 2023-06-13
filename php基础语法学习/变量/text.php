<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>111</p>
    <?php 
    
        $arr = array(1,2,3,4,5,6);

        $numParagraphs = 3;

        $count = 0;

        foreach ($arr as $p) {
        if ($count >= $numParagraphs) {
            break;
        }
        
        echo "<p>111</p>";

        $count++;
        
        }
    ?>

</body>
</html>