<?php
$page_name = 'home';
$metaDescription = '';
include 'compo/head.php';

include 'compo/hero.php';

$block_title = "Applications of AI";
$block_headline = "Artificial Intelligence has various applications in today's society. ";
$block_description = "It is becoming essential for today's time because it can solve complex problems with an efficient way in multiple industries, such as Healthcare, entertainment, finance, education, etc. AI is making our daily life more comfortable and fast.";
$block_link = '?p=Applications_of_AI';
$block_image = $img . 'application-of-ai.png';
include 'compo/page_block.php';

$block_title = "History of Artificial Intelligence";
$block_headline = "Artificial Intelligence is not a new word and not a new technology for researchers. ";
$block_description = "This technology is much older than you would imagine. Even there are the myths of Mechanical men in Ancient Greek and Egyptian Myths. Following are some milestones in the history of AI which defines the journey from the AI generation to till date development.";
$block_link = '?p=history_of_ai';
$block_image = $img . 'history-of-ai.png';
include 'compo/page_block.php';
