
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