<div class="acos view">
<h2><?php  __('Aco');?></h2>
<?php pr( $aco ); ?>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $aco['Aco']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Parent Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $aco['Aco']['parent_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Model'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $aco['Aco']['model']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Foreign Key'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $aco['Aco']['foreign_key']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Alias'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $aco['Aco']['alias']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Lft'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $aco['Aco']['lft']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Rght'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $aco['Aco']['rght']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Aco', true), array('action'=>'edit', $aco['Aco']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Aco', true), array('action'=>'delete', $aco['Aco']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $aco['Aco']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Acos', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Aco', true), array('action'=>'add')); ?> </li>
	</ul>
</div>
