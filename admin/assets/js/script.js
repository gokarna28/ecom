//product dropdowns in sidebar
function showProduct() {
  const ProdictList = document.getElementById("productList");
  if (ProdictList.style.maxHeight === "0px" || !ProdictList.style.maxHeight) {
    ProdictList.style.maxHeight = ProdictList.scrollHeight + "px";
    ProdictList.style.opacity = 1;
  } else {
    ProdictList.style.maxHeight = "0px";
    ProdictList.style.opacity = 0;
  }
}

//Confirm the delete category
function confirmDeleteCategory() {
  return confirm("Are you sure, You want to delete the category!");
}


//add product 
document.addEventListener("DOMContentLoaded", function () {
  const formElement = document.getElementById("productForm");
  // console.log(formElement); // This should not be null

  if (formElement) {
    formElement.addEventListener("submit", (event) => {
      event.preventDefault();

      let proName = document.getElementById("pro_name").value;
      let proCategory = document.getElementById("pro_category").value;
      let proPrice = document.getElementById("pro_price").value;
      let proImage = document.getElementById("pro_image").files[0];
      let proDescription = document.getElementById("pro_discription").value;

      // Create FormData object
      var formData = new FormData();
      formData.append("pro_name", proName);
      formData.append("pro_category", proCategory);
      formData.append("pro_price", proPrice);
      formData.append("pro_image", proImage);
      formData.append("pro_discription", proDescription);

      var http = new XMLHttpRequest();
      http.open("POST", "backend/functions.php?type=addProducts", true);

      http.onreadystatechange = function () {
        if (http.readyState == 4 && http.status == 200) {
          document.getElementById("productResponse").innerHTML = http.responseText;
        }
      };

      http.send(formData);
    });
  }

  // call the product dropdown function 
  GetCategory();

  //call the view product details function here
  GetProductDetails();

});


//category deatails for the product for dropdowm
function GetCategory() {
  var xHttp = new XMLHttpRequest();
  xHttp.open("GET", "backend/functions.php?type=categories", true);

  xHttp.onreadystatechange = function () {

    if (xHttp.readyState == 4 && xHttp.status == 200) {
      var selectCategory = document.getElementById("pro_category");

      var data = JSON.parse(xHttp.responseText);
      if (data) {
        //selectCategory.innerHTML = "";

        data.forEach(item => {
          selectCategory.innerHTML += `
            <option value="${item.cate_id}">${item.cate_name}</option>
            `;
        });

      } else {
        console.log("no category found");
      }

    }
  }
  xHttp.send();
}


//view product detauls
function GetProductDetails() {
  var xhttp = new XMLHttpRequest();
  xhttp.open("GET", "backend/functions.php?type=products", true);

  xhttp.onreadystatechange = function () {
    var Table = document.getElementById("product_table");

    if (xhttp.readyState == 4 && xhttp.status == 200) {
      var products = JSON.parse(xhttp.responseText);

      if (products) {
        products.forEach(item => {
          var t_length = Table.rows.length;
          // console.log(t_length)
          document.getElementById("productData").innerHTML += `

                  <tr class="border-t border-white hover:bg-gray-400">
                    <td class="border p-4">${t_length}</td>
                    <td class="border w-28 h-full"><img src="admin/${item.pro_image}" class="w-full h-full object-cover">
                    </td>
                    <td class="border p-4">${item.pro_name}</td>
                    <td class="border p-4">${item.cate_name}</td>
                    <td class="border p-4">${item.pro_price}</td>
                    <td class="border p-4">${item.pro_discription}</td>
                    <td class="border p-4">${item.pro_added_on}</td>
                    <td class="border p-4">${item.pro_updated_on}</td>
                    <td class="border p-2 space-y-1">
                        <button onclick="getUpdateDetails(${item.pro_id}, ${item.cate_id})" 
                        
                            class="update-btn bg-stone-800 text-white px-4 py-1 rounded hover:bg-blue-700">
                            Update</button>

                        <button class="bg-stone-600 text-white px-4 py-1 rounded hover:bg-red-700">
                            <a onclick="return confirmDeleteCategory()"
                                href="backend/delete_product.php?id=<?php echo $row['pro_id'] ?>">Delete</a>
                        </button>
                    </td>
                </tr>
        `;
        });

      } else {
        document.getElementById("productData").innerHTML = "no products";
      }
    }
  }
  xhttp.send();
}


//get the data of products and categories for the update form
function getUpdateDetails(product_id, category_id) {

  var update = new XMLHttpRequest();
  update.open("GET", "backend/functions.php?type=productscategories", true);

  update.onreadystatechange = function () {
    if (update.readyState == 4 && update.status == 200) {

      var updateData = JSON.parse(update.responseText);

      if (updateData && updateData.products && updateData.categories) {
        updateData.products.forEach(data => {
          if (data.pro_id == product_id) {

            document.getElementById("update_product_form").classList.remove("hidden");

            // Render the product update form
            document.getElementById("update_form_container").innerHTML = `
              <form class="space-y-4 p-4" method="post" enctype="multipart/form-data">
              <input type="hidden" name="pro_id_update" value="${data.pro_id}">
                <div class="flex items-center space-x-6">
                  <div class="flex flex-col space-y-2 w-full">
                    <label>Product Name</label>
                    <input class="text-lg border border-slate-500 text-slate-700 px-4 py-1 rounded-md" type="text" name="pro_name_update" value="${data.pro_name}">
                  </div>
                  <div class="flex flex-col space-y-2 w-full">
                    <label>Product Category</label>
                    <select id="updated_cate" name="pro_cate_update" class="cat-selector text-lg border bg-white border-slate-500 text-slate-700 px-4 py-1 rounded-md">
                      <!-- Category options will be appended here -->
                    </select>
                  </div>
                </div>
                <div class="w-full flex space-x-6">
                  <div class="w-1/2">
                    <div class="flex flex-col space-y-2">
                      <label>Product Price</label>
                      <input class="text-lg border border-slate-500 text-slate-700 px-4 py-1 rounded-md" type="text" name="pro_price_update" value="${data.pro_price}">
                    </div>
                    <div class="flex flex-col space-y-2">
                      <label>Product Description</label>
                      <textarea class="text-lg border h-24 border-slate-500 text-slate-700 px-4 py-1 rounded-md" name="pro_discription_update" >${data.pro_discription}</textarea>
                    </div>
                  </div>
                  <div class="w-1/2 flex items-center space-x-4 py-4">
                    <div class="w-1/2 h-full">
                      <img id="previewImage" src="admin/${data.pro_image}" alt="no Image" class="w-full h-full object-cover">
                    </div>
                    <div class="w-1/2 h-full flex flex-col items-center justify-center space-y-4">
                     
                      <label class="border w-36 bg-white border-slate-400 px-4 py-2 rounded-md cursor-pointer">
                        Change Image
                        <input id="fileInput" name="pro_image_update" class="hidden" type="file" accept="image/*" value="${data.pro_image}">
                      </label>
                    </div>
                  </div>
                </div>
                <div class="">
                  <button type="submit" name="pro_update_form_save"
                  class="bg-blue-700 text-xl font-medium flex items-center justify-center text-white px-6 py-2 rounded-md hover:bg-stone-800">Save</button>
                </div>
              </form>
            `;

            // Append the categories
            var selectElement = document.getElementById("updated_cate");
            updateData.categories.forEach(cate => {
              let updateCateOption = document.createElement("option");
              updateCateOption.value = cate.cate_id;
              updateCateOption.text = cate.cate_name;

              // Set the selected category
              if (cate.cate_id == category_id) {
                updateCateOption.selected = true;
              }

              selectElement.appendChild(updateCateOption);
            });

            // Handle the image change and preview
            const fileInput = document.getElementById("fileInput");
            const previewImage = document.getElementById("previewImage");

            fileInput.addEventListener("change", function (event) {
              const file = event.target.files[0];
              if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                  previewImage.src = e.target.result; // Set the preview image source to the selected image
                };
                reader.readAsDataURL(file); // Read the image as Data URL
              }
            });

          }
        });
      }
    }
  }
  update.send();
}

//close update form
function closeProductUpdate() {
  document.getElementById("update_product_form").classList.add("hidden");

}


//add categories
document.addEventListener("DOMContentLoaded", function () {
  const addCategoryForm = document.getElementById("add_category_form");

  addCategoryForm.addEventListener("submit", (event) => {
    event.preventDefault();

    let cate_name = document.getElementById("cate_name").value;
    //console.log(cate_name)

    let cate_params = {
      category: cate_name,
    };

    console.log(cate_params);

    cate_xhttp = new XMLHttpRequest();
    cate_xhttp.open("POST", "backend/functions.php?type=addCategory", true);

    cate_xhttp.onreadystatechange = function () {
      if (cate_xhttp.readyState == 4 && cate_xhttp.status == 200) {
        var data = cate_xhttp.responseText;
        console.log(data);
      }
    }
    cate_xhttp.send(JSON.stringify(cate_params));

  })
})