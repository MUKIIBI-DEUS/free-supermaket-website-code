
        // let tableRow = document.querySelectorAll('.tbRow');
        let editStockbtn = document.querySelectorAll('.edtBtn');


        let sid=document.getElementById('sid');


            editStockbtn.forEach(edtBtn => {
                edtBtn.addEventListener('click', () => {
                    let record = edtBtn.closest('.tbRow'); // get the parent row
                    let values = record.querySelectorAll('.tbData');
                    console.log(values[0].innerHTML);
                    sid.value = values[0].innerHTML.trim();


                    //direct to the editStock form 
                    confrirmAction("editStock_form.php", "Are you sure you want to edit this products stock ?");

                });
            });



//HANDLE ADD STOCK BTN
let addStockBtn=document.querySelectorAll('.addBtn');



            addStockBtn.forEach(addBtn => {
                addBtn.addEventListener('click', () => {
                    let record = addBtn.closest('.tbRow'); // get the parent row
                    let values = record.querySelectorAll('.tbData');
                    console.log(values[0].innerHTML);
                    sid.value = values[0].innerHTML.trim();


                    //direct to the editStock form 
                    confrirmAction("addStock_form.php", "Are you sure you want to edit this products stock ?");

                });
            });



            //Handle form submission trajectory
    function confrirmAction(actionUrl){
                



                    document.getElementById('inventoryform').action=actionUrl;
                    //then go ahead to submit form
                    document.getElementById('inventoryform').submit();

         
  
              
          }




                





              





            //Handle the loader 
document.onreadystatechange=function(){
    if(document.readyState !=="complete"){
        document.querySelector('#loader').style.display="flex";//enable the loader if the page isnt fully loaded
        console.log("page isnt ready");
    }else{
        document.querySelector('#loader').style.display="none";//disable the loader if the page is fully loaded
        console.log("page is ready");
    }
}







// EDIT AND ADD FORM FINAL SUBMISSION AND CHANGES
   //FORM SUBMISSION CONFIRMATION AND NAME VALUES TRAJECTORY API

   function confirmSubmission(actionUrl,message){
    if(confirm(message)){//message confirmation if ok is pressed
        //assign actionUrl to the form basing on clciked button
        document.getElementById('updateform').action=actionUrl;
        //then go ahead to submit form
        document.getElementById('updateform').submit();            
    }

}

   














//SEARCH PRODUCT FROM INVENTORY
let searchInputPdt=document.querySelector('#searchProductInv');
console.log("thidodods"+searchInputPdt);

searchInputPdt.addEventListener('input', loadProduct);//invoke the loadProduct function when user types in the input

// Load product function from inventory===========================
function loadProduct() {
    let xhr = new XMLHttpRequest();
    xhr.open('GET', 'inventory_api.php?query=' + searchInputPdt.value, true);


    //when waiting for the server display 
    xhr.onprogress = function() {
        // Handle progress events here
        console.log('Loading... please wait');
        document.getElementById('tbBody').innerHTML = "Loading... please wait";
    };

    

    xhr.onload = function () {
        if (this.status === 200) {//check for an okay or ready status of a server
            let results = '';
            records = JSON.parse(xhr.responseText);

            for (let i in records) {
                results += `<tr class='tbRow'>
                    <th scope='row' class='tbData'>${records[i].product_id}</th>
                    <td class='tbData'>${records[i].product_name}</td>
                    <td class='tbData'>${records[i].inventory_no}</td>

                    <td class='actions'>
                        <button class='btn btn-primary edtBtn' type='button' >Edit Stock</button>
                    </td>

                    <td class='actions'>
                        <button class='btn btn-success addBtn' type='button'>Add Stock</button>
                    </td>
                </tr>`;
            }

            document.getElementById('tbBody').innerHTML = results;//insert fetched results into the table body


//NOW HANDLE ADD EDIT STOCK ON KEY UP
 // let tableRow = document.querySelectorAll('.tbRow');
 let editStockbtn = document.querySelectorAll('.edtBtn');


 let sid=document.getElementById('sid');


     editStockbtn.forEach(edtBtn => {
         edtBtn.addEventListener('click', () => {
             let record = edtBtn.closest('.tbRow'); // get the parent row
             let values = record.querySelectorAll('.tbData');
             console.log(values[0].innerHTML);
             sid.value = values[0].innerHTML.trim();


             //direct to the editStock form 
             confrirmAction("editStock_form.php", "Are you sure you want to edit this products stock ?");

         });
     });



//HANDLE ADD STOCK BTN
let addStockBtn=document.querySelectorAll('.addBtn');



     addStockBtn.forEach(addBtn => {
         addBtn.addEventListener('click', () => {
             let record = addBtn.closest('.tbRow'); // get the parent row
             let values = record.querySelectorAll('.tbData');
             console.log(values[0].innerHTML);
             sid.value = values[0].innerHTML.trim();


             //direct to the editStock form 
             confrirmAction("addStock_form.php", "Are you sure you want to edit this products stock ?");

         });
     });



     //Handle form submission trajectory
function confrirmAction(actionUrl){
         



             document.getElementById('inventoryform').action=actionUrl;
             //then go ahead to submit form
             document.getElementById('inventoryform').submit();

  

       
   }


   
        } else if (this.status === 404) {
            console.log('Not found, please check');
        }
    }

    xhr.send();



    //HANDLE BOTH EDIT AND ADD 
    
}

// End  Load product function from inventory===========================









































