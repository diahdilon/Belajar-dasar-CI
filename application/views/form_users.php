<div class="col-12 mt-5">
                                <div class="card">


                                    <div class="card-body">
                                        <h4 class="header-title">Isi Users</h4>
                                       <?php echo form_open('Admin/simpan_users');?>
                                       <div class="form-group">
                                                <label for="un">Nama Lengkap</label>
                                                
                                                <?php echo form_input("nama_lengkap", set_value ('nama_lengkap'),array ('class'=>'form-control', 'id'=>'kk',
                                            'placeholder'=>'Isi Nama Lengkap')); ?>
                                            <small class="text-danger">
                                            <?php echo form_error('nama_lengkap',' '); ?>
                                            </small>
                                                
                                            </div>
                                            <div class="form-group">
                                                <label for="un">Username</label>
                                                
                                                <?php echo form_input("username", set_value ('username'),array ('class'=>'form-control', 'id'=>'kk',
                                            'placeholder'=>'Isi Username')); ?>
                                            <small class="text-danger">
                                            <?php echo form_error('username',' '); ?>
                                            </small>
                                                
                                            </div>
                                            <div class="form-group">
                                                <label for="nk">Password</label>
                                                
                                                <?php echo form_password("password", set_value ('password'),array('class'=>'form-control', 'id'=>'nk',
                                            'placeholder'=>'Isi Password')); ?>
                                             <small class="text-danger">
                                            <?php echo form_error('password',' '); ?>
                                            </small>
                                             </div> 

                                            <div class="form-group">
                                                <label for="nk">Confirmasi Password</label>
                                                
                                                <?php echo form_password("conpassword", set_value ('conpassword'),array('class'=>'form-control', 'id'=>'nk',
                                            'placeholder'=>'Isi Confirmasi Password')); ?>
                                             <small class="text-danger">
                                            <?php echo form_error('conpassword',' '); ?>
                                            </small>
                                            </div> 
                                            <div class="form-group">
                                                <label for="kk">Email</label>
                                                
                                                <?php echo form_input("email", set_value ('email'),array ('class'=>'form-control', 'id'=>'kk',
                                            'placeholder'=>'Isi Email')); ?>
                                            <small class="text-danger">
                                            <?php echo form_error('email',' '); ?>
                                            </small>
                                             </div>
                                             <div class="form-group">
                                                <label for="ng">level</label>
                                                
                                                <?php echo form_radio('level','admin',set_value('level'))?>Admin
                                                <?php echo form_radio('level','user',set_value('level')) ?>User
                                                <small class="text-danger"> <?php echo form_error('level', ' '); ?>
                                            </small>  
                                            </div> 
                                            
                                            
                                            <?php echo form_submit('save','SIMPAN',array('class'=>'btn btn-primary mt-4 
                                            pr-4 pl-4'))?>
                                        <?php echo form_close(); ?>
                                    </div>
                                </div>
                            </div>

</div>