<?php echo $this->_var['render']['before_footer']; ?>
<div id="footer">
	<div class="container">
		<?php echo $this->fetch('library/links.lbi'); ?>
		<div class="footer_listing box thin_box full_box">
			<div class="hd"><h3></h3><div class="extra"></div></div>
			<div class="bottom_nav_wrapper clearfix">
				<p class="bottom_nav"><?php if ($this->_var['navigator_list']['bottom']): ?><?php $_from = $this->_var['navigator_list']['bottom']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav_0_54389800_1377011187');$this->_foreach['nav_bottom_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_bottom_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav_0_54389800_1377011187']):
        $this->_foreach['nav_bottom_list']['iteration']++;
?><a href="<?php echo $this->_var['nav_0_54389800_1377011187']['url']; ?>"<?php if ($this->_var['nav_0_54389800_1377011187']['opennew'] == 1): ?> rel="external"<?php endif; ?> class="<?php if (($this->_foreach['nav_bottom_list']['iteration'] <= 1)): ?>first<?php endif; ?><?php if (($this->_foreach['nav_bottom_list']['iteration'] - 1) >= $this->_var['option']['bottom_navigator_number']): ?> hidden<?php endif; ?>"><?php echo $this->_var['nav_0_54389800_1377011187']['name']; ?></a><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?><?php endif; ?></p>
				<a href="#top" class="back_to_top"><?php echo $this->_var['lang']['back_to_top']; ?></a>
			</div>
			<div class="bd">
				<div class="inner clearfix">
					<div class="contact">
						<h4><?php echo $this->_var['lang']['contact_information']; ?></h4>
						<?php if ($this->_var['service_phone']): ?><p class="tel"><?php echo $this->_var['service_phone']; ?></p><?php endif; ?>
						<?php if ($this->_var['service_email']): ?><p><?php echo $this->_var['lang']['email']; ?><?php echo $this->_var['lang']['colon']; ?><?php echo $this->_var['service_email']; ?></p><?php endif; ?>
						<?php if ($this->_var['shop_address']): ?><p><?php echo $this->_var['shop_address']; ?></p><?php endif; ?>
						<?php $_from = $this->_var['qq']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');$this->_foreach['im'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['im']['total'] > 0):
    foreach ($_from AS $this->_var['im']):
        $this->_foreach['im']['iteration']++;
?>
						<?php if ($this->_var['im']): ?><?php if (($this->_foreach['im']['iteration'] <= 1)): ?><p><?php endif; ?><a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $this->_var['im']; ?>&site=qq&menu=yes" rel="external"><img src="http://wpa.qq.com/pa?p=2:<?php echo $this->_var['im']; ?>:41" alt="QQ" /><?php echo $this->_var['im']; ?></a><?php if (($this->_foreach['im']['iteration'] == $this->_foreach['im']['total'])): ?></p><?php endif; ?><?php endif; ?>
						<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
						<?php $_from = $this->_var['ww']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');$this->_foreach['im'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['im']['total'] > 0):
    foreach ($_from AS $this->_var['im']):
        $this->_foreach['im']['iteration']++;
?>
						<?php if ($this->_var['im']): ?><?php if (($this->_foreach['im']['iteration'] <= 1)): ?><p><?php endif; ?><a href="http://amos1.taobao.com/msg.ww?v=2&uid=<?php echo urlencode($this->_var['im']); ?>&s=2" rel="external"><img src="http://amos1.taobao.com/online.ww?v=2&uid=<?php echo urlencode($this->_var['im']); ?>&s=2" alt="WangWang" /><?php echo $this->_var['im']; ?></a><?php if (($this->_foreach['im']['iteration'] == $this->_foreach['im']['total'])): ?></p><?php endif; ?><?php endif; ?>
						<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
						<?php $_from = $this->_var['ym']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');$this->_foreach['im'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['im']['total'] > 0):
    foreach ($_from AS $this->_var['im']):
        $this->_foreach['im']['iteration']++;
?>
						<?php if ($this->_var['im']): ?><?php if (($this->_foreach['im']['iteration'] <= 1)): ?><p><?php endif; ?><a href="http://edit.yahoo.com/config/send_webmesg?.target=<?php echo $this->_var['im']; ?>n&.src=pg" rel="external"><img src="static/img/icon/yahoo.gif" alt="Yahoo Messenger" /><?php echo $this->_var['im']; ?></a><?php if (($this->_foreach['im']['iteration'] == $this->_foreach['im']['total'])): ?></p><?php endif; ?><?php endif; ?>
						<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
						<?php $_from = $this->_var['msn']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');$this->_foreach['im'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['im']['total'] > 0):
    foreach ($_from AS $this->_var['im']):
        $this->_foreach['im']['iteration']++;
?>
						<?php if ($this->_var['im']): ?><?php if (($this->_foreach['im']['iteration'] <= 1)): ?><p><?php endif; ?><a href="msnim:chat?contact=<?php echo $this->_var['im']; ?>" rel="external"><img src="static/img/icon/msn.gif" alt="MSN" /><?php echo $this->_var['im']; ?></a><?php if (($this->_foreach['im']['iteration'] == $this->_foreach['im']['total'])): ?></p><?php endif; ?><?php endif; ?>
						<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
						<?php $_from = $this->_var['skype']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');$this->_foreach['im'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['im']['total'] > 0):
    foreach ($_from AS $this->_var['im']):
        $this->_foreach['im']['iteration']++;
?>
						<?php if ($this->_var['im']): ?><?php if (($this->_foreach['im']['iteration'] <= 1)): ?><p><?php endif; ?><a href="skype:<?php echo urlencode($this->_var['im']); ?>?call" rel="external"><img src="http://mystatus.skype.com/smallclassic/<?php echo urlencode($this->_var['im']); ?>" alt="Skype" /><?php echo $this->_var['im']; ?></a><?php if (($this->_foreach['im']['iteration'] == $this->_foreach['im']['total'])): ?></p><?php endif; ?><?php endif; ?>
						<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
					</div>
					<div class="articles">
					<?php $_from = $this->_var['helps']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'help_cat');$this->_foreach['helps'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['helps']['total'] > 0):
    foreach ($_from AS $this->_var['help_cat']):
        $this->_foreach['helps']['iteration']++;
?>
					<?php if (($this->_foreach['helps']['iteration'] - 1) < 5): ?>
					<dl<?php if (($this->_foreach['helps']['iteration'] <= 1)): ?> class="first"<?php endif; ?>>
						<dt><a href="<?php echo $this->_var['help_cat']['cat_id']; ?>"><?php echo $this->_var['help_cat']['cat_name']; ?></a></dt>
						<?php $_from = $this->_var['help_cat']['article']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');$this->_foreach['help_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['help_list']['total'] > 0):
    foreach ($_from AS $this->_var['item']):
        $this->_foreach['help_list']['iteration']++;
?>
						<?php if (($this->_foreach['help_list']['iteration'] - 1) < 5): ?>
						<dd><a href="<?php echo $this->_var['item']['url']; ?>"><?php echo $this->_var['item']['short_title']; ?></a></dd>
						<?php endif; ?>
						<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
					</dl>
					<?php endif; ?>
					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
					</div>
				</div>
			</div>
		</div>
		<p class="copyright"><?php echo $this->_var['copyright']; ?><?php if ($this->_var['icp_number']): ?><a href="http://www.miibeian.gov.cn/" rel="external"><?php echo $this->_var['icp_number']; ?></a><?php endif; ?></p>
		<p class="credits">Powered by <a href="http://www.ecshop.com/" rel="external">ECShop</a> &amp; <a href="http://www.thietkewebecshop.com/" rel="external">thietkewebecshop</a></p>
	</div>
</div>
<?php echo $this->_var['render']['after_footer']; ?>