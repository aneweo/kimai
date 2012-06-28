<?php /* Smarty version 2.6.20, created on 2012-06-27 16:46:47
         compiled from edituser.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'edituser.tpl', 44, false),array('modifier', 'number_format', 'edituser.tpl', 92, false),array('function', 'html_options', 'edituser.tpl', 109, false),)), $this); ?>
<?php echo '    
    <script type="text/javascript"> 
        $(document).ready(function() {

	 var options = { 
		beforeSubmit:  function() { 

                	if ($(\'#password\').val() != \'\' && !validatePassword($(\'#password\').val(),$(\'#retypePassword\').val()))
                	    return false;

                floaterClose();
            	},
    success: function() {
          hook_chgUsr();
          ap_ext_refreshSubtab(\'grp\');
          return false;
          }
	    }; 
	 
	    $(\'#ap_ext_form_editusr\').ajaxForm(options); 

        }); 
    </script>
'; ?>


<div id="floater_innerwrap">
    
    <div id="floater_handle">
        <span id="floater_title"><?php echo $this->_tpl_vars['kga']['lang']['editusr']; ?>
</span>
        <div class="right">
            <a href="#" class="close" onClick="floaterClose();"><?php echo $this->_tpl_vars['kga']['lang']['close']; ?>
</a>
        </div>       
    </div>

    <div class="floater_content">

        <form id="ap_ext_form_editusr" action="../extensions/ki_adminpanel/processor.php" method="post"> 
            <fieldset>
                
                <ul>
                    
                    <li>
                        <label for="usr_name"><?php echo $this->_tpl_vars['kga']['lang']['username']; ?>
:</label>
                        <input class="formfield" type="text" name="usr_name" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['usr_details']['usr_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" maxlength=20 size=20 />
                    </li> 

                    <li>
                        <label for="usr_sts"><?php echo $this->_tpl_vars['kga']['lang']['status']; ?>
:</label>

        <?php if ($this->_tpl_vars['usr_details']['usr_sts'] == 1): ?>
                        <select name="usr_sts">
                            <option value="0" <?php if ($this->_tpl_vars['usr_details']['usr_sts'] == 0): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['kga']['lang']['adminusr']; ?>
 (!)</option>
                            <option value="1" <?php if ($this->_tpl_vars['usr_details']['usr_sts'] == 1): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['kga']['lang']['groupleader']; ?>
</option>
                            <option value="2" <?php if ($this->_tpl_vars['usr_details']['usr_sts'] == 2): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['kga']['lang']['regusr']; ?>
</option>
                        </select>
        <?php else: ?>


            <?php if ($this->_tpl_vars['curr_user'] == $this->_tpl_vars['usr_details']['usr_name'] && $this->_tpl_vars['usr_details']['usr_sts'] == 0): ?>                            
                <?php echo $this->_tpl_vars['kga']['lang']['admWarn']; ?>

            <?php else: ?>                
                        <select name="usr_sts">
                            <option value="0" <?php if ($this->_tpl_vars['usr_details']['usr_sts'] == 0): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['kga']['lang']['adminusr']; ?>
 (!)</option>
                            <option value="2" <?php if ($this->_tpl_vars['usr_details']['usr_sts'] == 2): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['kga']['lang']['regusr']; ?>
</option>
                        </select>
            <?php endif; ?>              

        <?php endif; ?>
                    </li>


                    <li>
                        <label for="usr_pw"><?php echo $this->_tpl_vars['kga']['lang']['newPassword']; ?>
:</label>
                        <input class="formfield" type="password" name="usr_pw" size="9" id="password" /> <?php echo $this->_tpl_vars['kga']['lang']['minLength']; ?>

        <?php if ($this->_tpl_vars['usr_details']['usr_pw'] == 'no'): ?>
        
                        <br/>
                        <img src="../skins/<?php echo ((is_array($_tmp=$this->_tpl_vars['kga']['conf']['skin'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/grfx/caution_mini.png" alt="Caution" valign=middle />
                        <strong style="color:red"><?php echo $this->_tpl_vars['kga']['lang']['nopassword']; ?>
</strong>
        <?php endif; ?>
                    </li>


                    <li>
                        <label for="usr_pw"><?php echo $this->_tpl_vars['kga']['lang']['retypePassword']; ?>
:</label>
                        <input class="formfield" type="password" name="retypePassword" id="retypePassword" size="9" />
                    </li>


                    <li>
                        <label for="usr_rate"><?php echo $this->_tpl_vars['kga']['lang']['rate']; ?>
:</label>
                        <input class="formfield" type="text" name="usr_rate" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['usr_details']['usr_rate'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, $this->_tpl_vars['kga']['conf']['decimalSeparator'], "") : number_format($_tmp, 2, $this->_tpl_vars['kga']['conf']['decimalSeparator'], "")))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" />
                    </li>


                    <li>
                        <label for="usr_mail"><?php echo $this->_tpl_vars['kga']['lang']['mail']; ?>
:</label>
                        <input class="formfield" type="text" name="usr_mail" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['usr_details']['usr_mail'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" />
                    </li>

                    <li>
                        <label for="usr_alias"><?php echo $this->_tpl_vars['kga']['lang']['alias']; ?>
:</label>
                        <input class="formfield" type="text" name="usr_alias" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['usr_details']['usr_alias'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" />
                    </li>

                    <li>
                        <label for="usr_grp"><?php echo $this->_tpl_vars['kga']['lang']['group']; ?>
:</label>
                        <select class="formfield" name="usr_grp">
                            <?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['arr_grp_ID'],'output' => $this->_tpl_vars['arr_grp_name'],'selected' => $this->_tpl_vars['usr_details']['usr_grp']), $this);?>

                        </select>
                  	</li>

				</ul>

                <input name="id" type="hidden" value="<?php echo $this->_tpl_vars['usr_details']['usr_ID']; ?>
" />
                <input name="axAction" type="hidden" value="sendEditUsr" />

                <div id="formbuttons">
                    <input class='btn_norm' type='button' value='<?php echo $this->_tpl_vars['kga']['lang']['cancel']; ?>
' onClick='floaterClose(); return false;' />
                    <input class='btn_ok' type='submit' value='<?php echo $this->_tpl_vars['kga']['lang']['submit']; ?>
' />
                </div>

            </fieldset>
        </form>
    </div>
</div>