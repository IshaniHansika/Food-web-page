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
        name: 'Thickburger',
        image: '46.jpg',
        price: 12.4
    },
    {
        id: 2,
        name: 'Pizza',
        image: '47.jpg',
        price: 10.2
    },
    {
        id: 3,
        name: 'Crispy Chicken',
        image: '48.jpg',
        price: 6.23
    },
    {
        id: 4,
        name: 'Two-Piece Fish Meal',
        image: '49.jpg',
        price: 9.45
    },
    {
        id: 5,
        name: 'Subway Sandwich',
        image: '50.jpg',
        price: 8.03
    },
    {
        id: 6,
        name: 'Chicken Nuggets',
        image: '51.jpg',
        price: 5.7
    }
    ,
    {
        id: 7,
        name: 'Panera Flatbreads',
        image: '52.jpg',
        price: 11.4
    }
    ,
    {
        id: 8,
        name: 'Filet-O-Fish Sandwich',
        image: '53.jpg',
        price: 10.7
    }
    ,
    {
        id: 9,
        name: 'Panera Soup',
        image: '54.jpg',
        price: 8.56
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