<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>购物车</title>
</head>
<body>
	
	<table>
		<tr>
			<th>序号</th>
			<th>商品名</th>
			<th>价格</th>
			<th>数量</th>
			<th>操作</th>
		</tr>

		<?php foreach($list as $v):?>
			<tr>
				<td><?php echo $v['id']?></td>
				<td><?php echo $v['gname']?></td>
				<td><?php echo $v['price']?></td>
				<td><?php echo $v['num']?></td>
				<td>
					<a href="">删除</a>

					<a href="./action.php?gid=<?php echo $v['id']?>&num=1">+</a>
					<a href="./action.php?gid=<?php echo $v['id']?>&num=-1">-</a>
				</td>
				
			</tr>
		<?php endforeach;?>
	</table>
</body>
</html>