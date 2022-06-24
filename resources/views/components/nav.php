<div class="w-full p-[25px] bg-purple-50 mb-4 flex justify-between">
  <div class="">
    <a href="<?= home_url() ?>">
        <img src="<?= get_theme_file_uri(
            "/resources/assets/img/logo.png",
        ) ?>" alt="Logo" class="w-36">
    </a>    
  </div>
  <div>
    <?= wp_nav_menu(["theme_location" => "main_menu"]) ?>
  </div>
</div>