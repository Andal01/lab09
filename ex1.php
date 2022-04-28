<?php
	function mult($x, $y) {
		$z = $x * $y;
		return $z;
	}
	$data = array_fill(0, 100, range(0, 100, 1)); 
	$base = range(1, 100, 1);
	for($i = 0; $i < 100; $i++){	
		for($x = 0; $x < 100; $x++){
			if($x == 0){
				$data[$i][$x] = $base[$i];
			}else{
				$data[$i][$x] = mult($base[$i], $data[0][$x]);
			}
		}
	}
	
?>
<?php if (count($data) > 0): ?>
<table>
  <thead>
    <tr>
      <th><?php echo implode('</th><th>', array_keys(current($data))); ?></th>
    </tr>
  </thead>
  <tbody>
<?php foreach ($data as $row): array_map('htmlentities', $row); ?>
    <tr>
      <td><?php echo implode('</td><td>', $row); ?></td>
    </tr>
<?php endforeach; ?>
  </tbody>
</table>
<?php endif; ?>
