<?php $this->extend('layout/default_layout.php') ?>

<?php $this->section('content') ?>
<div class="p-10">
  <div class="w-full lg:w-2/3 m-auto">
    <h1 class="font-bold text-2xl border-b-2 mb-2 border-slate-700">Galeri Foto</h1>
  
    <div class="overflow-scroll h-[490px] hidescroll">
      <div class="flex flex-wrap">
        <a href="" class="w-1/2 px-2 mb-4">
          <img src="/assets/images/galeri/dua.jpg" alt="" class="w-full h-full object-cover">
        </a>
        <a href="" class="w-1/2 px-2 mb-4">
          <img src="/assets/images/galeri/empat.jpg" alt="" class="w-full h-full object-cover">
        </a>
        <a href="" class="w-1/2 px-2 mb-4">
          <img src="/assets/images/galeri/enam.jpeg" alt="" class="w-full h-full object-cover">
        </a>
        <a href="" class="w-1/2 px-2 mb-4">
          <img src="/assets/images/galeri/lima.jpg" alt="" class="w-full h-full object-cover">
        </a>
        <a href="" class="w-1/2 px-2 mb-4">
          <img src="/assets/images/galeri/satu.jpg" alt="" class="w-full h-full object-cover">
        </a>
        <a href="" class="w-1/2 px-2 mb-4">
          <img src="/assets/images/galeri/tiga.jpg" alt="" class="w-full h-full object-cover">
        </a>
        <a href="" class="w-1/2 px-2 mb-4">
          <img src="/assets/images/galeri/tujuh.jpg" alt="" class="w-full h-full object-cover">
        </a>
      </div>
    </div>
  </div>
</div>
<?php $this->endSection() ?>