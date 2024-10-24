// AJAX
let searchInput = document.getElementById('searchPdt');
let records;

searchInput.addEventListener('input', loadProduct);//invoke the loadProduct function when user types in the input


// Load product function
function loadProduct() {
    let xhr = new XMLHttpRequest();
    xhr.open('GET', 'all_sales_api.php?query=' + searchInput.value, true);


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
                    <th scope="row" class="tbData">${records[i].sales_id}</th>
                    <td class="tbData">${records[i].employee_id}</td>
                    <td class="tbData">${records[i].product_id}</td>
                    <td class="tbData">${records[i].product_Name}</td>                    
                    <td class="tbData">${records[i].qty}</td>
                    <td class="tbData">${records[i].total}</td>
                    <td class="tbData">${records[i].profit}</td>
                    <td class="tbData">${records[i].date_of_sale}</td>
                    <td class="tbData">${records[i].sale_time}</td>
        
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



            let tableRow = document.querySelectorAll('.tbRow');
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