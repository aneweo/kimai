<?php /* Smarty version 2.6.20, created on 2012-06-27 17:09:23
         compiled from add_edit_record.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'add_edit_record.tpl', 159, false),array('modifier', 'escape', 'add_edit_record.tpl', 180, false),)), $this); ?>
<?php echo '    
    <script type="text/javascript"> 
        
        $(document).ready(function() {
            $(\'#help\').hide();


        $(\'#edit_in_day\').datepicker({
          onSelect: function(dateText, instance) {
            $(\'#edit_out_day\').datepicker( "option", "minDate", $(\'#edit_in_day\').datepicker("getDate") );
            ts_timeToDuration();
          }
         });
        $(\'#edit_out_day\').datepicker({
          onSelect: function(dateText, instance) {
            $(\'#edit_in_day\').datepicker( "option", "maxDate", $(\'#edit_out_day\').datepicker("getDate") );
            ts_timeToDuration();
          }
         });

            $(\'#ts_ext_form_add_edit_record\').ajaxForm( { \'beforeSubmit\' :function() { 


                if (!$(\'#edit_in_day\').val().match(ts_dayFormatExp) ||
                    !$(\'#edit_out_day\').val().match(ts_dayFormatExp) ||
                    !$(\'#edit_in_time\').val().match(ts_timeFormatExp) ||
                    !$(\'#edit_out_time\').val().match(ts_timeFormatExp)) {
                  alert("'; ?>
<?php echo $this->_tpl_vars['kga']['lang']['TimeDateInputError']; ?>
<?php echo '");
                  return false;
                }

                // test if start day is before end day
                var inDayMatches = $(\'#edit_in_day\').val().match(ts_dayFormatExp);
                var outDayMatches = $(\'#edit_out_day\').val().match(ts_dayFormatExp);
                for (var i = 3;i>=1;i--) {
                  var inVal = inDayMatches[i];
                  var outVal = outDayMatches[i];

                  inVal = parseInt(inVal);
                  outval = parseInt(outVal);
                  
                  if (inVal == undefined)
                    inVal = 0;
                  if (outVal == undefined)
                    outVal = 0;
                  
                  if (inVal > outVal) {
                    alert("'; ?>
<?php echo $this->_tpl_vars['kga']['lang']['StartTimeBeforeEndTime']; ?>
<?php echo '");
                    return false;
                  }
                  else if (inVal < outVal)
                    break; // if this part is smaller we don\'t care for the other parts
                }
                
                if (inDayMatches[0] == outDayMatches[0]) {
                  // test if start time is before end time if it\'s the same day
                  var inTimeMatches = $(\'#edit_in_time\').val().match(ts_timeFormatExp);
                  var outTimeMatches = $(\'#edit_out_time\').val().match(ts_timeFormatExp);
                  for (var i = 1;i<=3;i++) {
                    var inVal = inTimeMatches[i];
                    var outVal = outTimeMatches[i];
                    
                    if (inVal[0] == ":")
                      inVal = inVal.substr(1);
                    if (outVal[0] == ":")
                      outVal = outVal.substr(1);

                    inVal = parseInt(inVal);
                    outval = parseInt(outVal);
                    
                    if (inVal == undefined)
                      inVal = 0;
                    if (outVal == undefined)
                      outVal = 0;
                    
                    if (inVal > outVal) {
                      alert("'; ?>
<?php echo $this->_tpl_vars['kga']['lang']['StartTimeBeforeEndTime']; ?>
<?php echo '");
                      return false;
                    }
                    else if (inVal < outVal)
                      break; // if this part is smaller we don\'t care for the other parts
                  }
                }
                
                var edit_in_time = $(\'#edit_in_day\').val()+$(\'#edit_in_time\').val();
                var edit_out_time = $(\'#edit_out_day\').val()+$(\'#edit_out_time\').val();
                var deleted = $(\'#erase\').is(\':checked\');
                
                if (!deleted && edit_in_time == edit_out_time) {
                    alert("'; ?>
<?php echo $this->_tpl_vars['kga']['lang']['timediff_warn']; ?>
<?php echo '");
                } else {
                    floaterClose();
                }
              return true;
            },
            \'success\' : ts_ext_reload
            });
            '; ?>
<?php if ($this->_tpl_vars['id']): ?>
            ts_ext_reload_evt(<?php echo $this->_tpl_vars['pres_pct']; ?>
,true);
            <?php else: ?><?php echo '
            $("#add_edit_zef_pct_ID").selectOptions(""+selected_pct+"");
            $("#add_edit_zef_evt_ID").selectOptions(""+selected_evt+"");
            ts_ext_reload_evt(selected_pct);
            '; ?>
<?php endif; ?><?php echo '

            $(\'#floater_innerwrap\').tabs({ selected: 0 });
            ts_timeToDuration();
        }); 
        
    </script>
'; ?>



<div id="floater_innerwrap">

    <div id="floater_handle">
        <span id="floater_title"><?php if ($this->_tpl_vars['id']): ?><?php echo $this->_tpl_vars['kga']['lang']['edit']; ?>
<?php else: ?><?php echo $this->_tpl_vars['kga']['lang']['add']; ?>
<?php endif; ?></span>
        <div class="right">
            <a href="#" class="close" onClick="floaterClose();"><?php echo $this->_tpl_vars['kga']['lang']['close']; ?>
</a>
            <a href="#" class="help" onClick="$(this).blur(); $('#help').slideToggle();"><?php echo $this->_tpl_vars['kga']['lang']['help']; ?>
</a>
        </div>  
    </div>

    <div id="help">
        <div class="content">        
            <?php echo $this->_tpl_vars['kga']['lang']['dateAndTimeHelp']; ?>

        </div>
    </div>
    
    <div class="menuBackground">

      <ul class="menu tabSelection">
          <li class="tab norm"><a href="#general">
                      <span class="aa">&nbsp;</span>
                      <span class="bb"><?php echo $this->_tpl_vars['kga']['lang']['general']; ?>
</span>
                      <span class="cc">&nbsp;</span>
                      </a></li>
          <li class="tab norm"><a href="#extended">
                      <span class="aa">&nbsp;</span>
                      <span class="bb"><?php echo $this->_tpl_vars['kga']['lang']['advanced']; ?>
</span>
                      <span class="cc">&nbsp;</span>
                      </a></li>
      </ul>
    </div>

    <form id="ts_ext_form_add_edit_record" action="../extensions/ki_timesheets/processor.php" method="post"> 
    <input name="id" type="hidden" value="<?php echo $this->_tpl_vars['id']; ?>
" />
    <input name="axAction" type="hidden" value="add_edit_record" />


    <div id="floater_tabs" class="floater_content">
            <fieldset id="general">
                
                <ul>
                
                   <li>
                       <label for="pct_ID"><?php echo $this->_tpl_vars['kga']['lang']['pct']; ?>
:</label>
                       <select size = "5" name="pct_ID" id="add_edit_zef_pct_ID" class="formfield" style="width:400px" tabindex="1" onChange="ts_ext_reload_evt($('#add_edit_zef_pct_ID').val());" >
                           <?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['sel_pct_IDs'],'output' => $this->_tpl_vars['sel_pct_names'],'selected' => $this->_tpl_vars['pres_pct']), $this);?>

                       </select>
                       <br/>
                       <input type="input" style="margin-left:115px;width:395px;margin-top:3px" tabindex="2" size="10" name="filter" id="filter" onkeyup="filter_selects('add_edit_zef_pct_ID', this.value); ts_add_edit_validate();"/>
                   </li>
                   


                   <li>
                       <label for="evt_ID"><?php echo $this->_tpl_vars['kga']['lang']['evt']; ?>
:</label>
                       <select size = "5" name="evt_ID" id="add_edit_zef_evt_ID" class="formfield" style="width:400px" tabindex="3" onChange="getBestRate();ts_add_edit_validate();" >
                           <?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['sel_evt_IDs'],'output' => $this->_tpl_vars['sel_evt_names'],'selected' => $this->_tpl_vars['pres_evt']), $this);?>

                       </select>
                       <br/>
                      <input type="input" style="margin-left:115px;width:395px;margin-top:3px" tabindex="4" size="10" name="filter" id="filter" onkeyup="filter_selects('add_edit_zef_evt_ID', this.value); ts_add_edit_validate();" />
                   </li>
                
 

                <li>
                     <label for="edit_in_day"><?php echo $this->_tpl_vars['kga']['lang']['day']; ?>
:</label>
                     <input id='edit_in_day' type='text' name='edit_in_day' value='<?php echo ((is_array($_tmp=$this->_tpl_vars['edit_in_day'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
' maxlength='10' size='10' tabindex='5' onChange="ts_timeToDuration();" <?php if ($this->_tpl_vars['kga']['conf']['autoselection']): ?>onClick="this.select();"<?php endif; ?> />
                     -
                     <input id='edit_out_day' type='text' name='edit_out_day' value='<?php echo ((is_array($_tmp=$this->_tpl_vars['edit_out_day'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
' maxlength='10' size='10' tabindex='6' onChange="ts_timeToDuration();" <?php if ($this->_tpl_vars['kga']['conf']['autoselection']): ?>onClick="this.select();"<?php endif; ?> />
                </li>


              
                   <li>
                       <label for="time"><?php echo $this->_tpl_vars['kga']['lang']['timelabel']; ?>
:</label>
                        <input id='edit_in_time' type='text' name='edit_in_time' value='<?php echo ((is_array($_tmp=$this->_tpl_vars['edit_in_time'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
' maxlength='8'  size='8'  tabindex='7' onChange="ts_timeToDuration();" <?php if ($this->_tpl_vars['kga']['conf']['autoselection']): ?>onClick="this.select();"<?php endif; ?> />
                        -
                        <input id='edit_out_time' type='text' name='edit_out_time' value='<?php echo ((is_array($_tmp=$this->_tpl_vars['edit_out_time'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
' maxlength='8'  size='8'  tabindex='8' onChange="ts_timeToDuration();" <?php if ($this->_tpl_vars['kga']['conf']['autoselection']): ?>onClick="this.select();"<?php endif; ?> />
                        <a href="#" onClick="pasteNow(); ts_timeToDuration(); $(this).blur(); return false;"><?php echo $this->_tpl_vars['kga']['lang']['now']; ?>
</a>
                   </li>
                   <li>
                       <label for="duration"><?php echo $this->_tpl_vars['kga']['lang']['durationlabel']; ?>
:</label>
                        <input id='edit_duration' type='text' name='edit_duration' value='' onChange="ts_durationToTime();" maxlength='8'  size='8'  tabindex='9' <?php if ($this->_tpl_vars['kga']['conf']['autoselection']): ?>onClick="this.select();"<?php endif; ?> />
                   </li>
                   <li>
                        <label for="rate"><?php echo $this->_tpl_vars['kga']['lang']['rate']; ?>
:</label>
                        <input id='rate' type='text' name='rate' value='<?php echo ((is_array($_tmp=$this->_tpl_vars['rate'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
' maxlength='50' size='20' tabindex='10' <?php if ($this->_tpl_vars['kga']['conf']['autoselection']): ?>onClick="this.select();"<?php endif; ?> />
                   </li>
               </ul>
             </fieldset>
       
            <fieldset id="extended">
                
                <ul>

                   <li>
                        <label for="zlocation"><?php echo $this->_tpl_vars['kga']['lang']['zlocation']; ?>
:</label>
                        <input id='zlocation' type='text' name='zlocation' value='<?php echo ((is_array($_tmp=$this->_tpl_vars['zlocation'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
' maxlength='50' size='20' tabindex='11' <?php if ($this->_tpl_vars['kga']['conf']['autoselection']): ?>onClick="this.select();"<?php endif; ?> />
                   </li>

				<?php if ($this->_tpl_vars['kga']['show_TrackingNr']): ?>
                   <li>
                        <label for="trackingnr"><?php echo $this->_tpl_vars['kga']['lang']['trackingnr']; ?>
:</label>
                        <input id='trackingnr' type='text' name='trackingnr' value='<?php echo ((is_array($_tmp=$this->_tpl_vars['trackingnr'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
' maxlength='20' size='20' tabindex='12' <?php if ($this->_tpl_vars['kga']['conf']['autoselection']): ?>onClick="this.select();"<?php endif; ?> />
                   </li>
				<?php endif; ?>
                        <label for="comment"><?php echo $this->_tpl_vars['kga']['lang']['comment']; ?>
:</label>
                        <textarea id='comment' style="width:395px" class='comment' name='comment' cols='40' rows='5' tabindex='13'><?php echo ((is_array($_tmp=$this->_tpl_vars['comment'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</textarea>
                   </li>
                   
                   <li>
                       <label for="comment_type"><?php echo $this->_tpl_vars['kga']['lang']['comment_type']; ?>
:</label>
                       <select id="comment_type" class="formfield" name="comment_type" tabindex="14" >
                           <?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['comment_values'],'output' => $this->_tpl_vars['comment_types'],'selected' => $this->_tpl_vars['comment_active']), $this);?>

                       </select>
                   </li>
                   
                    <li>
                        <label for="erase"><?php echo $this->_tpl_vars['kga']['lang']['erase']; ?>
:</label>
                        <input type='checkbox' id='erase' name='erase' tabindex='15'/>
                   </li>

                    <li>
                        <label for="cleared"><?php echo $this->_tpl_vars['kga']['lang']['cleared']; ?>
:</label>
                        <input type='checkbox' id='cleared' name='cleared' <?php if ($this->_tpl_vars['cleared']): ?> checked="checked" <?php endif; ?> tabindex='16'/>
                           
                   </li>
        
                </ul>

 
            </fieldset>

        </div>

                <div id="formbuttons">
                    <input class='btn_norm' type='button' value='<?php echo $this->_tpl_vars['kga']['lang']['cancel']; ?>
' onClick='floaterClose(); return false;' />
                    <input class='btn_ok' type='submit' value='<?php echo $this->_tpl_vars['kga']['lang']['submit']; ?>
' />
                </div>

 

        </form>

</div>