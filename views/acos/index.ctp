<div class="actions">
	<ul>
    	 <?php echo $button->get_actions( array( 'add' ), array( 'tag' => 'li' ), 'large' ); ?>
	</ul>
</div>
<div class="acos index">
    <h2><?php __('Acos Manager');?></h2>
    <?php echo $this->element( 'pagination/top' ); ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?php echo $paginator->sort('parent_id');?></th>
            <th><?php echo $paginator->sort('alias');?></th>
        	<th class="actions"><?php __('Actions');?></th>
        </tr>
        <?php
            $i = 0;
            foreach ($acos as $aco)
            {
            	$class = null;
            	if ($i++ % 2 == 0) { $class = ' class="altrow"'; } ?>
        		<tr<?php echo $class;?>>
        			<td>
        				<?php echo $aco['Aco']['parent_id']; ?>
            		</td>
        			<td>
        				<?php echo $aco['Aco']['alias']; ?>
            		</td>
        			<td class="actions">
        				<?php
        					echo $button->get_actions(
        							array( 'view', 'edit', 'delete' ),
        							array( 'id' => $aco['Aco']['id'], 'name' => $aco['Aco']['rght']
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