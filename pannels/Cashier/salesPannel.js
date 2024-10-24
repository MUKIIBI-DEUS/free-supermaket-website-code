document.addEventListener('DOMContentLoaded', () => {
    let searchInput = document.querySelector('#searchInput');
    let productCart = document.querySelector('.current_Order_div');
    let cashIn = document.querySelector('#cashIn');
    let makeSaleButton = document.querySelector('#makeSaleButton');


    //reload page after givem minutes to check for active time
    setTimeout(() => {
        window.location.reload();
    }, 660000 ); // Refresh every 10 minutes

    searchInput.addEventListener('input', loadProduct);



    //a function to remove an extra string from an imagePath due to a given loaction
    function removePrefix(count, prefix, string) {
        while (count > 0 && string.startsWith(prefix)) {
            string = string.substring(prefix.length);
            count--;
        }
        return string;
    }
    
    // Example usage:
    let count = 2;
    let prefix = '../';
    let string = '../../path/to/file';
    let result = removePrefix(count, prefix, string);
    console.log(result);  // Output: path/to/file
    
//the 
    function loadProduct() {
        let xhr = new XMLHttpRequest();
        xhr.open('GET', 'products_api.php?query=' + searchInput.value, true);

        xhr.onprogress = function () {
            console.log('Loading... please wait');//if the search is being processed by the products  api and server
            document.getElementById('tbBody').innerHTML = "Loading... please wait";
        };

        xhr.onload = function () {
            if (this.status === 200) {
                let results = '';
                let records = JSON.parse(xhr.responseText);

                for (let i in records) {
                    let prefix = '../';
                    let imageString=records[i].productImage;
                    let imagePath = removePrefix(2, prefix, imageString);
                    results += `<div class='card'>
                                <img src='${imagePath}' alt='sorry' class='cardData' data-src='${imagePath}'>
                                <h4 class='cardData'>${records[i].product_name}</h4>
                                <p class='cardData'>${records[i].category}</p>
                                <h3 class='cardData'>${records[i].unitcost}</h3>
                            <h3 class='cardData' style='visibility:hidden;'>${records[i].buying_price}</h3>
                                
                                <p class='cardData product_id' style="display: none;">${records[i].product_id}</p>
                            </div>`;
                }

                document.querySelector('.productCardDiv').innerHTML = results;
                
                attachCardEventListeners();
                
            } else if (this.status === 404) {
                console.log('Not found, please check');
            }
        };

        xhr.send();
    }












    function attachCardEventListeners() {
        let productCards = document.querySelectorAll('.card');//get the card array in the middle div

        productCards.forEach(record => {
            record.removeEventListener('click', handleProductCardClick);//remove the functionality of previous card click to avoid a loop 
            record.addEventListener('click', handleProductCardClick);//add back the functionality
        });
    }

    function handleProductCardClick(event) {
        let record = event.currentTarget;
        let values = record.querySelectorAll('.cardData');
        let selected_productImage = values[0].tagName.toLowerCase() === 'img' ? values[0].dataset.src : '';
        let selected_productName = values[1].innerHTML;
        let selected_productPrice = values[3].innerHTML;
        let selected_productBuyingPrice=values[4].innerHTML;
        let selected_product_id = values[5].innerHTML;

        productCart.style.background = "#fff";

        productCart.insertAdjacentHTML('beforeend', `
            <div class="productCard">
                <img src="${selected_productImage}" alt="">
                <div class="productDetails">
                    <h4 class="productName">${selected_productName}</h4>
                    <h6 class="productId" style="visibility:hidden;">${selected_product_id}</h6>

   
                                  
                    <div class="productQty">
                        <button class="deductpdtQty">-</button>
                        <input type="text" value="1" class="pdtqty" min="1" required>
                        <button class="addOnpdtQty">+</button>
                    </div>
                </div>
                <div class="productPrice">
                    <button class="cancelOrder">x</button>
                    <input type="text" value="${selected_productPrice}" class="productTotalPrice" readonly>
                    <div class="atPrice">
                        <h3>@</h3>
                        <input type="text" value="${selected_productPrice}" style="height:20px;visibility:visible;margin-top:5px;font-size:16px;" class="price" readonly>

                        <input type="text" value="${selected_productBuyingPrice}" style="height:20px;visibility:hidden;margin-top:6px;font-size:8px;" class="buyingPrice" readonly>                          

                     
                    </div>

 
                    
                </div>
            </div>
        `);

        allRequiredCardFunctions();
    }

    function allRequiredCardFunctions() {
        let productCards = document.querySelectorAll('.productCard');
        let pdtqty = document.querySelectorAll('.pdtqty');
        let totalItemCount = document.querySelector('#totalItemCount');
        let totalPriceViewInput = document.querySelector('#finalTotalPrice');
        let customerBalance = document.querySelector('#customer_balance');

        function keepCurrentCountOnInsertion() {
            let qtyCount = 0;
            productCards.forEach(card => {
                let qtyInput = card.querySelector('.pdtqty');
                qtyCount += parseInt(qtyInput.value.trim());
            });
            totalItemCount.value = qtyCount;




            let all_products_totalPrice = 0;//rest the previous all_products_totalprice to zero on every key up
            productCards.forEach(card => {
                let priceInput = card.querySelector('.productTotalPrice');
                all_products_totalPrice += parseInt(priceInput.value.trim());
            });
            customerBalance.innerHTML = cashIn.value - all_products_totalPrice;
            totalPriceViewInput.value = all_products_totalPrice;
        }

        function keepCurrentTotalPriceOnInsertion() {
            let all_products_totalPrice = 0;
            productCards.forEach(card => {
                let priceInput = card.querySelector('.productTotalPrice');
                all_products_totalPrice += parseInt(priceInput.value);
            });
            totalPriceViewInput.value = all_products_totalPrice;
        }

        keepCurrentCountOnInsertion();
        keepCurrentTotalPriceOnInsertion();

        productCards.forEach(pdtCard => {
            let deductpdtQtyBtn = pdtCard.querySelector('.deductpdtQty');
            let incrementpdtQtyBtn = pdtCard.querySelector('.addOnpdtQty');
            let product_quantity = pdtCard.querySelector('.pdtqty');
            let product_price = pdtCard.querySelector('.price');
            let productTotalPrice = pdtCard.querySelector('.productTotalPrice');
            let cancelOrder = pdtCard.querySelector('.cancelOrder');

            cancelOrder.addEventListener('click', () => {
                pdtCard.remove();
                productTotalPrice.value=0;//set the removed card's price to zero
                product_quantity.value=0;//set the remove cards's qty to zero
                keepCurrentCountOnInsertion();
                keepCurrentTotalPriceOnInsertion();
            
            });

            product_quantity.addEventListener('keyup', () => {
                productTotalPrice.value = product_price.value * product_quantity.value;//get the productTotalprice  after keyup of any product qty input  
                keepCurrentCountOnInsertion();
                keepCurrentTotalPriceOnInsertion();
            });

            cashIn.addEventListener('keyup', () => {
                let all_products_totalPrice = 0;//rest the previous all_products_totalprice to zero on every key up
                productCards.forEach(card => {
                    let priceInput = card.querySelector('.productTotalPrice');
                    all_products_totalPrice += parseInt(priceInput.value.trim());
                });
                customerBalance.innerHTML = cashIn.value - all_products_totalPrice;
                totalPriceViewInput.value = all_products_totalPrice;
            });
        });

        makeSaleButton.removeEventListener('click', handleMakeSale);
        makeSaleButton.addEventListener('click', handleMakeSale);


    }

    function handleMakeSale() {//make a sale 
        let productCards = document.querySelectorAll('.productCard');
        let pdtqty = document.querySelectorAll('.pdtqty');//the product qty to be sold
        let productTotalPrice = document.querySelectorAll('.productTotalPrice');//total price for the product
        let productName = document.querySelectorAll('.productName');
        let productBuyingPrice=document.querySelectorAll('.buyingPrice');//the buying price of the product by the supermarket
        let productPrice=document.querySelectorAll('.price');//the price of each product to be sold to a customer
        let productId = document.querySelectorAll('.productId');//the product id 
        let count = 0;

        productCards.forEach((pdtCard, i) => {//loop through each produuctCard to send each dataset to api for processing 
            let dbproduct_qty = parseInt(pdtqty[i].value.trim());
            let dbemployee_id = parseInt(document.querySelector('#userId').innerHTML); //fetch user id 

            console.log(dbemployee_id);
            let dbproductName = productName[i].innerHTML; 
            let dbproduct_price = parseInt(productTotalPrice[i].value.trim()); 
            let dbproductProfit=dbproduct_qty*(parseInt(productPrice[i].value)-parseInt(productBuyingPrice[i].value));//calucate the profit of each product sale basing on qty

            console.log(`the product profits is:${dbproductProfit}`);//output the product profit
            let dbproduct_id = parseInt(productId[i].innerHTML);

            let xhr = new XMLHttpRequest();
            xhr.open('POST', 'save_sale_api.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.send(`employee_id=${dbemployee_id}&product_id=${dbproduct_id}&productName=${dbproductName}&pdt_quantity1=${dbproduct_qty}&productprice=${dbproduct_price}&productProfit=${dbproductProfit}`);//send the values to the api & means addin another like name(php) meaning each string is a name and its value is in ${---}

            xhr.onload = function () {
                if (xhr.status === 200) {
                    console.log(xhr.responseText);
                    if (xhr.responseText === "success") {
                        count++;
                        console.log("Processed", count);
                    }
                } else {
                    console.error("ERROR: ", xhr.statusText);
                }
            };
        });
        let productCart = document.querySelector('.current_Order_div');
        productCart.innerHTML="";//remove all previous sale products 
        alert("Sale completed!");
        window.location.reload();//reload page to update product view basing on product inventory/stock 

    }

    // Attach event listeners to initial product cards if any
    attachCardEventListeners();
});
















 // Handle the loader 
 document.onreadystatechange = function() {
    if (document.readyState !== "complete") {
        document.querySelector('#loader').style.display = "flex"; // Enable the loader if the page isn't fully loaded
        // console.log("page isn't ready");
    } else {
        document.querySelector('#loader').style.display = "none"; // Disable the loader if the page is fully loaded
        // console.log("page is ready");
    }
}
