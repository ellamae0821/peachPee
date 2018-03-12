<?php
session_start();
require('config/connect.php');
/*require('functionsfe.php');

  $curpage = SetCurPage();
  $perpage = PerPageResults();

  $totalres = mysqli_num_rows(SelPublishedContent());

  $pages = GetStartEndPages($curpage, $perpage, $totalres);

  $start = $pages['start'];
  $endpage = $pages['end'];

  $res = SelPubContPag($start, $perpage);
  $startpage = 1;
  $nextpage = $curpage + 1;
  $previouspage = $curpage - 1;
*/
?>

<?php include 'inc/header.php' ?>
<?php include 'inc/nav.php' ?>



  </div>
  <div class="container">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="img/car1.png" alt="php">
          <div class="carousel-caption">
            ...
          </div>
        </div>
        <div class="item">
          <img src="http://i.huffpost.com/gen/3152148/images/o-ANIMALS-FUNNY-facebook.jpg" alt="sweet cat">
          <div class="carousel-caption">
            ...
          </div>
        </div>
        <div class="item">
          <img src="https://3c1703fe8d.site.internapcdn.net/newman/gfx/news/hires/2017/docatspurrwh.jpg" alt="gray cat">
          <div class="carousel-caption">
            ...
          </div>
        </div>


          <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
    <h3>Heading 1</h3>
    <div class="row">
      <div class="col-xs-6 col-md-4">
        <a href="#" class="thumbnail">
          <img src="https://www.techcoffees.com/wp-content/uploads/2018/02/bootstrap-wallpaper.png" alt="thumbnailphoto">
        </a>
      </div>
      <div class="col-xs-6 col-md-4">
        <a href="#" class="thumbnail">
          <img src="https://www.techcoffees.com/wp-content/uploads/2018/02/bootstrap-wallpaper.png" alt="thumbnailphoto">
        </a>
      </div>
      <div class="col-xs-6 col-md-4">
        <a href="#" class="thumbnail">
          <img src="https://www.techcoffees.com/wp-content/uploads/2018/02/bootstrap-wallpaper.png" alt="thumbnailphoto">
        </a>
      </div>
      <div class="col-xs-6 col-md-4">
        <a href="#" class="thumbnail">
          <img src="https://www.techcoffees.com/wp-content/uploads/2018/02/bootstrap-wallpaper.png" alt="thumbnailphoto">
        </a>
      </div>
      <div class="col-xs-6 col-md-4">
        <a href="#" class="thumbnail">
          <img src="https://www.techcoffees.com/wp-content/uploads/2018/02/bootstrap-wallpaper.png" alt="thumbnailphoto">
        </a>
      </div>
      <div class="col-xs-6 col-md-4">
        <a href="#" class="thumbnail">
          <img src="https://www.techcoffees.com/wp-content/uploads/2018/02/bootstrap-wallpaper.png" alt="thumbnailphoto">
        </a>
      </div>
    </div>
    <h3>Heading 1</h3>
    <div class="row">
      <div class="col-xs-6 col-md-4">
        <a href="#" class="thumbnail">
          <img src="https://www.techcoffees.com/wp-content/uploads/2018/02/bootstrap-wallpaper.png" alt="thumbnailphoto">
        </a>
      </div>
      <div class="col-xs-6 col-md-4">
        <a href="#" class="thumbnail">
          <img src="https://www.techcoffees.com/wp-content/uploads/2018/02/bootstrap-wallpaper.png" alt="thumbnailphoto">
        </a>
      </div>
      <div class="col-xs-6 col-md-4">
        <a href="#" class="thumbnail">
          <img src="https://www.techcoffees.com/wp-content/uploads/2018/02/bootstrap-wallpaper.png" alt="thumbnailphoto">
        </a>
      </div>
      <div class="col-xs-6 col-md-4">
        <a href="#" class="thumbnail">
          <img src="https://www.techcoffees.com/wp-content/uploads/2018/02/bootstrap-wallpaper.png" alt="thumbnailphoto">
        </a>
      </div>
      <div class="col-xs-6 col-md-4">
        <a href="#" class="thumbnail">
          <img src="https://www.techcoffees.com/wp-content/uploads/2018/02/bootstrap-wallpaper.png" alt="thumbnailphoto">
        </a>
      </div>
      <div class="col-xs-6 col-md-4">
        <a href="#" class="thumbnail">
          <img src="https://www.techcoffees.com/wp-content/uploads/2018/02/bootstrap-wallpaper.png" alt="thumbnailphoto">
        </a>
      </div>
    </div>
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>