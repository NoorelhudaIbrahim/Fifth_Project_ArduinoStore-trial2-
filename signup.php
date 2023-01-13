<?php include('./header.php');?>
<div class="row container-fluid m-5 p-5">
  <div id="pop" class="container-fluid mt-5 p-4">
      <h3>Sign Up</h3>
      <form action="">
        <div class="form-check mb-3">
          <label for="">Name</label>
          <input type="text" id="name" name="name" class="form-control" value="" autocomplete="off" placeholder="Name" onchange="checkname()">
          <p class="errormessage" id="nerror"></p>
        </div>
        <div class="form-check mb-3">
          <label for="">Phone Number</label>
          <input type="text" id="phone" name="phone" value="" class="form-control" autocomplete="off" placeholder="phone" onchange="checkphone()">
          <p class="errormessage" id="lnerror"></p>
        </div>
        <div class="form-check mb-3">
          <label for="">Password</label>
          <input type="password" id="password" name="password" value="" class="form-control" autocomplete="off" placeholder="Password" onchange="checkpass()">
          <i id="truth" class="material-icons truth"></i>
          <p class="errormessage" id="passerror"></p>
        </div>
        <div class="form-check mb-3">
          <label for="">Repeat Password</label>
          <input type="password" id="conf-password" name="conf-password" value="" class="form-control" autocomplete="off" placeholder="Repeat Password" onchange="recheckpass()">
          <i id="truth1" class="material-icons truth"></i>
          <p class="errormessage" id="repasserror"></p>
        </div>
        <div class="form-check mb-3">
          <label for="">E-mail</label>
          <input type="email" id="email" name="email" value="" class="form-control" autocomplete="off" placeholder="E-mail">
          <p class="errormessage" id="mailerror"></p><br>
        </div>
        <div class="form-check mb-3">
        <button id="submit" class="submit btn btn-primary" type="" onclick="submitForm()">Regiser</button>
        </div>
        
      </form>
    </div>
</div>

<div class="row container-fluid m-5 p-5">
  <div id="pop" class="container-fluid mt-5 p-4 text-center">
    infinty web
  </div>
</div>
<?php include('./footer.php');?>
  
