<?php /* Smarty version 2.6.20, created on 2012-06-28 12:30:48
         compiled from export_XLS.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'export_XLS.tpl', 49, false),)), $this); ?>
<?php echo '    
    <script type="text/javascript"> 
        
        $(document).ready(function() {
            $(\'#help\').hide();
            $(\'#floater input#timeformat\').attr(\'value\',$(\'#xp_ext_timeformat\').attr(\'value\'));
            $(\'#floater input#dateformat\').attr(\'value\',$(\'#xp_ext_dateformat\').attr(\'value\'));
            $(\'#floater input#default_location\').attr(\'value\',$(\'#default_location\').attr(\'value\'));
            $(\'#floater input#axValue\').attr(\'value\',filterUsr.join(":")+\'|\'+filterKnd.join(":")+\'|\'+filterPct.join(":")+\'|\'+filterEvt.join(":"));
            $(\'#floater input#filter_cleared\').attr(\'value\',$(\'#xp_ext_tab_filter_cleared\').attr(\'value\'));
            $(\'#floater input#filter_refundable\').attr(\'value\',$(\'#xp_ext_tab_filter_refundable\').attr(\'value\'));
            $(\'#floater input#filter_type\').attr(\'value\',$(\'#xp_ext_tab_filter_type\').attr(\'value\'));
            $(\'#floater input#axColumns\').attr(\'value\',xp_enabled_columns());
            $(\'.floater_content fieldset label\').css(\'width\',\'200px\');
            
            $(\'#floater input#first_day\').attr(\'value\',new Date($(\'#pick_in\').val()).getTime()/1000);
            $(\'#floater input#last_day\').attr(\'value\',new Date($(\'#pick_out\').val()).getTime()/1000);

        }); 
        
    </script>
'; ?>



<div id="floater_innerwrap">

    <div id="floater_handle">
        <span id="floater_title"><?php echo $this->_tpl_vars['kga']['lang']['xp_ext']['exportXLS']; ?>
</span>
        <div class="right">
            <a href="#" class="close" onClick="floaterClose();"><?php echo $this->_tpl_vars['kga']['lang']['close']; ?>
</a>
        </div>  
    </div>

    <div id="help">
        <div class="content">
        </div>
    </div>


    <div class="floater_content">

        <form id="xp_ext_form_export_XLS" action="../extensions/ki_export/processor.php" method="post"> 
            <fieldset>
                   
				<ul>
                
                   <li>
                       <label for="decimal_separator"><?php echo $this->_tpl_vars['kga']['lang']['decimal_separator']; ?>
:</label>
                       <input type="text" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['kga']['conf']['decimalSeparator'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" name="decimal_separator" id="decimal-separator" size="1"/>
                   </li>
                
                   <li>
                       <label for="reverse_order"><?php echo $this->_tpl_vars['kga']['lang']['xp_ext']['reverse_order']; ?>
:</label>
                       <input type="checkbox" value="true" name="reverse_order" id="reverse_order" <?php if ($this->_tpl_vars['prefs']['reverse_order']): ?>checked="checked"<?php endif; ?>/>
                   </li>

			        <li>
				 		<?php echo $this->_tpl_vars['kga']['lang']['xp_ext']['dl_hint']; ?>

					</li>
				</ul>

 

                <input name="axAction" type="hidden" value="export_xls" />
                <input name="axValue" id="axValue" type="hidden" value="" />
                <input name="first_day" id="first_day" type="hidden" value="" />
                <input name="last_day" id="last_day" type="hidden" value="" />
                <input name="axColumns"  id="axColumns" type="hidden" value=""/>
                <input name="timeformat" id="timeformat" type="hidden" value=""/>
                <input name="dateformat" id="dateformat" type="hidden" value=""/>
                <input name="default_location" id="default_location" type="hidden" value=""/>
                <input name="filter_cleared" id="filter_cleared" type="hidden" value=""/>
                <input name="filter_refundable" id="filter_refundable" type="hidden" value=""/>
                <input name="filter_type" id="filter_type" type="hidden" value=""/>

                <div id="formbuttons">
                    <input class='btn_norm' type='button' value='<?php echo $this->_tpl_vars['kga']['lang']['cancel']; ?>
' onClick='floaterClose(); return false;' />
                    <input class='btn_ok' type='submit' value='<?php echo $this->_tpl_vars['kga']['lang']['submit']; ?>
' onClick="floaterClose();"/>
                </div>

 

            </fieldset>
        </form>

    </div>
</div>