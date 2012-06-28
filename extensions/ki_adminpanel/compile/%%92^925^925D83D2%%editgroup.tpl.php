<?php /* Smarty version 2.6.20, created on 2012-06-27 16:58:13
         compiled from editgroup.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'editgroup.tpl', 28, false),array('function', 'html_options', 'editgroup.tpl', 34, false),)), $this); ?>
<?php echo '    
    <script type="text/javascript"> 
        $(document).ready(function() {
            $(\'#ap_ext_form_editgrp\').ajaxForm(function() { 
                floaterClose();
                ap_ext_refreshSubtab(\'grp\');
                ap_ext_refreshSubtab(\'usr\');
            }); 
        }); 
    </script>
'; ?>


<div id="floater_innerwrap">
    
    <div id="floater_handle">
        <span id="floater_title"><?php echo $this->_tpl_vars['kga']['lang']['editgrp']; ?>
</span>
        <div class="right">
            <a href="#" class="close" onClick="floaterClose();"><?php echo $this->_tpl_vars['kga']['lang']['close']; ?>
</a>
        </div>       
    </div>

    <div class="floater_content">
        <form id="ap_ext_form_editgrp" action="../extensions/ki_adminpanel/processor.php" method="post"> 
            <fieldset>
                <ul>
                    <li>
                        <label for="grp_name"><?php echo $this->_tpl_vars['kga']['lang']['groupname']; ?>
:</label>
                        <input class="formfield" type="text" name="grp_name" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['grp_details']['grp_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" size=35 />
                    </li>

                    <li>
                        <label for="grp_leader" ><?php echo $this->_tpl_vars['kga']['lang']['groupleader']; ?>
:</label>
                        <select class="formfield" name="grp_leader[]" multiple size='5' style="width:255px">
                            <?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['arr_usr_ID'],'output' => $this->_tpl_vars['arr_usr_name'],'selected' => $this->_tpl_vars['grp_selection']), $this);?>

                        </select>
                    </li>
                                                
                </ul>
                <input name="id" type="hidden" value="<?php echo $this->_tpl_vars['grp_details']['grp_ID']; ?>
" />
                <input name="axAction" type="hidden" value="sendEditGrp" />
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