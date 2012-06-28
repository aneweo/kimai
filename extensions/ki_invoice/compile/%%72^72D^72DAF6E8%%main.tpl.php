<?php /* Smarty version 2.6.20, created on 2012-06-27 16:53:52
         compiled from main.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'main.tpl', 25, false),array('modifier', 'replace', 'main.tpl', 41, false),array('modifier', 'escape', 'main.tpl', 41, false),)), $this); ?>
<?php echo '    
    <script type="text/javascript"> 
        $(document).ready(function() {
            iv_ext_onload();
            $(\'#editVatLink\').click(function () {
              this.blur();
              floaterShow(iv_ext_path + "floaters.php","editVat",0,0,250,100);
            });
        }); 
    </script>
'; ?>


<div id="iv_ext_header">
     <strong><?php echo $this->_tpl_vars['kga']['lang']['ext_invoice']['invoiceTitle']; ?>
</strong> 
</div>

<div id="iv_ext_wrap">
    <div id ="iv_ext">
    	
	<form id="iv_ext_form" method="post" action="../extensions/ki_invoice/print.php" target="_blank">
		<div id="iv_ext_advanced">
			<div id="iv_ext_form">
			<?php echo $this->_tpl_vars['kga']['lang']['ext_invoice']['invoiceProject']; ?>
 
			<select id="iv_pct_ID" name="pct_ID" class="formfield">
			  <?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['sel_pct_IDs'],'output' => $this->_tpl_vars['sel_pct_names'],'selected' => $this->_tpl_vars['pres_pct']), $this);?>

			</select>
			</div>
			<div id="iv_timespan">
				<?php echo $this->_tpl_vars['timespan_display']; ?>

			</div>
			
<!--Work in Progress: Select box for form type-->
			Invoice Form:
			<select id="iv_form_docs" name="ivform_file" class="formfield">
			 <?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['sel_form_files'],'output' => $this->_tpl_vars['sel_form_files'],'selected' => $this->_tpl_vars['pres_form']), $this);?>

			</select><br/><br/>


<!-- Some boxes below are checked by default. Delete "checked" to set default to unchecked condition -->

   		<?php echo $this->_tpl_vars['kga']['lang']['ext_invoice']['defaultVat']; ?>
: <span id="defaultVat"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['kga']['conf']['defaultVat'])) ? $this->_run_mod_handler('replace', true, $_tmp, '.', $this->_tpl_vars['kga']['conf']['decimalSeparator']) : smarty_modifier_replace($_tmp, '.', $this->_tpl_vars['kga']['conf']['decimalSeparator'])))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</span> % <a id="editVatLink" href="#">(<?php echo $this->_tpl_vars['kga']['lang']['change']; ?>
)</a> <br/>
		<input type=checkbox name="short" checked> <?php echo $this->_tpl_vars['kga']['lang']['ext_invoice']['invoiceOptionShort']; ?>
<br/>
    		<input type=checkbox name="round" checked> <?php echo $this->_tpl_vars['kga']['lang']['ext_invoice']['invoiceOptionRound']; ?>

    		<select id="iv_round_ID" name="pct_round" class="formfield">
			  <?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['sel_round_IDs'],'output' => $this->_tpl_vars['sel_round_names'],'selected' => $this->_tpl_vars['pres_round']), $this);?>

			</select>
     
	    	<div id="iv_button">	
				<input type="submit" class="btn_ok" value=<?php echo $this->_tpl_vars['kga']['lang']['ext_invoice']['invoiceButton']; ?>
>
	    	</div>
		</div>
	</form>

    </div>
</div>