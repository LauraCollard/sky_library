<?php
session_start();
$results= $_SESSION["search_results"];

?>


<html>
    <head></head>
    <body>
        <div>
        <?php
            if (!empty($results)){
                foreach($results as $result){
                    echo "<br><img src=" . $result["image_url"] . ">";
                }
            } else {
                echo "Sorry, no results match your search.";
            }
        ?>
        </div>
        <a href="book_search.php">Search again</a>
    </body>
</html>