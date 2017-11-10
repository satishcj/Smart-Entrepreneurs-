<?php
class ShareModel extends Model{
	public function Index(){
		$this->query('SELECT * FROM products ORDER BY create_date DESC');
		$rows = $this->resultSet();
		return $rows;
	}

	public function add(){
		// Sanitize POST
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		if($post['submit']){
			if($post['title'] == '' || $post['body'] == '' || $post['link'] == '' || $post['selling_price'] == '' || $post['cost_price'] == ''){
				Messages::setMsg('Please Fill In All Fields', 'error');
				return;
			}
			// Insert into MySQL
			$this->query('INSERT INTO products (product_name, product_id, quantity_available, cost_price,selling_price) VALUES(:product_name, :product_id, :quantity_available, :cost_price,:selling_price)');
			$this->bind(':product_name', $post['title']);
			$this->bind(':product_id', $post['body']);
			$this->bind(':quantity_available', $post['link']);
			$this->bind(':cost_price', $post['cost_price']);
			$this->bind(':selling_price', $post['selling_price']);
			$this->execute();
			
		}
		return;
	}
	
	public function view(){
		
		$this->query('SELECT * FROM PRODUCTS');
	  
		$products=$this->resultSet();
		
			foreach ($products as $product) {
				?>PRODUCT NAME:   <?php
				echo $product['product_name'];?></br> PRODUCT ID   : <?php
				echo $product['product_id'];?></br> QUANTITY AVAILABLE    :<?php
				echo $product['quantity_available'];?></br> COST PRICE    :<?php
				echo $product['cost_price'];?></br> SELLING PRICE         : <?php
				echo $product['selling_price'];?></br> <?php
	}
	return $products;
	   
		
		
	}
	
	

}
