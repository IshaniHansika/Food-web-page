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
        name: 'Peking Roasted Duck',
        image: '10.jpg',
        price: 34.67
    },
    {
        id: 2,
        name: 'Kung Pao Chicken',
        image: '11.jpg',
        price: 41.20
    },
    {
        id: 3,
        name: 'Sweet and Sour Pork',
        image: '12.jpg',
        price: 35.64
    },
    {
        id: 4,
        name: 'Dumplings',
        image: '13.jpg',
        price: 20.34
    },
    {
        id: 5,
        name: 'Ma Po Tofu',
        image: '14.jpg',
        price: 46.50
    },
    {
        id: 6,
        name: 'Char Siu',
        image: '15.jpg',
        price: 48.87
    }
    ,
    {
        id: 7,
        name: 'Xiaolongbao',
        image: '16.jpg',
        price: 29.65
    }
    ,
    {
        id: 8,
        name: 'Zhajiangmian',
        image: '17.jpg',
        price: 27.56
    }
    ,
    {
        id: 9,
        name: 'Wonton Soup',
        image: '18.jpg',
        price: 38.10
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