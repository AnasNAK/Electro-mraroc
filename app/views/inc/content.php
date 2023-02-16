<!--start hero cursole-->
<div class="flex px-24 py-7 mt-20 mb-9 " id="cursole">
  <div class="flex justify-center rounded-2xl p-9 w-max bg-[#E8D0AC] shadow-lg shadow-[#DBC5A4]">
    <div class=" flex flex-col justify-around">
      <h1 class="t text-[#685942] text-6xl opacity-2 font-black w-3/5 ">On GlowGuru You Can Find Anything </h1>
      <a class="self-center" href="#items"> <button class="  font-bold bg-[#FFF8ED] w-28 py-1 mr-80 border-black rounded transition hover:bg-[#685942] hover:text-[#FFF2DF]">
          Discover More
        </button></a>
    </div>
    <div>
      <img class="opacity-4 rounded shadow-lg shadow-[#9B8665]" src="<?= URLROOT . '/img/header.webp' ?>" alt="women with sephora ">
    </div>
  </div>
</div>
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
    <div class="result_search w-full  flex justify-center items-center flex-col transition duration-300 hover:scale-110 hover:text-black hover:shadow-lg shadow-[#DBC5A4] hover:rounded-2xl">
      <img class="w-2/4 " src="<?= URLROOT . '/img/upload/' . $Product->image ?>" alt="">
      <h3 class="productName font-black w-3/5 text-center text-4xl"><?= $Product->name; ?></h4>
        <p class="w-3/5 text-center pb-2"><?= $Product->description ?></p>
        <p><?= $Product->price ?>.00 DH</p>

    </div>

  <?php endforeach; ?>
</div>
<!--end items-->