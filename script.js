
const btn = document.querySelectorAll("button")
//console.log(btn)
btn.forEach(function(button,index){
    button.addEventListener("click",function(event){{
        var btnItem = event.target
        var product = btnItem.parentElement
        var productImg = product.querySelector("img").src
        var productName = product.querySelector("h3").innerText
        var productPrice = product.querySelector("span").innerText
        //console.log(productPrice,productImg,productName)

        addcart(productPrice,productImg,productName)
}})


})
function addcart(productPrice,productImg,productName) {
    var addtr = document.createElement("tr")
    var cartItem = document.querySelectorAll("tbody tr")
    for (var i =0 ;i<cartItem.length;i++){
        var productT = document.querySelectorAll(".title")
        if(productT[i].innerHTML== productName){
            alert("Sản phẩm đã được thêm trong giỏ hàng!")
            return
        }
   }
    var trcontent = '<tr><td><img src="'+productImg+'" alt=""><span class="title">'+productName+'</span></td> <td><p><span class="prices">'+productPrice+'</span></p></td><td><input type="number" value="1" min="1"></td><td style="cursor: pointer;"><span class="delete">Xóa</span></td></tr>'
    addtr.innerHTML = trcontent
    var cartTable = document.querySelector("tbody")
    //console.log(cartTable)
    cartTable.append(addtr)

    cartTotal()
    deleteCart()
}


function cartTotal(){
    var cartItem = document.querySelectorAll("tbody tr")
    var subc =0;
    //console.log(cartItem)
    for (var i =0 ;i<cartItem.length;i++){
        var inputValue = cartItem[i].querySelector("input").value
        // console.log(inputValue)
        var productPrice = cartItem[i].querySelector(".prices").innerHTML
        // console.log(productPrice)
        sub = inputValue * productPrice*1000
        // subb  = sub.toLocaleString('de-DE')
        // console.log(subb)
        subc = subc + sub
    
    }

    var cartsub = document.querySelector(".price-total span")
    var cartPrice = document.querySelector(".cart-icon span")
    cartsub.innerHTML = subc.toLocaleString('de-DE')
    cartPrice.innerHTML = subc.toLocaleString('de-DE')
    inputchange()
    // console.log(cartsub)
}

//......................xoa sp.......................
function deleteCart(){
    var cartItem = document.querySelectorAll("tbody tr")
    for (var i =0 ;i<cartItem.length;i++){
        var productT = document.querySelectorAll(".delete")
        productT[i].addEventListener("click",function(event){
            var cartdelete = event.target
            var cartitemr = cartdelete.parentElement.parentElement
            cartitemr.remove()
            cartTotal()
            // console.log(cartitemr)
        })
        }
    }

function inputchange(){
    var cartItem = document.querySelectorAll("tbody tr")
    for (var i =0 ;i<cartItem.length;i++){
        var inputValue = cartItem[i].querySelector("input")
        inputValue.addEventListener("change",function(){
            cartTotal ()
        })
}
}


const cartbtn = document.querySelector(".fa-times")
const cartshow = document.querySelector(".fa-shopping-cart")
cartshow.addEventListener("click",function(){
    console.log(cartshow)
    document.querySelector(".cart").style.right = "0 "
})
cartbtn.addEventListener("click",function(){
    console.log(cartbtn)
    document.querySelector(".cart").style.right = "-100%"
})



let loadMoreBtn = document.querySelector('#load-more');
let currentItem = 3;

loadMoreBtn.onclick = () =>{
    let boxes = [...document.querySelectorAll('.menu .box-container .box')];
    for (var i = currentItem; i < currentItem + 3; i++){
        boxes[i].style.display = 'inline-block';
    }
    currentItem += 3;

    if(currentItem >= boxes.length){
        loadMoreBtn.style.display = 'none';
    }
}


$(document).ready(function(){
    $(window).scroll(function(){
        if($(this).scrollTop()){
            $('header').addClass('sticky');
        }
    });
});

$(document).ready(function(){
    $(window).scroll(function(){
        if ($(this).scrollTop()) {
            $('#backtop').fadeIn();
        } else {
            $('#backtop').fadeOut();
        }
    });
    $('#backtop').click(function(){
        $('html, body').animate({
            scrollTop: 0
        },1000);
    });
});
