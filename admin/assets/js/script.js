

//product dropdowns
function showProduct() {
    const ProdictList = document.getElementById('productList');
    if (ProdictList.style.maxHeight === '0px' || !ProdictList.style.maxHeight) {
        ProdictList.style.maxHeight = ProdictList.scrollHeight + 'px'; 
        ProdictList.style.opacity = 1;
    } else {
        ProdictList.style.maxHeight = '0px'; 
        ProdictList.style.opacity = 0; 
    }
}


//Confirm the delete category
function confirmDeleteCategory(){
    return confirm('Are you sure, You want to delete the category!');
}