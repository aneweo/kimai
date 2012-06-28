<?php /* Smarty version 2.6.20, created on 2012-06-27 16:53:49
         compiled from exp.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'exp.tpl', 1, false),array('modifier', 'date_format', 'exp.tpl', 28, false),array('modifier', 'escape', 'exp.tpl', 43, false),array('modifier', 'number_format', 'exp.tpl', 100, false),array('modifier', 'nl2br', 'exp.tpl', 177, false),)), $this); ?>
<?php echo smarty_function_cycle(array('values' => "odd,even",'reset' => true,'print' => false), $this);?>

<?php if ($this->_tpl_vars['arr_exp']): ?>
        <div id="exptable">
        
          <table>
              
            <colgroup>
              <col class="option" />
              <col class="date" />
              <col class="time" />
              <col class="value" />
              <col class="refundable" />
              <col class="client" />
              <col class="project" />
              <col class="designation" />
            </colgroup>

            <tbody>
                
<?php $this->assign('day_buffer', '0'); ?>

<?php unset($this->_sections['row']);
$this->_sections['row']['name'] = 'row';
$this->_sections['row']['loop'] = is_array($_loop=$this->_tpl_vars['arr_exp']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['row']['show'] = true;
$this->_sections['row']['max'] = $this->_sections['row']['loop'];
$this->_sections['row']['step'] = 1;
$this->_sections['row']['start'] = $this->_sections['row']['step'] > 0 ? 0 : $this->_sections['row']['loop']-1;
if ($this->_sections['row']['show']) {
    $this->_sections['row']['total'] = $this->_sections['row']['loop'];
    if ($this->_sections['row']['total'] == 0)
        $this->_sections['row']['show'] = false;
} else
    $this->_sections['row']['total'] = 0;
if ($this->_sections['row']['show']):

            for ($this->_sections['row']['index'] = $this->_sections['row']['start'], $this->_sections['row']['iteration'] = 1;
                 $this->_sections['row']['iteration'] <= $this->_sections['row']['total'];
                 $this->_sections['row']['index'] += $this->_sections['row']['step'], $this->_sections['row']['iteration']++):
$this->_sections['row']['rownum'] = $this->_sections['row']['iteration'];
$this->_sections['row']['index_prev'] = $this->_sections['row']['index'] - $this->_sections['row']['step'];
$this->_sections['row']['index_next'] = $this->_sections['row']['index'] + $this->_sections['row']['step'];
$this->_sections['row']['first']      = ($this->_sections['row']['iteration'] == 1);
$this->_sections['row']['last']       = ($this->_sections['row']['iteration'] == $this->_sections['row']['total']);
?>

                <tr id="expEntry<?php echo $this->_tpl_vars['arr_exp'][$this->_sections['row']['index']]['exp_ID']; ?>
" class="<?php echo smarty_function_cycle(array('values' => "odd,even"), $this);?>
">
               
                    <td nowrap class="option
                                            <?php if (((is_array($_tmp=$this->_tpl_vars['arr_exp'][$this->_sections['row']['index']]['exp_timestamp'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d") : smarty_modifier_date_format($_tmp, "%d")) != $this->_tpl_vars['day_buffer']): ?>
                                                <?php if ($this->_tpl_vars['kga']['show_daySeperatorLines']): ?>break_day<?php endif; ?>
                                            <?php else: ?>
                                                <?php if ($this->_tpl_vars['arr_exp'][$this->_sections['row']['index']]['zef_out'] != $this->_tpl_vars['exp_timestamp_buffer']): ?>
                                                    <?php if ($this->_tpl_vars['kga']['show_gabBreaks']): ?>break_gap<?php endif; ?>
                                                <?php endif; ?>
                                            <?php endif; ?>
                    ">

<?php if ($this->_tpl_vars['kga']['usr']): ?>

                        
                        <?php echo '<a href =\'#\' onClick="exp_editRecord('; ?><?php echo $this->_tpl_vars['arr_exp'][$this->_sections['row']['index']]['exp_ID']; ?><?php echo '); $(this).blur(); return false;" title=\''; ?><?php echo $this->_tpl_vars['kga']['lang']['edit']; ?><?php echo '\'><img src=\'../skins/'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['kga']['conf']['skin'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?><?php echo '/grfx/edit2.gif\' width=\'13\' height=\'13\' alt=\''; ?><?php echo $this->_tpl_vars['kga']['lang']['edit']; ?><?php echo '\' title=\''; ?><?php echo $this->_tpl_vars['kga']['lang']['edit']; ?><?php echo '\' border=\'0\' /></a>'; ?>

                        

        <?php if ($this->_tpl_vars['kga']['conf']['quickdelete'] > 0): ?>
                        <?php echo '<a href =\'#\' class=\'quickdelete\' onClick="exp_quickdelete('; ?><?php echo $this->_tpl_vars['arr_exp'][$this->_sections['row']['index']]['exp_ID']; ?><?php echo '); return false;"><img src=\'../skins/'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['kga']['conf']['skin'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?><?php echo '/grfx/button_trashcan.png\' width=\'13\' height=\'13\' alt=\''; ?><?php echo $this->_tpl_vars['kga']['lang']['quickdelete']; ?><?php echo '\' title=\''; ?><?php echo $this->_tpl_vars['kga']['lang']['quickdelete']; ?><?php echo '\' border=0 /></a>'; ?>

    <?php endif; ?>


<?php endif; ?>

                    
                    </td>                   


                    <td class="date
                                            <?php if (((is_array($_tmp=$this->_tpl_vars['arr_exp'][$this->_sections['row']['index']]['exp_timestamp'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d") : smarty_modifier_date_format($_tmp, "%d")) != $this->_tpl_vars['day_buffer']): ?>
                                                <?php if ($this->_tpl_vars['kga']['show_daySeperatorLines']): ?>break_day<?php endif; ?>
                                            <?php else: ?>
                                                <?php if ($this->_tpl_vars['arr_exp'][$this->_sections['row']['index']]['zef_out'] != $this->_tpl_vars['exp_timestamp_buffer']): ?>
                                                    <?php if ($this->_tpl_vars['kga']['show_gabBreaks']): ?>break_gap<?php endif; ?>
                                                <?php endif; ?>
                                            <?php endif; ?>
                    ">
                        <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arr_exp'][$this->_sections['row']['index']]['exp_timestamp'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['kga']['date_format']['1']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['kga']['date_format']['1'])))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>

                    </td>


                    <td class="time
                                            <?php if (((is_array($_tmp=$this->_tpl_vars['arr_exp'][$this->_sections['row']['index']]['exp_timestamp'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d") : smarty_modifier_date_format($_tmp, "%d")) != $this->_tpl_vars['day_buffer']): ?>
                                                <?php if ($this->_tpl_vars['kga']['show_daySeperatorLines']): ?>break_day<?php endif; ?>
                                            <?php else: ?>
                                                <?php if ($this->_tpl_vars['arr_exp'][$this->_sections['row']['index']]['zef_out'] != $this->_tpl_vars['exp_timestamp_buffer']): ?>
                                                    <?php if ($this->_tpl_vars['kga']['show_gabBreaks']): ?>break_gap<?php endif; ?>
                                                <?php endif; ?>
                                            <?php endif; ?>
                    ">
                        <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arr_exp'][$this->_sections['row']['index']]['exp_timestamp'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['kga']['date_format']['2']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['kga']['date_format']['2'])))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>

                    </td>


                    <td class="value
                                            <?php if (((is_array($_tmp=$this->_tpl_vars['arr_exp'][$this->_sections['row']['index']]['exp_timestamp'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d") : smarty_modifier_date_format($_tmp, "%d")) != $this->_tpl_vars['day_buffer']): ?>
                                                <?php if ($this->_tpl_vars['kga']['show_daySeperatorLines']): ?>break_day<?php endif; ?>
                                            <?php else: ?>
                                                <?php if ($this->_tpl_vars['arr_exp'][$this->_sections['row']['index']]['zef_out'] != $this->_tpl_vars['exp_timestamp_buffer']): ?>
                                                    <?php if ($this->_tpl_vars['kga']['show_gabBreaks']): ?>break_gap<?php endif; ?>
                                                <?php endif; ?>
                                            <?php endif; ?>
                    ">
                        <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arr_exp'][$this->_sections['row']['index']]['exp_value']*$this->_tpl_vars['arr_exp'][$this->_sections['row']['index']]['exp_multiplier'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, $this->_tpl_vars['kga']['conf']['decimalSeparator'], "") : number_format($_tmp, 2, $this->_tpl_vars['kga']['conf']['decimalSeparator'], "")))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>

                    </td>
                    


                    <td class="refundable
                                            <?php if (((is_array($_tmp=$this->_tpl_vars['arr_exp'][$this->_sections['row']['index']]['exp_timestamp'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d") : smarty_modifier_date_format($_tmp, "%d")) != $this->_tpl_vars['day_buffer']): ?>
                                                <?php if ($this->_tpl_vars['kga']['show_daySeperatorLines']): ?>break_day<?php endif; ?>
                                            <?php else: ?>
                                                <?php if ($this->_tpl_vars['arr_exp'][$this->_sections['row']['index']]['zef_out'] != $this->_tpl_vars['exp_timestamp_buffer']): ?>
                                                    <?php if ($this->_tpl_vars['kga']['show_gabBreaks']): ?>break_gap<?php endif; ?>
                                                <?php endif; ?>
                                            <?php endif; ?>
                    ">
                            <?php if ($this->_tpl_vars['arr_exp'][$this->_sections['row']['index']]['exp_refundable']): ?> <?php echo $this->_tpl_vars['kga']['lang']['yes']; ?>
 <?php else: ?> <?php echo $this->_tpl_vars['kga']['lang']['no']; ?>
 <?php endif; ?>
                    </td>



                    <td class="knd
                                            <?php if (((is_array($_tmp=$this->_tpl_vars['arr_exp'][$this->_sections['row']['index']]['exp_timestamp'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d") : smarty_modifier_date_format($_tmp, "%d")) != $this->_tpl_vars['day_buffer']): ?>
                                                <?php if ($this->_tpl_vars['kga']['show_daySeperatorLines']): ?>break_day<?php endif; ?>
                                            <?php else: ?>
                                                <?php if ($this->_tpl_vars['arr_exp'][$this->_sections['row']['index']]['zef_out'] != $this->_tpl_vars['exp_timestamp_buffer']): ?>
                                                    <?php if ($this->_tpl_vars['kga']['show_gabBreaks']): ?>break_gap<?php endif; ?>
                                                <?php endif; ?>
                                            <?php endif; ?>
                    ">
                        <?php echo ((is_array($_tmp=$this->_tpl_vars['arr_exp'][$this->_sections['row']['index']]['knd_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>

                    </td>


                    <td class="pct
                                            <?php if (((is_array($_tmp=$this->_tpl_vars['arr_exp'][$this->_sections['row']['index']]['exp_timestamp'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d") : smarty_modifier_date_format($_tmp, "%d")) != $this->_tpl_vars['day_buffer']): ?>
                                                <?php if ($this->_tpl_vars['kga']['show_daySeperatorLines']): ?>break_day<?php endif; ?>
                                            <?php else: ?>
                                                <?php if ($this->_tpl_vars['arr_exp'][$this->_sections['row']['index']]['zef_out'] != $this->_tpl_vars['exp_timestamp_buffer']): ?>
                                                    <?php if ($this->_tpl_vars['kga']['show_gabBreaks']): ?>break_gap<?php endif; ?>
                                                <?php endif; ?>
                                            <?php endif; ?>
                    ">
                            <?php echo ((is_array($_tmp=$this->_tpl_vars['arr_exp'][$this->_sections['row']['index']]['pct_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>

                    </td>



                    <td class="designation
                                            <?php if (((is_array($_tmp=$this->_tpl_vars['arr_exp'][$this->_sections['row']['index']]['exp_timestamp'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d") : smarty_modifier_date_format($_tmp, "%d")) != $this->_tpl_vars['day_buffer']): ?>
                                                <?php if ($this->_tpl_vars['kga']['show_daySeperatorLines']): ?>break_day<?php endif; ?>
                                            <?php else: ?>
                                                <?php if ($this->_tpl_vars['arr_exp'][$this->_sections['row']['index']]['zef_out'] != $this->_tpl_vars['exp_timestamp_buffer']): ?>
                                                    <?php if ($this->_tpl_vars['kga']['show_gabBreaks']): ?>break_gap<?php endif; ?>
                                                <?php endif; ?>
                                            <?php endif; ?>
                    ">
                            <?php echo ((is_array($_tmp=$this->_tpl_vars['arr_exp'][$this->_sections['row']['index']]['exp_designation'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>

                        
<?php if ($this->_tpl_vars['arr_exp'][$this->_sections['row']['index']]['exp_comment']): ?>
    <?php if ($this->_tpl_vars['arr_exp'][$this->_sections['row']['index']]['exp_comment_type'] == '0'): ?>
                        <a href="#" onClick="exp_comment(<?php echo $this->_tpl_vars['arr_exp'][$this->_sections['row']['index']]['exp_ID']; ?>
); $(this).blur(); return false;"><img src='../skins/<?php echo ((is_array($_tmp=$this->_tpl_vars['kga']['conf']['skin'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/grfx/blase.gif' width="12" height="13" title='<?php echo ((is_array($_tmp=$this->_tpl_vars['arr_exp'][$this->_sections['row']['index']]['exp_comment'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
' border="0" /></a>
    <?php endif; ?>
    <?php if ($this->_tpl_vars['arr_exp'][$this->_sections['row']['index']]['exp_comment_type'] == '1'): ?>
                        <a href="#" onClick="exp_comment(<?php echo $this->_tpl_vars['arr_exp'][$this->_sections['row']['index']]['exp_ID']; ?>
); $(this).blur(); return false;"><img src='../skins/<?php echo ((is_array($_tmp=$this->_tpl_vars['kga']['conf']['skin'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/grfx/blase_sys.gif' width="12" height="13" title='<?php echo ((is_array($_tmp=$this->_tpl_vars['arr_exp'][$this->_sections['row']['index']]['exp_comment'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
' border="0" /></a>
    <?php endif; ?>
    <?php if ($this->_tpl_vars['arr_exp'][$this->_sections['row']['index']]['exp_comment_type'] == '2'): ?>
                        <a href="#" onClick="exp_comment(<?php echo $this->_tpl_vars['arr_exp'][$this->_sections['row']['index']]['exp_ID']; ?>
); $(this).blur(); return false;"><img src='../skins/<?php echo ((is_array($_tmp=$this->_tpl_vars['kga']['conf']['skin'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/grfx/blase_caution.gif' width="12" height="13" title='<?php echo ((is_array($_tmp=$this->_tpl_vars['arr_exp'][$this->_sections['row']['index']]['exp_comment'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
' border="0" /></a>
    <?php endif; ?>
<?php endif; ?>
                    </td>
                    
                </tr>
                
                <tr id="exp_c<?php echo $this->_tpl_vars['arr_exp'][$this->_sections['row']['index']]['exp_ID']; ?>
" class="comm<?php echo $this->_tpl_vars['arr_exp'][$this->_sections['row']['index']]['exp_comment_type']; ?>
" style="display:none;">
                    <td colspan="8"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arr_exp'][$this->_sections['row']['index']]['exp_comment'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</td>
                </tr>

<?php $this->assign('day_buffer', ((is_array($_tmp=$this->_tpl_vars['arr_exp'][$this->_sections['row']['index']]['exp_timestamp'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d") : smarty_modifier_date_format($_tmp, "%d"))); ?>
               
<?php endfor; endif; ?>
                
            </tbody>   
        </table>
    </div>  
<?php else: ?>
<div style='padding:5px;color:#f00'>
    <strong><?php echo $this->_tpl_vars['kga']['lang']['noEntries']; ?>
</strong>
</div>
<?php endif; ?>

<script type="text/javascript"> 
    exp_usr_ann = null;
    exp_knd_ann = null;
    exp_pct_ann = null;
    exp_evt_ann = null;
    exp_total = '<?php echo $this->_tpl_vars['total']; ?>
';

    <?php if ($this->_tpl_vars['usr_ann']): ?>
    exp_usr_ann = new Array();
    <?php $_from = $this->_tpl_vars['usr_ann']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['id'] => $this->_tpl_vars['value']):
?>
      exp_usr_ann[<?php echo $this->_tpl_vars['id']; ?>
] = '<?php echo $this->_tpl_vars['value']; ?>
';
    <?php endforeach; endif; unset($_from); ?>
    <?php endif; ?>

    <?php if ($this->_tpl_vars['knd_ann']): ?>
    exp_knd_ann = new Array();
    <?php $_from = $this->_tpl_vars['knd_ann']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['id'] => $this->_tpl_vars['value']):
?>
      exp_knd_ann[<?php echo $this->_tpl_vars['id']; ?>
] = '<?php echo $this->_tpl_vars['value']; ?>
';
    <?php endforeach; endif; unset($_from); ?>
    <?php endif; ?>

    <?php if ($this->_tpl_vars['pct_ann']): ?>
    exp_pct_ann = new Array();
    <?php $_from = $this->_tpl_vars['pct_ann']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['id'] => $this->_tpl_vars['value']):
?>
      exp_pct_ann[<?php echo $this->_tpl_vars['id']; ?>
] = '<?php echo $this->_tpl_vars['value']; ?>
';
    <?php endforeach; endif; unset($_from); ?>
    <?php endif; ?>

    <?php if ($this->_tpl_vars['evt_ann']): ?>
    exp_evt_ann = new Array();
    <?php $_from = $this->_tpl_vars['evt_ann']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['id'] => $this->_tpl_vars['value']):
?>
      exp_evt_ann[<?php echo $this->_tpl_vars['id']; ?>
] = '<?php echo $this->_tpl_vars['value']; ?>
';
    <?php endforeach; endif; unset($_from); ?>
    <?php endif; ?>
    
    <?php echo '
    lists_update_annotations(parseInt($(\'#gui div.ki_expenses\').attr(\'id\').substring(7)),exp_usr_ann,exp_knd_ann,exp_pct_ann,exp_evt_ann);
    $(\'#display_total\').html(exp_total);
    '; ?>

    
</script>