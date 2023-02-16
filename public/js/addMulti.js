
// //////////////////////// add multiple ///////////////////////



// let addMoreBtn = document.getElementById('oneMore');
// let form = document.getElementById('form');

// addMoreBtn.addEventListener('click', showForm);

// function showForm(e) {
//     // cancel the event of the button that send form information
//     e.preventDefault();

//     // create new element
//     const newform = document.createElement('div');

//     // insert into div that created this html
//     newform.innerHTML = `<div id="formInp">
//                             <div class="form-group mb-6">
//                                 <input type="text" name="name[]" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"  placeholder="Product Name">
//                             </div>
//                             <div class="form-group mb-6 flex gap-4">
//                                 <div class="">
//                                     <input type="number" name="price[]" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Product Price">
//                                 </div>
//                                 <div class="">
//                                     <input type="number" name="stock[]" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Product Quantity">
//                                 </div>
//                             </div>
//                             <div class="form-group mb-6">
//                                 <textarea name="description[]" class=" form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none "  rows="3" placeholder="Product Description" ></textarea>
//                             </div>
//                             <div class="form-group mb-6 w-full">
//                                 <input type="file" name="image[]" class="block">
//                             </div>
//                             <hr class="border-2 my-4">
//                         </div>`;

//     // insert the newForm before the lase element childe inside form
//     form.insertBefore(newform,form.lastElementChild);
 
// }
// console.log('test');