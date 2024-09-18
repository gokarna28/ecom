//product dropdowns
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
const ProductId=document.getElementById("pro_id");
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
    ProductId.value=pro_id;
  });
});

//remove image
function removeImage() {
  event.preventDefault();
  Image.src = "";
}
//show image when image is changed
FileInput.addEventListener("change", () => {
  let [file] = FileInput.files;
  console.log(file);

  const reader = new FileReader();
  console.log(reader);
  reader.onload = (e) => {
    Image.src = e.target.result;
  };
  //console.log(read);
  reader.readAsDataURL(file);
});

//close productPOpup
function closeProductUpdate() {
  updateProductForm.classList.add("hidden");
}
