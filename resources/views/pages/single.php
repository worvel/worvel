<?= component("header") ?>
  <div class="bg-white w-[1200px] min-h-screen mx-auto my-4 rounded-md shadow-lg overflow-hidden">
    <?= component("nav") ?>
    <div class='p-[25px]'>
      <div class="bg-gray-100 p-4 mb-0.5">
        <h2 class="text-2xl font-semibold text-gray-700 mb-4">
          <?= the_title() ?>
        </h2>
        <p><?= the_content() ?></p>
      </div>
    </div>
  </div>
<?= component("footer") ?>
