<?php

$sql = "select * 
      from `topics`,
           `options` 
      where `topics`.`id`=`options`.`topic_id` AND 
            `topics`.`id`='{$_GET['id']}'";

$rows = q($sql);
?>

<h1><?= $rows[0]['topic']; ?></h1>
<!-- topic這個項目從0開始出現 -->

<ol style="font-size:1.2rem">
    <?php
    // foreach ($rows as $row) {
    //     $number =   array($row['count']);
    //     echo array_sum($number);
    // }這邊用JS做吧==

    
    foreach ($rows as $row) {
        if (isset($_SESSION['user'])) {
            echo "<span>{$row['opt']}</span>";
            echo "<div class='progress'>";
            echo "<div class='progress-bar' role='progressbar' style='width: 25%;' aria-valuenow='25' aria-valuemin='0' aria-valuemax='100'>";
            echo $row['count'];
            echo '</div>';
            echo '</div>';
            echo "<br>";
        } else {
        }
    }
    ?>
</ol>