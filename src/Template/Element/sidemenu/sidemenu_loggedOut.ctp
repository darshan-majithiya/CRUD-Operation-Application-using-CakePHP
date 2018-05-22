<!-- SIDE MENU FOR WHEN USER IS LOGGED OUT -->
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li role="separator" class="divider"></li>  
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Login'), ['action' => 'login']) ?></li>
        <li><?= $this->Html->link(__('Sign up'), ['action' => 'signup']) ?></li>
        <li role="separator" class="divider"></li>
    </ul>
</nav>
