<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$book_title = "the TALE of Two Cities - Charles dickens";

$num_chars = strlen($book_title);
$num_words = str_word_count($book_title);

echo "Number of characters: " . $num_chars . "<br/>";
echo "Number of words: " . $num_words . "<br/>";

$uc_book_title = strtoupper($book_title);
$lc_book_title = strtolower($book_title);

echo "Upper: " . $uc_book_title . "<br/>";
echo "Lower: " . $lc_book_title . "<br/>";

$uc_words_book_title = ucwords($lc_book_title);
$uc_first_book_title = ucfirst($lc_book_title);

echo "UC Words: " . $uc_words_book_title . "<br/>";
echo "UC First: " . $uc_first_book_title . "<br/>";
?>
</body>
</html>