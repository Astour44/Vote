<?php include_once "../api/db.php";

if (!isset($_SESSION['user'])) {
  to("../index.php");
  exit();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>問卷系統</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <style>
    * {
      font-family: 'Microsoft JhengHei;';
    }
    .mt-3,
    .my-3 {
      margin-top: 2rem !important;
    }

    .main {
      background-image: url(../image/8822830648957.jpg);
      background-size: 100%;
    }


    .hh {
      margin-top: 10px;
      font-size: 30px;
      color: grey;
      border: 2px solid grey;
      border-radius: 23px;
    }
    ol{
      margin-left: 100px;
    }
    .cc{font-size: 30px;}
    .bb{
      font-size: 20px;
      display: flex;
      justify-content: end;
      margin-right: 100px;
    }
    .ee{margin-right: 100px;}
  </style>
</head>

<body class="main">


  <div class="container p-3 my-3 border">
    <a href="./index.php">
      <h1 class="d-flex justify-content-center">後臺管理系統</h1>
      <h2 class="d-flex justify-content-end">Backend
  </h2>
    </a>
  </div>
  <nav>
    <div>
      <a class="btn btn-info" href="?do=show_vote_list">問卷管理</a>
      <a class="btn btn-info" href="./index.php">會員管理</a>


    </div>
    <div class="d-flex justify-content-end">
      <a class="btn btn-light " href="../logout.php">登出</a>
    </div>

  </nav>


  <div>
    <?php

    $do = (isset($_GET['do'])) ? $_GET['do'] : 'manage_vote';
    $file = $do . ".php";
    if (file_exists($file)) {
      include $file;
    } else {
      include "manage_vote.php";
    }
    ?>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>

</html>