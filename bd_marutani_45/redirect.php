<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
    <title>stylist page</title>
  </head>
  <body>
    <!-- ここから -->
    <nav class="navbar navbar-light bg-info">
      <span class="navbar-text">
        All Stylist
      </span>
    </nav>
    <?php
    $wrap = '<div class="wrap">';
    $wrap_end = '</div>';
   $html1= '<div class="col-lg-3 col-md-4 col-sm-6 mb-4 px-5 px-sm-2">
  <div class="img-thumbnail">
    <img
      src="https://www.pakutaso.com/shared/img/thumb/yuka458A4908_TP_V.jpg"
      alt=""
    />
    <p class="img-title">';
  
    $html2='</p></div></div>';
?>
    <?php
//1.  DB接続します
try {
  //Password:MAMP='root',XAMPP=''
  $pdo = new PDO('mysql:dbname=gs_homework;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DBconnectError'.$e->getMessage());
}

//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_stylist_table");
$status = $stmt->execute();

//３．データ表示
$temp="";
$view="";
if($status==false) {
    //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("QueryError:".$error[2]);

}else{
  //Selectデータの数だけ自動でループしてくれる
  //FETCH_ASSOC=http://php.net/manual/ja/pdostatement.fetch.php
  // 使いやすいデータに直してくれる。
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){ 
    $temp .= "<p>";
    $temp .= $result["indate"].'<br>'.$result["name"].'　　'.$result["vacant"].'　　'.$result["place"].'<br>'.'<a href='.$result["URL"].'>ポートフォリオ</a>';
    $temp .= "</p>";
    $view .= $html1.$temp.$html2;
    $temp="";
  }
  
}
echo($wrap);
echo($view);
echo($wrap_end);

?>

    <style>
      img {
        width: 100%;
      }

      .img-title {
        text-align: center;
        margin: 10px 0;
      }

      .img-gallery {
        padding: 30px;
      }

      body {
        background-color: #cccccc;
      }
      .wrap{
        display: flex;
        flex-wrap:wrap;
      }

     
    </style>

    <!-- ここまで -->
    <script
      src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
