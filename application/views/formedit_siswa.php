<div class="main-content-inner">

 <div class="col-12 mt-5">

                                <div class="card">


                                    <div class="card-body">
                                        <h4 class="header-title">Form Siswa</h4>
                                       <?php echo form_open_multipart('Admin/edit_siswa');?>
                                       <?php echo form_hidden("id_siswa", $s->id_siswa); ?>
                                       <?php echo form_hidden("foto", $s->foto); ?>
                                            <div class="form-group">
                                                <label for="th">Tahun Pelajaran</label>
                                                
                                          <?php echo form_dropdown("th",$combo,$s->id_tahun_pelajaran, array ('class'=>'form-control', 'id'=>'th',  )); ?>
                                            <small class="text-danger">
                                            <?php echo form_error('th',''); ?>
                                            </small>
                                                
                                            </div>
                                            <div class="form-group">
                                                <label for="nis">NIS</label>
                                                
                                                <?php echo form_input("nis",$s->nisn, array('class'=>'form-control', 'id'=>'nis',
                                            'placeholder'=>'Isi NIS')); ?>
                                             <small class="text-danger">
                                            <?php echo form_error('nis'); ?>
                                            </small>  
                                            </div> 

                                            <div class="form-group">
                                                <label for="ns">Nama Siswa</label>
                                                
                                                <?php echo form_input("nama_siswa", $s->nama_siswa, array('class'=>'form-control', 'id'=>'ns',
                                            'placeholder'=>'Isi Nama Siswa')); ?>
                                             <small class="text-danger">
                                            <?php echo form_error('nama_siswa'); ?>
                                            </small>  
                                            </div> 

                                            <div class="form-group">
                                                <label for="ng">Jenis Kelamin</label>
                                                
                                                <?php 
                                                if ($s->jk_siswa=="L") {
                                                    $l=TRUE;
                                                    $p=FALSE;
                                                } else {
                                                    $l=FALSE;
                                                    $p=TRUE;
                                                }
                                                
                                                echo form_radio('jk','L',$l)?>Laki-Laki
                                                <?php echo form_radio('jk','P',$p) ?>Perempuan
                                                <small class="text-danger"> <?php echo form_error('jk'); ?>
                                            </small>  
                                            </div> 
                                            
                                            
                                            <div class="form-group">
                                                <label for="ng">Alamat Siswa</label>
                                                
                                                <?php echo form_textarea('alamat_siswa',$s->alamat_siswa, array('class'=>'form-control',
                                                'placeholder'=>'isi alamat')) ?>
                                             <small class="text-danger">
                                            <?php echo form_error('alamat_siswa'); ?>
                                            </small>  
                                            </div> 
                                            <div>
                                            <?php
                                                    if (!$s->foto) {
                                                        ?>
                                                        <img src="<?=base_url('assets/fotokosong.gif')?>" alt="" width="100">
                                                        <?php
                                                       
                                                    } else {
                                                        ?>
                                                         <img src="<?=base_url('assets/siswa/'.$s->foto)?>" alt="" width="300">
                                                        <?php
                                                        
                                                    }
                                                    
                                                    ?>
                                            </div>
                                            <div>
                                                <label>*) kosongi jika tidak mau diubah </label>
                                            </div>


                                            <div class="form-group">
                                                <label for="ng">Foto Guru *)</label>
                                                
                                                <?php echo form_upload('foto','',array('class'=>'form-control')) ?>
                                             <small class="text-danger">
                                            <?php echo $error; ?>
                                            </small>  
                                           


                                            
                                            
                                            <?php echo form_submit('edit','EDIT',array('class'=>'btn btn-primary mt-4 
                                            pr-4 pl-4'))?>
                                        <?php echo form_close(); ?>
                                    </div>
                                </div>
                            </div>

</div>