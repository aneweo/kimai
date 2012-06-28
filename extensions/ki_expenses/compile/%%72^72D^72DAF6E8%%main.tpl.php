<?php /* Smarty version 2.6.20, created on 2012-06-27 16:53:49
         compiled from main.tpl */ ?>
<?php echo '    
    <script type="text/javascript"> 
        $(document).ready(function() {
            exp_ext_onload();
        }); 
    </script>
'; ?>


<div id="exp_head">
    <div class="left">
    <?php if ($this->_tpl_vars['kga']['usr']): ?>
        <a href="#" onClick="floaterShow('../extensions/ki_expenses/floaters.php','add_edit_record',0,0,600,300); $(this).blur(); return false;"><?php echo $this->_tpl_vars['kga']['lang']['add']; ?>
</a>
    <?php endif; ?>
    </div>
    <table>
        <colgroup>
          <col class="options" />
          <col class="date" />
          <col class="time" />
          <col class="value" />
          <col class="refundable" />
          <col class="knd" />
          <col class="pct" />
          <col class="designation" />
        </colgroup>
        <tbody>
            <tr>
                <td class="option">&nbsp;</td>
                <td class="date"><?php echo $this->_tpl_vars['kga']['lang']['datum']; ?>
</td>
                <td class="time"><?php echo $this->_tpl_vars['kga']['lang']['timelabel']; ?>
</td>
                <td class="value"><?php echo $this->_tpl_vars['kga']['lang']['expense']; ?>
</td>
                <td class="refundable"><?php echo $this->_tpl_vars['kga']['lang']['refundable']; ?>
</td>
                <td class="knd"><?php echo $this->_tpl_vars['kga']['lang']['knd']; ?>
</td>
                <td class="pct"><?php echo $this->_tpl_vars['kga']['lang']['pct']; ?>
</td>
                <td class="designation"><?php echo $this->_tpl_vars['kga']['lang']['designation']; ?>
</td>
            </tr>
        </tbody>
    </table>
</div>

<div id="exp"><?php echo $this->_tpl_vars['exp_display']; ?>
 </div>