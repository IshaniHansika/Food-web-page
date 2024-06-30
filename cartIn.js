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
        name: 'Chicken Makhani',
        image: '28.jpg',
        price: 9.64
    },
    {
        id: 2,
        name: 'Samosas',
        image: '29.jpg',
        price: 6.02
    },
    {
        id: 3,
        name: 'Aloo Gobi',
        image: '30.jpg',
        price: 5.10
    },
    {
        id: 4,
        name: 'Naan',
        image: '31.jpg',
        price: 9.01
    },
    {
        id: 5,
        name: 'Matar Paneer',
        image: '32.jpg',
        price: 8.5
    },
    {
        id: 6,
        name: 'Rogan Josh',
        image: '33.jpg',
        price: 7.46
    }
    ,
    {
        id: 7,
        name: 'Pani Puri',
        image: '34.jpg',
        price: 5.78
    }
    ,
    {
        id: 8,
        name: 'Matar Kulcha',
        image: '35.jpg',
        price: 7.29
    }
    ,
    {
        id: 9,
        name: 'Vada Pav',
        image: '36.jpg',
        price: 6.8
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