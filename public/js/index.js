function cart(){
    number = 0;
    cartText = document.getElementById('cartText');
    cartText= parseInt(cartText.innerText);
    count = cartText +1; 
        value = count++;
        cartText.innerHTML = value
        
        console.log(value);
}