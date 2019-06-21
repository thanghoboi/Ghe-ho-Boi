<?php if ($this->_var['cat_brands'] && $this->_var['option']['cat_brands_number'] > 0): ?>
<dl class="cat_brands">
	<dt><?php echo $this->_var['lang']['cat_brands_label']; ?></dt>
	<?php $_from = $this->_var['cat_brands']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brand');$this->_foreach['brands'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['brands']['total'] > 0):
    foreach ($_from AS $this->_var['brand']):
        $this->_foreach['brands']['iteration']++;
?>
	<?php if (($this->_foreach['brands']['iteration'] - 1) < $this->_var['option']['cat_brands_number']): ?>
	<dd><a href="<?php echo $this->_var['brand']['url']; ?>"><?php echo $this->_var['brand']['brand_name']; ?></a></dd>
	<?php endif; ?>
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</dl>
<?php endif; ?>