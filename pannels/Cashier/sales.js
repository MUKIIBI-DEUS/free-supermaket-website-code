let detail_desc=document.querySelectorAll(".detail-name");
console.log(detail_desc);


let pdtData=document.querySelectorAll('.pdtData');//fetching all inputs from sales div


//calculating the total of the product
let unitCost=0;
let quantity=0;
let total=9;
let productTotal=document.getElementById('total');
let change=0;

let productchange=document.getElementById('balance');

let cashIn=document.getElementById('cashin');


cashIn.addEventListener('keyup',()=>{
    unitCost=pdtData[2].value;
    quantity=document.getElementById('qty').value;
    
    total=unitCost*quantity;
    productTotal.value=total;
    change=productTotal.value-cashIn.value;

    productchange.value=change*(-1);
    console.log("total is: ",total);
    




   //Calculating the change of the product
   






});












let previouslySelectedRow = null;
detail_desc.forEach(row => {
row.addEventListener('click', () => {
if (previouslySelectedRow) {
previouslySelectedRow.classList.remove('selectedGreen');
}
row.classList.add('selectedGreen');
previouslySelectedRow = row;
let values = row.querySelectorAll('.descData');
for (let i = 0; i < values.length; i++) {
        pdtData[i].value= values[i].innerHTML;
}
});
});





