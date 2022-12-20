<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/assets/css/output.css">

  <style>
    .sidebar-lg {
      position: absolute;
      left: 0;
    }

    /* Hide scrollbar for Chrome, Safari and Opera */
    .hidescroll::-webkit-scrollbar {
      display: none;
    }

    /* Hide scrollbar for IE, Edge and Firefox */
    .hidescroll {
      -ms-overflow-style: none;  /* IE and Edge */
      scrollbar-width: none;  /* Firefox */
    }
  </style>
  <title>P | <?= $page_name ?></title>
</head>
<body class="font-sans relative">

  <p class="block lg:hidden absolute top-0 left-0 w-fit h-fit">sidebar</p>
  <div class="flex h-screen static">
    <!-- Sidebar -->
    <div class="bg-slate-900 w-72 lg:block hidden">
      <div class="h-48 flex items-center justify-center">
        <a href="/">
          <p class="font-bold text-6xl text-white">P</p>
        </a>
      </div>
      <div class="px-4" id="vsidebar">
        <a href="/artikel">
          <h3 class="text-white font-semibold text-xl pl-4 py-2 mb-3 rounded-lg hover:bg-blue-700 duration-300 ">Artikel</h3>
        </a>
        <a href="/event">
          <h3 class="text-white font-semibold text-xl pl-4 py-2 mb-3 rounded-lg hover:bg-blue-700 duration-300 ">Event</h3>
        </a>
        <a href="/galeri">
          <h3 class="text-white font-semibold text-xl pl-4 py-2 mb-3 rounded-lg hover:bg-blue-700 duration-300 ">Galeri Foto</h3>
        </a>
        <a href="/klien">
          <h3 class="text-white font-semibold text-xl pl-4 py-2 mb-3 rounded-lg hover:bg-blue-700 duration-300 ">Klien kami</h3>
        </a>
        <div class="">
          <a href="/auth/login">
            <h3 class="text-white font-semibold text-xl pl-4 py-2 mb-1 rounded-lg hover:bg-blue-700 duration-300 ">Auth</h3>
          </a>
          <div class="">
            <a href="/auth/login">
              <h3 class="text-gray-300 font-semibold text-lg pl-4 ml-4 pb-1 mb-2 rounded-lg hover:bg-blue-700 hover:text-white duration-300 ">Login</h3>
            </a>
            <a href="/auth/signup">
              <h3 class="text-gray-300 font-semibold text-lg pl-4 ml-4 pb-1 mb-2 rounded-lg hover:bg-blue-700 hover:text-white duration-300 ">Signup</h3>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- End Sidebar -->

    <div class="w-full h-screen">
      <!-- Navbar -->
      <div class="">
        <a href="/">
          <h1 class="text-center font-bold text-5xl py-8">P Klub Motor</h1>
        </a>
        <div class="w-fit m-auto border-b-2 pb-2 border-slate-300">
          <p class="lg:hidden block">menu</p>
          <nav class="gap-x-2 hidden lg:flex">
            <a class="font-semibold text-lg px-4 pb-1 rounded-md hover:bg-slate-900 hover:text-white" href="/">Home</a>
            <a class="font-semibold text-lg px-4 pb-1 rounded-md hover:bg-slate-900 hover:text-white" href="/profile">Profile</a>
            <a class="font-semibold text-lg px-4 pb-1 rounded-md hover:bg-slate-900 hover:text-white" href="/visimisi">Visi dan Misi</a>
            <a class="font-semibold text-lg px-4 pb-1 rounded-md hover:bg-slate-900 hover:text-white" href="/produk">Produk Kami</a>
            <a class="font-semibold text-lg px-4 pb-1 rounded-md hover:bg-slate-900 hover:text-white" href="/kontak">Kontak Kami</a>
            <a class="font-semibold text-lg px-4 pb-1 rounded-md hover:bg-slate-900 hover:text-white" href="/about">About Us</a>
          </nav>
        </div>
      </div>
      <!-- End Navbar -->

      <?php $this->renderSection('content') ?>
    </div>
  </div>
  <script>
    switch ("<?php echo $page_name ?>") {
      case "home":
        document.getElementsByTagName("nav")[0].children[0].classList.add("bg-slate-900", "text-white")
        break;
      case "profile":
        document.getElementsByTagName("nav")[0].children[1].classList.add("bg-slate-900", "text-white")
        break;
      case "visimisi":
        document.getElementsByTagName("nav")[0].children[2].classList.add("bg-slate-900", "text-white")
        break;
      case "produk":
        document.getElementsByTagName("nav")[0].children[3].classList.add("bg-slate-900", "text-white")
        break;
      case "kontak":
        document.getElementsByTagName("nav")[0].children[4].classList.add("bg-slate-900", "text-white")
        break;
      case "about":
        document.getElementsByTagName("nav")[0].children[5].classList.add("bg-slate-900", "text-white")
        break;
      case "artikel":
        document.getElementById('vsidebar').children[0].children[0].classList.add("bg-blue-700")
        break;
      case "event":
        document.getElementById('vsidebar').children[1].children[0].classList.add("bg-blue-700")
        break;
      case "galeri":
        document.getElementById('vsidebar').children[2].children[0].classList.add("bg-blue-700")
        break;
      case "klien":
        document.getElementById('vsidebar').children[3].children[0].classList.add("bg-blue-700")
        break;
      
      default:
        break;
    }
  </script>
</body>
</html>