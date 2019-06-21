<div class="all_category box">
	<div class="bd<?php if ($this->_var['option']['hide_category_extra']): ?> hide_extra<?php endif; ?>">
		<ul class="level_1 clearfix">
			<?php $_from = get_categories_tree(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');$this->_foreach['categories'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['categories']['total'] > 0):
    foreach ($_from AS $this->_var['cat']):
        $this->_foreach['categories']['iteration']++;
?>
			<li class="level_1<?php if (($this->_foreach['categories']['iteration'] <= 1)): ?> first<?php endif; ?>">
				<a href="<?php echo $this->_var['cat']['url']; ?>" class="level_1"><span><?php echo $this->_var['cat']['name']; ?></span></a>
				<?php if ($this->_var['cat']['cat_id']): ?>
				<div class="sub_cat_lv1">
					<div class="inner_lv1">
						<ul class="level_2 clearfix">
							<?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child_0_31499700_1377011187');$this->_foreach['child_cat'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['child_cat']['total'] > 0):
    foreach ($_from AS $this->_var['child_0_31499700_1377011187']):
        $this->_foreach['child_cat']['iteration']++;
?>
							<li class="level_2 clearfix<?php if (($this->_foreach['child_cat']['iteration'] <= 1)): ?> level_2_first<?php endif; ?>">
								<a href="<?php echo $this->_var['child_0_31499700_1377011187']['url']; ?>" class="level_2"><span><?php echo $this->_var['child_0_31499700_1377011187']['name']; ?></span></a>
								<?php if ($this->_var['child_0_31499700_1377011187']['cat_id']): ?>
								<div class="sub_cat_lv2">
									<div class="inner_lv2">
										<div class="arrow"></div>
										<ul class="level_3 clearfix">
											<?php $_from = $this->_var['child_0_31499700_1377011187']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'childer');$this->_foreach['childer_cat'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['childer_cat']['total'] > 0):
    foreach ($_from AS $this->_var['childer']):
        $this->_foreach['childer_cat']['iteration']++;
?>
											<li class="level_3"><a href="<?php echo $this->_var['childer']['url']; ?>" class="level_3"><span><?php echo $this->_var['childer']['name']; ?></span></a></li>
											<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
										</ul>
									</div>
								</div>
								<?php endif; ?>
							</li>
							<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
						</ul>
						<div class="level_2_extra">
							<?php 
$k = array (
  'name' => 'cat_brands',
  'cat_id' => $this->_var['cat']['id'],
  'cat_name' => $this->_var['cat']['name'],
);
$plugin = 'hula_'.$k['name'];
if (function_exists($plugin)) {
	echo $plugin($k);
} else {
	echo "<!-- error: ".$k['name']." not installed -->";
}
?>
							<?php 
$k = array (
  'name' => 'cat_promotion',
  'cat_id' => $this->_var['cat']['id'],
);
$plugin = 'hula_'.$k['name'];
if (function_exists($plugin)) {
	echo $plugin($k);
} else {
	echo "<!-- error: ".$k['name']." not installed -->";
}
?>
						</div>
					</div>
				</div>
				<?php endif; ?>
			</li>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		</ul>
		<p><a href="catalog.php" class="all"><?php echo $this->_var['lang']['all_category']; ?></a></p>
	</div>
</div>
