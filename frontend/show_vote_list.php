<nav>

    <?php

    //判斷是否有任何的錯誤訊息存在，有則顯示
    if (isset($_SESSION['error'])) {
        echo "<span>" . $_SESSION['error'] . "</span>";
    }

    //判斷是否有登入的紀錄，根據登入狀況，顯示不同的功能按鈕
    if (isset($_SESSION['user'])) {
        echo "<div class='d-flex justify-content-end'>";
    ?>

        <a class="btn btn-light" href="logout.php">登出</a>

        </div>
    <?php

    } else {
    ?>
        <div class="d-flex justify-content-end">
            <a class="btn btn-info" href="?do=login">會員登入</a>
            <a class="btn btn-secondary" href="?do=reg">註冊新會員</a>
        </div>
    <?php
    }
    ?>
</nav>

<body class="main">
    <div class="container p-3 my-3 border">
        <a href="../page/index.php">
        <h1 class="d-flex justify-content-center">投票系統</h1>
            <h2 class="d-flex justify-content-end zz">旅遊勝地</h2>
        </a>
    </div>
    
    <div class="row">
        <div class="col-3 w-75 ii">
            <div class="nav flex-column nav-pills ee w-75" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                <?php
                $subjects = all('topics');
                echo "<div>";
                foreach ($subjects as $key => $value) {
                    if (rows('options', ['topic_id' => $value['id']]) > 0) {

                        //題目
                        //有登入的會員才能使用投票功能
                        if (isset($_SESSION['user'])) {
                            echo "<a class='nav-link hh' id='v-pills-profile-tab' href='index.php?do=vote&id={$value['id']}' role='tab' aria-controls='v-pills-profile' aria-selected='false' target='frame'>";
                            echo $value['topic'];
                            echo "</a>";
                        } else {

                ?>


                            <!-- 這邊弄<a> 然後跳轉到登入訊息 -->
                <?php
                            echo "<a class='nav-link hh' id='v-pills-profile-tab' href='index.php?do=login' role='tab' aria-controls='v-pills-profile' aria-selected='false'>";
                            echo $value['topic'];
                            echo "</a>";
                            // $count = q("select sum(`count`) as '總計' from `options` where `topic_id`='{$value['id']}'");
                            // echo "<span>";
                            // echo $count[0]['總計'];
                            // echo "</span>";
                            //總投票數顯示
                            // echo "<a href='?do=vote_result&id={$value['id']}'>";
                            // echo "<button'>觀看結果</button>";
                            // echo "</a>";
                            // //看結果按鈕
                            // echo "</div>";
                        }
                    }
                }
                echo "</div>";
                ?>
            </div>
        </div>
        <iframe name="frame" width="1000" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</body>