<li>
  <a href="/profile" class="i user" data-gravatar-src="http://www.gravatar.com/avatar/<?php echo md5( strtolower( trim( $this->Session->read('Auth.User.email') ) ) ); ?>?s=24">
    <?php echo $this->Session->read('Auth.User.username'); ?>
  </a>
</li>
<li><?php echo $this->Html->link('Sign Out', array('controller'=>'users','action'=>'logout')); ?></li>

<?php if ($this->Session->read('Auth.User.is_admin')) : ?>
<li><?php echo $this->Html->link('Site Admin', array('controller'=>'admin','action'=>'index')); ?></li>
<li><?php echo $this->Html->link('Themes', array('controller'=>'themes','action'=>'index')); ?></li>
<?php endif; ?>

