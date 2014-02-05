<div class="uploads form">
<?php echo $this->Form->create('Upload', array('action' => 'add', 'type' => 'file')); ?>
<fieldset>
<legend>
<?php echo __('Add Upload'); ?></legend>
<?php echo $this->Form->file('file'); ?>
<?php echo $this->Form->input('book_id', array('type'=>'hidden', 'value'=>$this->data['Book']['id'])); ?>
</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div><!-- form -->
