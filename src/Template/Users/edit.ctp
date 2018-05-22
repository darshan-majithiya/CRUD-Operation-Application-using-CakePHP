<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Edit User') ?></legend>
        <?php
            echo $this->Form->control('email');
            echo $this->Form->control('password');
            echo $this->Form->control('phone');
        ?>
          <?= $this->Form->button(__('Update'), ['class'=>'btn btn-md btn-block btn-info']); ?>
    </fieldset>
    <?= $this->Form->end() ?>
</div>
