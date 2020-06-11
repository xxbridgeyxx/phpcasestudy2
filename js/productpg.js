//movingImage on homepage
var i = 0;
var txt = 'For all your scaly, slippery friends';
var speed = 50;

function typeWriter() {
    if (i < txt.length) {
        document.getElementById("demo").innerHTML += txt.charAt(i);
        i++;
        setTimeout(typeWriter, speed);
    }
}

total = 0;
//add product to cart
function addProductToCart(e) {
    console.log("click")
    cart = $("#cart");
    name1 = $(e).attr("name");
    price = $(e).attr("price");
    qty = $(e).prev().val();

    cart.append("<p>Name: "+name1+"  Price: "+Number(price)*Number(qty) +"</p>");
    total = total + Number(price)*Number(qty);
}
//Popup Invoice

function invoice() {

    modal = document.getElementById("myModal");
    modal.style.display = "block";

    // Get the <span> element that closes the modal
    cross = document.getElementsByClassName("close")[0];
    console.log(cross);


    cross.onclick = function() {
        modal.style.display = "none";
    }
// When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }


    //Take everything from shopping cart
    $("#invoicePlace").empty();
    $("#invoicePlace").append($("#cart").children());
    $("#invoicePlace").append("<p>Total: "+total+"</p>");
}

function showBtnPrice(e) {
    nextDiv = e.nextElementSibling;
    nextDiv.style.display="block";
}

function hideBtnPrice(e) {
    nextDiv = e.nextElementSibling;
    nextDiv.style.display="none";
}

function hideThisPrice(e) {
    e.style.display="none";
}
function keepBtnPrice(e){
    e.style.display="block";
}
