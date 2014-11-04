
            <div id="body">
                <p><label style="color: black;">Silahkan Login untuk melakukan managemen data.</label></p>
                <?php echo form_open('front/index');?>
                <div id="bg-line">
                    <label style="color: black;">UserID =</label> 
                    <?php echo form_input($UserID, set_value('UserID'));?>
                    <label style="color: black;">Password =</label>
                    <?php echo form_input($Pass);?>
                    <?php echo form_submit('submit', 'Log IN', 'class="btn-kirim-login"');?>
                    <?php echo form_reset('submit', 'Hapus', 'class="btn-kirim-login"');?>            
                </div>
                <?php echo form_close(); ?>
                <?php echo validation_errors(); ?>
                <?php echo $this->session->flashdata('result_login'); ?>
            </div>
        </div>
    </div>
</div>
<div>