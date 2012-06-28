<?php /* Smarty version 2.6.20, created on 2012-06-27 16:53:50
         compiled from main.tpl */ ?>
<?php echo '    
    <script type="text/javascript"> 
        $(document).ready(function() {
            xp_ext_onload();
        }); 
    </script>
'; ?>



<div id="xp_head">
    <div class="right">
	        <a href="#" onClick="$('#xptable td.cleared>a').click(); return false;">invert</a>
    </div>

    <table>
        <colgroup>
          <col class="date" />
          <col class="from" />
          <col class="to" />
          <col class="time" />
          <col class="dec_time" />
          <col class="rate" />
          <col class="wage" />
          <col class="knd" />
          <col class="pct" />
          <col class="evt" />
          <col class="comment" />
          <col class="location" />
          <col class="trackingnr" />
          <col class="user" />
        </colgroup>
        <tbody>
            <tr>
                <td class="date <?php if ($this->_tpl_vars['disabled_columns']['date']): ?>disabled<?php endif; ?>"><a onClick="xp_toggle_column('date');"><?php echo $this->_tpl_vars['kga']['lang']['datum']; ?>
</a></td>
                <td class="from <?php if ($this->_tpl_vars['disabled_columns']['from']): ?>disabled<?php endif; ?>"><a onClick="xp_toggle_column('from');"><?php echo $this->_tpl_vars['kga']['lang']['in']; ?>
</a></td>
                <td class="to <?php if ($this->_tpl_vars['disabled_columns']['to']): ?>disabled<?php endif; ?>"><a onClick="xp_toggle_column('to');"><?php echo $this->_tpl_vars['kga']['lang']['out']; ?>
</a></td>
                <td class="time <?php if ($this->_tpl_vars['disabled_columns']['time']): ?>disabled<?php endif; ?>"><a onClick="xp_toggle_column('time');"><?php echo $this->_tpl_vars['kga']['lang']['time']; ?>
</a></td>
                <td class="dec_time <?php if ($this->_tpl_vars['disabled_columns']['dec_time']): ?>disabled<?php endif; ?>"><a onClick="xp_toggle_column('dec_time');"><?php echo $this->_tpl_vars['kga']['lang']['timelabel']; ?>
</a></td>
                <td class="rate"><a class="rate <?php if ($this->_tpl_vars['disabled_columns']['rate']): ?>disabled<?php endif; ?>" onClick="xp_toggle_column('rate');"><?php echo $this->_tpl_vars['kga']['lang']['rate_short']; ?>
</a></td>
                <td class="wage"><a class="wage <?php if ($this->_tpl_vars['disabled_columns']['wage']): ?>disabled<?php endif; ?>" onClick="xp_toggle_column('wage');"><?php echo $this->_tpl_vars['kga']['lang']['total']; ?>
</a></td>
                <td class="knd <?php if ($this->_tpl_vars['disabled_columns']['knd']): ?>disabled<?php endif; ?>"><a onClick="xp_toggle_column('knd');"><?php echo $this->_tpl_vars['kga']['lang']['knd']; ?>
</a></td>
                <td class="pct <?php if ($this->_tpl_vars['disabled_columns']['pct']): ?>disabled<?php endif; ?>"><a onClick="xp_toggle_column('pct');"><?php echo $this->_tpl_vars['kga']['lang']['pct']; ?>
</a></td>
                <td class="evt <?php if ($this->_tpl_vars['disabled_columns']['evt']): ?>disabled<?php endif; ?>"><a onClick="xp_toggle_column('evt');"><?php echo $this->_tpl_vars['kga']['lang']['evt']; ?>
</a></td>

                <td class="moreinfo" colspan="3">
					<a class="comment <?php if ($this->_tpl_vars['disabled_columns']['comment']): ?>disabled<?php endif; ?>" onClick="xp_toggle_column('comment');"><?php echo $this->_tpl_vars['kga']['lang']['comment']; ?>
</a>,
	                <a class="location <?php if ($this->_tpl_vars['disabled_columns']['location']): ?>disabled<?php endif; ?>" onClick="xp_toggle_column('location');"><?php echo $this->_tpl_vars['kga']['lang']['zlocation']; ?>
</a>,
	                <a class="trackingnr <?php if ($this->_tpl_vars['disabled_columns']['trackingnr']): ?>disabled<?php endif; ?>" onClick="xp_toggle_column('trackingnr');"><?php echo $this->_tpl_vars['kga']['lang']['trackingnr']; ?>
</a>
				</td>
				
                <td class="user <?php if ($this->_tpl_vars['disabled_columns']['user']): ?>disabled<?php endif; ?>"><a onClick="xp_toggle_column('user');"><?php echo $this->_tpl_vars['kga']['lang']['username']; ?>
</a></td>
            </tr>
        </tbody>
    </table>
</div>

<div id="xp"><?php echo $this->_tpl_vars['table_display']; ?>
 </div>