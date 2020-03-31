 <!-- Progress Table start -->
 <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <?php
                                    if($this->session->flashdata('info')){
                                        ?>
 <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <strong> <?php  echo $this->session->flashdata
                                            ('info');?>
                                           </strong>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="fa fa-times"></span>
                                            </button>
                                </div>
                                        <?php

                                       

                                    }
                                ?>
                                <h4 class="header-title">
                                
                        <?php echo anchor('admin/tambah_th', 'Tambah Data Tahun Pelajaran', array('class'=> 'btn btn-danger mb-3 fa fa-database' ));?>
                                </h4>
                                <div class="single-table">
                                    <div class="table-responsive">
                                        <table class="table table-hover progress-table text-center">
                                            <thead class="text-uppercase">
                                                <tr>
                                                    <th scope="col">NO</th>
                                                    <th scope="col">Tahun Pelajaran</th>
                                                    <th scope="col">action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                                if ($th->num_rows() > 0) {
                                                    $no=1;
                                                    foreach ($th->result_object() as $r ) {
                                                        # code...
                                                    
                                                    ?>
                                                     <tr>
                                                    <th scope="row"><?=$no?></th>
                                                    <td><?=$r->tahun_pelajaran?></td>
                                                   
                                                    </td>
                                                   
                                                        
                                                    </td>
                                                    <td>
                                             <ul class="d-flex justify-content-center">
                                                <li class="mr-3"><a href="<?=base_url('Admin/formedit_th/'.$r->id_tahun_pelajaran)?>" 
                                                class="text-secondary"><i class="fa fa-edit"></i></a></li>
                                                            <li><a href="<?=base_url('Admin/hapusth/'.$r->id_tahun_pelajaran)?>" class="text-danger" onclick="return confirm('apakah data Tahun Pelajaran mau dihapus')"><i class="ti-trash"></i></a></li>
                                                        </ul>
                                                    </td>
                                                </tr>

                                                    <?php
                                                    $no++;
                                                    }
                                                } else {
                                                    # data tidak ada
                                                    ?>
                                                    <tr>
                                                    <td colspan="3" align="center">Data kosong</td>
                                                    </tr>

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