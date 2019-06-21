<div class="new_articles box">
	<div class="hd"><h3><?php echo $this->_var['lang']['new_article']; ?></h3><div class="extra"></div></div>
	<div class="bd">	
		<ul class="text_list">
			<?php $_from = $this->_var['new_articles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'article');$this->_foreach['new_articles'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['new_articles']['total'] > 0):
    foreach ($_from AS $this->_var['article']):
        $this->_foreach['new_articles']['iteration']++;
?>
			<li<?php if (($this->_foreach['new_articles']['iteration'] <= 1)): ?> class="first"<?php endif; ?>><a href="<?php echo $this->_var['article']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['article']['title']); ?>"><?php echo htmlspecialchars($this->_var['article']['short_title']); ?></a></li>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		</ul>
	</div>
</div>