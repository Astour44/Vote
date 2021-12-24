<?php
$id = $_GET['id'];
$subject = find('topics', $id);

$options = all('options', ['topic_id' => $id]);

?>

<h2 class="d-flex justify-content-center dd"><?= $subject['topic']; ?></h2>
<ol>
    <form action="./api/save_vote.php" method="post">
        <?php
        foreach ($options as $key => $opt) {
            echo "<label>";
            echo "<div class='alert alert-dark ff w-75' role='alert'>";
            echo "<input type='radio' name='opt' value='{$opt['id']}'>";
            echo $opt['opt'];
            echo "</div>";
            echo "</label>";    
        }
        //這邊有設定登入後才能點進去投票
        ?>
</ol>
<input type="submit" value="投票">
</form>