<div class="actions">
	<ul>
    	 <?php echo $button->get_actions( array( 'add' ), array( 'tag' => 'li' ), 'large' ); ?>
	</ul>
</div>
<div class="aros index">
    <h2><?php __( 'Aros Manager' );?></h2>

    <?php echo $this->element( 'pagination/top' ); ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?php echo $paginator->sort( 'parent_id' );?></th>
            <th><?php echo $paginator->sort( 'model' );?></th>
            <th><?php echo $paginator->sort( 'foreign_key' );?></th>
        	<th class="actions"><?php __( 'Actions' );?></th>
        </tr>
        <?php
            $i = 0;
            foreach ( $aros as $aro )
            {
            	$class = null;
            	if ( $i++ % 2 == 0 ) { $class = ' class="altrow"'; } ?>
        		<tr<?php echo $class;?>>
        			<td>
        				<?php echo $aro['Aro']['parent_id']; ?>
            		</td>
        			<td>
        				<?php echo $aro['Aro']['model']; ?>
            		</td>
        			<td>
        				<?php echo $aro['Aro']['foreign_key']; ?>
            		</td>
        			<td class="actions">
        				<?php
        					echo $button->get_actions(
        							array( 'view', 'edit' ),
        							array( 'id' => $aro['Aro']['id'], 'name' => $aro['Aro']['model']
        						)
        					);
        				?>
        			</td>
        		</tr><?php
        	}
        ?>
    </table>
</div>
<?php echo $this->element( 'pagination/bottom' ); ?>