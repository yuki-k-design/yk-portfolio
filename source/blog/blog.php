<?php
  $title = "Blog | Yuki Katayama 's Portfolio";
  $description = "Webデザイナー片山祐希のブログページです。";
  require_once('../common/head.php');
?>

<?php require_once('../common/menu.php') ?>

<?php 
  $id = $_GET['id'];

  // クエリパラメータを取得
  if (isset($id) == true) {
    // cUrlでAPIを叩く
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://yuki-design-blog.microcms.io/api/v1/blog/' . $id);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    $headers[] = 'X-MICROCMS-API-KEY: ce58188d4ff64a9bbc341a253268c069c4c6';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $response = curl_exec($ch);
    curl_close($ch);

    // 取得したら表示
    $result = json_decode($response, true);

  } else {
      echo 'Set query parameters';
  }
?>

<?php if (isset($result) == true): ?>
  <section id="blog" class="px-xxl-15 px-xl-10 px-sm-5 px-4 py-md-10 py-sm-8 py-6">
    <ul class="breadcrumbs__list d-flex pb-sm-6 pb-5 pl-0">
      <li><a href="../index.php">Top</a></li>
      <li><a href="../blog/blogs.php">Blog</a></li>
      <li class="font-weight-bold"><?php echo $result['title'] ?></li>
    </ul>
    <h2 class="h1 pb-3"><?php echo $result['title'] ?></h2>
    <p class="pb-5"><?php echo substr($result['date'],0,10) ?></p>
    <div class="container-fluid p-0 flex-wrap fadeUpTrigger">
      <div class="row">
        <div class="col-12 pb-5">
          <p class=""><?php echo $result['body'] ?></p>
        </div>
      </div>
    </div>
  </section>
<?php else: ?>
  <section id="blog" class="px-xxl-15 px-xl-10 px-sm-5 px-4 py-md-10 py-sm-8 py-6">
    <ul class="breadcrumbs__list d-flex pb-sm-6 pb-5 pl-0">
      <li><a href="../index.php">Top</a></li>
      <li><a href="../blog/blogs.php">Blog</a></li>
      <li class="font-weight-bold"><?php echo $result['title'] ?></li>
    </ul>
    <?php echo "IDに該当する記事がありません" ?>
  </section>
<?php endif ?>


<?php require_once('../common/footer.php') ?>