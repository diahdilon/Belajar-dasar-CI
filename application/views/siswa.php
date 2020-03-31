 <!-- Progress Table start -->
 <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">
                                
                        <?php echo anchor('admin/tambah_siswa', 'Tambah Data Siswa', array('class'=> 'btn btn-danger mb-3 fa fa-database' ));?>
                                </h4>
                                <div class="single-table">
                                    <div class="table-responsive">
                                        <table class="table table-hover progress-table text-center" id="siswa">
                                            <thead class="text-uppercase">
                                                <tr>
                                                    <th scope="col">NO</th>
                                                    <th scope="col">Tahun Pelajaran</th>
                                                    <th scope="col">Nama Siswa</th>
                                                    <th scope="col">Jenis Kelamin</th>
                                                    <th scope="col">Foto</th>
                                                    <th scope="col">action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            $no=1;
                                                foreach ($sis->result_object() as $r) {
                                                    # code...
                                                
                                            ?>
                                                <tr>
                                                   <td><?=$no?></td>
                                                   <td><?=$r->tahun_pelajaran?></td>
                                                   <td><?=$r->nama_siswa?></td>
                                                   <td>
                                                    <?php
                                                    if ($r->jk_siswa=='L') {
                                                       $jk="laki-laki";
                                                    } else {
                                                        $jk="perempuan";
                                                    }
                                                    echo $jk
                                                    
                                                    ?>
                                                        
                                                    </td>
                                                    <td>
                                                    <?php
                                                    if (!$r->foto) {
                                                        ?>
                                                        <img src="<?=base_url('assets/fotokosong.gif')?>" alt="" width="100">
                                                        <?php
                                                       
                                                    } else {
                                                        ?>
                                                         <img src="<?=base_url('assets/siswa/'.$r->foto)?>" alt="" width="100">
                                                        <?php
                                                        
                                                    }
                                                    
                                                    ?>
                                                   
                                                    </td>
                                                    <td>
                                                    <td>
                                                        <ul class="d-flex justify-content-center">
                                                            <li class="mr-3"><a href="<?=base_url('Admin/formedit_siswa/'.$r->id_siswa)?>" class="text-secondary"><i class="fa fa-edit"></i></a></li>
                                                            <li><a href="<?=base_url('Admin/hapus_siswa/'.$r->id_siswa)?>" class="text-danger" onclick="return confirm('apakah data siswa mau dihapus')"><i class="ti-trash"></i></a></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <?php
                                               $no++;
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