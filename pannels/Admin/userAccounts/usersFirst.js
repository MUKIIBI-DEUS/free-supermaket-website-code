




// LOADING OPTIONS IN THE MIDDLEDISPLAY========================
let userOptions=document.querySelectorAll('.link');
console.log("-----users--------");
console.log(userOptions);

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

//loading the allusersTab
userOptions[0].addEventListener('click',()=>{
    //load the all users page
    loadMiddleDisplay("all_users/all_users.php");
});

//loading the inventoryTab
console.log('the dakdadadasfafsdfsdfsd----------',userOptions[1]);

userOptions[1].addEventListener('click',()=>{
    //load the all users page
    loadMiddleDisplay("add_users/add_users.php");
    

});

//load the Add new Users
//userOptions[2].addEventListener('click',()=>{
    //load the all users page
    //loadMiddleDisplay("add_users/add_users.php");
    

//});









//LOADED PAGE BY DEFAULT=======================================
text1="all_users/all_users.php";
middleDisplay.innerHTML='<object width="100%" height="100%" type="text/html" data="'+text1+'"></object>';
loadMiddleDisplay("all_users/all_users.php");






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



