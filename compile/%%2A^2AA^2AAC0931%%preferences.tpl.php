<?php /* Smarty version 2.6.20, created on 2012-06-27 16:46:08
         compiled from preferences.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'preferences.tpl', 42, false),array('modifier', 'replace', 'preferences.tpl', 58, false),)), $this); ?>
<?php echo '    
    <script type="text/javascript"> 
        $(document).ready(function() {


	 var options = { 
		beforeSubmit:  function() { 

                	if ( ($(\'#password\').val() != "" || $(\'#retypePassword\').val() != "")
			      && !validatePassword($(\'#password\').val(),$(\'#retypePassword\').val()))
                	    return false;
                
                	window.location.reload();
            	}
	    }; 
	 
	    $(\'#core_prefs\').ajaxForm(options); 

        }); 
    </script>
'; ?>


<div id="floater_innerwrap">
    
    <div id="floater_handle">
        <span id="floater_title"><?php echo $this->_tpl_vars['kga']['lang']['preferences']; ?>
</span>
        <div class="right">
            <a href="#" class="close" onClick="floaterClose();"><?php echo $this->_tpl_vars['kga']['lang']['close']; ?>
</a>
        </div>       
    </div>
    
    <div class="floater_content">

        <form id="core_prefs" action="processor.php" method="post"> 
            <fieldset>

                <ul>
                
                    <li>
                        <label for="skin"><?php echo $this->_tpl_vars['kga']['lang']['skin']; ?>
:</label>
                        <select name="skin">
                            <?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['skins'],'output' => $this->_tpl_vars['skins'],'selected' => $this->_tpl_vars['kga']['conf']['skin']), $this);?>

                        </select>
                    </li>

                    <li>
                        <label for="pw"><?php echo $this->_tpl_vars['kga']['lang']['newPassword']; ?>
:</label>
                        <input type="password" name="pw" size="9" id="password" /> <?php echo $this->_tpl_vars['kga']['lang']['minLength']; ?>

                    </li>

                    <li>
                        <label for="pw"><?php echo $this->_tpl_vars['kga']['lang']['retypePassword']; ?>
:</label>
                        <input type="password" name="retypePassword" size="9" id="retypePassword" />
                    </li>

                    <li>
                        <label for="rate"><?php echo $this->_tpl_vars['kga']['lang']['my_rate']; ?>
:</label>
                        <input type="text" name="rate" size="9" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['rate'])) ? $this->_run_mod_handler('replace', true, $_tmp, '.', $this->_tpl_vars['kga']['conf']['decimalSeparator']) : smarty_modifier_replace($_tmp, '.', $this->_tpl_vars['kga']['conf']['decimalSeparator'])); ?>
"/>
                    </li>

                    <li>
                        <label for="rowlimit"><?php echo $this->_tpl_vars['kga']['lang']['rowlimit']; ?>
:</label>
                        <input type="text" name="rowlimit" value="<?php echo $this->_tpl_vars['kga']['conf']['rowlimit']; ?>
" size="9" />
                    </li>

                    <li>
                        <label for="lang"><?php echo $this->_tpl_vars['kga']['lang']['lang']; ?>
:</label>
                        <select name="lang">
                            <?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['langs'],'output' => $this->_tpl_vars['langs'],'selected' => $this->_tpl_vars['kga']['conf']['lang']), $this);?>

                        </select>
                    </li>

                    <li>
                        <label for="timezone"><?php echo $this->_tpl_vars['kga']['lang']['timezone']; ?>
:</label>
                        <select name="timezone">
                            <?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['timezones'],'output' => $this->_tpl_vars['timezones'],'selected' => $this->_tpl_vars['kga']['conf']['timezone']), $this);?>

                        </select>
                    </li>

                    <li>
                        <?php echo $this->_tpl_vars['kga']['lang']['sublistAnnotations']; ?>
:
                        <select name="sublistAnnotations">
                            <option value="0" <?php if ($this->_tpl_vars['kga']['conf']['sublistAnnotations'] == 0): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['kga']['lang']['timelabel']; ?>
</option>
                            <option value="1" <?php if ($this->_tpl_vars['kga']['conf']['sublistAnnotations'] == 1): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['kga']['lang']['xp_ext']['costs']; ?>
</option>
                            <option value="2" <?php if ($this->_tpl_vars['kga']['conf']['sublistAnnotations'] == 2): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['kga']['lang']['timelabel']; ?>
 &amp; <?php echo $this->_tpl_vars['kga']['lang']['xp_ext']['costs']; ?>
</option>
                        </select>
                    </li>

                    <li>
                        <label for="autoselection"></label>
                        <input type="checkbox" name="autoselection" value="1" <?php if ($this->_tpl_vars['kga']['conf']['autoselection']): ?>checked<?php endif; ?> /> <?php echo $this->_tpl_vars['kga']['lang']['autoselection']; ?>

                    </li>

                    <li>
                        <?php echo $this->_tpl_vars['kga']['lang']['quickdelete']; ?>
:
                        <select name="quickdelete">
                            <option value="0" <?php if ($this->_tpl_vars['kga']['conf']['quickdelete'] == 0): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['kga']['lang']['quickdeleteHide']; ?>
</option>
                            <option value="1" <?php if ($this->_tpl_vars['kga']['conf']['quickdelete'] == 1): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['kga']['lang']['quickdeleteShow']; ?>
</option>
                            <option value="2" <?php if ($this->_tpl_vars['kga']['conf']['quickdelete'] == 2): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['kga']['lang']['quickdeleteShowConfirm']; ?>
</option>
                        </select>
                    </li>

                    <li>
                        <label for="flip_pct_display"></label>
                        <input type="checkbox" name="flip_pct_display" value="1" <?php if ($this->_tpl_vars['kga']['conf']['flip_pct_display']): ?>checked<?php endif; ?> /> <?php echo $this->_tpl_vars['kga']['lang']['flip_pct_display']; ?>

                    </li>
                    <li>
                        <label for="pct_comment_flag"></label>
                        <input type="checkbox" name="pct_comment_flag" value="1" <?php if ($this->_tpl_vars['kga']['conf']['pct_comment_flag']): ?>checked<?php endif; ?> /> <?php echo $this->_tpl_vars['kga']['lang']['pct_comment_flag']; ?>

                    </li>
                    <li>
                        <label for="showIDs"></label>
                        <input type="checkbox" name="showIDs" value="1" <?php if ($this->_tpl_vars['kga']['conf']['showIDs']): ?>checked<?php endif; ?> /> <?php echo $this->_tpl_vars['kga']['lang']['showIDs']; ?>

                    </li>
                    <li>
                        <label for="noFading"></label>
                        <input type="checkbox" name="noFading" value="1" <?php if ($this->_tpl_vars['kga']['conf']['noFading']): ?>checked<?php endif; ?> /> <?php echo $this->_tpl_vars['kga']['lang']['noFading']; ?>

                    </li>
                    <li>
                        <label for="user_list_hidden"></label>
                        <input type="checkbox" name="user_list_hidden" value="1" <?php if ($this->_tpl_vars['kga']['conf']['user_list_hidden']): ?>checked<?php endif; ?> /> <?php echo $this->_tpl_vars['kga']['lang']['user_list_hidden']; ?>

                    </li>
                    <li>
                        <label for="hideClearedEntries"></label>
                        <input type="checkbox" name="hideClearedEntries" value="1" <?php if ($this->_tpl_vars['kga']['conf']['hideClearedEntries']): ?>checked<?php endif; ?> /> <?php echo $this->_tpl_vars['kga']['lang']['hideClearedEntries']; ?>

                    </li>
                    
                </ul>
                
                <input name="axAction" type="hidden" value="editPrefs" />   
                <input name="id" type="hidden" value="0" />   
                             
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