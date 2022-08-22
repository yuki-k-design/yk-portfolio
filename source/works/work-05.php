<?php
  $title = "Work | Yuki Katayama 's Portfolio";
  $description = "Webデザイナー片山祐希の制作実績ページです。";
  require_once('../common/head.php');
?>

<?php require_once('../common/menu.php') ?>

  <section id="works" class="px-xxl-15 px-xl-10 px-sm-5 px-4 py-md-10 py-sm-8 py-6">
    <h2 class="h1">Works</h2>
    <ul class="breadcrumbs__list d-flex pb-sm-6 pb-5 pl-0">
      <li><a href="../index.php">Top</a></li>
      <li><a href="../works/works.php">Works</a></li>
      <li class="font-weight-bold">Work</li>
    </ul>
    <div class="container-fluid p-0 flex-wrap fadeUpTrigger">
      <div class="row">
        <div class="col-12 col-lg-4 pb-5">
          <h3 class="pb-3">LP制作</h3>
          <p class="m-0">制作期間：約1週間</p>
          <p class="">担当：デザイン作成</p>
          <a href="https://online.nomura.co.jp/rde/contents/campaign/cmp/0054/" target="_blank" rel="noopener noreferrer"><i class="fa-solid fa-arrow-up-right-from-square pr-2"></i>show website</a>
        </div>
        <div class="col-12 col-lg-8 pb-5">
          <img src="../img/work-nomura03-lg.png" class="img-fluid" alt="制作実績画像">
        </div>
      </div>
    </div>
  </section>

<?php require_once('../common/footer.php') ?>