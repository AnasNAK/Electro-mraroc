<?php require APPROOT . '/views/inc/header.php'; ?>


<!--start hero cursole-->

<!--end hero cursole-->
<div class="flex justify-center items-center mb-8">
  <div class="bg-white rounded flex justify items-center w-full max-w-xl mr-4 p-2 shadow-sm border border-gray-200">
    <button class="outline-none focus:outline-none">
      <svg class="w-5 text-gray-600 h-5 cursor-pointer" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
        <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
      </svg>
    </button>
    <input type="search" name="" id="search" placeholder="Search" class="w-full pl-3 text-sm text-black outline-none focus:outline-none bg-transparent" />
  </div>
</div>
<!--start items-->

<div class=" grid text-gray-500 grid-cols-3 font-serif " id="items">
  <?php foreach ($data['products'] as $Product) : ?>

    <div class="w-80 bg-white shadow rounded m-11">
      <div class="h-48 w-full bg-gray-200 flex flex-col justify-between p-4 bg-cover bg-center bg-[url('<?= URLROOT . '/img/upload/' . $Product->image ?>')]">
        <div class="flex justify-between">  <button class="text-white hover:text-blue-500"> <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg> </button> </div>
        <div> <span class="uppercase text-xs bg-green-50 p-0.5 border-green-500 border rounded text-green-700 font-medium select-none"> available </span> </div>
      </div>
      <div class="p-4 flex flex-col items-center">
        <p class="text-gray-400 font-light text-xs text-center"> categorey name </p>
        <h1 class="text-gray-800 text-center mt-1"><?= $Product->name; ?></h1>
        <p class="text-center text-gray-800 mt-1" ><?= $Product->price; ?>.00 DH</p>
        <button class="py-2 px-4 bg-black text-white rounded duration-500 hover:bg-[#6DB0FF] active:bg-blue-700 disabled:opacity-50 mt-4 w-full flex items-center justify-center">
           <a href="<?= URLROOT . '/Products/details/' . $Product->id ?>">Show Details</a> 
          </button>
      </div>
    </div>
  <?php endforeach; ?>

</div>
<!--end items-->








<?php require APPROOT . '/views/inc/footer.php'; ?>