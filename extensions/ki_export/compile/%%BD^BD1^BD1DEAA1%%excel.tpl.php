<?php /* Smarty version 2.6.20, created on 2012-06-28 12:31:01
         compiled from formats/excel.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'formats/excel.tpl', 75, false),array('modifier', 'escape', 'formats/excel.tpl', 75, false),array('modifier', 'replace', 'formats/excel.tpl', 183, false),)), $this); ?>
<html xmlns:o="urn:schemas-microsoft-com:office:office" 
xmlns:x="urn:schemas-microsoft-com:office:excel" 
xmlns="http://www.w3.org/TR/REC-html40"> 

<head> 
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<style> 
<?php echo '
.date { 
mso-number-format:"Short Date"; 
} 
.time { 
mso-number-format:"h\\:mm\\:ss\\;\\@"; 
} 
.duration {
mso-number-format:"h\\:mm\\;\\@";
}
.decimal {
mso-number-format:Fixed;
}
'; ?>

</style> 
<!--[if gte mso 9]><xml>
 <x:ExcelWorkbook>
  <x:ExcelWorksheets>
   <x:ExcelWorksheet>
    <x:Name>Tabelle1</x:Name>
    <x:WorksheetOptions>
     <x:DefaultColWidth>10</x:DefaultColWidth>
     <x:Selected/>
     <x:Panes>
      <x:Pane>
       <x:Number>3</x:Number>
       <x:ActiveRow>4</x:ActiveRow>
       <x:ActiveCol>3</x:ActiveCol>
      </x:Pane>
     </x:Panes>
     <x:ProtectContents>False</x:ProtectContents>
     <x:ProtectObjects>False</x:ProtectObjects>
     <x:ProtectScenarios>False</x:ProtectScenarios>
    </x:WorksheetOptions>
   </x:ExcelWorksheet>
  </x:ExcelWorksheets>
 </x:ExcelWorkbook>
</xml><![endif]-->
</head> 

<body> 
<table> 
<thead><tr> 
<?php if ($this->_tpl_vars['columns']['date']): ?> <td><?php echo $this->_tpl_vars['kga']['lang']['datum']; ?>
</td>       <?php endif; ?>
<?php if ($this->_tpl_vars['columns']['from']): ?> <td><?php echo $this->_tpl_vars['kga']['lang']['in']; ?>
</td>          <?php endif; ?>
<?php if ($this->_tpl_vars['columns']['to']): ?> <td><?php echo $this->_tpl_vars['kga']['lang']['out']; ?>
</td>         <?php endif; ?>
<?php if ($this->_tpl_vars['columns']['time']): ?> <td><?php echo $this->_tpl_vars['kga']['lang']['time']; ?>
</td>        <?php endif; ?>
<?php if ($this->_tpl_vars['columns']['dec_time']): ?> <td><?php echo $this->_tpl_vars['kga']['lang']['timelabel']; ?>
</td>   <?php endif; ?>
<?php if ($this->_tpl_vars['columns']['rate']): ?> <td><?php echo $this->_tpl_vars['kga']['lang']['rate']; ?>
</td>        <?php endif; ?>
<?php if ($this->_tpl_vars['columns']['wage']): ?> <td><?php echo $this->_tpl_vars['kga']['currency_name']; ?>
</td>    <?php endif; ?>
<?php if ($this->_tpl_vars['columns']['knd']): ?> <td><?php echo $this->_tpl_vars['kga']['lang']['knd']; ?>
</td>         <?php endif; ?>
<?php if ($this->_tpl_vars['columns']['pct']): ?> <td><?php echo $this->_tpl_vars['kga']['lang']['pct']; ?>
</td>         <?php endif; ?>
<?php if ($this->_tpl_vars['columns']['action']): ?> <td><?php echo $this->_tpl_vars['kga']['lang']['evt']; ?>
</td>         <?php endif; ?>
<?php if ($this->_tpl_vars['columns']['comment']): ?> <td><?php echo $this->_tpl_vars['kga']['lang']['comment']; ?>
</td>     <?php endif; ?>
<?php if ($this->_tpl_vars['columns']['location']): ?> <td><?php echo $this->_tpl_vars['kga']['lang']['zlocation']; ?>
</td>   <?php endif; ?>
<?php if ($this->_tpl_vars['columns']['trackingnr']): ?> <td><?php echo $this->_tpl_vars['kga']['lang']['trackingnr']; ?>
</td>  <?php endif; ?>
<?php if ($this->_tpl_vars['columns']['user']): ?> <td><?php echo $this->_tpl_vars['kga']['lang']['username']; ?>
</td>    <?php endif; ?>
<?php if ($this->_tpl_vars['columns']['cleared']): ?> <td><?php echo $this->_tpl_vars['kga']['lang']['cleared']; ?>
</td>     <?php endif; ?>
</tr> 
</thead> 
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
<tr> 
<?php if ($this->_tpl_vars['columns']['date']): ?>
                    <td class=date>
                        <?php if ($this->_tpl_vars['custom_dateformat']): ?>
                        <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arr_data'][$this->_sections['row']['index']]['time_in'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['custom_dateformat']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['custom_dateformat'])))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>

                        <?php else: ?>
                        <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arr_data'][$this->_sections['row']['index']]['time_in'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['kga']['date_format']['1']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['kga']['date_format']['1'])))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>

                        <?php endif; ?>
                    </td>
<?php endif; ?>

<?php if ($this->_tpl_vars['columns']['from']): ?>
                    <td align=right class=time>
                        <?php if ($this->_tpl_vars['custom_timeformat']): ?>
                        <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arr_data'][$this->_sections['row']['index']]['time_in'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['custom_timeformat']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['custom_timeformat'])))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>

                        <?php else: ?>
                        <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arr_data'][$this->_sections['row']['index']]['time_in'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M") : smarty_modifier_date_format($_tmp, "%H:%M")))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>

                        <?php endif; ?>
                    </td>
<?php endif; ?>

<?php if ($this->_tpl_vars['columns']['to']): ?>
                    <td align=right class=time>
                    
<?php if ($this->_tpl_vars['arr_data'][$this->_sections['row']['index']]['time_out']): ?>
                        <?php if ($this->_tpl_vars['custom_timeformat']): ?>
                        <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arr_data'][$this->_sections['row']['index']]['time_out'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['custom_timeformat']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['custom_timeformat'])))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>

                        <?php else: ?>
                        <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arr_data'][$this->_sections['row']['index']]['time_out'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M") : smarty_modifier_date_format($_tmp, "%H:%M")))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>

                        <?php endif; ?>
<?php else: ?>                     
                        &ndash;&ndash;:&ndash;&ndash;
<?php endif; ?>
                    </td>
<?php endif; ?>

<?php if ($this->_tpl_vars['columns']['time']): ?>
                    <td align=right class=duration>
                    
<?php if ($this->_tpl_vars['arr_data'][$this->_sections['row']['index']]['zef_time']): ?>

                            <?php echo $this->_tpl_vars['arr_data'][$this->_sections['row']['index']]['zef_duration']; ?>

                      
<?php else: ?>  
                        &ndash;:&ndash;&ndash;
<?php endif; ?>
                    </td>
<?php endif; ?>

<?php if ($this->_tpl_vars['columns']['dec_time']): ?>
                    <td align=right class=decimal>
                    
<?php if ($this->_tpl_vars['arr_data'][$this->_sections['row']['index']]['dec_zef_time']): ?>
                            <?php echo $this->_tpl_vars['arr_data'][$this->_sections['row']['index']]['dec_zef_time']; ?>

                      
<?php else: ?>  
                        &ndash;:&ndash;&ndash;
<?php endif; ?>
                    </td>
<?php endif; ?>

<?php if ($this->_tpl_vars['columns']['rate']): ?>
                    <td align=right class=decimal>
                    
                            <?php echo $this->_tpl_vars['arr_data'][$this->_sections['row']['index']]['zef_rate']; ?>

                    </td>
<?php endif; ?>

<?php if ($this->_tpl_vars['columns']['wage']): ?>
                    <td align=right class=decimal>
                    
<?php if ($this->_tpl_vars['arr_data'][$this->_sections['row']['index']]['wage']): ?>
                    
                        <?php echo $this->_tpl_vars['arr_data'][$this->_sections['row']['index']]['wage']; ?>

                      
<?php else: ?>  
                        &ndash;
<?php endif; ?>
                    </td>
<?php endif; ?>

<?php if ($this->_tpl_vars['columns']['knd']): ?>
                    <td>
                        <?php echo ((is_array($_tmp=$this->_tpl_vars['arr_data'][$this->_sections['row']['index']]['knd_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>

                    </td>
<?php endif; ?>

<?php if ($this->_tpl_vars['columns']['pct']): ?>
                    <td>
                            <?php echo ((is_array($_tmp=$this->_tpl_vars['arr_data'][$this->_sections['row']['index']]['pct_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>

                    </td>
<?php endif; ?>


<?php if ($this->_tpl_vars['columns']['action']): ?>
                    <td>
                            <?php echo ((is_array($_tmp=$this->_tpl_vars['arr_data'][$this->_sections['row']['index']]['evt_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
 
                    </td>
<?php endif; ?>

<?php if ($this->_tpl_vars['columns']['comment']): ?>
                    <td>
                        <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arr_data'][$this->_sections['row']['index']]['comment'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('replace', true, $_tmp, "\n", "&#10;") : smarty_modifier_replace($_tmp, "\n", "&#10;")); ?>

                    </td>
<?php endif; ?>

<?php if ($this->_tpl_vars['columns']['location']): ?>
                    <td>
                        <?php echo ((is_array($_tmp=$this->_tpl_vars['arr_data'][$this->_sections['row']['index']]['location'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>

                        
                    </td>
<?php endif; ?>

<?php if ($this->_tpl_vars['columns']['trackingnr']): ?>
                    <td>
                        <?php echo ((is_array($_tmp=$this->_tpl_vars['arr_data'][$this->_sections['row']['index']]['trackingnr'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>

                        
                    </td>
<?php endif; ?>

<?php if ($this->_tpl_vars['columns']['user']): ?>
                    <td>
                        <?php echo ((is_array($_tmp=$this->_tpl_vars['arr_data'][$this->_sections['row']['index']]['username'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>

                        
                    </td>
<?php endif; ?>

<?php if ($this->_tpl_vars['columns']['cleared']): ?>
          <td>
                      <?php if ($this->_tpl_vars['arr_data'][$this->_sections['row']['index']]['cleared']): ?>cleared<?php else: ?><?php endif; ?>
          </td>
<?php endif; ?>
          

                </tr>
               
<?php endfor; endif; ?>

</table> 

</body> 
</html>  
 