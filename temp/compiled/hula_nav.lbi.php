<?php if ($this->_var['nav']): ?>
<div class="nav">
	<ul class="level_1">
		<li class="level_1 first<?php if ($this->_var['pname'] == 'index'): ?> current<?php endif; ?>"><a href="<?php echo $this->_var['hu']; ?>" class="level_1"><strong><span><?php echo $this->_var['lang']['home']; ?></span></strong></a></li>
		<?php $_from = $this->_var['nav']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav_0_26582200_1377011187');$this->_foreach['nav'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav']['total'] > 0):
    foreach ($_from AS $this->_var['nav_0_26582200_1377011187']):
        $this->_foreach['nav']['iteration']++;
?>
		<li class="level_1<?php if ($this->_var['nav_0_26582200_1377011187']['active']): ?> current<?php endif; ?><?php if ($this->_var['nav_0_26582200_1377011187']['children']): ?> parent<?php endif; ?>">
			<a href="<?php echo $this->_var['nav_0_26582200_1377011187']['url']; ?>" class="level_1"<?php if ($this->_var['nav_0_26582200_1377011187']['opennew']): ?> rel="external"<?php endif; ?>><strong><span><?php echo $this->_var['nav_0_26582200_1377011187']['name']; ?></span></strong></a>
			<?php if ($this->_var['nav_0_26582200_1377011187']['children']): ?>
			<div class="sub_nav">
				<em class="arrow">&uarr;</em>
				<div class="inner">
					<ul class="level_2 clearfix">
						<?php $_from = $this->_var['nav_0_26582200_1377011187']['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');$this->_foreach['child'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['child']['total'] > 0):
    foreach ($_from AS $this->_var['child']):
        $this->_foreach['child']['iteration']++;
?>
						<li class="level_2<?php if (($this->_foreach['child']['iteration'] <= 1)): ?> first<?php endif; ?><?php if ($this->_var['child']['active']): ?> current<?php endif; ?>"><a href="<?php echo $this->_var['child']['url']; ?>" class="level_2"<?php if ($this->_var['child']['opennew']): ?> rel="external"<?php endif; ?>><span><?php echo $this->_var['child']['name']; ?></span></a></li>
						<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
					</ul>
				</div>
			</div>
			<?php endif; ?>
		</li>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	</ul>
</div>
<?php endif; ?>