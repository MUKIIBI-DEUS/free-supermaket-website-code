console.log("it works");
// AJAX
let searchInput = document.getElementById('searchPdt');
let records;

searchInput.addEventListener('input', loadProduct);//invoke the loadProduct function when user types in the input


// Load product function
function loadProduct() {
    let xhr = new XMLHttpRequest();
    xhr.open('GET', 'products_api.php?query=' + searchInput.value, true);


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
                results += `<tr class="tbRow">
                    <th scope="row" class="tbData">${records[i].product_id}</th>
                    <td class="tbData">${records[i].product_name}</td>
                </tr>`;
            }

            document.getElementById('tbBody').innerHTML = results;//insert fetched results into the table body




            let tableRow1 = document.querySelectorAll('.tbRow');
            let updatebtn = document.querySelectorAll('.btn');
    
    
            let sid=document.getElementById('sid');
                updatebtn.forEach(edtBtn => {
                    edtBtn.addEventListener('click', () => {
                        let record = edtBtn.closest('.tbRow'); // get the parent row
                        let values = record.querySelectorAll('.tbData');
                        console.log(values[0].innerHTML);
                        sid.value = values[0].innerHTML.trim();
    
                    });
                });

                    // Get the productId input field
            let productId = document.getElementById('productId');
            // Get all table rows with class 'tbRow'
            let tableRows = document.querySelectorAll('.tbRow');
            // Add event listener to each table row





            let previouslySelectedRow = null;
            tableRows.forEach(row => {
            row.addEventListener('click', () => {
            if (previouslySelectedRow) {
            previouslySelectedRow.classList.remove('selectedGreen');
            }
            row.classList.add('selectedGreen');
            previouslySelectedRow = row;
            let values = row.querySelectorAll('.tbData');
            for (let i = 0; i < values.length; i++) {
            productId.value = values[0].innerHTML;
            }
            });
            });
        

            










        } else if (this.status === 404) {
            console.log('Not found, please check');
        }
    }

    xhr.send();
}

//AJAX ENDS
















// Get the productId input field
let productId = document.getElementById('productId');
// Get all table rows with class 'tbRow'
let tableRows = document.querySelectorAll('.tbRow');
// Add event listener to each table row





let previouslySelectedRow = null;
tableRows.forEach(row => {
row.addEventListener('click', () => {
if (previouslySelectedRow) {
previouslySelectedRow.classList.remove('selectedGreen');
}
row.classList.add('selectedGreen');
previouslySelectedRow = row;
let values = row.querySelectorAll('.tbData');
for (let i = 0; i < values.length; i++) {
productId.value = values[0].innerHTML;
}
});
});





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




   //FORM SUBMISSION CONFIRMATION AND NAME VALUES TRAJECTORY API

   function confrirmAction(actionUrl,message){
        if(confirm(message)){//message confirmation if ok is pressed
            //assign actionUrl to the form basing on clciked button
            document.getElementById('updateform').action=actionUrl;
            //then go ahead to submit form
            document.getElementById('updateform').submit();            
        }

   }
