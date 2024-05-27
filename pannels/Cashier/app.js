//for shopping cart part
//for cart popup
function toggleCartPopup() {
    const cartPopup = document.getElementById('cart-popup');
    cartPopup.classList.toggle('active');
}

//for close cart popup
function closeCart() {
    const cartPopup = document.getElementById('cart-popup');
    cartPopup.classList.remove('active');
}

//for adding to cart button
function addToCart(itemName, itemPrice){
    const cartItems = document.getElementById('cart-items').getElementsByTagName('tbody')[0];
    const existingItem = Array.from(cartItems.getElementsByTagName('tr')).find(item=>item.cells[0].textContent === itemName);
    if(existingItem) {
        const itemCount = parseInt(existingItem.querySelector('.item-count').textContent) + 1;
        existingItem.querySelector('.item-count').textContent = itemCount;

        const itemTotal = parseFloat(existingItem.querySelector('.item-total').textContent) + parseFloat(itemPrice);
        existingItem.querySelector('.item-total').textContent = itemTotal.toFixed(2);
    }
    else {
        const newRow = cartItems.insertRow();
        newRow.innerHTML = 
        <td>itemName</td>
       // <td class={'item-count'}>1</td>
        //<td class='item-price'>itemPrice</td>
        // <td class='item-total'>itemPrice</td>
        
        
    }
    updateCartCountAndTotal();
}

// update cart count and total
function updateCartCountAndTotal() {
    const cartCount = document.getElementById('cart-count');
    const cartTotal = document.getElementById('cart-total');
    const cartItems = document.querySelectorAll('#cart-items tbody tr');
    let totalcount = 0;
    let total = 0;
    cartItems.forEach(item => {
        const itemCount = parseInt(item.querySelector('.item-cart').textContent);
        const itemTotal = parseFloat(item.querySelector('.item-total').textContent);
        totalcount += itemCount;
        total += itemTotal;

    });
    cartCount.textContent = totalcount;
    cartTotal.textContent = total.toFixed(2);
}




//showing navbar when u click
const mobile = document.querySelector('menu-toggle');
const mobilelink = document.querySelector('.sidebar');

mobile.addEventListener("click",function(){
    mobile.classList.toggle("is-active")
})

//close menu when u click
const menubars = document.querySelector("is-active");
if (window.innerWidth<=768 && menubars){
    mobile.classList.toggle(".is-active");
    mobilelink.classList.toggle("active");
}

//move the menu to right and left when click back and next
var step = 10;
var stepfilter=60;
var scrolling = true;

$(".back").bind("click",function(e){
    e.preventDefault();
    $(".highlight-wrapper").animate({
        scrollleft: "-=" + step + "px"
    }); 
});

$(".next").bind("click",function(e){
    e.preventDefault();
    $(".highlight-wrapper").animate({
        scrollleft: "+=" + step +"px"
    })
})

//when click back and next on menu filters
$(".back-menus").bind("click", function(e){
    e.preventDefault();
    $(".filter-wrapper").animate({
        scrollleft: "-=" + stepfilter + "px"
    })
});

$(".next-menus").bind("click", function(e){
    e.preventDefault();
    $(".filter-wrapper").animate({
        scrollleft: "+=" + stepfilter + "px"
    })
});

