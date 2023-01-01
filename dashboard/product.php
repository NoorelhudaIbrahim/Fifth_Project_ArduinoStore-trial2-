<?php include('header.php');?>
    <div class="col-10 grid-margin stretch-card">
        <div class="card container p-5 m-5">
            <div class="card-body">
                <h4 class="card-title">Basic form elements</h4>
                <p class="card-description"> Basic form elements </p>
                <form class="forms-sample">
                    <div class="form-group">
                        <label for="exampleInputName1">Product Name</label>
                        <input type="text" class="form-control" name="name" id="exampleInputName1" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Product Description</label>
                        <input type="text" class="form-control" name="description" id="exampleInputEmail3" placeholder="Description">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Coast Price</label>
                        <input type="number" class="form-control" name="coast" id="exampleInputPassword4" placeholder="Coast">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Sale Price</label>
                        <input type="number" class="form-control" name="sale" id="exampleInputPassword4" placeholder="Sale">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Discount</label>
                        <input type="number" class="form-control" name="discount" id="exampleInputPassword4" placeholder="Discount">
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault"> Default checkbox </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault"> Default checkbox </label>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                </form>
            </div>
        </div>
    </div>
    
<?php 

if ($_SERVER["REQUEST_METHOD"] == 'POST') {

    $type = $_POST['type'];
    $fi_name = $_POST['first_name'];
    $la_name = $_POST['last_name'];
    $pass = $_POST['password'];
    $email = $_POST['email'];

    // insert value in special database
    $sql = "INSERT INTO products (product_id, category_id, image, description, name, price, price_discount, is_sale, sale_rate, in_stock) VALUES (NULL 
    , '$fi_name', '$la_name', '$pass', '$email')";

    // check if data connected
    if ($connect_db->query($sql) === TRUE) {
        echo "New record created successfully";
    } 
    else {
    echo "Error: " . $sql . "<br>" . $connect_db->error;
    }


    $connect_db->close();

}


?>