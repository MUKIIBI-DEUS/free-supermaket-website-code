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
                    <td class="tbData">${records[i].category}</td>
                    <td class="tbData">${records[i].buying_price}</td>                    
                    <td class="tbData">${records[i].unitcost}</td>
                    <td class="tbData"><img src="${records[i].productImage}" alt="sorry" style="height:70px;width:90px;border-radius:5px"></td>


                          <td class='actions editBtn openProductEditBar tbData'><button class='btn btn-primary editpdtBtn'>Edit</button></td>

                    <td class="actions deleteBtn"></td>
                </tr>`;
            }

            document.getElementById('tbBody').innerHTML = results;//insert fetched results into the table body



            let sid=document.getElementById('sid');
            let editproductbtn = document.querySelectorAll('.editpdtBtn');
   
            editproductbtn.forEach(edtBtn => {
       edtBtn.addEventListener('click', () => {
           let record = edtBtn.closest('.tbRow'); // get the parent row
           let values = record.querySelectorAll('.tbData');
           console.log(values[0].innerHTML);
           sid.value = values[0].innerHTML.trim();
   
   
           //direct to the editStock form 
           confrirmAction("editStock_form.php", "Are you sure you want to edit this products stock ?");
   
       });
   });
   
        } else if (this.status === 404) {
            console.log('Not found, please check');
        }
    }

    xhr.send();
}




  // Fetching the openProductEditBar after appending the tr into the tbody
  let editBtn = document.querySelectorAll('.openProductEditBar');
  let editProductBar = document.querySelectorAll('.editProductBar');

  editBtn.forEach(btnword => {
      btnword.addEventListener('click', () => {
          editProductBar[0].style.visibility = "visible";
      });
  });

  let cancelUpdate = document.getElementById('cancelUpdate');

  cancelUpdate.addEventListener('click', () => {
      editProductBar[0].style.visibility = "hidden";
  });

  let inputValues = document.querySelectorAll('.inpt_values');
  let tableRow = document.querySelectorAll('.tbRow');

  editBtn.forEach(edtBtn => {
      edtBtn.addEventListener('click', () => {
          tableRow.forEach(record => {
              record.addEventListener('click', () => {
                  let values = record.querySelectorAll('.tbData');
                  for (let i = 0; i <= values.length - 2; i++) {
                      inputValues[i].value = values[i].innerHTML;
                  }
              });
          });
      });
  });

