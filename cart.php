
  <style>

   *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;

   }
    #nav {
      height: 100px;
      background-color: #0c70fe;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    #nav > img {
      margin-left: 50px;
      width: 14%;
      padding-top: 20px;
    }
    .container {
      color: white;
      margin-left: 20px;
      padding-top: 20px;
      margin-bottom: 10px;
      font-size: larger;
    }
    .pay{
      width: 80%;
      margin: auto;
      border: 1px solid rgb(218, 218, 218);
      height: 100px;
      display: flex;
      align-items: center;
      justify-content: space-around;
    }
    .pay>p{
        display: inline-block;
        font-size: 25px
    }
    .pay>a{
      font-size: 20px;
      text-decoration: none;
    }
    .pay>a>button{
      font-size: 20px;
      padding: 10px 20px 10px 20px;
      background-color: #0c70fe;
      color: white;
      border-radius: 5px;
      border: none;
      cursor: pointer;
    }
    #item{
        display: grid;
        grid-template-columns: repeat(4,1fr);
        grid-template-rows:repeat(auto);
        gap: 20px;
    }
    #item >div{
        box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;
        border-radius: 8px;
    }
    #item >div>img{
        width: 100%;
        border-radius: 8px;
    }
    #item >div>button{
       margin: 20px;
       cursor: pointer;
    }
    #item >div>p{
       margin: 20px;

    }
    #item >div>h4{
       margin: 20px;

    }
    #item >div> button{
      padding: 8px;
    }
  </style>
     <?php include('./header.php');?>
    <div class="container-fluid m-5 p-5">
      <div id="item" class="row g-2 p-4">
          <!-- all item add here  -->
      </div>
      <div class="pay">
          <a href="index.php" class="textcolor">continue shopping > </a>
          <p>Total:- ₹ 0.00</p>
          <a href="./ckeckout.php"><button class="btn bgcolor text-white">Proceed To Checkout</button></a>
      </div>
    </div>
  <script>
     let cartLS = JSON.parse(localStorage.getItem("cartData"));
     let main=document.getElementById('item');
displayItem(cartLS)
function displayItem(cartLS){
  cartLS.forEach(function(elem){
    let div=document.createElement('div');
    div.setAttribute('class', 'card')
    main.append(div);
    let img=document.createElement('img');
    img.setAttribute('src',elem.productImage);
    img.setAttribute('class', 'card-img-top');
    let div1 = document.createElement('div');
    div1.setAttribute('class', 'card-body')
    div.append(div1);
    let h4=document.createElement('h4');
    h4.innerText=elem.productName;
    let p=document.createElement('p');
    p.innerText='₹'+ elem.price;
    let deleteCart=document.createElement('button');
    deleteCart.setAttribute('class','btn bgcolor text-white')
    deleteCart.innerText='Delete';
    deleteCart.addEventListener('click',function(){
    Delete(elem.productName)
    }); 
    div.append(img,h4,p,deleteCart);
})

}
function Delete(productName){
  let deleted= cartLS.filter(function(element){
    return element.productName != productName;
  })
  cartLs=deleted;
  localStorage.setItem('cartData',JSON.stringify(cartLS));
  // displayItem(cartLs);
}
  </script>
</html>
