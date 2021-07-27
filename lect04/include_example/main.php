<?php
include "header.php"
?>


<?php
if (isset($_GET["page"])) {
    switch ($_GET["page"]) {
        case "home":
            include("home.php");
            break;
        case "business":
            include("business.php");
            break;
        case "contact":
            break;
        case "about":
            break;
        default:
            include("home.php");
    }

}

?>


<?php
include "footer.php"
?>