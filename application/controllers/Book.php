<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Book extends CI_Controller{

    public function __construct()
    {
        parent::__construct(); //define the the Controller class is the parent.  
        $this->load->helper(array('url', 'form')); //load helper from CI
        $this->load->model('Book_model');// Load model for  entire class
        $this->load->library('cart'); //load shopping cart library Ci
        //including validation library
        $this->load->library('form_validation');                              
    }

    public function showBook(){
		$this->load->model('Book_model');
		$data['book']=$this->Book_model->showBooks();
		$data['page'] = 'book/show_product';
		$this->load->view('menu/content',$data);
	}
    
  public function add(){
        $this->load->model('Book_model');
        $insert_data = array(
            'id' => $this->input->post('productid'),
            'name' => $this->input->post('bname'),
			'price' => $this->input->post('price'),
			'qty' => 1
        );
        $this->cart->insert($insert_data);
        
       /* for insert_data to ordering table in Model
        $data = array(
            'productid' => $this->input->post('productid'),
            'name' => $this->input->post('bname'),
			'price' => $this->input->post('price'),
			'qty' => 1
        );
        $data['book']=$this->Book_model->insert_order($data);*/
        redirect('Book/showBook');
        
  }

  public function update_cart(){
       $cart_info =  $_POST['cart'] ;
 		foreach( $cart_info as $id => $cart)
		{
         $rowid = $cart['rowid'];   	
         $price = $cart['price'];
         $amount = $price * $cart['qty'];
         $qty = $cart['qty'];      
         $data = array(
		    'rowid'   => $rowid,
            'price'   => $price,
            'amount' =>  $amount,
			'qty'     => $qty
			);
             
			$this->cart->update($data);
		}
		redirect('Book/showBook');        
  }

public function remove($rowid) {
                    // Check rowid value.
		if ($rowid==="all"){
                       // Destroy data which store in  session.
			$this->cart->destroy();
		}else{
                    // Destroy selected rowid in session.
			$data = array(
                'rowid'   => $rowid,
				'qty'     => 0
			);
                     // Update cart data, after cancle.
			$this->cart->update($data);
		}
		
                 // This will show cancle data in cart.
		redirect('Book/showBook');
	}

    
    public function show_bill(){
        //LOAD 'SHOW_BILL'' VIEW
        $data['page'] = 'book/show_bill';
		$this->load->view('menu/content',$data);
        //print_r('you are flying to show bill view');
                  
    }
    public function save_order(){
        $customer = array(
			'name' 		=> $this->input->post('name'),
			'email' 	=> $this->input->post('email'),
			'address' 	=> $this->input->post('address'),
			'phone' 	=> $this->input->post('phone')
		);		
        //insert customer array to 'customer' table by insert_customer function in model
        $customer_id = $this->Book_model->insert_customer($customer);
        //array store order data 
        $order = array(
            'date'        => date('Y-m-d'),
            'customerid' => $customer_id
        );
        //insert order array to 'order' table by insert_order function in model
        $order_id = $this->Book_model-> insert_order($order); 

        if ($cart = $this->cart->contents()):
			foreach ($cart as $item):
				$order_detail = array(
					'orderid' 		=> $order_id,
					'productid' 	=> $item['id'],
					'quantity' 		=> $item['qty'],
					'price' 		=> $item['price']
				);	

            // Insert order detail array in 'order_detail' table by insert_order_detail function in model
		         $customer_id = $this->Book_model->insert_order_detail($order_detail);
			endforeach;
		endif;
	            
               $this->load->view('book/confirm_bill');
                    $this->session->sess_destroy();
               
                // finally, load bill confirmation view.
                
	}
    
    public function add_feedback()
      {
        $feedback = array(
          'customeremail'     => $this->input->post('customeremail'),
          'fcontent'           => $this->input->post('fcontent'),
          'category'           => $this->input->post('category'),
          'rate'           => $this->input->post('rate')
        );

        $comment_id = $this->Book_model->insert_feedback($feedback);
        redirect('book/showFeedback');
      }

    public function showFeedback(){
		$this->load->model('Book_model');
		$data['feedback']=$this->Book_model->showFeedbacks();
		$data['page'] = 'book/show_feedback';
		$this->load->view('menu/content',$data);
	}  
    public function login(){
        $this->load->model('Book_model');
		$data['login']=$this->Book_model->showLogin();
		$data['page'] = 'book/login';
		$this->load->view('menu/content',$data);
    }
    public function show(){
		$this->load->model('Book_model');
		$data['book']=$this->Book_model->getBook();
		$data['page'] = 'book/show';
		$this->load->view('menu/content',$data);
	}   

	public function addBook(){
		$this->load->model('Book_model'); //add model
		//Read date when button is pressed
		$btn = $this->input->post('btnSave');
		//add new csutomer to array
		if(isset($btn)){
			$insert_data = array(
                "id" =>$this->input->post('id'),
				"bname"=>$this->input->post('bname'),
				"price"=>$this->input->post('price'),
                "image"=>$this->input->post('image'),
                "description"=>$this->input->post('description')
			);
		$data['test'] = $this->Book_model->addBook($insert_data); // add and call function then send data
		
		}
		$data['page'] = 'book/addBook';
		$this->load->view('menu/content',$data);
	}
       public function deleteBook(){
		$this->load->model('Book_model'); //add model
		//This method will show the customers, then choose which one to delete
		$data['book']=$this->Book_model->getBook();
		$data['page'] = 'book/deleteBook';
		$this->load->view('menu/content',$data);
	}

	public function removeBook($id){ //chosen_id se hien thi trong /remove_customer/chosen_id khi hover link
		$this->load->model('Book_model'); //add model
		$this->Book_model->deleteBook($id);
		$this->show();
	}
	
}
