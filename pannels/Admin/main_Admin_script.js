    
    console.log("hello it works" );

  //reload page after givem minutes to check for active time
  setTimeout(() => {
    window.location.reload();
}, 660000 ); // Refresh every 10 minutes

    // Admin functionality

    let optionDisplayDiv=document.getElementById('optionDisplay');//fetching the optionDisplay (middlediv) id from html/php
    console.log(optionDisplayDiv);

    let optionPlay=document.querySelectorAll('.Option');//fetching the dashboard id from html /php
    console.log(optionPlay);


    // OPTION LOADING ON MOUSE CLICK****************************************************



       //BY DEFAULT LOAD
       let text="dashboard/dashboard.php"
       optionDisplayDiv.innerHTML='<object width="100%" height="100%" type="text/html" data="'+text+'"></object>';

    //LOADIN DASHBOARD OPTION ON MOUSE CLICK-------------------------------------

    //since options has an array of 0-5(6 elemennts) 
    //we use optionPlay[0]--[5]
    optionPlay[0].addEventListener('click',()=>{
        loadPage("dashboard/dashboard.php");
        console.log("itworks");
    });

     //END OF LOADING DASHBOARD OPTION ON MOUSE CLICK----------------------------------


    //LOAD THE PRODUCTS PLAY
    optionPlay[1].addEventListener('click',()=>{
        loadPage("products/productsFirst.php");
        console.log("products clicked");

    });


    //LOAD THE RE ORDER PRODUCTS PLAY
    optionPlay[2].addEventListener('click',()=>{
        loadPage("re_order_products/inventory.php");
        console.log("products clicked");

    });    


    //LOAD THE SUPPLIERS PLAY
    optionPlay[3].addEventListener('click',()=>{
        loadPage("suppliers/suppliersFirst.php");
        console.log("suppliers clicked");

    });



    //LOAD SALES PLAY
    optionPlay[4].addEventListener('click',()=>{
        loadPage("sales/sales_first.php");
        console.log("suppliers clicked");

    });


    //LOAD PROFITS PLAY
    optionPlay[5].addEventListener('click',()=>{
        loadPage("profits/profits_first.php");
        console.log("logs clicked");

    });    

    // LOAD LOGS
    optionPlay[6].addEventListener('click',()=>{
        loadPage("logs/logs_first.php");
        console.log("logs clicked");

    });






    
    // OVERALL PAGE LOADER FUNCTION==========================================================
    function loadPage(text){
        optionDisplayDiv.innerHTML='<object width="100%" height="100%" type="text/html" data="'+text+'"></object>';
    }


     // OVERALL PAGE LOADER FUNCTION==========================================================

    // OPTION LOADING ON MOUSE CLICK****************************************************
 





    // Option color changing on mouse click on sideBar
    let options=document.querySelectorAll('.Option');
    console.log(options); //check if the item has been fetched correctly


    options.forEach(option=>{
        option.addEventListener('click',function(){
            //remove selected class from all options
            options.forEach(opt=>opt.classList.remove('selected'));
            

            //add selected class  to the clicked option
            option.classList.add('selected');
        })
        

    })

