let addBtn = document.querySelector("#addBtn-maharlika");
let subBtn = document.querySelector("#subBtn-maharlika");
let quantity = document.querySelector("#quantity-maharlika");
let total = document.querySelector("#total-maharlika");

addBtn.addEventListener('click', () => {
    quantity.value = parseInt(quantity.value) + 1;
    total.innerHTML = `P ${quantity.value * 1200}.00`;
})

subBtn.addEventListener('click', () => {
    if (quantity.value <=0) {
        quantity.value = 0;
    } 
    else {
        quantity.value = parseInt(quantity.value) - 1;
        total.innerHTML = `P ${quantity.value * 1200}.00`;
    }
})