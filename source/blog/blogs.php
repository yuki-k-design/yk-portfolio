<?php
  $title = "Blog | Yuki Katayama 's Portfolio";
  $description = "Webデザイナー片山祐希のブログ一覧ページです。";
  require_once('../common/head.php');
?>

<?php require_once('../common/menu.php') ?>

<?php require_once('../common/getBlog.php') ?>

  <section id="Blog" class="px-xxl-15 px-xl-10 px-sm-5 px-4 py-md-10 py-sm-8 py-6">
    <h2 class="h1">Blog</h2>
    <ul class="breadcrumbs__list d-flex pb-sm-6 pb-5 pl-0">
      <li><a href="../index.php">Top</a></li>
      <li class="font-weight-bold">Blog</li>
    </ul>
    <div class="container-fluid p-0 flex-wrap fadeUpTrigger">
      <div class="row">
        <?php foreach ($blogArray['contents'] as $contents): ?>
            <div class="col-6 col-lg-3 pb-5">
              <a href="<?php echo '/blog/blog.php?id=' . $contents['id'] ?>" class="base__link--active">
                <div class="works__work">
                  <?php if (isset ($contents['img_1']) ): ?>
                    <img src="<?php echo $contents['img_1']['url'] ?>" class="img-fluid" width="100%" alt="<?php echo $contents['title'] ?>">
                  <?php else: ?>
                    <img src="/img/no-image.png" class="img-fluid" width="100%" alt="no-image">
                  <?php endif ?>
                  <div class="work__mask">
                    <div class="w-100 h-100 d-flex flex-column justify-content-center align-items-center">
                      <div>
                        <p class="m-0">More</p>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
              <h3 class="h6 mt-1"><?php echo substr($contents['date'],0,10) ?></h3>
              <p class="category_tag"><?php echo $contents['category'][0] ?></p>
            </div>
          <?php endforeach ?>
      </div>
    </div>
  </section>

<?php require_once('../common/footer.php') ?>