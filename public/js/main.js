// get input field
let searchInput = document.getElementById("search");
let items = document.querySelectorAll(".result_search");

// add event click on input field
searchInput.addEventListener("input", listerItems);

function listerItems() {
  // get input value and make it lower case
  let filter = searchInput.value.toLowerCase();

  // get all items

  // loop in items and show the element that we want
  items.forEach((ele) => {
    // get product name from items
    let textEle = Object.values(ele.getElementsByClassName("productName"))[0]
      .textContent;
    // compare the items name with the input value
    if (textEle.toLowerCase().includes(filter.toLowerCase())) {
      ele.style.display = "";
    } else {
      ele.style.display = "none";
    }
  });
}











////////////////////////////////////////////////////////////////////////////



  



// loop over plus and minus buttons and add event listener to them 
const plus_button = document.querySelectorAll("#plusButton");
const minus_button = document.querySelectorAll("#minusButton");
const cancel_button = document.querySelectorAll("#cancelButton");
const cartButton = document.querySelectorAll("#cart-btn")
const productQuantity = document.querySelectorAll('#productQuantity');
const totalPrice = document.getElementById('totalPrice');



for(let plus of plus_button){
  plus.addEventListener("click" , _ => {
    
    plus.nextElementSibling.dataset.quantity++; // icrement the value of dataset-quantity property
    plus.nextElementSibling.innerHTML = Number(plus.nextElementSibling.dataset.quantity); // display the new value to the end user


    let localStorageData = JSON.parse(localStorage.getItem('products-cart-items'));

    if(localStorageData === null) {
        localStorageData = []
    }

    let productsData = []

  // for(let i = 0; i < products_summary_length; i++){
      
  //     let data = {
          
  //         'product_id' : cartButton[i].dataset.id,
  //         'product_name' : cartButton[i].dataset.name,
  //         'product_description' : cartButton[i].dataset.description,
  //         'product_image' : cartButton[i].dataset.image,
  //         'product_price' : Number(cartButton[i].dataset.price),
  //         'product_quantity' : Number(plus.nextElementSibling.dataset.quantity)
  //     }

  //     productsData=data;

      
  //     const index = localStorageData.findIndex(productsData => productsData.product_id === cartButton[i].dataset.id);
  //     if(index !== -1) {
  //         productQuantity[i].value = Number(plus.nextElementSibling.dataset.quantity);

  //         localStorageData.splice(index, 1 , data);
  //         window.localStorage.setItem('products-cart-items', JSON.stringify(localStorageData));
  //         totalPrice.innerHTML = updaeTotalPrice();
  //     }



  //}

  
  
  })
}

for(let minus of minus_button){
minus.addEventListener("click", _ => {
  
  minus.previousElementSibling.dataset.quantity > 0 && minus.previousElementSibling.dataset.quantity--; // decrement the value of dataset-quantity property
  minus.previousElementSibling.innerHTML = Number(minus.previousElementSibling.dataset.quantity); // display the new value to the end user 

  let localStorageData = JSON.parse(localStorage.getItem('products'));

  if(localStorageData === null) {
      localStorageData = []
  }

  let productsData = []

  for(let i = 0; i < products_summary_length; i++){

      let data = {
          'product_id' : cartButton[i].dataset.id,
          'product_name' : cartButton[i].dataset.name,
          'product_description' : cartButton[i].dataset.description,
          'product_image' : cartButton[i].dataset.image,
          'product_price' : Number(cartButton[i].dataset.price),
          'product_quantity' :Number(minus.previousElementSibling.dataset.quantity)
      }

      productsData = data;

      const index = localStorageData.findIndex(data => data.product_id === data.product_id);
      if(index !== -1) {
          productQuantity[i].value = Number(minus.previousElementSibling.dataset.quantity);
          localStorageData.splice(index, 1 , data);
          window.localStorage.setItem('products-cart-items', JSON.stringify(localStorageData));
          totalPrice.innerHTML = updaeTotalPrice();

      }
  }


})
}

for(let cancel of cancel_button){ 
cancel.addEventListener("click", _ => {
  var product_set_id = cancel.dataset.id;
  cancel.parentNode.parentNode.remove();

  // check if product was stored in localStorage
  if(localStorage.getItem('products-cart-items')) { 
      let storedProducts = JSON.parse(localStorage.getItem("products-cart-items"));

      // get the position of the product to be removed
      let index = storedProducts.findIndex(obj => obj.product_id === product_set_id);

      // Check if the product was found and then update the storedProducts array
      if(index !== -1){
          storedProducts.splice(index, 1);
          localStorage.setItem("products-cart-items", JSON.stringify(storedProducts));
          

      }

  }
});
}
