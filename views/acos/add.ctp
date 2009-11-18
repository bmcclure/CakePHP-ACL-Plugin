<div class="actions">
	<ul>
        <?php echo $button->get_actions( array( 'index' ), array( 'tag' => 'li' ), 'large' ); ?>
	</ul>
</div>
<div class="acos form">
<?php echo $form->create( 'Aco' );?>
	<fieldset>
 		<legend><?php __( 'Add Aco' );?></legend>
	<?php
		echo $form->input( 'parent_id' );
		echo $form->input( 'model' );
		echo $form->input( 'foreign_key' );
		echo $form->input( 'alias' );
	?>
	</fieldset>
<?php echo $form->end( 'Submit' );?>
</div>