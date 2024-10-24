console.log("it works");
// AJAX
let searchInput = document.getElementById('searchPdt');
let records;

searchInput.addEventListener('input', loadProduct);//invoke the loadProduct function when user types in the input


// Load product function
function loadProduct() {
    let xhr = new XMLHttpRequest();
    xhr.open('GET', 'all_suppliers_api.php?query=' + searchInput.value, true);


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
                    <th scope="row" class="tbData">${records[i].supplier_id}</th>
                    <td class="tbData">${records[i].fname}</td>
                    <td class="tbData">${records[i].lname}</td>
                    <td class="tbData">${records[i].s_contact}</td>                    
                    <td class="tbData">${records[i].s_location}</td>
                    <td class="tbData">${records[i].product_id}</td>


        
                                               <td class='actions'><button class='btn btn-primary'  name='submitForm'>Edit</button></td>
                    <td class="actions deleteBtn"></td>
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

            // Fetching the openProductEditBar after appending the tr into the tbody










        } else if (this.status === 404) {
            console.log('Not found, please check');
        }
    }

    xhr.send();
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




//A SCRIPT TO ASSIGN TH ID TO THE INVISIBLE INPUT -->

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

























//fecthing the openSupplierEditBar
let editBtn=document.querySelectorAll('.openSupplierEditBar');

//fecthing the editSupplierBar
let editSupplierBar=document.querySelectorAll('.editSupplierBar');
console.log(editSupplierBar);

// when an edit button on a row is clicked open the editSupplierBar

editBtn.forEach(btnword=>{
    btnword.addEventListener('click',()=>{
        
            editSupplierBar[0].style.visibility="visible";
    })
})
 


//closing the editSupplierBar on cancelButton Clicked
let cancelUpdate=document.getElementById('cancelUpdate');

console.log(cancelUpdate);

cancelUpdate.addEventListener('click',()=>{
    editSupplierBar[0].style.visibility="hidden";
    
})


// FETCHING THE Table Data from Suppliers and placing them in the editPructBar inputs

// fetching the inputValues from editSuppliersBar or Pop up
let inputValues=document.querySelectorAll('.inpt_values');

// console.log('inputValuse  :',inputValues);


let tableRow=document.querySelectorAll('.tbRow');//fetching tablerows with class tbRow

console.log('table row fetched',tableRow);

//On click of any editBtn fetch a row(tbRow class--html) and on each row fetch all table data( tbDataclass --html) finally place the data into editSupplier window or div inputs
editBtn.forEach(edtBtn=>//
    edtBtn.addEventListener('click',()=>{//On click of any editBtn 

        tableRow.forEach(function(record){ //fetch a row(tbRow class--html)
            console.log("CLAL"); 
            record.addEventListener('click',()=>{

                let values=record.querySelectorAll('.tbData');//fetching the data from eachRow selected--- 
                console.log(values.length);
                

                for(i=0;i<=values.length;i++){//finally place the data into editSupplier window or div inputs
                
                
                    console.log(values[i].innerHTML);
                    inputValues[i].value=values[i].innerHTML;
                }
                    //nextLogic if i=0 then set input[0] value=values[i].innerHtml

                //does it display the td
                // values.forEach(e=>{
                //     let data=e.innerHTML;
                //     console.log('value :',data);
                // })

            })

            });

        }

));











//

