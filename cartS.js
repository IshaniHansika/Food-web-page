let openShopping = document.querySelector('.shopping');
let closeShopping = document.querySelector('.closeShopping');
let list = document.querySelector('.list');
let listCard = document.querySelector('.listCard');
let body = document.querySelector('body');
let total = document.querySelector('.total');
let quantity = document.querySelector('.quantity');

openShopping.addEventListener('click', ()=>{
    body.classList.add('active');
})
closeShopping.addEventListener('click', ()=>{
    body.classList.remove('active');
})

let products = [
    {
        id: 1,
        name: 'Vegetarian Kottu',
        image: '19.jpg',
        price: 2.30
    },
    {
        id: 2,
        name: 'Shrimp Curry',
        image: '20.jpg',
        price: 1.09
    },
    {
        id: 3,
        name: 'Cheese Kottu',
        image: '21.jpg',
        price: 3.06
    },
    {
        id: 4,
        name: 'Chicken Fried Rice',
        image: '22.jpg',
        price: 2.50
    },
    {
        id: 5,
        name: 'Egg Kottu',
        image: '23.jpg',
        price: 3.01
    },
    {
        id: 6,
        name: 'Egg Hoppers',
        image: '24.jpg',
        price: 0.45
    }
    ,
    {
        id: 7,
        name: 'Roti Protein',
        image: '25.jpg',
        price: 1.23
    }
    ,
    {
        id: 8,
        name: 'Ulundhu Vadai',
        image: '26.jpg',
        price: 0.36
    }
    ,
    {
        id: 9,
        name: 'Sri Lankan Samosas',
        image: '27.jpg',
        price: 1.08
    }
];
let listCards  = [];
function initApp(){
    products.forEach((value, key) =>{
        let newDiv = document.createElement('div');
        newDiv.classList.add('item');
        newDiv.innerHTML = `
            <img src="image/${value.image}">
            <div class="title">${value.name}</div>
            <div class="price">${value.price.toLocaleString()}</div>
            <button onclick="addToCard(${key})">Add To Card</button>`;
        list.appendChild(newDiv);
    })
}
initApp();
function addToCard(key){
    if(listCards[key] == null){
        // copy product form list to list card
        listCards[key] = JSON.parse(JSON.stringify(products[key]));
        listCards[key].quantity = 1;
    }
    reloadCard();
}
function reloadCard(){
    listCard.innerHTML = '';
    let count = 0;
    let totalPrice = 0;
    listCards.forEach((value, key)=>{
        totalPrice = totalPrice + value.price;
        count = count + value.quantity;
        if(value != null){
            let newDiv = document.createElement('li');
            newDiv.innerHTML = `
                <div><img src="image/${value.image}"/></div>
                <div>${value.name}</div>
                <div>${value.price.toLocaleString()}</div>
                <div>
                    <button onclick="changeQuantity(${key}, ${value.quantity - 1})">-</button>
                    <div class="count">${value.quantity}</div>
                    <button onclick="changeQuantity(${key}, ${value.quantity + 1})">+</button>
                </div>`;
                listCard.appendChild(newDiv);
        }
    })
    total.innerText = totalPrice.toLocaleString();
    quantity.innerText = count;
}
function changeQuantity(key, quantity){
    if(quantity == 0){
        delete listCards[key];
    }else{
        listCards[key].quantity = quantity;
        listCards[key].price = quantity * products[key].price;
    }
    reloadCard();
}