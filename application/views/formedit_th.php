<div class="col-12 mt-5">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Edit Tahun Ajaran</h4>
                                       <?php echo form_open('Admin/edit_th');?>
                                       <?php echo form_hidden('id', $tp->id_tahun_pelajaran); ?>
                                            <div class="form-group">
                                                <label for="th">Tahun Pelajaran</label>
                                                
                                                <?php echo form_input("th",$tp->tahun_pelajaran, array('class'=>'form-control', 'id'=>'th',
                                            'placeholder'=>'Isi Tahun Pelajaran')); ?>
                                                
                                            </div>
                                            
                                            
                                            <?php echo form_submit('edit','EDIT',array('class'=>'btn btn-primary mt-4 
                                            pr-4 pl-4'))?>
                                        <?php echo form_close(); ?>
                                    </div>
                                </div>
                            </div>

</div>$this->load->view('v_home');