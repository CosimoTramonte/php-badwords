<?php

$enteredText = $_POST["enteredText"];
$explodedEnteredText = explode(' ', $enteredText);

$censoredWord = $_POST["censoredWord"];
$newText = str_replace($censoredWord, "***", $enteredText, $count);
$explodedNewText = explode(' ', $newText);
$totalWords = count($explodedNewText) - $count;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>PHP Badwords Result</title>
</head>
<body>

    <div class="container py-5">

        <div>
            <h3>This is your text</h3>
            <p><?php echo $enteredText ?></p>
            <h6>The length of the text is <?php echo count($explodedEnteredText) ?> words</h6>
            <h6>The length of the text is <?php echo strlen($enteredText) ?> </h6>
        </div>

        <div class="my-5">
            <h3>This is your New text</h3>
            <p><?php echo $newText ?></p>
            <h6>The length of the text is <?php echo $totalWords ?> words</h6>
            <h6>there are <?php echo $count ?> censured words</h6>
            <h6>The length of the text is <?php echo strlen($newText) ?> </h6>
        </div>


    </div>
    
</body>
</html>