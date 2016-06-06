<!-- File: /app/View/Posts/index.ctp -->

<h1>Blog posts</h1>

<p><?php echo $this->Html->link(
	'Add Post',
	array('controller' => 'post', 'action' => 'add')
); ?></p>


<table>
	<tr>
		<th>Id</th>
		<th>Title</th>
		<th>Created</th>
	</tr>

	<!-- ここから、$post配列をループして、投稿記事の情報を表示 -->

	<?php foreach ($post as $post_element): ?>
		<tr>
			<td><?php echo $post_element['Post']['id']; ?></td>
			<td>
				<?php echo $this->Html->link(mb_convert_encoding ($post_element['Post']['title'],"UTF-8","auto"),
				array('controller' => 'post', 'action' => 'view', $post_element['Post']['id'])); ?>
			</td>
			<td>
				<?php
					echo $this->Form->postLink(
						'Delete',
						array('action' => 'delete', $post_element['Post']['id']),
						array('confirm' => 'Are you sure?')
					);
				?>
				<?php
					echo $this->Html->link(
					'Edit',
					array('controller' => 'post','action' => 'edit', $post_element['Post']['id']));
				?>
			</td>
			<td><?php echo $post_element['Post']['created']; ?></td>
		</tr>
	<?php endforeach; ?>
	<?php unset($post); ?>
</table>
