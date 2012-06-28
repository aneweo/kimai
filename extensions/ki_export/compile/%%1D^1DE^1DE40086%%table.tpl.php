<?php /* Smarty version 2.6.20, created on 2012-06-27 16:53:50
         compiled from table.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'table.tpl', 1, false),array('modifier', 'date_format', 'table.tpl', 52, false),array('modifier', 'escape', 'table.tpl', 61, false),array('modifier', 'replace', 'table.tpl', 136, false),array('modifier', 'nl2br', 'table.tpl', 254, false),)), $this); ?>
<?php echo smarty_function_cycle(array('values' => "odd,even",'reset' => true,'print' => false), $this);?>

<?php if ($this->_tpl_vars['arr_data']): ?>
        <div id="xptable">
        
          <table>
              
            <colgroup>
              <col class="date" />
              <col class="from" />
              <col class="to" />
              <col class="time" />
              <col class="dec_time" />
              <col class="rate" />
              <col class="wage" />
              <col class="client" />
              <col class="project" />
              <col class="action" />
              <col class="comment" />
              <col class="location" />
              <col class="trackingnr" />
              <col class="user" />
              <col class="cleared" />
            </colgroup>

            <tbody>

<?php $this->assign('day_buffer', '0'); ?>
<?php $this->assign('time_in_buffer', 0); ?>
                
<?php unset($this->_sections['row']);
$this->_sections['row']['name'] = 'row';
$this->_sections['row']['loop'] = is_array($_loop=$this->_tpl_vars['arr_data']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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

<tr id="xp<?php echo $this->_tpl_vars['arr_data'][$this->_sections['row']['index']]['type']; ?>
<?php echo $this->_tpl_vars['arr_data'][$this->_sections['row']['index']]['id']; ?>
" class="<?php echo smarty_function_cycle(array('values' => "odd,even"), $this);?>
 <?php if (! $this->_tpl_vars['arr_data'][$this->_sections['row']['index']]['time_out']): ?>active<?php endif; ?>
 <?php if ($this->_tpl_vars['arr_data'][$this->_sections['row']['index']]['type'] == 'exp'): ?>expense<?php endif; ?>">
               












                   


                    <td class="date
                        <?php if (((is_array($_tmp=$this->_tpl_vars['arr_data'][$this->_sections['row']['index']]['time_in'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d") : smarty_modifier_date_format($_tmp, "%d")) != $this->_tpl_vars['day_buffer']): ?>
                            <?php if ($this->_tpl_vars['kga']['show_daySeperatorLines']): ?>break_day<?php endif; ?>
                        <?php else: ?>
                            <?php if ($this->_tpl_vars['arr_data'][$this->_sections['row']['index']]['time_out'] != $this->_tpl_vars['time_in_buffer']): ?>
                                <?php if ($this->_tpl_vars['kga']['show_gabBreaks']): ?>break_gap<?php endif; ?>
                            <?php endif; ?>
                        <?php endif; ?>
                        <?php if ($this->_tpl_vars['disabled_columns']['date']): ?>disabled<?php endif; ?>
                    ">
                        <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arr_data'][$this->_sections['row']['index']]['time_in'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateformat']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateformat'])))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>

                    </td>


                    <td class="from
                        <?php if (((is_array($_tmp=$this->_tpl_vars['arr_data'][$this->_sections['row']['index']]['time_in'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d") : smarty_modifier_date_format($_tmp, "%d")) != $this->_tpl_vars['day_buffer']): ?>
                            <?php if ($this->_tpl_vars['kga']['show_daySeperatorLines']): ?>break_day<?php endif; ?>
                        <?php else: ?>
                            <?php if ($this->_tpl_vars['arr_data'][$this->_sections['row']['index']]['time_out'] != $this->_tpl_vars['time_in_buffer']): ?>
                                <?php if ($this->_tpl_vars['kga']['show_gabBreaks']): ?>break_gap<?php endif; ?>
                            <?php endif; ?>
                        <?php endif; ?>
                        <?php if ($this->_tpl_vars['disabled_columns']['from']): ?>disabled<?php endif; ?>
                    ">
                        <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arr_data'][$this->_sections['row']['index']]['time_in'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['timeformat']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['timeformat'])))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>

                    </td>


                    <td class="to
                        <?php if (((is_array($_tmp=$this->_tpl_vars['arr_data'][$this->_sections['row']['index']]['time_in'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d") : smarty_modifier_date_format($_tmp, "%d")) != $this->_tpl_vars['day_buffer']): ?>
                            <?php if ($this->_tpl_vars['kga']['show_daySeperatorLines']): ?>break_day<?php endif; ?>
                        <?php else: ?>
                            <?php if ($this->_tpl_vars['arr_data'][$this->_sections['row']['index']]['time_out'] != $this->_tpl_vars['time_in_buffer']): ?>
                                <?php if ($this->_tpl_vars['kga']['show_gabBreaks']): ?>break_gap<?php endif; ?>
                            <?php endif; ?>
                        <?php endif; ?>
                        <?php if ($this->_tpl_vars['disabled_columns']['to']): ?>disabled<?php endif; ?>
                    ">
                    
<?php if ($this->_tpl_vars['arr_data'][$this->_sections['row']['index']]['time_out']): ?>
                        <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arr_data'][$this->_sections['row']['index']]['time_out'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['timeformat']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['timeformat'])))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>

<?php else: ?>                     
                        &ndash;&ndash;:&ndash;&ndash;
<?php endif; ?>
                    </td>


                    <td class="time
                        <?php if (((is_array($_tmp=$this->_tpl_vars['arr_data'][$this->_sections['row']['index']]['time_in'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d") : smarty_modifier_date_format($_tmp, "%d")) != $this->_tpl_vars['day_buffer']): ?>
                            <?php if ($this->_tpl_vars['kga']['show_daySeperatorLines']): ?>break_day<?php endif; ?>
                        <?php else: ?>
                            <?php if ($this->_tpl_vars['arr_data'][$this->_sections['row']['index']]['time_out'] != $this->_tpl_vars['time_in_buffer']): ?>
                                <?php if ($this->_tpl_vars['kga']['show_gabBreaks']): ?>break_gap<?php endif; ?>
                            <?php endif; ?>
                        <?php endif; ?>
                        <?php if ($this->_tpl_vars['disabled_columns']['time']): ?>disabled<?php endif; ?>
                    ">
                    
<?php if ($this->_tpl_vars['arr_data'][$this->_sections['row']['index']]['zef_time']): ?>
                    
                        <?php echo $this->_tpl_vars['arr_data'][$this->_sections['row']['index']]['zef_duration']; ?>

                      
<?php else: ?>  
                        &ndash;:&ndash;&ndash;
<?php endif; ?>
                    </td>


                    <td class="dec_time
                        <?php if (((is_array($_tmp=$this->_tpl_vars['arr_data'][$this->_sections['row']['index']]['time_in'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d") : smarty_modifier_date_format($_tmp, "%d")) != $this->_tpl_vars['day_buffer']): ?>
                            <?php if ($this->_tpl_vars['kga']['show_daySeperatorLines']): ?>break_day<?php endif; ?>
                        <?php else: ?>
                            <?php if ($this->_tpl_vars['arr_data'][$this->_sections['row']['index']]['time_out'] != $this->_tpl_vars['time_in_buffer']): ?>
                                <?php if ($this->_tpl_vars['kga']['show_gabBreaks']): ?>break_gap<?php endif; ?>
                            <?php endif; ?>
                        <?php endif; ?>
                        <?php if ($this->_tpl_vars['disabled_columns']['dec_time']): ?>disabled<?php endif; ?>
                    ">
                    
<?php if ($this->_tpl_vars['arr_data'][$this->_sections['row']['index']]['dec_zef_time']): ?>
                    
                        <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arr_data'][$this->_sections['row']['index']]['dec_zef_time'])) ? $this->_run_mod_handler('replace', true, $_tmp, '.', $this->_tpl_vars['kga']['conf']['decimalSeparator']) : smarty_modifier_replace($_tmp, '.', $this->_tpl_vars['kga']['conf']['decimalSeparator'])))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>

                      
<?php else: ?>  
                        &ndash;:&ndash;&ndash;
<?php endif; ?>
                    </td>


                    <td class="rate
                        <?php if (((is_array($_tmp=$this->_tpl_vars['arr_data'][$this->_sections['row']['index']]['time_in'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d") : smarty_modifier_date_format($_tmp, "%d")) != $this->_tpl_vars['day_buffer']): ?>
                            <?php if ($this->_tpl_vars['kga']['show_daySeperatorLines']): ?>break_day<?php endif; ?>
                        <?php else: ?>
                            <?php if ($this->_tpl_vars['arr_data'][$this->_sections['row']['index']]['time_out'] != $this->_tpl_vars['time_in_buffer']): ?>
                                <?php if ($this->_tpl_vars['kga']['show_gabBreaks']): ?>break_gap<?php endif; ?>
                            <?php endif; ?>
                        <?php endif; ?>
                        <?php if ($this->_tpl_vars['disabled_columns']['rate']): ?>disabled<?php endif; ?>
                    ">
                    
                            <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arr_data'][$this->_sections['row']['index']]['zef_rate'])) ? $this->_run_mod_handler('replace', true, $_tmp, '.', $this->_tpl_vars['kga']['conf']['decimalSeparator']) : smarty_modifier_replace($_tmp, '.', $this->_tpl_vars['kga']['conf']['decimalSeparator'])))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>

                    </td>


                    <td class="wage
                        <?php if (((is_array($_tmp=$this->_tpl_vars['arr_data'][$this->_sections['row']['index']]['time_in'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d") : smarty_modifier_date_format($_tmp, "%d")) != $this->_tpl_vars['day_buffer']): ?>
                            <?php if ($this->_tpl_vars['kga']['show_daySeperatorLines']): ?>break_day<?php endif; ?>
                        <?php else: ?>
                            <?php if ($this->_tpl_vars['arr_data'][$this->_sections['row']['index']]['time_out'] != $this->_tpl_vars['time_in_buffer']): ?>
                                <?php if ($this->_tpl_vars['kga']['show_gabBreaks']): ?>break_gap<?php endif; ?>
                            <?php endif; ?>
                        <?php endif; ?>
                        <?php if ($this->_tpl_vars['disabled_columns']['wage']): ?>disabled<?php endif; ?>
                    ">
                    
<?php if ($this->_tpl_vars['arr_data'][$this->_sections['row']['index']]['wage']): ?>
                    
                        <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arr_data'][$this->_sections['row']['index']]['wage'])) ? $this->_run_mod_handler('replace', true, $_tmp, '.', $this->_tpl_vars['kga']['conf']['decimalSeparator']) : smarty_modifier_replace($_tmp, '.', $this->_tpl_vars['kga']['conf']['decimalSeparator'])))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>

                      
<?php else: ?>  
                        &ndash;
<?php endif; ?>
                    </td>


                    <td class="knd
                        <?php if (((is_array($_tmp=$this->_tpl_vars['arr_data'][$this->_sections['row']['index']]['time_in'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d") : smarty_modifier_date_format($_tmp, "%d")) != $this->_tpl_vars['day_buffer']): ?>
                            <?php if ($this->_tpl_vars['kga']['show_daySeperatorLines']): ?>break_day<?php endif; ?>
                        <?php else: ?>
                            <?php if ($this->_tpl_vars['arr_data'][$this->_sections['row']['index']]['time_out'] != $this->_tpl_vars['time_in_buffer']): ?>
                                <?php if ($this->_tpl_vars['kga']['show_gabBreaks']): ?>break_gap<?php endif; ?>
                            <?php endif; ?>
                        <?php endif; ?>
                        <?php if ($this->_tpl_vars['disabled_columns']['knd']): ?>disabled<?php endif; ?>
                    ">
                        <?php echo ((is_array($_tmp=$this->_tpl_vars['arr_data'][$this->_sections['row']['index']]['knd_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>

                    </td>


                    <td class="pct
                        <?php if (((is_array($_tmp=$this->_tpl_vars['arr_data'][$this->_sections['row']['index']]['time_in'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d") : smarty_modifier_date_format($_tmp, "%d")) != $this->_tpl_vars['day_buffer']): ?>
                            <?php if ($this->_tpl_vars['kga']['show_daySeperatorLines']): ?>break_day<?php endif; ?>
                        <?php else: ?>
                            <?php if ($this->_tpl_vars['arr_data'][$this->_sections['row']['index']]['time_out'] != $this->_tpl_vars['time_in_buffer']): ?>
                                <?php if ($this->_tpl_vars['kga']['show_gabBreaks']): ?>break_gap<?php endif; ?>
                            <?php endif; ?>
                        <?php endif; ?>
                        <?php if ($this->_tpl_vars['disabled_columns']['pct']): ?>disabled<?php endif; ?>
                    ">
                        
                        <a href ="#" class="preselect_lnk" 
                            onClick="buzzer_preselect('pct',<?php echo $this->_tpl_vars['arr_data'][$this->_sections['row']['index']]['pct_ID']; ?>
,'<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arr_data'][$this->_sections['row']['index']]['pct_name'])) ? $this->_run_mod_handler('replace', true, $_tmp, "'", "\\'") : smarty_modifier_replace($_tmp, "'", "\\'")))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
',<?php echo $this->_tpl_vars['arr_data'][$this->_sections['row']['index']]['pct_kndID']; ?>
,'<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arr_data'][$this->_sections['row']['index']]['knd_name'])) ? $this->_run_mod_handler('replace', true, $_tmp, "'", "\\'") : smarty_modifier_replace($_tmp, "'", "\\'")))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
'); 
                            return false;">
                            <?php echo ((is_array($_tmp=$this->_tpl_vars['arr_data'][$this->_sections['row']['index']]['pct_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>

                            <?php if ($this->_tpl_vars['kga']['conf']['pct_comment_flag'] == 1): ?>
                                <?php if ($this->_tpl_vars['arr_data'][$this->_sections['row']['index']]['pct_comment']): ?>
                                    <span class="lighter">(<?php echo ((is_array($_tmp=$this->_tpl_vars['arr_data'][$this->_sections['row']['index']]['pct_comment'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
)</span>
                                <?php endif; ?>
                            <?php endif; ?>
                        </a>
                    </td>



                    <td class="evt
                        <?php if (((is_array($_tmp=$this->_tpl_vars['arr_data'][$this->_sections['row']['index']]['time_in'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d") : smarty_modifier_date_format($_tmp, "%d")) != $this->_tpl_vars['day_buffer']): ?>
                            <?php if ($this->_tpl_vars['kga']['show_daySeperatorLines']): ?>break_day<?php endif; ?>
                        <?php else: ?>
                            <?php if ($this->_tpl_vars['arr_data'][$this->_sections['row']['index']]['time_out'] != $this->_tpl_vars['time_in_buffer']): ?>
                                <?php if ($this->_tpl_vars['kga']['show_gabBreaks']): ?>break_gap<?php endif; ?>
                            <?php endif; ?>
                        <?php endif; ?>
                        <?php if ($this->_tpl_vars['disabled_columns']['evt']): ?>disabled<?php endif; ?>
                    ">
                        
                        <a href ="#" class="preselect_lnk" 
                            onClick="buzzer_preselect('evt',<?php echo $this->_tpl_vars['arr_data'][$this->_sections['row']['index']]['zef_evtID']; ?>
,'<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arr_data'][$this->_sections['row']['index']]['evt_name'])) ? $this->_run_mod_handler('replace', true, $_tmp, "'", "\\'") : smarty_modifier_replace($_tmp, "'", "\\'")))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
',0,0); 
                            return false;">
                            <?php echo ((is_array($_tmp=$this->_tpl_vars['arr_data'][$this->_sections['row']['index']]['evt_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
 
                        </a>
                    </td>


                    <td class="comment
                        <?php if (((is_array($_tmp=$this->_tpl_vars['arr_data'][$this->_sections['row']['index']]['time_in'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d") : smarty_modifier_date_format($_tmp, "%d")) != $this->_tpl_vars['day_buffer']): ?>
                            <?php if ($this->_tpl_vars['kga']['show_daySeperatorLines']): ?>break_day<?php endif; ?>
                        <?php else: ?>
                            <?php if ($this->_tpl_vars['arr_data'][$this->_sections['row']['index']]['time_out'] != $this->_tpl_vars['time_in_buffer']): ?>
                                <?php if ($this->_tpl_vars['kga']['show_gabBreaks']): ?>break_gap<?php endif; ?>
                            <?php endif; ?>
                        <?php endif; ?>
                        <?php if ($this->_tpl_vars['disabled_columns']['comment']): ?>disabled<?php endif; ?>
                    ">
                        <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arr_data'][$this->_sections['row']['index']]['comment'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

                        
                    </td>


                    <td class="location
                        <?php if (((is_array($_tmp=$this->_tpl_vars['arr_data'][$this->_sections['row']['index']]['time_in'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d") : smarty_modifier_date_format($_tmp, "%d")) != $this->_tpl_vars['day_buffer']): ?>
                            <?php if ($this->_tpl_vars['kga']['show_daySeperatorLines']): ?>break_day<?php endif; ?>
                        <?php else: ?>
                            <?php if ($this->_tpl_vars['arr_data'][$this->_sections['row']['index']]['time_out'] != $this->_tpl_vars['time_in_buffer']): ?>
                                <?php if ($this->_tpl_vars['kga']['show_gabBreaks']): ?>break_gap<?php endif; ?>
                            <?php endif; ?>
                        <?php endif; ?>
                        <?php if ($this->_tpl_vars['disabled_columns']['location']): ?>disabled<?php endif; ?>
                    ">
                        <?php echo ((is_array($_tmp=$this->_tpl_vars['arr_data'][$this->_sections['row']['index']]['location'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>

                        
                    </td>


                    <td class="trackingnr
                        <?php if (((is_array($_tmp=$this->_tpl_vars['arr_data'][$this->_sections['row']['index']]['time_in'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d") : smarty_modifier_date_format($_tmp, "%d")) != $this->_tpl_vars['day_buffer']): ?>
                            <?php if ($this->_tpl_vars['kga']['show_daySeperatorLines']): ?>break_day<?php endif; ?>
                        <?php else: ?>
                            <?php if ($this->_tpl_vars['arr_data'][$this->_sections['row']['index']]['time_out'] != $this->_tpl_vars['time_in_buffer']): ?>
                                <?php if ($this->_tpl_vars['kga']['show_gabBreaks']): ?>break_gap<?php endif; ?>
                            <?php endif; ?>
                        <?php endif; ?>
                        <?php if ($this->_tpl_vars['disabled_columns']['trackingnr']): ?>disabled<?php endif; ?>
                    ">
                        <?php echo ((is_array($_tmp=$this->_tpl_vars['arr_data'][$this->_sections['row']['index']]['trackingnr'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>

                        
                    </td>


                    <td class="user
                        <?php if (((is_array($_tmp=$this->_tpl_vars['arr_data'][$this->_sections['row']['index']]['time_in'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d") : smarty_modifier_date_format($_tmp, "%d")) != $this->_tpl_vars['day_buffer']): ?>
                            <?php if ($this->_tpl_vars['kga']['show_daySeperatorLines']): ?>break_day<?php endif; ?>
                        <?php else: ?>
                            <?php if ($this->_tpl_vars['arr_data'][$this->_sections['row']['index']]['time_out'] != $this->_tpl_vars['time_in_buffer']): ?>
                                <?php if ($this->_tpl_vars['kga']['show_gabBreaks']): ?>break_gap<?php endif; ?>
                            <?php endif; ?>
                        <?php endif; ?>
                        <?php if ($this->_tpl_vars['disabled_columns']['user']): ?>disabled<?php endif; ?>
                    ">
                        <?php echo ((is_array($_tmp=$this->_tpl_vars['arr_data'][$this->_sections['row']['index']]['username'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>

                        
                    </td>


          <td class="cleared
                        <?php if (((is_array($_tmp=$this->_tpl_vars['arr_data'][$this->_sections['row']['index']]['time_in'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d") : smarty_modifier_date_format($_tmp, "%d")) != $this->_tpl_vars['day_buffer']): ?>
                            <?php if ($this->_tpl_vars['kga']['show_daySeperatorLines']): ?>break_day<?php endif; ?>
                        <?php else: ?>
                            <?php if ($this->_tpl_vars['arr_data'][$this->_sections['row']['index']]['time_out'] != $this->_tpl_vars['time_in_buffer']): ?>
                                <?php if ($this->_tpl_vars['kga']['show_gabBreaks']): ?>break_gap<?php endif; ?>
                            <?php endif; ?>
                        <?php endif; ?>
                        <?php if ($this->_tpl_vars['disabled_columns']['cleared']): ?>disabled<?php endif; ?>
                    ">
                      <a class ="<?php if ($this->_tpl_vars['arr_data'][$this->_sections['row']['index']]['cleared']): ?>is_cleared<?php else: ?>isnt_cleared<?php endif; ?>" href ="#" onClick="xp_toggle_cleared('<?php echo $this->_tpl_vars['arr_data'][$this->_sections['row']['index']]['type']; ?>
<?php echo $this->_tpl_vars['arr_data'][$this->_sections['row']['index']]['id']; ?>
'); return false;"></a>
          </td>
          

                </tr>

<?php $this->assign('day_buffer', ((is_array($_tmp=$this->_tpl_vars['arr_data'][$this->_sections['row']['index']]['time_in'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d") : smarty_modifier_date_format($_tmp, "%d"))); ?>
<?php $this->assign('time_in_buffer', $this->_tpl_vars['arr_data'][$this->_sections['row']['index']]['time_in']); ?>
               
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
    ts_usr_ann = null;
    ts_knd_ann = null;
    ts_pct_ann = null;
    ts_evt_ann = null;
    ts_total = '<?php echo $this->_tpl_vars['total']; ?>
';

    <?php if ($this->_tpl_vars['usr_ann']): ?>
    ts_usr_ann = new Array();
    <?php $_from = $this->_tpl_vars['usr_ann']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['id'] => $this->_tpl_vars['value']):
?>
      ts_usr_ann[<?php echo $this->_tpl_vars['id']; ?>
] = '<?php echo $this->_tpl_vars['value']; ?>
';
    <?php endforeach; endif; unset($_from); ?>
    <?php endif; ?>

    <?php if ($this->_tpl_vars['knd_ann']): ?>
    ts_knd_ann = new Array();
    <?php $_from = $this->_tpl_vars['knd_ann']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['id'] => $this->_tpl_vars['value']):
?>
      ts_knd_ann[<?php echo $this->_tpl_vars['id']; ?>
] = '<?php echo $this->_tpl_vars['value']; ?>
';
    <?php endforeach; endif; unset($_from); ?>
    <?php endif; ?>

    <?php if ($this->_tpl_vars['pct_ann']): ?>
    ts_pct_ann = new Array();
    <?php $_from = $this->_tpl_vars['pct_ann']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['id'] => $this->_tpl_vars['value']):
?>
      ts_pct_ann[<?php echo $this->_tpl_vars['id']; ?>
] = '<?php echo $this->_tpl_vars['value']; ?>
';
    <?php endforeach; endif; unset($_from); ?>
    <?php endif; ?>

    <?php if ($this->_tpl_vars['evt_ann']): ?>
    ts_evt_ann = new Array();
    <?php $_from = $this->_tpl_vars['evt_ann']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['id'] => $this->_tpl_vars['value']):
?>
      ts_evt_ann[<?php echo $this->_tpl_vars['id']; ?>
] = '<?php echo $this->_tpl_vars['value']; ?>
';
    <?php endforeach; endif; unset($_from); ?>
    <?php endif; ?>
    
    <?php echo '
    lists_update_annotations(parseInt($(\'#gui div.ki_export\').attr(\'id\').substring(7)),ts_usr_ann,ts_knd_ann,ts_pct_ann,ts_evt_ann);
    $(\'#display_total\').html(ts_total);
    '; ?>

    
</script>