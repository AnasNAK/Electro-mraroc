<!-- component -->
<!DOCTYPE html>
<html x-data="data()" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/a4fc922de4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style.css">
    <link rel="icon" type="image/png" href="<?= URLROOT . '/img/upload/E.png' ?>" />
    <link rel="stylesheet" href="./public/css/style.css">
</head>

<body class="bg-[#3E3E3E] font-[sitika] text-black">

    <!-- form add product -->
    <section class="max-w-4xl p-6 mx-auto bg-[#6DB0FF] rounded-md shadow-md my-7">
        <h1 class="text-4xl font-bold capitalize ">Add Product</h1>
        <form action="<?= URLROOT . '/Products/add'; ?>" method="POST" id="form" enctype="multipart/form-data">

            <div id="formInp">
                <div class="form-group mb-6">
                    <input type="text" name="name" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Product Name">
                </div>
                <div class="form-group mb-6 flex gap-4">
                    <div class="">
                        <input type="number" name="price" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Product Price">
                    </div>
                    <div class="">
                        <input type="number" name="stock" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Product Quantity">
                    </div>
                    <div class="flex flex-row-reverse  items-center gap-2">
                        <label for="">Categorie</label>
                      
                        <select class="p-1 rounded "name="categorie" id="">
                    
                            <?php foreach ($data['categorie'] as $Categorie) : ?>
                                <option class="bg-blue-100 text-bold font-bold " value="<?= $Categorie->id ?>"><?= $Categorie->name; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                </div>
                <div class="form-group mb-6">
                    <textarea name="description" class=" form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none " rows="3" placeholder="Product Description"></textarea>
                </div>
                <div class="form-group mb-6 w-full">
                    <input type="file" name="image" class="block">
                </div>
                <hr class="border-2 my-4">
            </div>

            <div class="flex justify-between mt-6">
                <div class="flex gap-6">
                    <button type="submit" class="px-6 py-2 leading-5 transform rounded-md focus:outline-none font-bold bg-[#FFF8ED] transition hover:bg-[#F1F8FF] ">
                        Save
                    </button>
                    <a href="<?= URLROOT ?>/Pages/dashboard">
                        <button type="button" class="px-6 py-2 leading-5 transform rounded-md focus:outline-none font-bold bg-[#FFF8ED] transition hover:bg-[#F1F8FF] ">
                            Cancel
                        </button>
                    </a>
                </div>
            </div>
        </form>
    </section>
</body>

<script src="<?php echo URLROOT; ?>/js/addMulti.js" type="module"></script>

</html>