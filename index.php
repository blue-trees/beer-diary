<?php
	include("views/header.php");
?>

  <div id="headerwrap">

    <div class="container"> 
      <div class="row">
        <div class="col-lg-12">
          <h1>Make your beer life better</h1>
        </div>
      </div>
      
      <form action="controllers/login.php" method="post">
        <div class="form-row">
          <div class="form-group col-8">
            <input type="password" name="password" class="form-control" placeholder="Enter Your Login Password">
          </div>
          <div class="form-group col-4">
            <button type="submit" name="login" class="btn btn-warning btn-lg">Let's Drink!</button>
          </div>
        </div>
      </form>
      
    </div>
    <!-- /container -->
  </div>
  <!-- /headerwrap -->

  <div class="container">

    <div class="row mt centered">
      <div class="col-lg-6 col-lg-offset-3">
        <h3>せっかく飲んだ美味しいグラフとビール。ついつい楽しみすぎて名前や味を忘れてしまっていませんか？</h3>
        <h4>Beer Dieryはそんなクラフトビール好きのちょっぴり残念な悩みを解決します！</h4>
      </div>
    </div>

    <div class="row mt centered">
      <div class="col-lg-4">
        <img src="img/smartphone.png" width="180" alt="">
        <h4>1 - 出会ったクラフトビールをスマホで即記録！</h4>
        <p>簡単な入力で楽しいビールタイムを邪魔せずに記録できます。</p>
      </div>

      <div class="col-lg-4">
        <img src="img/earth.png" width="180" alt="">
        <h4>2 - あのビールどこで飲んだんだっけ...も解決！</h4>
        <p>自動で位置情報を取得して、もう一度行きたいお店を忘れない！</p>
      </div>

      <div class="col-lg-4">
        <img src="img/cheers.jpg" width="180" alt="">
        <h4>3 - お気に入りのビールは友達とシェア！</h4>
        <p>大好きな銘柄はどんどん友達にレコメンド！</p>

      </div>
      <!--/col-lg-4 -->
    </div>
    <!-- /row -->
  </div>
  <!-- /container -->
  
  <hr>

  <div class="container">
    <div class="row mt centered">
      <div class="col-lg-6 col-lg-offset-3">
        <h1>Flatty is for Everyone.</h1>
        <h3>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</h3>
      </div>
    </div>
    <!-- /row -->

    <div class="row mt centered">
      <div class="col-lg-6 col-lg-offset-3">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="img/p01.png" alt="">
            </div>
            <div class="item">
              <img src="img/p02.png" alt="">
            </div>
            <div class="item">
              <img src="img/p03.png" alt="">
            </div>
          </div>
        </div>
      </div>
      <!-- /col-lg-8 -->
    </div>
    <!-- /row -->
  </div>
  
  <div class="container">
    <div class="row centered">
      <div class="col-12">
        <h1>ENJOY!!</h1>
      </div>
    </div>
    <!-- /row -->
  </div>
  <!-- /container -->

  <?php
	include("views/footer.php");
?>