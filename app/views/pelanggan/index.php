<div style="max-width:800px; margin:10px auto;">

     <!-- flasher  -->
     <div class="row">
          <div class="col-lg-6">
               <?php Flasher::flash(); ?>
          </div>
     </div>

     <center style="margin:50px 0px; font-weight:bold;">
          <h3>DAFTAR PELANGGAN</h3>
     </center>

     <!-- button tambah  -->
     <button style="margin: 20px 0;" type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#tambahData">
          Tambah Pelanggan
     </button>

     <!-- Modal tambah-->
     <div class="modal fade" id="tambahData" tabindex="-1" aria-labelledby="tambahData" aria-hidden="true">
          <div class="modal-dialog">
               <div class="modal-content">
                    <div class="modal-header">
                         <h5 class="modal-title" id="exampleModalLabel">Tambah Pelanggan</h5>
                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="<?php echo BASEURL; ?>/pelanggan/tambah" method="POST">
                         <div class="modal-body">
                              <div class="mb-3">
                                   <label for="exampleInputEmail1" class="form-label">Id</label>
                                   <input type="text" class="form-control" id="pel_id" name="pel_id" aria-describedby="emailHelp">
                              </div>
                              <div class="mb-3">
                                   <label for="exampleInputEmail1" class="form-label">Id Gol</label>
                                   <input type="text" class="form-control" id="pel_id_gol" name="pel_id_gol" aria-describedby="emailHelp">
                              </div>
                              <div class="mb-3">
                                   <label for="exampleInputEmail1" class="form-label">Nama</label>
                                   <input type="text" class="form-control" id="pel_nama" name="pel_nama" aria-describedby="emailHelp">
                              </div>
                              <div class="mb-3">
                                   <label for="exampleInputEmail1" class="form-label">Id User</label>
                                   <input type="text" class="form-control" id="pel_id_user" name="pel_id_user" aria-describedby="emailHelp">
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
     <form action="<?php echo BASEURL; ?>/pelanggan/cari" method="POST">
          <div class="input-group mb-3">
               <input name="keyword" id="keyword" type="text" class="form-control" autocomplete="off" placeholder="Cari Data" aria-label="Recipient's username" aria-describedby="button-addon2">
               <button class="btn btn-outline-secondary" type="submit" id="bntCari">Cari</button>
          </div>
     </form>

     <div class="card" style="color:black; background-color: 	white; margin:20px;">
          <h5 class="card-header" style="background-color:yellow; font-weight:bold;">Table Pelanggan</h5>
          <div class="card-body">
               <table class="table table-hover" style="background-color: white;">
                    <thead>
                         <tr>
                              <th scope="col">Id</th>
                              <th scope="col">Id golongan</th>
                              <th scope="col">Nama Pelanggan</th>
                              <th scope="col">Id user</th>
                              <th colspan="2" scope="col">Action</th>
                         </tr>
                    </thead>
                    <tbody>
                         <?php foreach ($data["pelanggan"] as $pelanggan) :
                              $pel_id        =    $pelanggan["pel_id"];
                              $pel_id_gol    =    $pelanggan["pel_id_gol"];
                              $pel_nama      =    $pelanggan["pel_nama"];
                              $pel_id_user   =    $pelanggan["pel_id_user"];
                         ?>
                              <tr>
                                   <td><?php echo $pel_id; ?></td>
                                   <td><?php echo $pel_id_gol; ?></td>
                                   <td><?php echo $pel_nama; ?></td>
                                   <td><?php echo $pel_id_user; ?></td>
                                   <td>
                                        <!-- button ubah  -->
                                        <a href="<?php echo BASEURL; ?>/pelanggan/ubah/<?php echo $pel_id; ?>" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#ubahData<?php echo $pel_id; ?>">Ubah</a>

                                        <!-- Modal ubah-->
                                        <div class="modal fade" id="ubahData<?php echo $pel_id; ?>" tabindex="-1" aria-labelledby="ubahData<?php echo $pel_id; ?>" aria-hidden="true">
                                             <div class="modal-dialog">
                                                  <div class="modal-content">
                                                       <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Ubah Pelanggan</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                       </div>
                                                       <form action="<?php echo BASEURL; ?>/pelanggan/ubah" method="POST">
                                                            <div class="modal-body">
                                                                 <div class="mb-3">
                                                                      <label for="exampleInputEmail1" class="form-label">Id</label>
                                                                      <input readonly type="text" class="form-control" id="pel_id" name="pel_id" value="<?php echo $pel_id; ?>" aria-describedby="emailHelp">
                                                                 </div>
                                                                 <div class="mb-3">
                                                                      <label for="exampleInputEmail1" class="form-label">Id Gol</label>
                                                                      <input type="text" class="form-control" id="pel_id_gol" name="pel_id_gol" value="<?php echo $pel_id_gol; ?>" aria-describedby="emailHelp">
                                                                 </div>
                                                                 <div class="mb-3">
                                                                      <label for="exampleInputEmail1" class="form-label">Nama</label>
                                                                      <input type="text" class="form-control" id="pel_nama" name="pel_nama" value="<?php echo $pel_nama; ?>" aria-describedby="emailHelp">
                                                                 </div>
                                                                 <div class="mb-3">
                                                                      <label for="exampleInputEmail1" class="form-label">Id User</label>
                                                                      <input type="text" class="form-control" id="pel_id_user" name="pel_id_user" value="<?php echo $pel_id_user; ?>" aria-describedby="emailHelp">
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
                                        <a href="<?php echo BASEURL; ?>/pelanggan/hapus/<?php echo $pel_id; ?>" onclick="return confirm('Yakin ingin menghapus?')" class="btn btn-danger">Hapus</a>
                                   </td>
                              </tr>
                         <?php endforeach; ?>
                    </tbody>
               </table>
          </div>
     </div>
</div>