//categories dropdown
function showCategory() {
    const CategoryList = document.getElementById('categoryList');
    if (CategoryList.style.maxHeight === '0px' || !CategoryList.style.maxHeight) {
        CategoryList.style.maxHeight = CategoryList.scrollHeight + 'px'; 
        CategoryList.style.opacity = 1;
    } else {
        CategoryList.style.maxHeight = '0px'; 
        CategoryList.style.opacity = 0; 
    }
}


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
