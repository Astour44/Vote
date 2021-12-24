<p class="d-flex justify-content-center cc">
    問卷管理

<a class="btn btn-info" href="?do=add_subject_form ">
    新增問卷
</a>
</p>
<?php
$subjects = all('topics');
echo "<ol>";
foreach ($subjects as $key => $value) {

    //題目
    $count = q("select sum(`count`) as '總計' from `options` where `topic_id`='{$value['id']}'");
    echo "<p class='nav-link hh w-25' href='index.php?do=vote&id={$value['id']}'>";
    echo $value['topic'];
    echo ":";
    echo "<span class='d-flex justify-content-end'>";
    echo $count[0]['總計'];
    echo "</span>";

    //管理題目
    echo "</p>";
    //總投票數顯示





    echo "<a href='?do=edit_subject&id={$value['id']}'>";
    echo "<button class='btn btn-light ee'>管理</button>";
    echo "</a>";

    //看結果按鈕
    echo "<a href='../index.php?do=vote_result&id={$value['id']}' >";
    echo "<button class='btn btn-light'>觀看結果</button>";
    echo "</a>";
}
echo "</ol>";

?>