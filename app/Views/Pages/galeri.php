<?php $this->extend('layout/default_layout.php') ?>

<?php $this->section('content') ?>
<div class="p-10">
  
  <div class="w-full lg:w-2/3 m-auto">
    <div class="flex justify-between border-b-2 mb-2 border-slate-700">
      <h1 class="font-bold text-2xl">Galeri Foto</h1>
      <div class=""><?= $pager->links() ?></div>
    </div>
    
    <div class="overflow-scroll h-[490px] hidescroll">
      <div class="flex flex-wrap relative">
        <!-- <div class="absolute z-10 hidden w-full h-[500px]" id="bigimgcontainer">
          <img src="/assets/images/galeri/" alt="" class="w-full h-[500px] object-cover" id="bigimg"></img>
          <p onclick="hideImage()" class="bg-white/50 text-black absolute left-[400px] bottom-10">close</p>
        </div> -->
        <?php foreach($galeri_data as $galeri) { ?>
          <div href="" class="w-1/2 px-2 mb-4 relative hover:w-full" onclick="showImage('<?= $galeri['image'] ?>')">
            <img src="/assets/images/galeri/<?= $galeri['image'] ?>" alt="" class="w-full h-full object-cover">
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
</div>

<script>
  // function showImage(img) {
  //   console.log(img)
  //   document.getElementById('bigimg').setAttribute('src', `/assets/images/galeri/${img}`)
  //   document.getElementById('bigimgcontainer').classList.toggle('hidden')
  // }
  
  // function hideImage() {
  //   document.getElementById('bigimgcontainer').classList.toggle('hidden')
  // }
  document.getElementsByClassName('pagination')[0].classList.add('flex', 'gap-x-2')

  console.log(document.getElementsByClassName('active')[0].classList.add('font-bold'))

</script>
<?php $this->endSection() ?>