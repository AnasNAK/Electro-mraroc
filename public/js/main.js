

// get input field
let searchInput = document.getElementById("search");
let items = document.querySelectorAll(".result_search");

// add event click on input field
searchInput.addEventListener('input', listerItems);


function listerItems() {
    // get input value and make it lower case
    let filter = searchInput.value.toLowerCase();

    // get all items

    // loop in items and show the element that we want
    items.forEach((ele) => {
        // get product name from items
        let textEle = Object.values(ele.getElementsByClassName('productName'))[0].textContent;
        // compare the items name with the input value
        if (textEle.toLowerCase().includes(filter.toLowerCase())) {
            ele.style.display = '';
        } else {
            ele.style.display = "none";
        }
    })
}
