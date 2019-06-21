<?php if ($this->_var['cat_promotion'] && $this->_var['option']['cat_promotion_number'] > 0): ?>
<dl class="cat_promotion">
	<dt><?php echo $this->_var['lang']['cat_promotion_label']; ?></dt>
	<?php $_from = $this->_var['cat_promotion']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'promotion');$this->_foreach['promotion'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['promotion']['total'] > 0):
    foreach ($_from AS $this->_var['promotion']):
        $this->_foreach['promotion']['iteration']++;
?>
	<?php if (($this->_foreach['brands']['iteration'] - 1) < $this->_var['option']['cat_promotion_number']): ?>
	<dd><a href="<?php echo $this->_var['promotion']['url']; ?>"><?php echo $this->_var['promotion']['name']; ?></a></dd>
	<?php endif; ?>
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</dl>
<?php endif; ?>