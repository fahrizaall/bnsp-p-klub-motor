<?php $this->extend('layout/default_layout.php') ?>

<?php $this->section('content') ?>
<div class="p-10">
  <div class="w-full lg:w-2/3 m-auto">
    <h1 class="font-bold text-2xl border-b-2 mb-2 border-slate-700">Artikel</h1>
    <div class="overflow-scroll h-[490px]">
      <h1 class="font-semibold text-2xl mt-4 mb-3 text-center"><?= $artikel['title'] ?></h1>
      <img src="/assets/images/artikel/<?= $artikel['image'] ?>" class="w-full mb-4" alt="">

      <?= $artikel['description'] ?>
    </div>
  </div>
</div>
<?php $this->endSection() ?>