<?php /* Smarty version 2.6.20, created on 2012-06-28 12:30:16
         compiled from export_PDF.tpl */ ?>
<?php echo '    
    <script type="text/javascript"> 
        
        $(document).ready(function() {
            $(\'#help\').hide();
            $(\'#floater input#timeformat\').attr(\'value\',$(\'#xp_ext_timeformat\').attr(\'value\'));
            $(\'#floater input#dateformat\').attr(\'value\',$(\'#xp_ext_dateformat\').attr(\'value\'));
            $(\'#floater input#default_location\').attr(\'value\',$(\'#xp_ext_default_location\').attr(\'value\'));
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
        <span id="floater_title"><?php echo $this->_tpl_vars['kga']['lang']['xp_ext']['exportPDF']; ?>
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
        
        <form id="xp_ext_form_export_PDF" action="../extensions/ki_export/processor.php" method="post" target="_blank"> 
            <fieldset>
                
                <ul>
                
                   <li>
                       <label for="print_comments"><?php echo $this->_tpl_vars['kga']['lang']['xp_ext']['print_comment']; ?>
:</label>
                       <input type="checkbox" value="true" name="print_comments" id="print_comments" <?php if ($this->_tpl_vars['prefs']['print_comments']): ?>checked="checked"<?php endif; ?>/>
                   </li>
                
                   <li>
                       <label for="print_summary"><?php echo $this->_tpl_vars['kga']['lang']['xp_ext']['print_summary']; ?>
:</label>
                       <input type="checkbox" value="true" name="print_summary" id="print_summary" <?php if ($this->_tpl_vars['prefs']['print_summary']): ?>checked="checked"<?php endif; ?>>
                   </li>
                
                   <li>
                       <label for="create_bookmarks"><?php echo $this->_tpl_vars['kga']['lang']['xp_ext']['create_bookmarks']; ?>
:</label>
                       <input type="checkbox" value="true" name="create_bookmarks" id="create_bookmarks" <?php if ($this->_tpl_vars['prefs']['create_bookmarks']): ?>checked="checked"<?php endif; ?>/>
                   </li>
                
                   <li>
                       <label for="download_pdf"><?php echo $this->_tpl_vars['kga']['lang']['xp_ext']['download_pdf']; ?>
:</label>
                       <input type="checkbox" value="true" name="download_pdf" id="download_pdf" <?php if ($this->_tpl_vars['prefs']['download_pdf']): ?>checked="checked"<?php endif; ?>/>
                   </li>
                
                   <li>
                       <label for="customer_new_page"><?php echo $this->_tpl_vars['kga']['lang']['xp_ext']['customer_new_page']; ?>
:</label>
                       <input type="checkbox" value="true" name="customer_new_page" id="customer_new_page" <?php if ($this->_tpl_vars['prefs']['customer_new_page']): ?>checked="checked"<?php endif; ?>/>
                   </li>
                
                   <li>
                       <label for="reverse_order"><?php echo $this->_tpl_vars['kga']['lang']['xp_ext']['reverse_order']; ?>
:</label>
                       <input type="checkbox" value="true" name="reverse_order" id="reverse_order" <?php if ($this->_tpl_vars['prefs']['reverse_order']): ?>checked="checked"<?php endif; ?>/>
                   </li>
                
                   <li>
                       <label for="reverse_order"><?php echo $this->_tpl_vars['kga']['lang']['comment']; ?>
:</label>
                       <textarea name="document_comment" id="document_comment"></textarea>
                   </li>
                
                   <li>
                       <label for="axAction"><?php echo $this->_tpl_vars['kga']['lang']['xp_ext']['pdf_format']; ?>
:</label>
                       <select name="axAction" id="axAction">
                         <option value="export_pdf" <?php if ($this->_tpl_vars['prefs']['pdf_format'] == 'export_pdf'): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['kga']['lang']['xp_ext']['export_pdf']; ?>
</option>
                         <option value="export_pdf2" <?php if ($this->_tpl_vars['prefs']['pdf_format'] == 'export_pdf2'): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['kga']['lang']['xp_ext']['export_pdf2']; ?>
</option>
                       </select>
                   </li>
                   <li>
	 					<?php echo $this->_tpl_vars['kga']['lang']['xp_ext']['dl_hint']; ?>

					</li>
                 </ul>
                   



 

                <!-- <input name="id" type="hidden" value="" /> -->
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