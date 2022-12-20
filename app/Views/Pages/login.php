<?php $this->extend('layout/default_layout.php') ?>

<?php $this->section('content') ?>
<div class="p-10">
  <div class="w-full lg:w-2/3 m-auto">
    <h1 class="font-semibold text-xl text-center border-b-2 mb-2">Login</h1>
  
    <div class="w-1/2 m-auto">
      <form action="/auth/login" class="flex flex-col" method="POST">
        <label for="email" class="font-semibold text-sm mb-1 mt-4">Username</label>
        <input type="text" name="email" id="email" class="mb-4 border-2 border-slate-700 rounded-md focus:outline-none focus:ring-0 py-1 px-2" placeholder="username">
        
        <label for="password" class="font-semibold text-sm mb-1">Password</label>
        <input type="password" name="password" id="password" class="border-2 border-slate-700 rounded-md focus:outline-none focus:ring-0 py-1 px-2" placeholder="username">
      
        <button type="submit" class="bg-slate-900 text-white py-2 rounded-md mt-8">Login</button>
      </form>
    </div>
  </div>
</div>
<?php $this->endSection() ?>