<div style="max-width:800px; margin:10px auto;">

     <!-- flasher  -->
     <div class="row">
          <div class="col-lg-6">
               <?php Flasher::flash(); ?>
          </div>
     </div>

     <center style="margin:50px 0px; font-weight:bold;">
          <h3>DAFTAR USERS</h3>
     </center>

     <!-- button tambah  -->
     <button style="margin: 20px 0;" type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#tambahData">
          Tambah User
     </button>

     <!-- Modal tambah-->
     <div class="modal fade" id="tambahData" tabindex="-1" aria-labelledby="tambahData" aria-hidden="true">
          <div class="modal-dialog">
               <div class="modal-content">
                    <div class="modal-header">
                         <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="<?php echo BASEURL; ?>/users/tambah" method="POST">
                         <div class="modal-body">
                              <div class="mb-3">
                                   <label for="exampleInputEmail1" class="form-label">Id</label>
                                   <input type="text" class="form-control" id="user_id" name="user_id" aria-describedby="emailHelp">
                              </div>
                              <div class="mb-3">
                                   <label for="exampleInputEmail1" class="form-label">Email</label>
                                   <input type="text" class="form-control" id="user_email" name="user_email" aria-describedby="emailHelp">
                              </div>
                              <div class="mb-3">
                                   <label for="exampleInputEmail1" class="form-label">Password</label>
                                   <input type="text" class="form-control" id="user_password" name="user_password" aria-describedby="emailHelp">
                              </div>
                              <div class="mb-3">
                                   <label for="exampleInputEmail1" class="form-label">Nama</label>
                                   <input type="text" class="form-control" id="user_nama" name="user_nama" aria-describedby="emailHelp">
                              </div>
                         </div>
                         <div class="modal-footer">
                              <button type="button" class="btn btn-success" data-bs-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-danger">Save changes</button>
                         </div>
                    </form>
               </div>
          </div>
     </div>

     <!-- search  -->
     <form action="<?php echo BASEURL; ?>/users/cari" method="POST">
          <div class="input-group mb-3">
               <input name="keyword" id="keyword" type="text" class="form-control" autocomplete="off" placeholder="Cari Data" aria-label="Recipient's username" aria-describedby="button-addon2">
               <button class="btn btn-outline-secondary" type="submit" id="bntCari">Cari</button>
          </div>
     </form>

     <div class="card" style="color:black; background-color: white; margin:20px;">
          <h5 class="card-header" style="background-color:#4169E1; font-weight:bold;">Table User</h5>
          <div class="card-body">
               <table class="table table-hover" style="background-color: 	white;">
                    <thead>
                         <tr>
                              <th scope="col">Id</th>
                              <th scope="col">Email</th>
                              <th scope="col">Password</th>
                              <th scope="col">Nama</th>
                              <th colspan="2" scope="col">Action</th>
                         </tr>
                    </thead>
                    <tbody>
                         <?php foreach ($data["users"] as $users) :
                              $user_id       =    $users["user_id"];
                              $user_email    =    $users["user_email"];
                              $user_password =    $users["user_password"];
                              $user_nama     =    $users["user_nama"];
                         ?>
                              <tr>
                                   <td><?php echo $user_id; ?></td>
                                   <td><?php echo $user_email; ?></td>
                                   <td><?php echo $user_password; ?></td>
                                   <td><?php echo $user_nama; ?></td>
                                   <td>
                                        <!-- button ubah  -->
                                        <a href="<?php echo BASEURL; ?>/users/ubah/<?php echo $users["user_id"]; ?>" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#ubahData<?php echo $users["user_id"]; ?>">Ubah</a>

                                        <!-- Modal ubah-->
                                        <div class="modal fade" id="ubahData<?php echo $users["user_id"]; ?>" tabindex="-1" aria-labelledby="ubahData<?php echo $users["user_id"]; ?>" aria-hidden="true">
                                             <div class="modal-dialog">
                                                  <div class="modal-content">
                                                       <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Ubah users</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                       </div>
                                                       <form action="<?php echo BASEURL; ?>/users/ubah" method="POST">
                                                            <div class="modal-body">
                                                                 <div class="mb-3">
                                                                      <label for="exampleInputEmail1" class="form-label">Id</label>
                                                                      <input readonly type="text" class="form-control" id="user_id" name="user_id" value="<?php echo $users["user_id"]; ?>" aria-describedby="emailHelp">
                                                                 </div>
                                                                 <div class="mb-3">
                                                                      <label for="exampleInputEmail1" class="form-label">Email</label>
                                                                      <input type="text" class="form-control" id="user_email" name="user_email" value="<?php echo $users["user_email"]; ?>" aria-describedby="emailHelp">
                                                                 </div>
                                                                 <div class="mb-3">
                                                                      <label for="exampleInputEmail1" class="form-label">Password</label>
                                                                      <input type="text" class="form-control" id="user_password" name="user_password" value="<?php echo $users["user_password"]; ?>" aria-describedby="emailHelp">
                                                                 </div>
                                                                 <div class="mb-3">
                                                                      <label for="exampleInputEmail1" class="form-label">Nama</label>
                                                                      <input type="text" class="form-control" id="user_nama" name="user_nama" value="<?php echo $users["user_nama"]; ?>" aria-describedby="emailHelp">
                                                                 </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                 <button type="submit" class="btn btn-primary">Save changes</button>
                                                            </div>
                                                       </form>
                                                  </div>
                                             </div>
                                        </div>

                                        <!-- button hapus  -->
                                        <a href="<?php echo BASEURL; ?>/users/hapus/<?php echo $users["user_id"]; ?>" onclick="return confirm('Yakin ingin menghapus?')" class="btn btn-danger">Hapus</a>
                                   </td>
                              </tr>
                         <?php endforeach; ?>
                    </tbody>
               </table>
          </div>
     </div>
</div>