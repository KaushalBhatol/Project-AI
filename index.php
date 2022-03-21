<?php

/**
 * @autor Kaushal Bhatol
 * @since 10/03/2022
 */

/*  PAGE REQUIREMENTS
    $page_name = 'home';
    $metaDescription = '';
    include 'compo/head.php';
*/

$site_name = "The AI";

// METHOD FOR GATTING URL 
echo "<!-- ";
$page = $_GET['p'];
if ($page == "")
    $page = 'home';
echo " --->";

include 'page/' . $page . '.php';   // page accroding url
include 'compo/footer.php'; // footer component
