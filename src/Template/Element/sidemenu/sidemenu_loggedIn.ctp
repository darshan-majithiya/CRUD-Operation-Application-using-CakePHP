<!-- SIDE MENU FOR WHEN USER IS LOGGED IN -->

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li role="separator" class="divider"></li>
        <li><?= $this->Html->link(__('List '.$viewName.'s'), ['action' => 'index']) ?></li>
        <?php if($this->view == 'view' AND $isUserAuthorized) { ?>
          <li role="separator" class="divider"></li>
          <li><?= $this->Html->link(__('Edit '.$viewName), ['action' => 'edit', $user->id]) ?> </li>
          <li role="separator" class="divider"></li>
          <li><?= $this->Form->postLink(__('Delete '.$viewName), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <?php } ?>
        <li role="separator" class="divider"></li>
        <li><?= $this->Html->link(__('New '.$viewName), ['action' => 'add']) ?></li>
        <li role="separator" class="divider"></li>


    </ul>
</nav>
