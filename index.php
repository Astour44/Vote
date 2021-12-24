<?php include_once "./api/db.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>問卷系統</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <link rel="stylesheet" href="./fontawesome-free-5.15.4-web/css/basic.css">
  <link rel="stylesheet" href="./fontawesome-free-5.15.4-web/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <link rel="stylesheet" href="./style.css">
  <style>
    * {
      font-family: 'Microsoft JhengHei;';
    }

    .main {
      background-image: url(./image/8822830648957.jpg);
      background-size: 100%;
      opacity: 0.9;
    }


    .bb,
    .cc {
      display: flex;
      justify-content: center;
    }

    .nav-pills .nav-link.active,
    .nav-pills .show>.nav-link {
      background-color: green;
    }

    .dd {
      margin-right: 220px;
    }

    .ee {
      margin-top: 30px;
      margin-left: 40px;
    }

    .ff:hover {
      background-color: #d6d8d9;
    }

    .ff:hover {
      background-color: #979797;
    }

    label {
      display: flow-root;
    }

    .nav-pills .nav-link {
      border-radius: 23px;
    }

    .hh {
      margin-top: 10px;
      font-size: 30px;
      color: grey;
      border: 2px solid grey;

    }

    .hh:hover {
      background-color: grey;
    }
    .formbox {
    max-width: 600px;
    margin: 20px auto;
    border-radius: 30px;
    overflow: hidden;
    border: 2px solid wheat;
    text-align: center;
    letter-spacing: 10px;
}

.form-header {
    font-size: 40px;
    color: azure;
}

h1 {
    margin-top: 10px;
    margin-bottom: 30px;
}

.form-header-title {
    font-size: 24px;
    margin: 0;
}

.form-group {
    margin-bottom: 15px;
    
}

.form-control {
    display: block;
    width: 100%;
    padding: 10px 10px;
    font-size: 16px;
    line-height: 1.5;
    background: gray;
    border-top: 2px solid wheat;
    border-bottom: 2px solid wheat;
    color: white;
    resize: none;
    outline: none;
    
}

.submit-btn {
    color: gray;
    background: white;
    border-radius: 10px;
    
}
.p{
    margin-bottom: 20px;}

.move{
    margin-left: 204px;

}
.move2{
    margin-left: 328px;

}
.move3{margin-left:0px;

}
button{
    border-radius: 30px
}
.zz{margin-right: 100px;}
  </style>
</head>

<body>




  <?php

  //根據網址帶的do參數內容來決定要include那一個檔案內容
  $do = (isset($_GET['do'])) ? $_GET['do'] : 'show_vote_list';

  //建立要引入的檔案路徑
  $file = "./frontend/" . $do . ".php";
  if (file_exists($file)) {
    include $file;
  } else {
    include "./frontend/show_vote_list.php";
  }
  // echo "<div class='alert alert-primary' role='alert'>";
  // echo "A";
  // echo "</div>";
  ?>
  </ul>
  </div>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  <script src="./style.js"></script>
</body>

</html>