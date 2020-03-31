 <!-- Progress Table start -->
 <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">
                                
                        <?php echo anchor('admin/tambah_kelas ', 'Tambah Data Kelas', array('class'=> 'btn btn-danger mb-3 fa fa-database' ));?>
                                </h4>
                                <div class="single-table">
                                    <div class="table-responsive">
                                        <table class="table table-hover progress-table text-center">
                                            <thead class="text-uppercase">
                                                <tr>
                                                    <th scope="col">NO</th>
                                                    <th scope="col">Kode Kelas</th>
                                                    <th scope="col">Nama Kelas</th>
                                                    <th scope="col">action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                                if ($k->num_rows() > 0) {
                                                    $no=1;
                                                    foreach ($k->result_object() as $r ) {
                                                       ?>
                                                 <tr>
                                                    <th scope="row"><?=$no?></th>
                                                    <td><?=$r->kode_kelas?></td>
                                                    <td><?=$r->nama_kelas?></td>
                                                    </td>
                                                   
                                                    <td>
                                                        <ul class="d-flex justify-content-center">
                                                            <li class="mr-3"><a href="<?=base_url('Admin/formedit_kelas/'.$r->id_kelas)?>" class="text-secondary"><i class="fa fa-edit"></i></a></li>
                                                            <li><a href="<?=base_url('Admin/hapuskelas/'.$r->id_kelas)?>" class="text-danger" onclick="return confirm('apakah data Kelas mau dihapus')"><i 
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