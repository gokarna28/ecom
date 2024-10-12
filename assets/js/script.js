//hero section typing animation
var TxtRotate = function (el, toRotate, period) {
  this.toRotate = toRotate;
  this.el = el;
  this.loopNum = 0;
  this.period = parseInt(period, 10) || 2000;
  this.txt = "";
  this.tick();
  this.isDeleting = false;
};

TxtRotate.prototype.tick = function () {
  var i = this.loopNum % this.toRotate.length;
  var fullTxt = this.toRotate[i];

  if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
  } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
  }

  this.el.innerHTML = '<span class="wrap">' + this.txt + "</span>";

  var that = this;
  var delta = 300 - Math.random() * 100;

  if (this.isDeleting) {
    delta /= 2;
  }

  if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
  } else if (this.isDeleting && this.txt === "") {
    this.isDeleting = false;
    this.loopNum++;
    delta = 500;
  }

  setTimeout(function () {
    that.tick();
  }, delta);
};

window.onload = function () {
  var elements = document.getElementsByClassName("txt-rotate");
  for (var i = 0; i < elements.length; i++) {
    var toRotate = elements[i].getAttribute("data-rotate");
    var period = elements[i].getAttribute("data-period");
    if (toRotate) {
      new TxtRotate(elements[i], JSON.parse(toRotate), period);
    }
  }
  // INJECT CSS
  var css = document.createElement("style");
  css.type = "text/css";
  css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #666 }";
  document.body.appendChild(css);
};

//slide sidebar toggle
const loginRegister = document.querySelector("#loginRegister");
const showMenuBtn = document.querySelector("#showMenu");
const closeMenuBtn = document.querySelector("#closeMenu");

showMenuBtn.addEventListener("click", () => {
  loginRegister.classList.add("show");
});
closeMenuBtn.addEventListener("click", () => {
  loginRegister.classList.remove("show");
});

//login form and register form toggle
let RegisterForm = document.querySelector("#registerForm");
let LoginForm = document.querySelector("#loginForm");
let RegisterBtn = document.querySelector("#registerBtn");
let LoginBtn = document.querySelector("#loginBtn");

RegisterBtn.addEventListener("click", () => {
  RegisterForm.classList.remove("hidden");
  LoginForm.classList.add("hidden");
  RegisterBtn.classList.add("text-blue-700");
  LoginBtn.classList.remove("text-blue-700");
});

LoginBtn.addEventListener("click", () => {
  RegisterForm.classList.add("hidden");
  LoginForm.classList.remove("hidden");
  RegisterBtn.classList.remove("text-blue-700");
  LoginBtn.classList.add("text-blue-700");
});


//cart menu toggle
const CartMenu = document.querySelector("#cartMenu");
const CartBtn = document.querySelector("#cartBtn");
const CloseCart = document.querySelector("#closeCart");
const MobileCartBtn = document.querySelector("#mobileCartBtn");

CartBtn.addEventListener("click", () => {
  CartMenu.classList.add("show");
});
MobileCartBtn.addEventListener("click", () => {
  CartMenu.classList.add("show");
});
CloseCart.addEventListener("click", () => {
  CartMenu.classList.remove("show");
});

// //WishList menu toggle
// const WishMenu = document.querySelector("#wishMenu");
// const WishBtn = document.querySelector("#wishBtn");
// const CloseWish = document.querySelector("#closeWish");

// WishBtn.addEventListener("click", () => {
//   WishMenu.classList.add("show");
// // });
// CloseWish.addEventListener("click", () => {
//   WishMenu.classList.remove("show");
// });

//search menu toggle
const SearchMenu = document.querySelector("#searchMenu");
const SearchBtn = document.querySelector("#searchBtn");
const CloseSearch = document.querySelector("#closeSearch");

SearchBtn.addEventListener("click", () => {
  SearchMenu.classList.add("show");
});
CloseSearch.addEventListener("click", () => {
  SearchMenu.classList.remove("show");
});

//mobile nav menu toggle
//search menu toggle
const NavMenu = document.querySelector("#navMenu");
const NavBtn = document.querySelector("#navBtn");
const CloseNav = document.querySelector("#closeNav");

NavBtn.addEventListener("click", () => {
  NavMenu.classList.add("show");
});
CloseNav.addEventListener("click", () => {
  NavMenu.classList.remove("show");
});



//fetch product data 
function fetchProduct() {
  const response = document.getElementById("productList");

  var xhttp = new XMLHttpRequest();
  xhttp.open("GET", "http://localhost/MIS/functions.php", true);
  //console.log("helo")

  xhttp.onreadystatechange = function () {

    if (xhttp.readyState == 4 && xhttp.status == 200) {
      var data = JSON.parse(xhttp.responseText);
      if (data) {
        console.log(data);
        response.innerHTML = "";
        data.forEach(item => {
          response.innerHTML += `
          <li class="card-item border w-1/3 flex flex-col bg-slate-50 hover:border-blue-700 rounded-[10px] overflow-hidden p-2">
                    <div class="product_action_btn absolute py-24 ml-[370px] flex space-y-2 text-white flex-col bg-transparent text-2xl">
                        <i class="fa-solid fa-cart-shopping bg-stone-900 hover:bg-black rounded-full p-2 flex items-center justify-center"></i>
                        <i class="fa-regular fa-heart bg-stone-900 hover:bg-black rounded-full p-2 flex items-center justify-center"></i>
                        <i class="fa-solid fa-arrows-rotate bg-stone-900 hover:bg-black rounded-full p-2 flex items-center justify-center"></i>
                    </div>

                    <div class="flex flex-col items-stretched justify-center">

                        <img src="MIS/${item.pro_image}" alt="Card Image"
                            class="w-full h-[20vw] object-cover rounded-[10px]">
                        <div class="flex flex-col space-y-2">
                            <p class="md:text-lg text-sm text-gray-400">${item.pro_category}</p>
                            <h2 class="md:text-xl md:font-bold text-lg font-semibold">${item.pro_name}</h2>
                            <p class="md:text-lg text-sm text-gray-500">Rs.${item.pro_price}</p>
                        </div>
                    </div>

                </li>
          `;
        })
      } else {
        response.innerHTML = "no products";
      }
    }
  }
  xhttp.send();
}
fetchProduct();
