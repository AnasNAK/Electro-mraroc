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
  <link rel="icon" type="image/png" href="<?= URLROOT . '/img/logo-2.png' ?>" />
  <link rel="stylesheet" href="./public/css/style.css">
</head>

<body class="bg-[#FFF2DF] font-[sitika]">
  <!--  -->
  <div x-data="setup()" :class="{ 'dark': isDark }">
    <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased  ">

      <!-- Header -->
      <div class="fixed w-full flex items-center  bg-[#DBC4A1] justify-between h-14 text-white z-10 gap-9 ">
        <div class="flex items-center justify-start md:justify-center pl-3 w-14 md:w-64 h-14 bg-[#DBC4A1]">
          <img class="w-7 h-7 md:w-10 md:h-10 mr-2 rounded-md overflow-hidden" src="<?= URLROOT . '/img/Nakhli.jpg' ?>" />
          <span class="hidden md:block">anas nak</span>
        </div>
        <div class="flex items-center justify-around h-14 bg-[#DBC4A1]  ">
          <ul class="flex justify-between">
            <li>
              <div class="block w-px h-6 mx-3 bg-gray-400 dark:bg-gray-700"></div>
            </li>
            <li>
              <a href="<?= URLROOT . '/Users/logout' ?> " class="flex items-center mr-4 hover:text-blue-100">
                <span class="inline-flex mr-1">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                    </path>
                  </svg>
                </span>
                Logout
              </a>
            </li>
            <li>
              <div class="block w-px h-6 mx-3 bg-gray-400 dark:bg-gray-700"></div>
            </li>
            <li>
              <a href="<?= URLROOT . '/Pages/index' ?> " class="flex  mr-4 hover:text-blue-100">
                <span class="inline-flex mr-1">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                    </path>
                  </svg>
                </span>
                Go Back
              </a>
            </li>
          </ul>
        </div>
      </div>
      <!-- ./Header -->

      <!-- Sidebar -->
      <div class="fixed flex flex-col top-14 left-0 w-14 hover:w-64 md:w-64 bg-[#685942] h-full text-white transition-all duration-300 border-none z-10 sidebar">
        <div class="overflow-y-auto overflow-x-hidden flex flex-col justify-between flex-grow">
          <ul class="flex flex-col py-4 space-y-1">
            <li class="px-5 hidden md:block">
              <div class="flex flex-row items-center h-8">
                <div class="text-sm font-light tracking-wide text-white uppercase">Main</div>
              </div>
            </li>
            <li>
              <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none transition hover:bg-[#DBC4A1] hover:text-[#000000] text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-white pr-6">
                <span class="inline-flex justify-center items-center ml-4">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                    </path>
                  </svg>
                </span>
                <span class="ml-2 text-sm tracking-wide truncate">Dashboard</span>
              </a>
            </li>

          </ul>

        </div>
      </div>
      <!-- ./Sidebar -->

      <div class="h-full ml-14 mt-14 mb-10 md:ml-64">
        <!-- Statistics Cards -->
        <div class="grid grid-cols-1  sm:grid-cols-2 gap-9 lg:grid-cols-3 p-4 lg:gap-32 ">
          <div class="bg-[#685942] shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-[#DBC4A1] text-white">
            <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
              <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current text-black transform transition-transform duration-500 ease-in-out">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                </path>
              </svg>
            </div>
            <div class="text-right">
              <p class="text-2xl">1</p>
              <p>Admin</p>
            </div>
          </div>
          <div class="bg-[#685942] shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-[#DBC4A1] text-white font-medium group">
            <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
              <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current text-black transform transition-transform duration-500 ease-in-out">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
              </svg>
            </div>
            <div class="text-right">
              <p class="text-2xl"><?= count($data['products']); ?></p>
              <p>Product</p>
            </div>
          </div>
          <div class="bg-[#685942] shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-[#DBC4A1] text-white font-medium group">
            <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
              <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current text-black transform transition-transform duration-500 ease-in-out">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
              </svg>
            </div>

            <div class="text-right">
              <p class="text-2xl">
                <?php print_r($data['productsum']->sum); ?>
              </p>
              <p>stock</p>
            </div>
          </div>
        </div>
        <div class="col-span-12 mt-5">
          <div class="grid gap-2 grid-cols-1 lg:grid-cols-1">
            <div class="bg-white p-4 shadow-lg rounded-lg ">
              <div class="flex justify-between  ">
                <h1 class="font-bold text-base">Products</h1>
                <a href="<?= URLROOT . '/Products/add' ?> " class="transition duration-300 hover:scale-150">
                  <i class="bi bi-plus-circle "></i>
                </a>
              </div>
              <div class="mt-4">
                <div class="flex flex-col">
                  <div class="-my-2 overflow-x-auto">
                    <div class="py-2 align-middle inline-block min-w-full">
                      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg bg-white">
                        <table class="min-w-full divide-y divide-gray-200">
                          <thead>
                            <tr>
                              <th class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                <div class="flex cursor-pointer">
                                  <span class="mr-2">PRODUCT img</span>
                                </div>
                              </th>
                              <th class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                <div class="flex cursor-pointer">
                                  <span class="mr-2">PRODUCT NAME</span>
                                </div>
                              </th>
                              <th class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                <div class="flex cursor-pointer">
                                  <span class="mr-2">Stock</span>
                                </div>
                              </th>
                              <th class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                <div class="flex cursor-pointer">
                                  <span class="mr-2">Price</span>
                                </div>
                              </th>
                              <th class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                <div class="flex cursor-pointer">
                                  <span class="mr-2">ACTION</span>
                                </div>
                              </th>
                            </tr>
                          </thead>
                          <?php foreach ($data['products'] as $Product) : ?>
                            <tbody class="bg-white divide-y divide-gray-200">
                              <tr>
                                <td class="w-9">
                                  <img src="<?= URLROOT . '/img/upload/' . $Product->image ?>" alt="">
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                  <p><?= $Product->name; ?></p>
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                  <p><?= $Product->stock; ?></p>
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                  <div class="flex text-[#685942]">
                                    <p><?= $Product->price; ?>00 DH</p>
                                  </div>
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                  <div class="flex space-x-4">
                                    <a href="<?= URLROOT; ?>/products/edit/<?= $Product->id; ?>" class="text-blue-500 hover:text-blue-600">
                                      <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                      </svg>
                                      <p>Edit</p>
                                    </a>

                                    <a href="<?= URLROOT; ?>/products/delete/<?= $Product->id; ?>" class="text-red-500 hover:text-red-600">
                                      <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-1 ml-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                      </svg>
                                      <p>Delete</p>
                                    </a>
                                  </div>
                                </td>
                              </tr>
                            </tbody>
                          <?php endforeach; ?>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </main>
  </div>
  </div>

</body>

</html>