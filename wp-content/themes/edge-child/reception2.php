<table class="reception-table" style="width: 100%; border-collapse: collapse; border-style: solid; border-color: #231815; background-color: #ffffff;">
<tbody>


<?php $fields01 = CFS()->get( 'reception-day-loop2', 3364 ); ?>
<?php if ($fields01)://faq_loop が存在するとき ?>
   <?php foreach ( $fields01 as $field ):?>

	<tr>

		<td><?php echo $field['reception-day2']; ?></td>

		
		<?php
		$fields = $field['reception2'];//子ループ（ドロップダウンリスト）
		foreach ((array)$fields as $key => $label ):
		?>
		
		<td><?php echo $label; ?></td>

		<?php endforeach; ?>
		
		
		
		
	</tr>
     
   <?php endforeach; ?>
<?php endif; ?>








</tbody>
</table>