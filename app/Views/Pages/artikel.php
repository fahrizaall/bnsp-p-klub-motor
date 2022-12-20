<?php $this->extend('layout/default_layout.php') ?>

<?php $this->section('content') ?>
<div class="p-10">
  <div class="w-full lg:w-2/3 m-auto">
    <h1 class="font-bold text-2xl border-b-2 mb-2 border-slate-700">Artikel</h1>
  
    <div class="overflow-scroll h-[490px] hidescroll">
      <?php foreach($artikel_data as $artikel) { ?>
      <a href="/artikel/detail/<?= $artikel['id'] ?>">
        <div class="flex border-b-2 mb-4">
          <img src="/assets/images/artikel/<?= $artikel['image'] ?>" alt="" class="w-48 h-32 object-cover">
          <div class="pl-2">
            <h1 class="font-semibold text-xl"><?= $artikel['title'] ?></h1>
            <p class="text-gray-500"><?= $artikel['summary'] ?></p>
          </div>
        </div>
      </a>
      <?php } ?>
      </div>
  </div>
</div>
<?php $this->endSection() ?>