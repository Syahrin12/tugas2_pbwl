<div style="max-width:800px; margin:10px auto;">

     <!-- flasher  -->
     <div class="row">
          <div class="col-lg-6">
               <?php Flasher::flash(); ?>
          </div>
     </div>

     <center style="margin:50px 0px; font-weight:bold;">
          <h3>DAFTAR GOLONGAN</h3>
     </center>

     <!-- button tambah  -->
     <button style="margin: 20px 0;" type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#tambahData">
          Tambah Golongan
     </button>

     <!-- Modal tambah-->
     <div class="modal fade" id="tambahData" tabindex="-1" aria-labelledby="tambahData" aria-hidden="true">
          <div class="modal-dialog">
               <div class="modal-content">
                    <div class="modal-header">
                         <h5 class="modal-title" id="exampleModalLabel">Tambah Golongan</h5>
                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="<?php echo BASEURL; ?>/golongan/tambah" method="POST">
                         <div class="modal-body">
                              <div class="mb-3">
                                   <label for="exampleInputEmail1" class="form-label">Id</label>
                                   <input type="text" class="form-control" id="gol_id" name="gol_id" aria-describedby="emailHelp">
                              </div>
                              <div class="mb-3">
                                   <label for="exampleInputEmail1" class="form-label">Kode</label>
                                   <input type="text" class="form-control" id="gol_kode" name="gol_kode" aria-describedby="emailHelp">
                              </div>
                              <div class="mb-3">
                                   <label for="exampleInputEmail1" class="form-label">Nama</label>
                                   <input type="text" class="form-control" id="gol_nama" name="gol_nama" aria-describedby="emailHelp">
                              </div>
                              <div class="mb-3">
                                   <label for="exampleInputEmail1" class="form-label">Created_at</label>
                                   <input type="datetime-local" class="form-control" id="created_at" name="created_at" aria-describedby="emailHelp">
                              </div>
                              <div class="mb-3">
                                   <label for="exampleInputEmail1" class="form-label">Updated_at</label>
                                   <input type="datetime-local" class="form-control" id="updated_at" name="updated_at" aria-describedby="emailHelp">
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
     <form action="<?php echo BASEURL; ?>/golongan/cari" method="POST">
          <div class="input-group mb-3">
               <input name="keyword" id="keyword" type="text" class="form-control" autocomplete="off" placeholder="Cari Data" aria-label="Recipient's username" aria-describedby="button-addon2">
               <button class="btn btn-outline-secondary" type="submit" id="bntCari">Cari</button>
          </div>
     </form>

     <div class="card" style="color:black; background-color: 	white; margin:20px;">
          <h5 class="card-header" style="background-color:red; font-weight:bold;">Table Golongan </h5>
          <div class="card-body">
               <table class="table table-hover" style="background-color: white;">
                    <thead>
                         <tr>
                              <th scope="col">Id</th>
                              <th scope="col">Kode</th>
                              <th scope="col">Nama</th>
                              <th scope="col">Created_at</th>
                              <th scope="col">Updated_at</th>
                              <th colspan="2" scope="col">Action</th>
                         </tr>
                    </thead>
                    <tbody>
                         <?php foreach ($data["golongan"] as $golongan) :
                              $gol_id        =    $golongan["gol_id"];
                              $gol_kode      =    $golongan["gol_kode"];
                              $gol_nama      =    $golongan["gol_nama"];
                              $created_at    =    $golongan["created_at"];
                              $updated_at    =    $golongan["updated_at"];
                         ?>
                              <tr>
                                   <td><?php echo $gol_id; ?></td>
                                   <td><?php echo $gol_kode; ?></td>
                                   <td><?php echo $gol_nama; ?></td>
                                   <td><?php echo $created_at; ?></td>
                                   <td><?php echo $updated_at; ?></td>
                                   <td>
                                        <!-- button ubah  -->
                                        <a href="<?php echo BASEURL; ?>/golongan/ubah/<?php echo $golongan["gol_id"]; ?>" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#ubahData<?php echo $golongan["gol_id"]; ?>">Ubah</a>

                                        <!-- Modal ubah-->
                                        <div class="modal fade" id="ubahData<?php echo $golongan["gol_id"]; ?>" tabindex="-1" aria-labelledby="ubahData<?php echo $golongan["gol_id"]; ?>" aria-hidden="true">
                                             <div class="modal-dialog">
                                                  <div class="modal-content">
                                                       <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Ubah Golongan</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                       </div>
                                                       <form action="<?php echo BASEURL; ?>/golongan/ubah" method="POST">
                                                            <div class="modal-body">
                                                                 <div class="mb-3">
                                                                      <label for="exampleInputEmail1" class="form-label">Id</label>
                                                                      <input readonly type="text" class="form-control" id="gol_id" name="gol_id" value="<?php echo $golongan["gol_id"]; ?>" aria-describedby="emailHelp">
                                                                 </div>
                                                                 <div class="mb-3">
                                                                      <label for="exampleInputEmail1" class="form-label">Kode</label>
                                                                      <input type="text" class="form-control" id="gol_kode" name="gol_kode" value="<?php echo $golongan["gol_kode"]; ?>" aria-describedby="emailHelp">
                                                                 </div>
                                                                 <div class="mb-3">
                                                                      <label for="exampleInputEmail1" class="form-label">Nama</label>
                                                                      <input type="text" class="form-control" id="gol_nama" name="gol_nama" value="<?php echo $golongan["gol_nama"]; ?>" aria-describedby="emailHelp">
                                                                 </div>
                                                                 <div class="mb-3">
                                                                      <label for="exampleInputEmail1" class="form-label">Created_at</label>
                                                                      <input type="datetime-local" class="form-control" id="created_at" name="created_at" value="<?php echo date('Y-m-d\TH:i:s', strtotime($golongan["created_at"])); ?>" aria-describedby="emailHelp">
                                                                 </div>
                                                                 <div class="mb-3">
                                                                      <label for="exampleInputEmail1" class="form-label">Updated_at</label>
                                                                      <input type="datetime-local" class="form-control" id="updated_at" name="updated_at" value="<?php echo date('Y-m-d\TH:i:s', strtotime($golongan["updated_at"])); ?>" aria-describedby="emailHelp">
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
                                        <a href="<?php echo BASEURL; ?>/golongan/hapus/<?php echo $golongan["gol_id"]; ?>" onclick="return confirm('Yakin ingin menghapus?')" class="btn btn-danger">Hapus</a>
                                   </td>
                              </tr>
                         <?php endforeach; ?>
                    </tbody>
               </table>
          </div>
     </div>
</div>