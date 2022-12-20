<?php $this->extend('layout/default_layout.php') ?>

<?php $this->section('content') ?>
<div class="p-10">
  <div class="w-full lg:w-2/3 m-auto">
    <h1 class="font-bold text-2xl border-b-2 mb-2 border-slate-700">Event</h1>
  
    <div class="overflow-scroll h-[490px] hidescroll">
      <div class="flex flex-wrap">
        <?php foreach($event_data as $event) { ?>
        <a href="" class="w-1/2">
          <div class="border-b-2 mb-8 w-80 m-auto border-2 rounded-lg bg-slate-900 text-white">
          <img src="/assets/images/event/<?= $event['image'] ?>" alt="" class="w-full h-44 object-cover">
            <div class="border-t-2 border-slate-700 p-2">
              <h1 class="font-semibold text-xl"><?= $event['event_name'] ?></h1>
              <p class="text-gray-500 text-sm mb-1"><?= $event['date'] ?></p>
              <p class="text-gray-300"><?= $event['description'] ?></p>
            </div>
          </div>
        </a>
        <?php } ?>
      </div>
    </div>
  </div>
</div>
<?php $this->endSection() ?>