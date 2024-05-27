console.log("------it works dia");



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

