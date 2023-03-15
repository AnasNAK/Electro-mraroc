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
  <link rel="icon" type="image/png" href="<?= URLROOT . '/img/upload/E.png' ?>" />
</head>

<body class="bg-[#3E3E3E] overflow-x-hidden">


  <nav class=" bg-[#F9F9F9] flex justify-around justify-center border-gray-200 fixed w-full top-0 left-0  drop-shadow-lg py-3 fixed ">
    <div class=" container mx-auto flex flex-wrap items-center justify-around  ">
      <a href="<?= URLROOT . '/pages/index' ?>" class="bg-[#] flex ">
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
      <div class=" hidden md:block w-full md:w-auto" id="mobile-menu">
        <ul class="flex-col md:flex-row flex md:space-x-8 mt-4 md:mt-0 md:text-sm md:font-medium">
          <li>
            <a href="<?= URLROOT . '/pages/index' ?>" class=" duration-500 md:hover:text-[#6DB0FF] bg-[#6DB0FF] md:bg-transparent text-white block pl-3 pr-4 py-2 duration-500 md:text-black md:p-0 rounded focus:outline-none" aria-current="page">Home</a>
          </li>
          <li>
            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="text-gray-700 duration-500 hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 pl-3 pr-4 py-2 duration-500 md:hover:text-[#6DB0FF] md:p-0 font-medium flex items-center justify-between w-full md:w-auto">Categorie <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
              </svg></button>
            <!-- Dropdown menu -->


            <div id="dropdownNavbar" class=" hidden bg-white text-base z-10 list-none divide-y divide-gray-100 rounded shadow my-4 w-44 ">
              <ul class="py-1  " aria-labelledby="dropdownLargeButton">

                <?php foreach ($data['categories'] as $Categorie) : ?>
                  <li>
                    <a href="#" class="text-sm hover:bg-gray-100 duration-500 hover:text-[#6DB0FF] block px-4 py-2"><?= $Categorie->name; ?></a>
                  </li>
                <?php endforeach; ?>
            </div>
            <div>
          <li>
            <a href="<?= URLROOT . '/pages/shop' ?>" class="text-gray-700 hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 duration-500 md:hover:text-[#6DB0FF] md:p-0">Shop</a>
          </li>
          <li>
            <a href="<?= URLROOT . '/pages/cart' ?>" class="text-gray-700 hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 duration-500 md:hover:text-[#6DB0FF] md:p-0">Cart</a>
          </li>
          <li>
            <a href="<?= URLROOT . '/pages/order' ?>" class="text-gray-700 hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 duration-500 md:hover:text-[#6DB0FF] md:p-0">Order</a>
          </li>
          <li>
            <a href="<?= URLROOT . '/pages/contact' ?>" class="text-gray-700 hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 duration-500  md:hover:text-[#6DB0FF] md:p-0">Contact</a>
          </li>
        </ul>
      </div>
      <div class="flex justify-etween gap-5">
        <?php if (isset($_SESSION['user_role'])) { ?>
          <a class="text-sm hover:bg-gray-100 duration-500 hover:text-[#6DB0FF] block px-4 py-2" href="<?= URLROOT . '/users/logout ' ?>">logout</a>
        <?php
        } else {
        ?>
          <ul class="flex justify-around gap-7">
            <li>
              <a class="text-sm hover:bg-gray-100 duration-500 hover:text-[#6DB0FF] block px-4 py-2" href="<?= URLROOT . '/Users/login' ?> "> LogIn</a>
            </li>
            <li>
              <a class="text-sm hover:bg-gray-100 duration-500 hover:text-[#6DB0FF] block px-4 py-2" href="<?= URLROOT . '/Users/register' ?>">Register</a>
            </li>
          </ul>
        <?php
        }
        ?>

        <?php if (!empty($_SESSION['user_role'])) { ?>
          <?php if ($_SESSION['user_role'] == 'admin' || $_SESSION['user_role'] == 'Admin') { ?>

            <a class="text-sm hover:bg-gray-100 duration-500 hover:text-[#6DB0FF] block px-4 py-2" href="<?= URLROOT . '/Pages/dashboard' ?>">dash</a>
          <?php } ?>
        <?php } else {
          echo '';
        } ?>
      </div>
    </div>
  </nav>