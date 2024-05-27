





// LOADING OPTIONS IN THE MIDDLEDISPLAY========================
let supplierOptions=document.querySelectorAll('.link');
console.log("-----suppliers--------");
console.log(supplierOptions);

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

//loading the allsuppliersTab
supplierOptions[0].addEventListener('click',()=>{
    //load the all suppliers page
    loadMiddleDisplay("all_suppliers/all_suppliers.php");
});

//loading the inventoryTab
console.log('the dakdadadasfafsdfsdfsd----------',supplierOptions[1]);

supplierOptions[1].addEventListener('click',()=>{
    //load the all suppliers page
    loadMiddleDisplay("add_suppliers/add_suppliers.php");
    

});

//load the Add new Suppliers
//supplierOptions[2].addEventListener('click',()=>{
    //load the all suppliers page
    //loadMiddleDisplay("add_suppliers/add_suppliers.php");
    

//});










//LOADED PAGE BY DEFAULT=======================================
text1="all_suppliers/all_suppliers.php";
middleDisplay.innerHTML='<object width="100%" height="100%" type="text/html" data="'+text1+'"></object>';
loadMiddleDisplay("all_suppliers/all_suppliers.php");







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


