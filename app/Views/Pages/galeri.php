<?php $this->extend('layout/default_layout.php') ?>

<?php $this->section('content') ?>
<div class="p-10">
  <div class="w-full lg:w-2/3 m-auto">
    <h1 class="font-bold text-2xl border-b-2 mb-2 border-slate-700">Galeri Foto</h1>
    
    <div class="overflow-scroll h-[490px] hidescroll">
      <div class="flex flex-wrap">
        <?php foreach($galeri_data as $galeri) { ?>
        <a href="" class="w-1/2 px-2 mb-4">
          <img src="/assets/images/galeri/<?= $galeri['image'] ?>" alt="" class="w-full h-full object-cover">
        </a>
        <?php } ?>
      </div>
    </div>
  </div>
</div>
<?php $this->endSection() ?>