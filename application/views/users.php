 <!-- Progress Table start -->
 <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">
                                
                        <?php echo anchor('admin/tambah_users', 'Tambah Data Users', array('class'=> 'btn btn-danger mb-3 fa fa-database' ));?>
                                </h4>
                                <div class="single-table">
                                    <div class="table-responsive">
                                        <table class="table table-hover progress-table text-center">
                                            <thead class="text-uppercase">
                                                <tr>
                                                    <th scope="col">NO</th>
                                                    <th scope="col">Nama Lengkap</th>
                                                    <th scope="col">Username</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Level</th>
                                                    <th scope="col">action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                                if ($use->num_rows() > 0) {
                                                    $no=1;
                                                    foreach ($use->result_object() as $s ) {
                                                       ?>
                                                 <tr>
                                                    <th scope="row"><?=$no?></th>
                                                    <td><?=$s->nama_lengkap?></td>
                                                    <td><?=$s->username?></td>
                                                    <td><?=$s->email?></td>
                                                    <td><?=$s->level?></td>
                                                    </td>
                                                   
                                                    <td>
                                                        <ul class="d-flex justify-content-center">
                                                            <li class="mr-3"><a href="<?=base_url('Admin/formedit_users/'.$s->id_users)?>" class="text-secondary"><i class="fa fa-edit"></i></a></li>
                                                            <li><a href="<?=base_url('Admin/hapus_users/'.$s->id_users)?>" class="text-danger" onclick="return confirm('apakah data Kelas mau dihapus')"><i 
                                                               class="ti-trash"></i></a></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                       <?php
                                                       $no++;
                                                   
                                                }
                                                 }else{

                                                 
                                                        ?>
                                                <tr><td colspan="4" align="center">
                                                DATA KOSONG
                                                </td></tr>
                                                        <?php

                                                }
                                                    
                                                    ?>
                                           
                                               
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Progress Table end -->

</div>