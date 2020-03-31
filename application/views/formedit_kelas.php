<div class="col-12 mt-5">
                                <div class="card">


                                    <div class="card-body">
                                        <h4 class="header-title">Edit Kelas</h4>
                                       <?php echo form_open('Admin/edit_kelas');?>
                                       <?php echo form_hidden('id',$ke->id_kelas)?>
                                            <div class="form-group">
                                                <label for="kk">Kode Kelas</label>
                                                
                                                <?php echo form_input("kode_kelas",$ke->kode_kelas,array ('class'=>'form-control', 'id'=>'kk',
                                            'placeholder'=>'Isi Kode Kelas')); ?>
                                            
                                                
                                            </div>
                                            <div class="form-group">
                                                <label for="nk">Nama kelas</label>
                                                
                                                <?php echo form_input("nama_kelas", $ke->nama_kelas,array('class'=>'form-control', 'id'=>'nk',
                                            'placeholder'=>'Isi Nama Kelas')); ?>
                                             
                                                
                                            </div> 
                                            
                                            <?php echo form_submit('edit','EDIT',array('class'=>'btn btn-primary mt-4 
                                            pr-4 pl-4'))?>
                                        <?php echo form_close(); ?>
                                    </div>
                                </div>
                            </div>

</div>