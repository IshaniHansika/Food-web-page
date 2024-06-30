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
        name: 'Chocolate mousse',
        image: '55.jpg',
        price: 8.2
    },
    {
        id: 2,
        name: 'Pecan choco bread',
        image: '56.jpg',
        price: 7.6
    },
    {
        id: 3,
        name: 'Poached pear vacherin',
        image: '57.jpg',
        price: 6.78
    },
    {
        id: 4,
        name: 'Ginger mud cake',
        image: '58.jpg',
        price: 11.4
    },
    {
        id: 5,
        name: 'Baked ricotta cake',
        image: '59.jpg',
        price: 13.6
    },
    {
        id: 6,
        name: 'Almond-honey cake',
        image: '60.jpg',
        price: 9.8
    }
    ,
    {
        id: 7,
        name: 'Banoffee pudding',
        image: '61.jpg',
        price: 6.7
    }
    ,
    {
        id: 8,
        name: 'Sticky ginger pudding',
        image: '62.jpg',
        price: 5.9
    }
    ,
    {
        id: 9,
        name: 'Muhallabia ',
        image: '63.jpg',
        price: 4.7
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