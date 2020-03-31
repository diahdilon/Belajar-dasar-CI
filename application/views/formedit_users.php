<div class="col-12 mt-5">
                                <div class="card">


                                    <div class="card-body">
                                        <h4 class="header-title">Isi Users</h4>
                                       <?php echo form_open('Admin/edit_users');?>
                                       <?php echo form_hidden("id", $us->id_users); ?>
                                       <div class="form-group">
                                                <label for="un">Nama Lengkap</label>
                                                
                                                <?php echo form_input("nama_lengkap", $us->nama_lengkap,array ('class'=>'form-control', 'id'=>'kk',
                                            'placeholder'=>'Isi Nama Lengkap')); ?>
                                            <small class="text-danger">
                                            <?php echo form_error('nama_lengkap',' '); ?>
                                            </small>
                                                
                                            </div>
                                            <div class="form-group">
                                                <label for="un">Username</label>
                                                
                                                <?php echo form_input("username", $us->username,array ('class'=>'form-control', 'id'=>'kk',
                                            'placeholder'=>'Isi Username')); ?>
                                            <small class="text-danger">
                                            <?php echo form_error('username',' '); ?>
                                            </small>
                                                
                                            </div>
                                            <div class="form-group">
                                                <label for="nk">Password*)</label>
                                                
                                                <?php echo form_password("password", set_value ('password'),array('class'=>'form-control', 'id'=>'nk',
                                            'placeholder'=>'Isi Password')); ?>
                                             <small class="text-danger">
                                            <?php echo form_error('password',' '); ?>
                                            </small>
                                             </div> 

                                            <div class="form-group">
                                                <label for="nk">Cofirmasi Password*)</label>
                                                
                                                <?php echo form_password("conpassword", set_value ('conpassword'),array('class'=>'form-control', 'id'=>'nk',
                                            'placeholder'=>'Isi Confirmasi Password')); ?>
                                             <small class="text-danger">
                                            <?php echo form_error('conpassword',' '); ?>
                                            </small>
                                            </div> 
                                            <div class="form-group">
                                                <label for="kk">Email</label>
                                                
                                                <?php echo form_input("email", $us->email,array ('class'=>'form-control', 'id'=>'kk',
                                            'placeholder'=>'Isi Email')); ?>
                                            <small class="text-danger">
                                            <?php echo form_error('email',' '); ?>
                                            
                                            </small>
                                             </div>
                                             <div class="form-group">
                                                <label for="ng">level</label>
                                                
                                                <?php  
                                                if ($us->level=="admin") {
                                                    $a=TRUE;
                                                    $u=FALSE;
                                                } else {
                                                    $a=FALSE;
                                                    $u=TRUE;
                                                }
                                                
                                                
                                                echo form_radio('level','admin',$a)?>Admin
                                                <?php echo form_radio('level','user',$u) ?>User
                                                <small class="text-danger"> <?php echo form_error('level', ' '); ?>
                                            </small>  
                                            </div> 
                                                <div class="form-group">
                                                 <label for="nk">*)Kosongi jika tidak mau diubah</label>
                                                
                                                </div> 
                                            
                                            <?php echo form_submit('edit','EDIT',array('class'=>'btn btn-primary mt-4 
                                            pr-4 pl-4'))?>
                                        <?php echo form_close(); ?>
                                    </div>
                                </div>
                            </div>

</div>