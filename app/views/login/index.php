<div class="card" style="width: 800px; margin: 100px auto 100px" >
<center style="margin:50px 0px; font-weight:bold;">

<h3  style="background-color:skyblue; ">HALAMAN LOGIN</h3>
     </center>

  <div class="card-header bg-primary">
    Login
  </div>
  <div class="card-body bg-white">
  <form action="<?php echo BASEURL;?>/login/run" method="POST">
  <div class="mb-3 row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputPassword">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword">
    </div>
  </div>
  <div class="mb-3 row">
     <button type="submit" class="btn btn-primary col-sm-2" style="margin: 0px auto;">Login</button>
  </div>
  </form>
  </div>
</div>