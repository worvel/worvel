<?= component("header") ?>
  <div class="bg-white w-[1200px] min-h-screen mx-auto my-4 rounded-md shadow-lg overflow-hidden">
    <?= component("nav") ?>
    <div class='p-[25px]'>
      <h1 class="text-3xl font-bold mb-5">Blogs</h1>
      <?php while (have_posts($posts)) {
          the_post();
          component("post");
      } ?>
    </div>
  </div>
<?= component("footer") ?>
