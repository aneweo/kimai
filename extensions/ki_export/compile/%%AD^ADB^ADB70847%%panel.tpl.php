<?php /* Smarty version 2.6.20, created on 2012-06-27 16:53:50
         compiled from panel.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'panel.tpl', 34, false),)), $this); ?>
<?php echo '
    <script type="text/javascript"> 
        $(document).ready(function() {
            xp_ext_onload();
        }); 
    </script>
'; ?>

<div id="xp_panel">
	<div class="w">
		<div class="c">
			<div class="w">
				<div class="c">
					
					<div id="xp_ext_tab_filter">
						<select id="xp_ext_tab_filter_cleared" name="cleared" onChange="xp_ext_reload()">
						  <option value="-1" <?php if (! $this->_tpl_vars['kga']['conf']['hideClearedEntries']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['kga']['lang']['xp_ext']['cleared_all']; ?>
</option>
						  <option value="1"><?php echo $this->_tpl_vars['kga']['lang']['xp_ext']['cleared_cleared']; ?>
</option>
						  <option value="0" <?php if ($this->_tpl_vars['kga']['conf']['hideClearedEntries']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['kga']['lang']['xp_ext']['cleared_open']; ?>
</option>
						</select>
						<select id="xp_ext_tab_filter_refundable" name="refundable" onChange="xp_ext_reload()">
						  <option value="-1" selected="selected"><?php echo $this->_tpl_vars['kga']['lang']['xp_ext']['refundable_all']; ?>
</option>
						  <option value="0"><?php echo $this->_tpl_vars['kga']['lang']['xp_ext']['refundable_refundable']; ?>
</option>
						  <option value="1"><?php echo $this->_tpl_vars['kga']['lang']['xp_ext']['refundable_not_refundable']; ?>
</option>
						</select>
                        <select id="xp_ext_tab_filter_type" name="type" onChange="xp_ext_reload()">
                         <option value="-1" selected="selected"><?php echo $this->_tpl_vars['kga']['lang']['xp_ext']['times_and_expenses']; ?>
</option>
                         <option value="0"><?php echo $this->_tpl_vars['kga']['lang']['xp_ext']['times']; ?>
</option>
                         <option value="1"><?php echo $this->_tpl_vars['kga']['lang']['xp_ext']['expenses']; ?>
</option>
                       </select>
					</div>
					
					<div id="xp_ext_tab_timeformat">
						<span><?php echo $this->_tpl_vars['kga']['lang']['xp_ext']['timeformat']; ?>
:<a href="#" class="helpfloater"><?php echo $this->_tpl_vars['kga']['lang']['xp_ext']['export_timeformat_help']; ?>
</a></span>
						<input type="text" name="time_format" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['timeformat'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" id="xp_ext_timeformat" onChange="xp_ext_reload()">
						<span><?php echo $this->_tpl_vars['kga']['lang']['xp_ext']['dateformat']; ?>
:<a href="#" class="helpfloater"><?php echo $this->_tpl_vars['kga']['lang']['xp_ext']['export_timeformat_help']; ?>
</a></span>
						<input type="text" name="date_format" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['dateformat'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" id="xp_ext_dateformat" onChange="xp_ext_reload()">
					</div>
					
					<div id="xp_ext_tab_location">
						<span><?php echo $this->_tpl_vars['kga']['lang']['xp_ext']['stdrd_location']; ?>
</span>
						<input type="text" name="std_loc" value="" id="xp_ext_default_location" onChange="xp_ext_reload()">
					</div>
					
				</div>
			</div>
			<div class="l">&nbsp;</div><div class="r">&nbsp;</div>
		</div>
	</div>
	<div class="l">
		<div class="w">
			<div class="c">
				<a id="xp_ext_select_filter"     href="#" class="select_btn"><?php echo $this->_tpl_vars['kga']['lang']['xp_ext']['filter']; ?>
</a>
				<a id="xp_ext_select_location"   href="#" class="select_btn"><?php echo $this->_tpl_vars['kga']['lang']['xp_ext']['location']; ?>
</a>
				<a id="xp_ext_select_timeformat" href="#" class="select_btn"><?php echo $this->_tpl_vars['kga']['lang']['xp_ext']['timeformat']; ?>
</a>
			</div>
		</div>
		<div class="l">&nbsp;</div>
	</div>
	<div class="r">
		<div class="w">
			<div class="c">
				<a id="xp_ext_export_pdf" href="#" class="output_btn"><?php echo $this->_tpl_vars['kga']['lang']['xp_ext']['exportPDF']; ?>
</a>
				<a id="xp_ext_export_xls" href="#" class="output_btn"><?php echo $this->_tpl_vars['kga']['lang']['xp_ext']['exportXLS']; ?>
</a>
				<a id="xp_ext_export_csv" href="#" class="output_btn"><?php echo $this->_tpl_vars['kga']['lang']['xp_ext']['exportCSV']; ?>
</a>
				<a id="xp_ext_print"      href="#" class="output_btn"><?php echo $this->_tpl_vars['kga']['lang']['xp_ext']['print']; ?>
</a>
			</div>
		</div>
		<div class="l">&nbsp;</div><div class="r">&nbsp;</div>
	</div>
</div>





