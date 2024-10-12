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

const updateProductForm = document.getElementById("update_product_form");
const ProductName = document.getElementById("pro_name");
const ProductId = document.getElementById("pro_id");
const Category = document.getElementById("current_cate");
const Price = document.getElementById("pro_price");
const Disc = document.getElementById("disc");
const Image = document.getElementById("pro_image");
const FileInput = document.getElementById("fileInput");

const UpdateBtn = document.querySelectorAll(".update-btn");
UpdateBtn.forEach(function (btn) {
  btn.addEventListener("click", (e) => {
    const data = e.currentTarget;
    const cate_id = data.getAttribute("data-cate_id");
    const pro_id = data.getAttribute("data-pro_id");
    const name = data.getAttribute("data-pro_name");
    const cate_name = data.getAttribute("data-cate_name");
    const price = data.getAttribute("data-price");
    const disc = data.getAttribute("data-disc");
    const image = data.getAttribute("data-img");

    updateProductForm.classList.remove("hidden");
    ProductName.value = name;
    Category.value = cate_id;
    Category.innerHTML = cate_name;
    Price.value = price;
    Disc.value = disc;
    Image.src = image;
    ProductId.value = pro_id;
  });
});

//remove image
function removeImage(event) {
  event.preventDefault();
  Image.src = "";
}

//close productPOpup
function closeProductUpdate() {
  updateProductForm.classList.add("hidden");
}


//add product 
document.addEventListener("DOMContentLoaded", function () {
  document.getElementById("productForm").addEventListener("submit", (event) => {
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
    http.open("POST", "backend/functions.php", true);

    http.onreadystatechange = function () {
      if (http.readyState == 4 && http.status == 200) {
        document.getElementById("productResponse").innerHTML = http.responseText;
      }
    };

    http.send(formData);
  });
});




//category deatails for the product for dropdowm
function GetCategory() {
  var xHttp = new XMLHttpRequest();
  xHttp.open("GET", "backend/functions.php?type=categories", true);

  xHttp.onreadystatechange = function () {

    if (xHttp.readyState == 4 && xHttp.status == 200) {
      var selectCategory = document.getElementById("pro_category");

      // console.log(xHttp.responseText)
      // console.log("we are here")

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
GetCategory();


//view product detauls
function GetProductDetails() {
  var xhttp = new XMLHttpRequest();
  xhttp.open("GET", "backend/functions.php?type=products", true);

  xhttp.onreadystatechange = function () {
    var Table = document.getElementById("product_table");
    var t_length = Table.rows.length;

    if (xhttp.readyState == 4 && xhttp.status == 200) {
      var products = JSON.parse(xhttp.responseText);

      if (products) {
        products.forEach(item => {
          document.getElementById("productData").innerHTML += `

                  <tr class="border-t border-white hover:bg-gray-400">
                    <td class="border p-4">${t_length}</td>
                    <td class="border w-28 h-full"><img src="${item.pro_image}" class="w-full h-full object-cover">
                    </td>
                    <td class="border p-4">${item.pro_name}</td>
                    <td class="border p-4">${item.cate_name}</td>
                    <td class="border p-4">${item.pro_price}</td>
                    <td class="border p-4">${item.pro_discription}</td>
                    <td class="border p-4">${item.pro_added_on}</td>
                    <td class="border p-4">${item.pro_updated_on}</td>
                    <td class="border p-2 space-y-1">
                        <button onclick="" data-pro_id="<?php echo $row['pro_id'] ?>" ; data-pro_name="<?php echo $row['pro_name'] ?>" ;
                            data-cate_name="<?php echo $row['cate_name'] ?>" ; data-price="<?php echo $row['pro_price'] ?>" ;
                            data-disc="<?php echo $row['pro_discription'] ?>" ; data-img="admin/<?php echo $row['pro_image'] ?>" ;
                            data-cate_id="<?php echo $row['cate_id'] ?>" ;
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
GetProductDetails();



