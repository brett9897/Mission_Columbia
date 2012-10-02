<h2>Dashboard</h2>
<hr/>
<p>Welcome! You logged in!</p>
<div>
  <?php echo $this->Html->link('Logout', array('controller' => 'users',
                                               'action' => 'logout')
                              );
  ?>
</div>
