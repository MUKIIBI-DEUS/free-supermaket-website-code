






// LOADING OPTIONS IN THE MIDDLEDISPLAY========================
let productOptions=document.querySelectorAll('.link');
console.log("-----products--------");
console.log(productOptions);


//fetching the the middle Div 
let middleDisplay=document.querySelector('#middleDisplay');
console.log(middleDisplay);

//middleDisplay Formatting
function middleFormatting(){
    // middleDisplay.style.width="30px";

}


function loadMiddleDisplay(text){
    middleDisplay.innerHTML='<object width="100%" height="100%" type="text/html" data="'+text+'"></object>';
}


//loading the allproductsTab
// productOptions[0].addEventListener('click',()=>{
//     //load the all products page
//     loadMiddleDisplay("all_sales/all_sales.php");
// });


//loading the inventoryTab
console.log('the dakdadadasfafsdfsdfsd----------',productOptions[1]);



//LOADED PAGE BY DEFAULT=======================================
text1="all_logs/all_logs.php";
middleDisplay.innerHTML='<object width="100%" height="100%" type="text/html" data="'+text1+'"></object>';
loadMiddleDisplay("all_logs/all_logs.php");








// LOADING OPTION IN THE MIDDLEDISPLAY


// CAHNGE OPTION COLOR
 // Option color changing on mouse click on option
 let optionHr=document.querySelectorAll('.link');
 console.log("HHDHDHDHHDHDHHDHD");
 console.log(optionHr); //check if the item has been fetched correctly


 optionHr.forEach(option=>{
     option.addEventListener('click',function(){
         //remove selected class from all options
         optionHr.forEach(opt=>opt.classList.remove('selectedGreen'));
         
         console.log("it works");

         //add selected class  to the clicked option
         option.classList.add('selectedGreen');
     })
     

 })





/*
sales_id
E_ID
product_id
product_name
qauntity
total_price
date_of_sale
time












*/