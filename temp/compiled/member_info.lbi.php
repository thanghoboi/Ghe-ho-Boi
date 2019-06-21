<?php if ($this->_var['user_info']): ?>
<em><?php echo $this->_var['lang']['hello']; ?>&nbsp;<?php echo sub_str($this->_var['user_info']['username'],15); ?></em>
<a href="user.php" class="gotouser"><?php echo $this->_var['lang']['edit_user_info']; ?></a>
<a href="user.php?act=logout" class="logout"><?php echo $this->_var['lang']['user_logout']; ?></a>
<?php else: ?>
<em><?php echo $this->_var['lang']['welcome_to']; ?><?php echo $this->_var['shop_name']; ?><?php echo $this->_var['lang']['excla']; ?></em>
<a href="user.php?act=register" class="register"><?php echo $this->_var['lang']['reg_free']; ?></a>
<a href="user.php?act=login" class="login<?php if ($_GET['act'] != 'login' && $_GET['step'] != 'login'): ?> quick_login<?php endif; ?>"><?php echo $this->_var['lang']['login']; ?></a>
<?php endif; ?>