
let addToCartButtons = document.getElementsByClassName('button')
for (let i = 0; i < addToCartButtons.length; i++) {
    let button = addToCartButtons[i]
    button.addEventListener('click', addToCartClicked)
}
function addToCartClicked() {
    
    
    let name = this.getElementsByClassName('name')[0].innerText
    let price = this.getElementsByClassName('price')[0].innerText
    let id = this.getElementsByClassName('id')[0].innerText
    
    addItemToCart(name, price, id)
  
    
}


function addItemToCart(name, price, id) {
    
    // var cartItems = document.getElementsByClassName('cart-items')[0]
    // var cartItemNames = cartItems.getElementsByClassName('cart-item-name')
    let cartItems =  sessionStorage.getItem("cart")
    if(cartItems){
        cartItems = JSON.parse(cartItems)
    }
    for (var i = 0; i < cartItems.length; i++) {
        if (cartItems[i][2] == id) {
            alert('This item is already added to the cart')
            return
        }
    }
    alertify.success('Item Added Successfully');
    var qty = 1
    // console.log(sessionStorage.getItem('cart'))
    let cartItem = [name, price, id, qty]



    let cart =  sessionStorage.getItem("cart")
    if(cart){
        cart = JSON.parse(cart)
    }else{
        cart = ""
    }

    if(cart){     
        cart.push(cartItem)
    }else{
        cart = new Array()
        cart.push(cartItem)
        
    }

    window.sessionStorage.setItem('cart', JSON.stringify(cart))
    Cart()
}
Cart()
  
function refreshCart(){
    let e = document.getElementsByClassName('cart-items')[0]
    let child = e.lastElementChild;  
    while (child) { 
        e.removeChild(child); 
        child = e.lastElementChild; 
    } 
  
}





function Cart(){
    refreshCart()
    
    let cartItems = document.getElementsByClassName('cart-items')
    insertIntoCart(cartItems[0])
    insertIntoCheckout(cartItems[1])
    if(sessionStorage.getItem('cart')){
      var cartSessionLength = JSON.parse(sessionStorage.getItem('cart')).length
      
    }else{
      var cartSessionLength = 0
          
    }
    
    const checkoutLink = document.getElementsByClassName("check-out-item-link")[0]
    if (cartSessionLength > 0 && !checkoutLink) {
  
      let element = document.createElement("a")
      const link = document.createTextNode("CHECKOUT");
      element.classList.add('check-out-item-link');
      element.appendChild(link);
      element.title = "CHECKOUT";
      element.href = "POS_Checkout.php"
  
      const checkOutItem = document.getElementsByClassName("check-out-item")[0]
      if(checkOutItem){
        checkOutItem.appendChild(element)
      }
      
    }else{
      const checkoutLink = document.getElementsByClassName("check-out-item-link")[0]
      if(checkoutLink){
        checkoutLink.addEventListener('click',()=>{
           checkoutLink.remove()
        })
      }
    }
    updateCartTotal()
  
}
  
  

let quantityInputs = document.getElementsByClassName('cart-quantity-input')
    for (let i = 0; i < quantityInputs.length; i++) {
        let input = quantityInputs[i]
        input.addEventListener('change', quantityChanged)
    }

let removeCartItemButtons = document.getElementsByClassName('remove-cart-item')
for (let i = 0; i < removeCartItemButtons.length; i++) {
    let button = removeCartItemButtons[i]
    button.addEventListener('click', removeCartItem)
}




function quantityChanged(event) {
  let input = event.target
  if (isNaN(input.value) || input.value <= 0) {
      input.value = 1
  }
  updateCartTotal()
}

function removeCartItem(event) {
    let buttonClicked = event.target
    const removeItem = buttonClicked.parentElement.parentElement.parentElement
    const cartItemNum = parseInt(removeItem.classList[2].match(/(\d+)/)[1]) 
    const cartItems = JSON.parse(sessionStorage.getItem('cart'))
    cartItems.splice(cartItemNum, 1)
    window.sessionStorage.setItem('cart', JSON.stringify(cartItems))
  
    const checkoutLink = document.getElementsByClassName("check-out-item-link")[0]
    if(checkoutLink){
        checkoutLink.remove()
    }
    Cart()
    updateCartTotal()
}


function updateCartTotal() {
    let cartItemContainer = document.getElementsByClassName('cart-items')[0]
    
    let cartRows = cartItemContainer.getElementsByClassName('cart-row')
    let cart = JSON.parse(sessionStorage.getItem("cart"))
    let total = 0
    for (let i = 0; i < cartRows.length; i++) {
        let cartRow = cartRows[i]
        let priceElement = cartRow.getElementsByClassName('cart-price')[0]
        let quantityElement = cartRow.getElementsByClassName('cart-quantity-input')[0]
        cart[i][3] = quantityElement.value
        let price = parseFloat(priceElement.innerHTML.replace("$",""))
        let quantity = quantityElement.value
        total = total + (price * quantity)
    }
    // console.log(total)
    window.sessionStorage.setItem('cart', JSON.stringify(cart))
    total = Math.round(total * 100) / 100
    const cartTotal = document.getElementsByClassName('cart-total-price')[0]
    if(cartTotal){
        cartTotal.innerText = '$' + total
    }
    
}
  
function updateCheckoutTotal() {
    let cartItemContainer = document.getElementsByClassName('cart-items')[1]
    if(cartItemContainer){
    let cartRows = cartItemContainer.getElementsByClassName('cart-row')
    
    let total = 0
    for (let i = 0; i < cartRows.length; i++) {
        let cartRow = cartRows[i]
        let priceElement = cartRow.getElementsByClassName('cart-price')[0]
        let quantityElement = cartRow.getElementsByClassName('cart-quantity')[0]
        
        let price = parseFloat(priceElement.innerText.replace("$",""))
        let quantity = quantityElement.innerText
        total = total + (price * quantity)
    }
    const shipping = 20
    const tax = total*11/100
    const subTotal = total
    total = Math.round(total * 100) / 100 + tax + shipping
    const checkoutTotalPrice1 = document.getElementsByClassName('checkout-total-price')[0]
    const checkoutTotalPrice2 =document.getElementsByClassName('checkout-total-price')[1]
    if(checkoutTotalPrice1){
        checkoutTotalPrice1.innerText = '$' + subTotal
    }
    if(checkoutTotalPrice2){
        checkoutTotalPrice2.innerText = '$' + subTotal
    }
    
  }
}

function insertIntoCart(cartItems){
    if(sessionStorage.getItem("cart")){
    let CartItems = JSON.parse(sessionStorage.getItem("cart"));
   
    if(CartItems){
      for (let i = 0; i < CartItems.length; i++) {
        let cartRow = document.createElement('div')
        cartRow.classList.add('nav-item')
        cartRow.classList.add('cart-row')
        const cartRowNum = "cart-row-"+i
        
        cartRow.classList.add(cartRowNum)
            var cartRowContents = `
                
              <div class="container d-flex">
                  <div class="cart-item-desc w-100 px-2 d-flex justify-content-between align-items-center">
                      <div class="pe-2">${i+1}</div>
                      <h6 class="cart-item-name mb-0" style="width:100px">${CartItems[i][0]}</h6>
                      
                          
                        <div class="cart-column" >
                            
                            <input style="width:50px" class="cart-quantity-input mb-0" type="number" value="${CartItems[i][3]}">
                        </div>
                     
                      <br />
                      <h6 class="cart-price mb-0">${CartItems[i][1]}</h6>
                      <br />
                      <h6 role='button' class="remove-cart-item mb-0">
                          REMOVE
                      </h6>
                  </div>
    
              </div>
              <hr />
    
    `
      cartRow.innerHTML = cartRowContents
    
    
      cartItems.append(cartRow)
     
      cartRow.getElementsByClassName('remove-cart-item')[0].addEventListener('click', removeCartItem)
      cartRow.getElementsByClassName('cart-quantity-input')[0].addEventListener('change', quantityChanged)
      }}}
      
      
}

function insertIntoCheckout(cartItems){
    if(sessionStorage.getItem("cart")){
        let CartItems = JSON.parse(sessionStorage.getItem("cart"));
    
        if(cartItems){
            if(CartItems){
                for (let i = 0; i < CartItems.length; i++) {
                    let cartRow = document.createElement('div')
                    cartRow.classList.add('nav-item')
                    cartRow.classList.add('cart-row')
                    const cartRowNum = "cart-row-"+i
                    
                    cartRow.classList.add(cartRowNum)
                        var cartRowContents = `
                            
                        <div class="container d-flex">
                         <div class="cart-item-desc w-100 px-2 d-flex justify-content-between align-items-center">
                            <h6 class="cart-item-name mb-0" style="width:100px">${CartItems[i][0]}</h6>
                               
                                   
                            <div class="cart-column">
                                
                                <h6 class="cart-quantity" style="width:100px">${CartItems[i][3]}</h6>
                            </div>
                            
                            <br />
                            <h6 class="cart-price" style="width:100px">${CartItems[i][1]}</h6>
                            <br />
                                
                            </div>
                
                        </div>
                        <hr />
                
                `
                cartRow.innerHTML = cartRowContents
                
                
                cartItems.append(cartRow)
                updateCheckoutTotal()
                }
            }
        }
    }
}
  