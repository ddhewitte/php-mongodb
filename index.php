<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet">
<?php

require_once('config.php');

//where and sort option
$filter = [];
$options = [
    'sort' => ['_id' => -1],
];
//execute get  query
$query = new MongoDB\Driver\Query($filter, $options);
$row = $manager->executeQuery('shop.produk', $query);

echo '<h1>My Shop</h1>';
echo 'This is our product list using no sql : <br><br>';

echo '<table class="table table-bordered">
   <thead>

      <tr>
            <th>#</th>

            <th>Nama</th>

            <th>Jenis</th>

             <th>Deskripsi</th>
			 
             <th>Stok</th>
			 
             <th>Garansi</th>
    
            <th>Action</th>

      </tr>
  
   </thead>';

foreach($row as $data){
	echo '<tr>';
		echo '<td>'.$data->_id.'</td>';
		echo '<td>'.$data->nama.'</td>';
		echo '<td>'.$data->jenis.'</td>';
		echo '<td>'.$data->deskripsi.'</td>';
		echo '<td>'.$data->stok.'</td>';
		echo '<td>'.$data->garansi.'</td>';
		echo '<td>...</td>';
	echo '</tr>';
}	

echo '</table>';
?>