<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="col-span-12 mt-36">
    <div class="grid gap-2 grid-cols-1 lg:grid-cols-1">
        <div class="bg-[#F1F8FF] p-4 shadow-lg rounded-lg ">
            <div class="flex justify-between  ">
                <h1 class="font-bold text-base">Your Cart</h1>
            </div>
            <div class="mt-4">
                <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto">
                        <div class="py-2 align-middle inline-block min-w-full">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg bg-[#F1F8FF]">
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
                                    <tbody class="bg-white divide-y divide-gray-200" id="ProductsContainer">

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-container flex justify-between gap-7 ">
                <div class="flex">
                    <h2 class="text-2xl font-bold">Total :</h2>
                    <p id="totalPriceContainer" class="font-bold align-center text-xl">0 DH</p>
                </div>
                <div>
                    <button id="btn-to-hide" class="bg-gray-500 rounded-xl text-white font-bold px-2.5 py-1 border-xl border-black mt-5 duration-500 hover:bg-gray-900 border-2 ">
                        Confirm
                    </button>
                    <button id="btn-to-hide" class="bg-red-500 rounded-xl text-white font-bold px-2.5 py-1 border-xl border-black mt-5 duration-500 hover:bg-red-700 border-2 " onclick="clearLocalStorage()">
                        Cancel

                    </button>
                </div>
            </div>
        </div>

    </div>
</div>




<script>
    ////////////   increment number in cart /////////////
    const ButtonToHide = document.querySelectorAll("#btn-to-hide");
    const localstorage = window.localStorage.getItem('products');
    if (localstorage === 0 || !localstorage) {
        ButtonToHide[0].style.display = 'none';
        ButtonToHide[1].style.display = 'none';
    };



    function updateTotalPrice() {
        let storedProducts = JSON.parse(localStorage.getItem("products"));
        let totalPrice = 0;


        storedProducts.forEach(product => {
            totalPrice += Number(product['product_price']) * Number(product['product_quantity']);
        });
        return totalPrice;
    };


    const totalPriceContainer = document.getElementById('totalPriceContainer');
    totalPriceContainer.innerHTML = `${updateTotalPrice()}.00 DH`;

    const clearLocalStorage = _ => {
        localStorage.removeItem('products')
        location.reload();
    }

    let localStorageData = JSON.parse(localStorage.getItem('products'));

    if (localStorageData === null) {
        localStorageData = []
    }
    let productsData = [];
    const productsContainer = document.getElementById('ProductsContainer');

    for (let i = 0; i < localStorageData.length; i++) {
        productsContainer.innerHTML += ` 
                                            <tr class="" id='targetedElement'>
                                                <td class="w-9">
                                                    <img src="${localStorageData[i].product_image}" alt="">
                                                </td>
                                                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                    <p>${localStorageData[i].product_name}</p>
                                                </td>
                                                <td class=" whitespace-no-wrap text-sm leading-5 flex gap-2 items-center border rounded justify-center ">
                                                    <p id="minusButton" class="bg-gray-300 rounded p-2 text-2xl cursor-pointer">-</p>
                                                    <p id="productQuantity" class="text-2xl bg-gray-100 p-2" data-quantity="${localStorageData[i].product_quantity}">${localStorageData[i].product_quantity}</p>
                                                    <p id="plusButton" class="bg-gray-300 rounded p-2 text-2xl cursor-pointer">+</p>
                                                </td>
                                                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                    <div class="flex text-[#685942]">
                                                        <p>${localStorageData[i].product_price} .00 DH</p>
                                                    </div>
                                                </td>
                                                <div id="cart-btn" data-id="${localStorageData[i].product_id}" data-image="${localStorageData[i].product_image}" data-name="${localStorageData[i].product_name}" 
                                                data-description="${localStorageData[i].product_description}" data-price="${localStorageData[i].product_price}" data-quantity="${localStorageData[i].product_quantity}">  </div>
                                                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                    <div class="flex space-x-4">
                                                        <a href="" id="cancelButton" data-id="${localStorageData[i].product_id}"class="text-red-500 hover:text-red-600">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-1 ml-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                            </svg>
                                                            <p>Delete</p>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
        
    `;
    }

    const plus_button = document.querySelectorAll("#plusButton");
    const minus_button = document.querySelectorAll("#minusButton");
    const cancel_button = document.querySelectorAll("#cancelButton");
    const cartButton = document.querySelectorAll("#cart-btn")
    const productQuantity = document.querySelectorAll('#productQuantity');
    const totalPrice = document.getElementById('totalPrice');
    const targetedElement = document.getElementById('targetedElement');


    for (let plus of plus_button) {
        plus.addEventListener("click", e => {

            plus.previousElementSibling.dataset.quantity++; // icrement the value of dataset-quantity property
            plus.previousElementSibling.innerHTML = Number(plus.previousElementSibling.dataset.quantity); // display the new value to the end user


            let localstorageData = JSON.parse(localStorage.getItem('products'));

            if (localstorageData === null) {
                localstorageData = []
            }

            let productsData = []

            for (let i = 0; i < localStorageData.length; i++) {

                let data = {

                    'product_id': cartButton[i].dataset.id,
                    'product_name': cartButton[i].dataset.name,
                    'product_description': cartButton[i].dataset.description,
                    'product_image': cartButton[i].dataset.image,
                    'product_price': Number(cartButton[i].dataset.price),
                    'product_quantity': Number(plus.previousElementSibling.dataset.quantity),

                }

                productsData = data;

                const index = localstorageData.findIndex(productsData => productsData.product_id === cartButton[i].dataset.id);
                if (index !== -1) {
                    productQuantity[i].value = Number(plus.previousElementSibling.dataset.quantity);
                    console.log(localStorageData);
                    localStorageData.splice(index, 1, productsData);
                    console.log(localStorageData);
                    window.localStorage.setItem('products', JSON.stringify(localStorageData));
                    totalPriceContainer.innerHTML = updateTotalPrice();
                }

            }
        })
    }

    for (let minus of minus_button) {
        minus.addEventListener("click", _ => {

            minus.nextElementSibling.dataset.quantity > 1 && minus.nextElementSibling.dataset.quantity--; // decrement the value of dataset-quantity property
            minus.nextElementSibling.innerHTML = Number(minus.nextElementSibling.dataset.quantity); // display the new value to the end user 

            let localStorageData = JSON.parse(localStorage.getItem('products'));

            if (localStorageData === null) {
                localStorageData = []
            }

            let productsData = []

            for (let i = 0; i < localStorageData.length; i++) {

                let data = {

                    'product_id': cartButton[i].dataset.id,
                    'product_name': cartButton[i].dataset.name,
                    'product_description': cartButton[i].dataset.description,
                    'product_image': cartButton[i].dataset.image,
                    'product_price': Number(cartButton[i].dataset.price),
                    'product_quantity': Number(minus.nextElementSibling.dataset.quantity),

                }
                productsData = data;


                const index = localstorageData.findIndex(productsData => productsData.product_id === cartButton[i].dataset.id);
                if (index !== -1) {
                    productQuantity[i].value = Number(minus.nextElementSibling.dataset.quantity);
                    localStorageData.splice(index, 1, productsData);
                    window.localStorage.setItem('products', JSON.stringify(localStorageData));
                    totalPriceContainer.innerHTML = updateTotalPrice();

                }
            }


        })
    }

    for (let cancel of cancel_button) {
        cancel.addEventListener("click", _ => {
            var product_set_id = cancel.dataset.id;
            cancel.parentNode.parentNode.remove();

            // check if product was stored in localStorage
            if (localStorage.getItem("products")) {
                let storedProducts = JSON.parse(localStorage.getItem("products"));

                // get the position of the product to be removed
                let index = storedProducts.findIndex(obj => obj.product_id === product_set_id);

                // Check if the product was found and then update the storedProducts array
                if (index !== -1) {
                    storedProducts.splice(index, 1);
                    localStorage.setItem("products", JSON.stringify(storedProducts));
                    totalPriceContainer.innerHTML = updateTotalPrice();

                }

            }
        });
    }
</script>


<?php require APPROOT . '/views/inc/footer.php'; ?>