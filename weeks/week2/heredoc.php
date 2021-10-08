<?php
// using heredoc

$book = 'Handmaid\'s Tale';
$author = 'Margaret Atwood';
$character = 'June';
$actor = 'Elisabeth Moss';

$content = <<<BYPASS
My favorite book is $book, written by author $author, and is presently a miniseries on HULU. HULU's viewing audience is excited about the miniseries and is and looks forward to the 5th season of "A Handmaid's Tale!" 

$actor's rendition as $character is right on! Once this content is corrected, it will display properly; my content will displayed in green, my variables in red.
BYPASS;

echo $content;