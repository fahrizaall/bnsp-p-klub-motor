<?php $this->extend('layout/default_layout.php') ?>

<?php $this->section('content') ?>
<div class="p-10">
  <div class="w-full lg:w-2/3 m-auto">
    <h1 class="font-bold text-2xl border-b-2 mb-2 border-slate-700">Artikel</h1>
  
    <div class="overflow-scroll h-[490px] hidescroll">
      <a href="/artikel/detail">
        <div class="flex border-b-2 mb-4">
          <img src="/assets/images/artikel/motor.jpg" alt="" class="w-48 h-32 object-cover">
          <div class="pl-2">
            <h1 class="font-semibold text-xl">Tips merawat motor</h1>
            <p class="text-gray-500">Semua jenis motor pastinya memerlukan perawatan rutin untuk menjaga agar kondisi motor tetap bagus</p>
          </div>
        </div>
      </a>
      <a href="/artikel/detail">
        <div class="flex border-b-2 mb-4">
          <img src="/assets/images/artikel/motorempat.jpg" alt="" class="w-48 h-32 object-cover">
          <div class="pl-2">
            <h1 class="font-semibold text-xl">Tips membeli motor klasik</h1>
            <p class="text-gray-500">Motor klasik memang banyak di buru akhir-akhir ini, namun jangan sampai tertipu baik itu tentang harga maupun kondisi motor</p>
          </div>
        </div>
      </a>
      </div>
  </div>
</div>
<?php $this->endSection() ?>