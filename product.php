<?php include('./header.php');?>

        <div class="container-fluid row d-flex p-5 mt-5 justify-content-center">
            <div class="mt-5"  style="width: 36rem; height: 60vh">
                <div class="container-fluid">
                    <div class="">
                        <img class="card-img-top" src="./img/2.jpg" alt="" style="height: 60vh">
                    </div>
                </div>
            </div>
            <div class="mt-5"  style="width: 36rem;  height: 60vh">
                <div class="container-fluid">
                    <div class=" p-3">
                        <h3>the product Name</h3>
                        <div class="ms-3">
                            <p>this is description here</p>
                            <p id="price">5313.96</p>
                            <s>₹17715.09</s>
                            <p>28% OFF</p>
                            <br>
                            <p id="shiping">2% OFF New User</p>
                            <p>Get Coupons</p>
                            <hr>
                            <br>
                            <p id="shipingTo">Shipping:</p>
                            <br>
                            <button id="addToCart" class="submit btn btn-success"><a class="text-white nav-link " href="cart.php">Add To Cart</a></button>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php include('./footer.php');?>

<script>
    let productData = {
        productImage: "./img/2.jpg",
        productName:"the product Name",
        gif:"https://img.gkbcdn.com/s3/bn/2206/78x24-62a1beb42b40c92298f54b09.gif",
        currencySymbol:"₹",
        price:"5313.96",
    }
    let cartLS = JSON.parse(localStorage.getItem("cartData"))||[];
   
    let addToCart = document.getElementById("addToCart");
    addToCart.addEventListener("click", function() {
        alert("Product Add to Cart Successfully!");
        cartLS.push(productData);
        localStorage.setItem("cartData", JSON.stringify(cartLS));
    });
</script>