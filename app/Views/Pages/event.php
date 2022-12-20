<?php $this->extend('layout/default_layout.php') ?>

<?php $this->section('content') ?>
<div class="p-10">
  <div class="w-full lg:w-2/3 m-auto">
    <h1 class="font-bold text-2xl border-b-2 mb-2 border-slate-700">Event</h1>
  
    <div class="overflow-scroll h-[490px] hidescroll">
      <div class="flex flex-wrap">
        <a href="" class="w-1/2">
          <div class="border-b-2 mb-8 w-80 m-auto border-2 rounded-lg bg-slate-900 text-white">
          <img src="/assets/images/event/bukber.jpg" alt="" class="w-full h-44 object-cover">
            <div class="border-t-2 border-slate-700 p-2">
              <h1 class="font-semibold text-xl">Buka bersama</h1>
              <p class="text-gray-500 text-sm mb-1">17 Juni 2017</p>
              <p class="text-gray-300">Diadakannya buka bersama sekaligus untuk merayakan 3 tahun berdirinya P Klub Motor</p>
            </div>
          </div>
        </a>
        <a href="" class="w-1/2">
          <div class="border-b-2 mb-8 w-80 m-auto border-2 rounded-lg bg-slate-900 text-white">
          <img src="/assets/images/event/pameran.jpg" alt="" class="w-full h-44 object-cover">
            <div class="border-t-2 border-slate-700 p-2">
              <h1 class="font-semibold text-xl">Pameran Motor Klasik</h1>
              <p class="text-gray-500 text-sm mb-1">7 Oktober 2018</p>
              <p class="text-gray-300">Karena semakin banyak peminat motor klasik maka kami mengadakan pameran motor klasik untuk umum</p>
            </div>
          </div>
        </a>
        <a href="" class="w-1/2">
          <div class="border-b-2 mb-8 w-80 m-auto border-2 rounded-lg bg-slate-900 text-white">
          <img src="/assets/images/event/touring.jpg" alt="" class="w-full h-44 object-cover">
            <div class="border-t-2 border-slate-700 p-2">
              <h1 class="font-semibold text-xl">Touring Jawa</h1>
              <p class="text-gray-500 text-sm mb-1">3 Januari 2019</p>
              <p class="text-gray-300">Untuk menyemarakan tahun baru kami mengadakan touring pulau jawa yang diikuti 100 peserta</p>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>
<?php $this->endSection() ?>