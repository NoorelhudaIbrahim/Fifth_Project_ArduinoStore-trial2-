<?php include('./header.php');?>
<div class="row container-fluid m-5 p-5">
    <div class="mt-5 pt-5">
        <div id="pop" class="container-fluid mt-5 p-5">
        <h3>Sign Up</h3>
        <form action="">
            <div class="form-check mb-3">
            <label for="">E-mail</label>
            <input type="email" id="email" name="email" value="" class="form-control" autocomplete="off" placeholder="E-mail">
            <p class="errormessage" id="mailerror"></p><br>
            </div>
            <div class="form-check mb-3">
            <label for="">Password</label>
            <input type="password" id="password" name="password" value="" class="form-control" autocomplete="off" placeholder="Password" onchange="checkpass()">
            <i id="truth" class="material-icons truth"></i>
            <p class="errormessage" id="passerror"></p>
            </div>
            <div class="form-check mb-3">
                <button id="submit" class="submit btn btn-primary" type="" onclick="submitForm()">Regiser</button>
            </div>
            <div class="form-check mb-3">
                <span>If You are not register click <a href="./signup.php"> here</a></span>
            </div>
        </form>
        
        </div>
    </div>
</div>
<?php include('./footer.php');?>
  
