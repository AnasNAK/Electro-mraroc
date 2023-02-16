<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://kit.fontawesome.com/a4fc922de4.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <title>
    <?php echo SITENAME ?>
  </title>
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style.css">
  <link rel="icon" type="image/png" href="../public/img/logo-1.png" />
  <link rel="stylesheet" href="./public/css/style.css">
</head>

<body class=" ">
  <!-- component -->
  <!-- This is an example component -->
  <div class="drop-shadow-lg mx-auto mt-25  ">
    <nav class=" flex justify-around justify-center border-gray-200">
      <div class="container mx-auto flex flex-wrap items-center justify-around">
        <a href="#" class="bg-[#] flex ">
          <span class="self-center text-2xl  whitespace-nowrap w-max font-semibold text-[#6DB0FF]">E</span>
          <span class="self-center text-2xl  whitespace-nowrap font-bold">-</span>
          <span class="self-center text-2xl  whitespace-nowrap font-mono text-[#6DB0FF]">Maroc</span>
        </a>
        <button data-collapse-toggle="mobile-menu" type="button" class="md:hidden ml-3 text-gray-400 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-[#6DB0FF] rounded-lg inline-flex items-center justify-center" aria-controls="mobile-menu-2" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
          </svg>
          <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
          </svg>
        </button>
        <div class="hidden md:block w-full md:w-auto" id="mobile-menu">
          <ul class="flex-col md:flex-row flex md:space-x-8 mt-4 md:mt-0 md:text-sm md:font-medium">
            <li>
              <a href="#" class=" duration-500 md:hover:text-[#6DB0FF] bg-[#6DB0FF] md:bg-transparent text-white block pl-3 pr-4 py-2 duration-500 md:text-black md:p-0 rounded focus:outline-none" aria-current="page">Home</a>
            </li>
            <li>
              <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="text-gray-700 duration-500 hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 pl-3 pr-4 py-2 duration-500 md:hover:text-[#6DB0FF] md:p-0 font-medium flex items-center justify-between w-full md:w-auto">Categorie <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg></button>
              <!-- Dropdown menu -->
              <div id="dropdownNavbar" class="hidden bg-white text-base z-10 list-none divide-y divide-gray-100 rounded shadow my-4 w-44">
                <ul class="py-1" aria-labelledby="dropdownLargeButton">
                  <li>
                    <a href="#" class="text-sm hover:bg-gray-100 duration-500 hover:text-[#6DB0FF] block px-4 py-2">Phone</a>
                  </li>
                  <li>
                    <a href="#" class="text-sm hover:bg-gray-100 duration-500 hover:text-[#6DB0FF] block px-4 py-2">Computers</a>
                  </li>
                  <li>
                    <a href="#" class="text-sm hover:bg-gray-100 duration-500 hover:text-[#6DB0FF] block px-4 py-2">Accessory</a>
                  </li>
                </ul>
              </div>
            </li>
            <li>
              <a href="#" class="text-gray-700 hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 duration-500 md:hover:text-[#6DB0FF] md:p-0">Shop</a>
            </li>
            <li>
              <a href="#" class="text-gray-700 hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 duration-500  md:hover:text-[#6DB0FF] md:p-0">Contact</a>
            </li>
          </ul>
        </div>
        <div>
          <ul class="flex-col md:flex-row flex md:space-x-8 mt-4 md:mt-0 md:text-sm md:font-medium">
            <li>
            <a href="#" class=" duration-500  md:bg-transparent text-white block pl-3 pr-4 py-2 duration-500 md:text-black md:p-0 rounded duration-500  md:hover:text-[#6DB0FF] focus:outline-none" aria-current="page">Sing In</a>
            </li>
            <li>
            <a href="#" class=" duration-500  md:bg-transparent text-white block pl-3 pr-4 py-2 duration-500 md:text-black md:p-0 rounded duration-500  md:hover:text-[#6DB0FF] focus:outline-none" aria-current="page">Sing Up</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

  </div>

  <script src="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.bundle.js"></script>