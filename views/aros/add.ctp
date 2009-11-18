<div class="actions">
	<ul>
        <?php echo $button->get_actions( array( 'index' ), array( 'tag' => 'li' ), 'large' ); ?>
	</ul>
</div>
<div class="aros form">
<?php echo $form->create( 'Aro' );?>
	<fieldset>
 		<legend><?php __( 'Add Aro' );?></legend>
	<?php
		echo $form->input( 'parent_id' );
		echo $form->input( 'model' );
		echo $form->input( 'foreign_key' );
		echo $form->input( 'alias' );
	?>
	</fieldset>
<?php echo $form->end( 'Submit' );?>
</div>