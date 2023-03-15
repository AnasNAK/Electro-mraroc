<?php
if (!$_SESSION['user_role']) redirect('Users/login')

?>


<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="pt-24 ">
    <h2 class="text-4xl font-bold text-white text-center mb-9">Details About Product</h2>
    <div class="flex gap-7 justify-center align-center ">
        <img id='productImage' class="w-56" data-image="<?= URLROOT . '/img/upload/' .  $data['product']->image; ?>" src="<?= URLROOT . '/img/upload/' .  $data['product']->image; ?>" alt="<?php echo $data['product']->name; ?>">
        <div class=" rounded-sm bg-[#A9A9A9] w-[60%] px-10 py-5">
            <p id='productCategorie' class="text-gray-700 text-xl text-white underline decoration-[#dfdfdf] " data-categorie="<?= $data['product']->categorie; ?>"><span class="text-gray-300 uppercase ">Categorie </span> <?php echo $data['categories']->name; ?></p>
            <h1 id='productName' class="font-bold pl-3 text-4xl " data-name="<?php echo $data['product']->name; ?>"><?php echo $data['product']->name; ?></h1>
            <p id='productDescription' class="text-gray-700 text-xl " data-description="<?php echo $data['product']->description; ?>"><?php echo $data['product']->description; ?></p>
            <div id="idProduct" data-id="<?php echo $data['product']->id; ?>">
            </div>
            <div id="productQuantity" data-quantity="1">
            </div>
            <h3 id='productPrice' class="pt-3 font-bold font-serif text-sm text-start" data-price="<?= $data['product']->price ?>"><?php echo $data['product']->price; ?> .00 DH</h3>
            <div class="btn-container flex justify-center items-center">

                <button id="addToCart" class="py-2 px-4 bg-black text-white rounded duration-500 hover:bg-[#6DB0FF] active:bg-blue-700 disabled:opacity-50 mt-4  "> Add To Cart</button>


            </div>

        </div>

    </div>



</div>
<script>
    if(!localStorage.getItem("products"))
         localStorage.setItem("products", JSON.stringify([]));
    console.log(1);
    const submit_product = document.getElementById("addToCart");
    const image_product = document.getElementById("productImage");
    const name_product = document.getElementById("productName");
    const description_product = document.getElementById("productDescription");
    const price_product = document.getElementById("productPrice");
    const categorie_product = document.getElementById("productCategorie");
    const id_product = document.getElementById("idProduct");
    const Quantity_product = document.getElementById("productQuantity");
    console.log(2);

    const items = localStorage.getItem('products');
    const object = JSON.parse(items);
    console.log(21);
    console.log(Array.isArray(object));
    const productIds = object.map(product =>{
        console.log(product.product_id);
        return parseInt(product.product_id);
    });
    console.log(22);
    console.log(productIds);
    console.log(3);


    let data = {


        'product_id': id_product.dataset.id,
        'product_image': image_product.dataset.image,
        'product_name': name_product.dataset.name,
        'product_description': description_product.dataset.description,
        'product_price': price_product.dataset.price,
        'product_quantity': Quantity_product.dataset.quantity
    }
    console.log(4);
    let localStorageData = JSON.parse(localStorage.getItem('products'));

    if (localStorageData === null) {
        localStorageData = [];
    }
    let localStorageDataLength = localStorageData.length > 0 ? localStorageData.length : 1;

    console.log(5);
    console.log(submit_product);
    submit_product.addEventListener("click", _ => {
        console.log("addtocart");

        if (productIds.includes(parseInt(id_product.dataset.id))) {
            alert('7aaadek teem !');
        } else {
            console.log("inside push");
            console.log(localStorageData);
            localStorageData.push(data);
            console.log(localStorageData);
            localStorage.setItem('products', JSON.stringify(localStorageData));

        }
        window.location.href= "<?= URLROOT . '/Pages/shop' ?>";
        console.log("clicked");


    });



    ////////////////////////////////////////////////////////////////////////////////
</script>
<?php require APPROOT . '/views/inc/footer.php'; ?>