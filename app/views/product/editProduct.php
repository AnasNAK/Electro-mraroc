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
    <link rel="icon" type="image/png" href="../public/img/logo-1.png" />
    <link rel="stylesheet" href="./public/css/style.css">
</head>

<body class="bg-[#FFF2DF] font-[sitika] text-black">

    <!-- form add product -->
    <section class="max-w-4xl p-6 mx-auto bg-[#E8D0AC] rounded-md shadow-md my-7">
        <h1 class="text-4xl font-bold capitalize ">Edit Product</h1>
        <form action="<?= URLROOT . '/Products/edit/'. $data['id']; ?>" method="POST" enctype="multipart/form-data">
            <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                <div>
                    <label class="font-bold" for="name">Product Name</label>
                    <input id="name" name="name" value="<?= $data['name'] ?>" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-[#685942] rounded-md focus:border-[#685942] focus:outline-none focus:ring">
                    <span class="font-bold text-orange-400"><?php echo $data['name_err']; ?></span>
                </div>

                <div>
                    <label class="font-bold" for="stock">Stock</label>
                    <input id="stock" name="stock" value="<?= $data['stock'] ?>" type="number" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-[#685942] rounded-md focus:border-[#685942] focus:outline-none focus:ring   ">
                    <span class="font-bold text-orange-400"><?php echo $data['stock_err']; ?></span>
                </div>

                <div>
                    <label class="font-bold" for="price">Price</label>
                    <input id="price" name="price" value="<?= $data['price'] ?>" type="number" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-[#685942] rounded-md focus:border-[#685942] focus:outline-none focus:ring ">
                    <span class="font-bold text-orange-400"><?php echo $data['price_err']; ?></span>
                </div>
                <div>
                    <label class="font-bold" for="Description">Description</label>
                    <textarea id="Description" type="textarea" value="<?= $data['description'] ?>" name="description" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-[#685942] rounded-md focus:border-[#685942] focus:outline-none focus:ring"><?= $data['description'] ?></textarea>
                    <span class="font-bold text-orange-400"><?php echo $data['description_err']; ?></span>
                </div>
                <div>
                    <label class="block font-bold">
                        Product Image
                    </label>
                    <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-white border-dashed rounded-md">
                        <div class="space-y-1 text-center">
                            <svg class="mx-auto h-12 w-12" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <div class="flex text-sm">
                                <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium  hover:text-blue-300  ">
                                    <span class="">Upload a file</span>
                                    <input id="file-upload" name="image" type="file" value="<?= $data['image'] ?>" class="sr-only ">

                                </label>
                                <p class="pl-1">or drag and drop</p>
                            </div>
                            <p class="text-xs ">
                                PNG, JPG
                            </p>
                        </div>
                    </div>
                    <span class="font-bold text-orange-400"><?php echo $data['image_err']; ?></span>
                </div>
            </div>

            <div class="flex justify-between mt-6">
                <div>
                    <button type="submit" class="px-6 py-2 leading-5 transform rounded-md focus:outline-none font-bold bg-[#FFF8ED] transition hover:bg-[#685942] hover:text-[#FFF2DF]">
                        Save
                    </button>
                </div>
            </div>
        </form>
    </section>
</body>

</html>