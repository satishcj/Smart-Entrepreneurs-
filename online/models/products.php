
<?php
//product model
class ProductsModel extends Model{
	
	public function addProducts(){
		// Sanitize POST
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		if($post['submit']){
			if($post['product_name'] == '' || $post['product_id'] == '' || $post['quantity_available'] == '' || $post['cost_price'] == '' || $post['selling_price'] == '') {
				Messages::setMsg('Please Fill In All Fields', 'error');
				return;
			}

			// Insert into MySQL
			$this->query('INSERT INTO products (product_name,product_id,quantity_available,cost_price,selling_price) VALUES(:product_name, :product_id, :quantity_available,:cost_price,:selling_price)');
			$this->bind(':product_name', $post['product_name']);
			$this->bind(':product_id', $post['product_id']);
			$this->bind(':quantity_available', $post['product_id']);
			$this->bind(':cost_price', $post['cost_price']);
			$this->bind(':selling_price', $post['selling_price']);
			$this->execute();
			// Verify
			//if($this->lastInsertId()){
				// Redirect
			//	header('Location: '.ROOT_URL.'users/login');
			//}
		}
		return;
		}
	
}

