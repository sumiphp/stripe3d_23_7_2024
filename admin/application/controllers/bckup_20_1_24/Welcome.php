<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
        parent::__construct();         
		 $this->load->library('session'); 
         $this->load->model('Servicesmodel','sm');
		 $this->load->library("pagination");
		 $this->load->library('upload');
		 $this->load->database();
		 //$this->session->keep_flashdata('flash_msg'); 		 
		

    }


	public function index()
	{
		//$this->load->view('welcome_message');

		$this->load->model('Servicesmodel');
		$data['contactus']=$this->sm->get_contactus();
		//$data['newsletter']=$this->sm->get_newsletter();
		$data['siteinf']=$this->sm->get_siteinf();
		$this->load->view('services/sign-in',$data);





	}

public function services(){	
	$this->load->model('Servicesmodel');
	$data['contactus']=$this->sm->get_contactus();
	//$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	$this->load->view('services/sign-in',$data);
} 


public function dashboard(){	
	$this->load->model('Servicesmodel');
	//echo $this->session->userdata('username');
	/*$this->db->select('*');
	$this->db->from('category');
	$query = $this->db->get();
	$data['rowcountcat'] = $query->num_rows();*/

	$this->db->select('*');
	$this->db->from('newslettersubscribe');
	$query = $this->db->get();
	$data['rowcountsub'] = $query->num_rows();


	/*$this->db->select('*');
	$this->db->from('blogcontents');
	$query = $this->db->get();
	$data['rowcountblog'] = $query->num_rows();*/

	$this->db->select('*');
	$this->db->from('contactenquiries');
	$query = $this->db->get();
	$data['rowcountcontactenquiries'] = $query->num_rows();

	/*$this->db->select('*');
	$this->db->from('enquiries');
	$query = $this->db->get();
	$data['rowcountenquiries'] = $query->num_rows();

	$this->db->select('*');
	$this->db->from('testimonials');
	$query = $this->db->get();
	$data['rowcounttestimonials'] = $query->num_rows();*/


	$this->db->from('contactus');
    $query = $this->db->get();
    $data['resultphone']=$query->row();

	$data['contactus']=$this->sm->get_contactus();
	if( $this->session->has_userdata('username')) {
					
			  }
			  else{
				redirect("welcome/services");
			  }
			 // $data['newsletter']=$this->sm->get_newsletter();
			  $data['siteinf']=$this->sm->get_siteinf();
	$this->load->view('services/dashboard',$data);
} 


public function loginprocess(){
	$services=$this->load->model('Servicesmodel');
	$this->load->library('session');
	$username=$this->input->post('username');
	$password=$this->input->post('password');	
	$pass=md5($password);
	//echo 
	//die;
	
    $user_detail=$this->sm->get_user($username,$pass);
	//die;
	 if ($user_detail==1){
		$this->session->set_userdata('username','admin');
		redirect("welcome/dashboard");
	 }else {
		$this->session->set_flashdata('flash_msg', 'Invalid User name and Password');
		redirect("welcome/services");
	 }
} 


public function logout(){
	$this->load->model('Servicesmodel');
	$this->session->sess_destroy();
	redirect("welcome/services");
}




public function listenquiries(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
$config = array();
$config["base_url"] = base_url() . "Welcome/listenquiries";
$config["total_rows"] = $this->sm->get_countenquiries();
$config["per_page"] = 10;
$config["uri_segment"] = 3;
$this->pagination->initialize($config);
$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
$data["links"] = $this->pagination->create_links();	
$data['result']=$this->sm->get_enquiries($config["per_page"],$page);
$this->db->from('contactus');
    $query = $this->db->get();
    $data['resultphone']=$query->row();
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
$this->load->view('services/listenquiries',$data);	
}


public function deleteenquiries(){
	$id=$_GET['id'];
	$this->db->where('enquiryid',$id);
	$this->db->delete('enquiries');
	echo ($this->db->affected_rows() != 1) ? 'Error in deleting Enquiries' : 'Enquiries deleted Successfully';
}

public function deletecontactenquiries(){
	$id=$_GET['id'];
	$this->db->where('enquiryid',$id);
	$this->db->delete('contactenquiries');
	echo ($this->db->affected_rows() != 1) ? 'Error in deleting Contact Enquiries' : 'Contact Enquiries deleted Successfully';

}


public function deletepayments(){
	$id=$_GET['id'];
	$this->db->where('id',$id);
	$this->db->delete('payments');
	echo ($this->db->affected_rows() != 1) ? 'Error in deleting Payments' : 'Payments deleted Successfully';

}


public function listcontactenquiries(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
$config = array();
$config["base_url"] = base_url() . "Welcome/listcontactenquiries";
$config["total_rows"] = $this->sm->get_countcontactenquiries();
$config["per_page"] = 10;
$config["uri_segment"] = 3;
$this->pagination->initialize($config);
$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
$data["links"] = $this->pagination->create_links();	
$data['result']=$this->sm->get_contactenquiries($config["per_page"],$page);
$this->db->from('contactus');
    $query = $this->db->get();
    $data['resultphone']=$query->row();	
	$data['contactus']=$this->sm->get_contactus();
	//$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
$this->load->view('services/listcontactenquiries',$data);
}


public function listpayments(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
$config = array();
$config["base_url"] = base_url() . "Welcome/listpayments";
$config["total_rows"] = $this->sm->get_countpayments();
$config["per_page"] = 10;
$config["uri_segment"] = 3;
$this->pagination->initialize($config);
$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
$data["links"] = $this->pagination->create_links();	
$data['result']=$this->sm->get_payments($config["per_page"],$page);
$this->db->from('contactus');
    $query = $this->db->get();
    $data['resultphone']=$query->row();	
	$data['contactus']=$this->sm->get_contactus();
	//$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
$this->load->view('services/listpayments',$data);
}


















function editaboutus(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	$this->db->from('aboutus');
    $query = $this->db->get();
    $data['result']=$query->row(); 
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	$this->load->view('services/editaboutus',$data);

}




public function addservicesprocess(){

	$config['upload_path'] = 'uploads';
	$config['allowed_types'] = 'gif|jpg|png|jpeg';	
	$config['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if (isset($_FILES['image1']['name'])) {
		if (0 < $_FILES['image1']['error']) {
			echo 'Error during file upload' . $_FILES['image1']['error'];
		} else {
			if (file_exists('uploads/' . $_FILES['image1']['name'])) {
				echo 'File already exists : uploads/' . $_FILES['image1']['name'];
			} else {
				
				if (!$this->upload->do_upload('image1')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
	} else {
		echo 'Please choose a file';
	}
	
	

	if (isset($_FILES['image2']['name'])) {
		if (0 < $_FILES['image2']['error']) {
			echo 'Error during file upload' . $_FILES['image2']['error'];
		} else {
			if (file_exists('uploads/' . $_FILES['image2']['name'])) {
				echo 'File already exists : uploads/' . $_FILES['image2']['name'];
			} else {
				
				if (!$this->upload->do_upload('image2')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
	} else {
		echo 'Please choose a file';
	}
	$image1=$_FILES['image1']['name'];
	$image2=$_FILES['image2']['name'];

	 $maintitle=$this->input->post('maintitle');
	 $subtitle=$this->input->post('subtitle');
	 $description=$this->input->post('description');
	 $data = array(
		 'maintitle' =>"$maintitle",
		 'subtitle' =>"$subtitle",
		 'description'=>"$description",
		 'Image1'=>$image1,'Image2'=>$image2		
	  );
	  //print_r($data);
	  $this->db->insert('services', $data);

	  echo ($this->db->affected_rows() != 1) ? 'Error in Adding Product Services' : '<b>Product Services added Successfully</b>';


}

public function addfaqprocess(){
	$faqtitle=$this->input->post('faqtitle');
	$status=$this->input->post('status');

	$description=$this->input->post('description');
	$data = array(
		'faqtitle' =>"$faqtitle",
		//'subtitle' =>"$subtitle",
		'faqdescription'=>"$description"
		,'active'=>"$status"
	 );
	 //print_r($data);
	 $this->db->insert('faq', $data);

	 echo ($this->db->affected_rows() != 1) ? 'Error in Adding Faq' : '<b>Faq added Successfully</b>';
}

public function addmenuprocess(){

	if (isset($_FILES['image1']['name'])){
		$file_name=$_FILES['image1']['name'];
	//$new_name = time().$file_name;
	$ext=pathinfo($_FILES["image1"]["name"], PATHINFO_EXTENSION);
	$new_name = time().'menu'.'.'.$ext;
	$config['file_name'] = $new_name;
	$config['upload_path'] = 'uploads/menu';
	$config['allowed_types'] = 'gif|jpg|png|jpeg';	
	$config['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if (isset($_FILES['image1']['name'])) {
		if (0 < $_FILES['image1']['error']) {
			echo 'Error during file upload' . $new_name;
		} else {
			if (file_exists('uploads/menu' . $new_name)) {
				echo 'File already exists : uploads/menu' . $new_name;
			} else {
				
				if (!$this->upload->do_upload('image1')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
	} else {
		//echo 'Please choose a file';
	}

	$image1=$new_name;
}else{
	$image1='';
}


	$alttag1=$this->input->post('alttag1');

	$menuname=$this->input->post('menuname');
	$menutype=$this->input->post('menutype');
	$menuurl=$this->input->post('menuurl');
	$status=$this->input->post('status');
	$pmenu=$this->input->post('pmenu');
	$orderno=$this->input->post('orderno');
	$data = array(
		'orderno' =>"$orderno",
		'menuname' =>"$menuname",
		'menutype' =>"$menutype",
		'url'=>"$menuurl",
		'status'=>$status,'parentmenuid'=>$pmenu,'menuimg'=>$image1,'alttagimg1'=>$alttag1		
	 );
	 //print_r($data);
	 $this->db->insert('menus', $data);

	 echo ($this->db->affected_rows() != 1) ? 'Error in Adding Menu' : '<b>Menu added Successfully</b>';


}

public function editmenuprocess(){

	if ($_FILES['image1']['name']!=''){

		$ext=pathinfo($_FILES["image1"]["name"], PATHINFO_EXTENSION);
	$new_name = time().'menu'.'.'.$ext;
	$config['file_name'] = $new_name;
	
	$config['upload_path'] = 'uploads/menu';
	$config['allowed_types'] = 'gif|jpg|png|jpeg';	
	$config['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if (isset($_FILES['image1']['name'])) {
		if (0 < $_FILES['image1']['error']) {
			echo 'Error during file upload' . $_FILES['image1']['error'];
		} else {
			if (file_exists('uploads/menu' .$new_name)) {
				echo 'File already exists : uploads/menu'.$new_name;
			} else {
				
				if (!$this->upload->do_upload('image1')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
					$image1=$new_name;
				}


			}
		}
	} else {
		//echo 'Please choose a file';
	}
}
else{
	$image1='';
}
	


	$alttag1=$this->input->post('alttagimg1');
	$menuid=$this->input->post('menuid');
	$menuname=$this->input->post('menuname');
	$menutype=$this->input->post('menutype');
	$menuurl=$this->input->post('menuurl');
	$status=$this->input->post('status');
	$pmenu=$this->input->post('pmenu');
	$orderno=$this->input->post('orderno');
	if ($image1!=''){
		$data = array(
			'orderno' =>"$orderno",
			'menuname' =>"$menuname",
			'menutype' =>"$menutype",
			'url'=>"$menuurl",
			'status'=>$status,'parentmenuid'=>$pmenu,'menuimg'=>$image1,'alttagimg1'=>$alttag1		
		 );



	}else{
	$data = array(
		'orderno' =>"$orderno",
		'menuname' =>"$menuname",
		'menutype' =>"$menutype",
		'url'=>"$menuurl",
		'status'=>$status,'parentmenuid'=>$pmenu,'alttagimg1'=>$alttag1		
	 );
	}
	 //print_r($data);
	 $this->db->where('menuid',$menuid);
	 $this->db->update('menus', $data);

	  ($this->db->affected_rows() != 1) ? $this->session->set_flashdata('flash_msg', 'Error in Editing Menu') : $this->session->set_flashdata('flash_msg', 'Menu Edited Successfully');

 redirect("welcome/listmenus");


}








public function addqualityprocess(){
	$title=$this->input->post('title');
	$status=$this->input->post('status');
	$orderno=$this->input->post('orderno');
	$data = array(
		'quality' =>"$title",
		'active' =>"$status",
		'orderno'=>"$orderno",
		//'Image1'=>$image1,'Image2'=>$image2		
	 );
	 //print_r($data);
	 $this->db->insert('quality', $data);

	 echo ($this->db->affected_rows() != 1) ? 'Error in Adding Quality' : '<b>Quality added Successfully</b>';


}

public function editfaqprocess(){
	$faqtitle=$this->input->post('faqtitle');
	$faqid=$this->input->post('faqid');
	$description=$this->input->post('description');
	$status=$this->input->post('status');
	$data = array(
		'faqtitle' =>"$faqtitle",
		//'subtitle' =>"$subtitle",
		'faqdescription'=>"$description"
		,'active'=>"$status"	
	 );
	 //print_r($data);
	 $this->db->where('faqid',$faqid);
	 $this->db->update('faq', $data);

	 echo ($this->db->affected_rows() != 1) ? 'Error in Editing Faq' : '<b>Faq edited Successfully</b>';
}









public function editservicesprocess(){

	$this->db->where('serviceid',1);
	$this->db->select('*');
    $this->db->from('services');
    $query = $this->db->get();
   $imgdetails=$query->row();
   $image1old=$imgdetails->Image1;
   $image2old=$imgdetails->Image2;
 
	/*$config1['upload_path'] = 'uploads/services';
	$config1['allowed_types'] = 'gif|jpg|png|jpeg';	
	$config1['max_size'] = '1024'; //1 MB*/


	$file_ext = pathinfo($_FILES["image1"]["name"],PATHINFO_EXTENSION);	
	$new_name = time().'services'.'.'.$file_ext;
	$config1['file_name'] = $new_name;
	$config1['upload_path'] = 'uploads/services';
	$config1['allowed_types'] = 'gif|jpg|png|jpeg';	
	$config1['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config1);
	$this->upload->initialize($config1);
	if (isset($_FILES['image1']['name'])) {
		if (0 < $_FILES['image1']['error']) {
			echo 'Error during file upload' . $_FILES['image1']['error'];
		} else {
			if (file_exists('uploads/services/'.$new_name)) {
				//echo 'File already exists : uploads/contactus/'.$new_name;
				$image1=$image1old;
			} else {
				
				if (!$this->upload->do_upload('image1')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
					$image1=$new_name;
				}
				$image1=$image1old;

			}
		}
		$image1=$new_name;;

	} else {
		//echo 'Please choose a file';
		$image1=$image1old;

	}



	$file_ext2 = pathinfo($_FILES["image2"]["name"],PATHINFO_EXTENSION);	
	$new_name2 = time().'services2nd'.'.'.$file_ext2;
	$config2['file_name'] = $new_name2;
	$config2['upload_path'] = 'uploads/services';
	$config2['allowed_types'] = 'gif|jpg|png|jpeg';	
	$config2['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config2);
	$this->upload->initialize($config2);
	if (isset($_FILES['image2']['name'])) {
		if (0 < $_FILES['image2']['error']) {
			echo 'Error during file upload' . $_FILES['image2']['error'];
		} else {
			if (file_exists('uploads/services/'.$new_name2)) {
				//echo 'File already exists : uploads/contactus/'.$new_name;
				$image2=$image2old;
			} else {
				
				if (!$this->upload->do_upload('image2')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
					$image2=$new_name2;
				}
				$image2=$image2old;

			}
		}
		$image2=$new_name2;

	} else {
		//echo 'Please choose a file';
		$image2=$image2old;

	}







	//$config1['file_name'] = $image2;

	/*$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if (isset($_FILES['image1']['name'])) {
		if (0 < $_FILES['image1']['error']) {
			echo 'Error during file upload' . $_FILES['image1']['error'];
		} else {
			if (file_exists('uploads/services' . $_FILES['image1']['name'])) {
				echo 'File already exists : uploads/services' . $_FILES['image1']['name'];
			} else {
				
				if (!$this->upload->do_upload('image1')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
		//$image1=time().$_FILES['image1']['name'];

			$image1=$_FILES['image1']['name'];
	} else {
	$image1=$image1old;
	}*/
	
	/*$this->load->library('upload', $config1);
	$this->upload->initialize($config1);

	if (isset($_FILES['image2']['name'])) {
		if (0 < $_FILES['image2']['error']) {
			echo 'Error during file upload' . $_FILES['image2']['error'];
		} else {
			if (file_exists('uploads/services' . $_FILES['image2']['name'])) {
				echo 'File already exists : uploads/services' . $_FILES['image2']['name'];
			} else {
				
				if (!$this->upload->do_upload('image2')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
		$image2=$_FILES['image2']['name'];
	} else {
		$image2=$image2old;
	}*/
	
	
	 $maintitle=$this->input->post('maintitle');
	 $subtitle=$this->input->post('subtitle');
	 $description=$this->input->post('description');
	 $metatag=$this->input->post('metatag');
	 $alttag1=$this->input->post('alttag1');
	 $alttag2=$this->input->post('alttag2');
	 $data = array(
		'maintitle' =>"$maintitle",
		'subtitle' =>"$subtitle",
		'description'=>"$description",
		'metatag'=>"$metatag",
		'alttagimg1'=>"$alttag1",
		'alttagimg2'=>"$alttag2",
		'Image1'=>$image1
		,'Image2'=>$image2
				
	 );
	 /*if (($image1!='') && ($image2!='')){
	 $data = array(
		 'maintitle' =>"$maintitle",
		 'subtitle' =>"$subtitle",
		 'description'=>"$description",
		 'Image1'=>$image1,'Image2'=>$image2		
	  );
	}
	if (($image1!='') && ($image2=='')){
		$data = array(
			'maintitle' =>"$maintitle",
			'subtitle' =>"$subtitle",
			'description'=>"$description",
			'Image1'=>$image1		
		 );
	   }
	   if (($image1=='') && ($image2!='')){
		$data = array(
			'maintitle' =>"$maintitle",
			'subtitle' =>"$subtitle",
			'description'=>"$description",
			
			'Image2'=>$image2		
		 );
	   }
	   if (($image1=='') && ($image2=='')){
		$data = array(
			'maintitle' =>"$maintitle",
			'subtitle' =>"$subtitle",
			'description'=>"$description",
					
		 );
	   }*/
	  //print_r($data);
	  //die;
	  $this->db->where('serviceid',1);
	  $this->db->update('services', $data);
	  echo ($this->db->affected_rows() != 1) ? $this->session->set_flashdata('flash_msg', 'Error in Editing Services') : $this->session->set_flashdata('flash_msg', 'Services Edited Successfully');
	  //echo ($this->db->affected_rows() != 1) ? 'Error in Adding Product Services' : '<b>Product Services added Successfully</b>';


}


public function editsiteinformation(){

	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	$this->db->from('siteinformation');
    $query = $this->db->get();
    $data['result']=$query->row();
	$data['contactus']=$this->sm->get_contactus(); 
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	$this->load->view('services/editsiteinformation',$data);




}

public function siteinfeditprocess(){
	$this->db->select('*');
    $this->db->from('siteinformation');
    $query = $this->db->get();
   $imgdetails=$query->row();
   
   $image11=$imgdetails->logoimg;
   $image22=$imgdetails->faviconimg;
   //$image3=$imgdetails->serviceimg;

   /*$config['upload_path'] = 'uploads/logo';
   $config['allowed_types'] = 'gif|jpg|png|jpeg';	
   $config['max_size'] = '1024'; //1 MB
   $this->load->library('upload', $config);
   $this->upload->initialize($config);
   if (isset($_FILES['image1']['name'])) {
	   if (0 < $_FILES['image1']['error']) {
		   echo 'Error during file upload' . $_FILES['image1']['error'];
	   } else {
		   if (file_exists('uploads/logo' . $_FILES['image1']['name'])) {
			   echo 'File already exists : uploads/logo' . $_FILES['image1']['name'];
		   } else {
			   
			   if (!$this->upload->do_upload('image1')) {
				   //echo $this->upload->display_errors();
			   } else {
				   //echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
			   }
		   }
	   }
	   $image1=$_FILES['image1']['name'];
   } else {
	   $image1=$image11;
   }
   

   if (isset($_FILES['image2']['name'])) {
	   if (0 < $_FILES['image2']['error']) {
		   echo 'Error during file upload' . $_FILES['image2']['error'];
	   } else {
		   if (file_exists('uploads/logo' . $_FILES['image2']['name'])) {
			   echo 'File already exists : uploads/logo' . $_FILES['image2']['name'];
		   } else {
			   
			   if (!$this->upload->do_upload('image2')) {
				   //echo $this->upload->display_errors();
			   } else {
				   //echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
			   }
		   }
	   }
	   $image2=$_FILES['image2']['name'];
   } else {
	   $image2=$image22;
   }
   if ($image1==''){
	$image1=$image11;
   }
   if ($image2==''){
	$image2=$image22;
   }*/

   
if (($_FILES["image1"]["name"])!=''){

   $file_ext = pathinfo($_FILES["image1"]["name"],PATHINFO_EXTENSION);
   $new_name1 = time().'logo1st'.'.'.$file_ext;
	$config['file_name'] = $new_name1;
	$config['upload_path'] = 'uploads/logo';
	$config['allowed_types'] = 'gif|jpg|png|jpeg';	
	$config['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if (isset($_FILES['image1']['name'])) {
		if (0 < $_FILES['image1']['error']) {
			echo 'Error during file upload'.$new_name1;
		} else {
			if (file_exists('uploads/logo1st/'.$new_name1)) {
				echo 'File already exists : uploads/logo1st/'.$new_name1;
			} else {
				
				if (!$this->upload->do_upload('image1')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
		$image1=$new_name1;
	} else {
		$image1=$image11;
	}
	
}
else{
	$image1=$image11;
}
if (($_FILES["image2"]["name"])!=''){
	$file_ext = pathinfo($_FILES["image2"]["name"],PATHINFO_EXTENSION);
   $new_name2 = time().'logo2nd'.'.'.$file_ext;
	$config2['file_name'] = $new_name2;
	$config2['upload_path'] = 'uploads/logo';
	$config2['allowed_types'] = 'gif|jpg|png|jpeg';	
	$config2['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config2);
	$this->upload->initialize($config2);
	if (isset($_FILES['image2']['name'])) {
		if (0 < $_FILES['image2']['error']) {
			echo 'Error during file upload'.$new_name2;
		} else {
			if (file_exists('uploads/logo/'.$new_name2)) {
				echo 'File already exists : uploads/logo/'.$new_name2;
			} else {
				
				if (!$this->upload->do_upload('image2')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
		$image2=$new_name2;
	} else {
		$image2=$image22;
	}

   
}
else{
	$image2=$image22;
}


$sitedescription=$this->input->post('sitedescription');
$sitename=$this->input->post('sitename');
$sitetitle=$this->input->post('sitetitle');
   $data = array(
	'sitedescription' =>"$sitedescription",
	'sitename' =>"$sitename",
	'sitetitle' =>"$sitetitle",
	//'metatag'=>"$metatag",
	//'alttagimg1'=>"$alttag1",
	//'alttagimg2'=>"$alttag2",
	'faviconimg'=>$image2
	,'logoimg'=>$image1
			
 );

 $this->db->where('siteinfid',1);
 $this->db->update('siteinformation', $data);
($this->db->affected_rows() != 1) ? $this->session->set_flashdata('flash_msg', 'Error in Editing Site Information') : $this->session->set_flashdata('flash_msg', 'Site Information Edited Successfully');

 redirect("welcome/listsiteinformation");



}

public function edithomepageprocess(){
	$this->db->select('*');
    $this->db->from('homepage');
    $query = $this->db->get();
   $imgdetails=$query->row();
   $image11=$imgdetails->homepageimg1;
   $image22=$imgdetails->homepageimg2;
   $image33=$imgdetails->serviceimg;
   $image44=$imgdetails->homepageimg4;
   $file_name=$_FILES['image1']['name'];
   //$newfile_name= preg_replace('/[^A-Za-z0-9]/', "", $file_name);
   //$//ext=pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
   $new_name = time().$file_name;
   $config['file_name'] = $new_name;
   //$config['remove_spaces'] = true;
	$config['upload_path'] = 'uploads/homepage';
	$config['allowed_types'] = 'gif|jpg|png|jpeg';	
	$config['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if (isset($_FILES['image1']['name'])) {
		if (0 < $_FILES['image1']['error']) {
			echo 'Error during file upload' . $_FILES['image1']['error'];
		} else {
			if (file_exists('uploads/homepage' . $_FILES['image1']['name'])) {
				echo 'File already exists : uploads/homepage' . $_FILES['image1']['name'];
			} else {
				
				if (!$this->upload->do_upload('image1')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
		//$image1=$_FILES['image1']['name'];
		$image1=$new_name;
	} else {
		$image1=$image11;
	}
	
	$file_name2=$_FILES['image2']['name'];
   //$newfile_name= preg_replace('/[^A-Za-z0-9]/', "", $file_name);
   //$//ext=pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
   $new_name2 = time().$file_name2;
   $config2['file_name'] = $new_name2;
   $config2['upload_path'] = 'uploads/homepage';
   $config2['allowed_types'] = 'gif|jpg|png|jpeg';	
   $config2['max_size'] = '1024'; //1 MB
   $this->load->library('upload', $config2);
   $this->upload->initialize($config2);
	if (isset($_FILES['image2']['name'])) {
		if (0 < $_FILES['image2']['error']) {
			echo 'Error during file upload' . $_FILES['image2']['error'];
		} else {
			if (file_exists('uploads/homepage' . $_FILES['image2']['name'])) {
				echo 'File already exists : uploads/homepage' . $_FILES['image2']['name'];
			} else {
				
				if (!$this->upload->do_upload('image2')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
		$image2=$new_name2;
	} else {
		$image2=$image22;
	}
	

	
	/*$config4['upload_path'] = 'uploads/homepage';
	$config4['allowed_types'] = 'gif|jpg|png|jpeg';	
	$config4['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config4);
	$this->upload->initialize($config4);
	 if (isset($_FILES['image4']['name'])) {
		 if (0 < $_FILES['image4']['error']) {
			 echo 'Error during file upload' . $_FILES['image4']['error'];
		 } else {
			 if (file_exists('uploads/homepage' . $_FILES['image4']['name'])) {
				 echo 'File already exists : uploads/homepage' . $_FILES['image4']['name'];
			 } else {
				 
				 if (!$this->upload->do_upload('image4')) {
					 //echo $this->upload->display_errors();
				 } else {
					 //echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				 }
			 }
		 }
		 $image2=$new_name2;
	 } else {
		 $image2=$image22;
	 }*/



	 $file_name3=$_FILES['image3']['name'];
	 $new_name3 = time().$file_name3;
	 $config3['file_name'] = $new_name3;
	 $config3['upload_path'] = 'uploads/homepage';
	 $config3['allowed_types'] = 'gif|jpg|png|jpeg';	
	 $config3['max_size'] = '1024'; //1 MB
	 $this->load->library('upload', $config3);
	 $this->upload->initialize($config3);
	 $file_name3=$_FILES['image3']['name'];
	 //$newfile_name= preg_replace('/[^A-Za-z0-9]/', "", $file_name);
	 //$//ext=pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
	 

	if (isset($_FILES['image3']['name'])) {
		if (0 < $_FILES['image3']['error']) {
			echo 'Error during file upload' . $_FILES['image3']['error'];
		} else {
			if (file_exists('uploads/homepage' . $_FILES['image3']['name'])) {
				echo 'File already exists : uploads/homepage' . $_FILES['image3']['name'];
			} else {
				
				if (!$this->upload->do_upload('image3')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
		$image3=$new_name3;
	} else {
		$image3=$image33;
	}




	$file_name4=$_FILES['image4']['name'];
	$new_name4 = time().$file_name4;
	$config4['file_name'] = $new_name4;
	$config4['upload_path'] = 'uploads/homepage';
	$config4['allowed_types'] = 'gif|jpg|png|jpeg';	
	$config4['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config4);
	$this->upload->initialize($config4);
	$file_name4=$_FILES['image4']['name'];
	//$newfile_name= preg_replace('/[^A-Za-z0-9]/', "", $file_name);
	//$//ext=pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
	

   if (isset($_FILES['image4']['name'])) {
	   if (0 < $_FILES['image4']['error']) {
		   echo 'Error during file upload' . $_FILES['image4']['error'];
	   } else {
		   if (file_exists('uploads/homepage' . $_FILES['image4']['name'])) {
			   echo 'File already exists : uploads/homepage' . $_FILES['image4']['name'];
		   } else {
			   
			   if (!$this->upload->do_upload('image4')) {
				   //echo $this->upload->display_errors();
			   } else {
				   //echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
			   }
		   }
	   }
	   $image4=$new_name4;
   } else {
	   $image4=$image44;
   }











	if ($image1==''){
		$image1=$image11;
	   }
	   if ($image2==''){
		$image2=$image22;
	   }
	   if ($image3==''){
		$image3=$image33;
	   }
	   if ($image4==''){
		$image4=$image44;
	   }
	$servicetitle1=$this->input->post('servicetitle1');
	$servicetitle2=$this->input->post('servicetitle2');
	$servicetitle3=$this->input->post('servicetitle3');
	$servicetitle=$this->input->post('servicetitle');
	$qualitytitle=$this->input->post('qualitytitle');	
	 $maintitle=$this->input->post('maintitle');
	 $subtitle=$this->input->post('subtitle');
	 $metatag=$this->input->post('metatag');
	 $alttag1=$this->input->post('alttag1');
	 $alttag2=$this->input->post('alttag2');
	 $alttag3=$this->input->post('alttag3');
	 $alttag4=$this->input->post('alttag4');
	 $data = array(
		'alttagimg1'=>"$alttag1",
		'alttagimg2'=>"$alttag2",
		'alttagimg3'=>"$alttag3",
		'alttagimg4'=>"$alttag4",
		'metatag'=>$metatag,
		'title1' =>"$maintitle",
		'title2' =>"$subtitle",
		'homepageimg4'=>$image4,
		'servicetitle1'=>$servicetitle1, 'servicetitle2'=>$servicetitle2,'servicetitle3'=>$servicetitle3,
		'homepageimg1'=>$image1,'homepageimg2'=>$image2,'serviceimg'=>$image3,'servicetitle'=>$servicetitle,'qualitytitle'=>$qualitytitle		
	 );




	/* if (($image1!='') && ($image2!='')){
	 $data = array(
		 'maintitle' =>"$maintitle",
		 'subtitle' =>"$subtitle",
		 'description'=>"$description",
		 'servicetitle1'=>'$servicetitle1', 'servicetitle2'=>'$servicetitle2','servicetitle3'=>'$servicetitle3',
		 'Image1'=>$image1,'Image2'=>$image2,'servicetitle'=>'$servicetitle','qualitytitle'=>'$qualitytitle'		
	  );
	}
	if (($image1!='') && ($image2=='')){
		$data = array(
			'maintitle' =>"$maintitle",
			'subtitle' =>"$subtitle",
			'description'=>"$description",
			'Image1'=>$image1, 'servicetitle1'=>'$servicetitle1', 'servicetitle2'=>'$servicetitle2','servicetitle3'=>'$servicetitle3',
			'Image1'=>$image1,'Image2'=>$image2,'servicetitle'=>'$servicetitle','qualitytitle'=>'$qualitytitle'		
		 );
	   }
	   if (($image1=='') && ($image2!='')){
		$data = array(
			'maintitle' =>"$maintitle",
			'subtitle' =>"$subtitle",
			'description'=>"$description",
			
			'Image2'=>$image2, 'Image1'=>$image1,'Image2'=>$image2,'servicetitle'=>'$servicetitle','qualitytitle'=>'$qualitytitle','servicetitle1'=>'$servicetitle1', 'servicetitle2'=>'$servicetitle2','servicetitle3'=>'$servicetitle3',		
		 );
	   }
	   if (($image1=='') && ($image2=='')){
		$data = array(
			'maintitle' =>"$maintitle",
			'subtitle' =>"$subtitle",
			'description'=>"$description", 'Image1'=>$image1,'Image2'=>$image2,'servicetitle'=>'$servicetitle','qualitytitle'=>'$qualitytitle','servicetitle1'=>'$servicetitle1', 'servicetitle2'=>'$servicetitle2','servicetitle3'=>'$servicetitle3',
				
		 );
	   }*/
	  //print_r($data);
	  $this->db->where('homepageid',2);
	  $this->db->update('homepage', $data);
//echo $this->db->last_query();
//die;
	  //echo ($this->db->affected_rows() != 1) ? 'Error in Adding Product Services' : '<b>Product Services added Successfully</b>';
	 ($this->db->affected_rows() != 1) ? $this->session->set_flashdata('flash_msg', 'Error in Editing Home Page') : $this->session->set_flashdata('flash_msg', 'Home Page Edited Successfully');

}


public function editaboutusprocess(){
	$this->db->select('*');
    $this->db->from('aboutus');
    $query = $this->db->get();
   $imgdetails=$query->row();
   $image11=$imgdetails->missionlogo;
   $image22=$imgdetails->visionlogo;
   $image33=$imgdetails->aboutusbanner;


   $file_ext = pathinfo($_FILES["image1"]["name"],PATHINFO_EXTENSION);
   $new_name1 = time().'aboutus'.'.'.$file_ext;
	$config['file_name'] = $new_name1;
	$config['upload_path'] = 'uploads/aboutus';
	$config['allowed_types'] = 'gif|jpg|png|jpeg';	
	$config['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if (isset($_FILES['image1']['name'])) {
		if (0 < $_FILES['image1']['error']) {
			echo 'Error during file upload'.$new_name1;
		} else {
			if (file_exists('uploads/aboutus/'.$new_name1)) {
				echo 'File already exists : uploads/aboutus/'.$new_name1;
			} else {
				
				if (!$this->upload->do_upload('image1')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
		$image1=$new_name1;
	} else {
		$image1=$image11;
	}
	
	

	$file_ext = pathinfo($_FILES["image2"]["name"],PATHINFO_EXTENSION);
   $new_name2 = time().'aboutus2'.'.'.$file_ext;
	$config2['file_name'] = $new_name2;
	$config2['upload_path'] = 'uploads/aboutus';
	$config2['allowed_types'] = 'gif|jpg|png|jpeg';	
	$config2['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config2);
	$this->upload->initialize($config2);
	if (isset($_FILES['image2']['name'])) {
		if (0 < $_FILES['image2']['error']) {
			echo 'Error during file upload'.$new_name2;
		} else {
			if (file_exists('uploads/aboutus/'.$new_name2)) {
				echo 'File already exists : uploads/aboutus/'.$new_name2;
			} else {
				
				if (!$this->upload->do_upload('image2')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
		$image2=$new_name2;
	} else {
		$image2=$image22;
	}



	$file_ext = pathinfo($_FILES["image3"]["name"],PATHINFO_EXTENSION);
   $new_name3 = time().'aboutus3'.'.'.$file_ext;
	$config3['file_name'] = $new_name3;
	$config3['upload_path'] = 'uploads/aboutus';
	$config3['allowed_types'] = 'gif|jpg|png|jpeg';	
	$config3['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config3);
	$this->upload->initialize($config3);
	if (isset($_FILES['image3']['name'])) {
		if (0 < $_FILES['image3']['error']) {
			echo 'Error during file upload'.$new_name3;
		} else {
			if (file_exists('uploads/aboutus/'.$new_name3)) {
				echo 'File already exists : uploads/aboutus/'.$new_name3;
			} else {
				
				if (!$this->upload->do_upload('image3')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
		$image3=$new_name3;
	} else {
		$image3=$image33;
	}








	/*if (isset($_FILES['image2']['name'])) {
		if (0 < $_FILES['image2']['error']) {
			echo 'Error during file upload' . $_FILES['image2']['error'];
		} else {
			if (file_exists('uploads/aboutus' . $_FILES['image2']['name'])) {
				echo 'File already exists : uploads/aboutus' . $_FILES['image2']['name'];
			} else {
				
				if (!$this->upload->do_upload('image2')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
		$image2=$_FILES['image2']['name'];
	} else {
		$image2=$image22;
	}*/
	
	/*if (isset($_FILES['image3']['name'])) {
		if (0 < $_FILES['image3']['error']) {
			echo 'Error during file upload' . $_FILES['image3']['error'];
		} else {
			if (file_exists('uploads/aboutus' . $_FILES['image3']['name'])) {
				echo 'File already exists : uploads/aboutus' . $_FILES['image3']['name'];
			} else {
				
				if (!$this->upload->do_upload('image3')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
		$image3=$_FILES['image3']['name'];
	} else {
		$image3=$image33;
	}*/
	
	 $maintitle=$this->input->post('maintitle');
	 $mission=$this->input->post('mission');
	 $vision=$this->input->post('vision');
	 $yearsexperience=$this->input->post('yearsexperience');
	 $happyclients=$this->input->post('happyclients');
	 $expertmembers=$this->input->post('expertmembers');
	 $aboutusshortdesc=$this->input->post('aboutusshortdesc');
	 $projectsdone=$this->input->post('projectsdone');
	 $aboutcompany=$this->input->post('aboutcompany');
	 $metatag=$this->input->post('metatag');
	 $alttag1=$this->input->post('alttag1');
	 $alttag2=$this->input->post('alttag2');
	 $alttag3=$this->input->post('alttag3');
	 $data = array(
		'alttagimg1'=>"$alttag1",
		'alttagimg2'=>"$alttag2",
		'alttagimg3'=>"$alttag3",
		'metatag'=>$metatag,
		'title' =>"$maintitle",
		'mission' =>"$mission",
		'aboutcompany'=>"$aboutcompany",
		'vision'=>$vision,
		'mission'=>$mission,
		'yearsexperience'=>$yearsexperience,
		'happyclients'=>$happyclients,
		'expertmembers'=>$expertmembers,
		'aboutusshortdesc'=>$aboutusshortdesc,
		'projectsdone'=>$projectsdone,'missionlogo'=>$image1,'visionlogo'=>$image2,'aboutusbanner'=>$image3,

		//'Image1'=>$image1,'Image2'=>$image2		
	 );
	 /*if (($image1!='') && ($image2!='')){
	 $data = array(
		 'maintitle' =>"$maintitle",
		 'subtitle' =>"$subtitle",
		 'description'=>"$description",
		 'Image1'=>$image1,'Image2'=>$image2		
	  );
	}
	if (($image1!='') && ($image2=='')){
		$data = array(
			'maintitle' =>"$maintitle",
			'subtitle' =>"$subtitle",
			'description'=>"$description",
			'Image1'=>$image1		
		 );
	   }
	   if (($image1=='') && ($image2!='')){
		$data = array(
			'maintitle' =>"$maintitle",
			'subtitle' =>"$subtitle",
			'description'=>"$description",
			
			'Image2'=>$image2		
		 );
	   }
	   if (($image1=='') && ($image2=='')){
		$data = array(
			'maintitle' =>"$maintitle",
			'subtitle' =>"$subtitle",
			'description'=>"$description",
				
		 );
	   }*/
	  //print_r($data);
	  $this->db->where('aboutusid',1);
	  $this->db->update('aboutus', $data);
	  ($this->db->affected_rows() != 1) ? $this->session->set_flashdata('flash_msg', 'Error in Editing About Us') : $this->session->set_flashdata('flash_msg', 'About Us Edited Successfully');
	  //echo ($this->db->affected_rows() != 1) ? 'Error in Editing About Us Contents' : '<b>About Us Contents added Successfully</b>';


}



public function listservices(){

	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
$config = array();
$config["base_url"] = base_url() . "Welcome/listservices";
$config["total_rows"] = $this->sm->get_countservices();
$config["per_page"] = 10;
$config["uri_segment"] = 3;
$this->pagination->initialize($config);
$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
$data["links"] = $this->pagination->create_links();	
$data['result']=$this->sm->get_services($config["per_page"],$page);
$this->db->from('contactus');
    $query = $this->db->get();
    $data['resultphone']=$query->row();
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
$this->load->view('services/listservices',$data);	


}


public function listsiteinformation(){

	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
$config = array();
$config["base_url"] = base_url() . "Welcome/listsiteinformation";
/*$config["total_rows"] = $this->sm->get_countservices();
$config["per_page"] = 10;
$config["uri_segment"] = 3;
$this->pagination->initialize($config);
$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
$data["links"] = $this->pagination->create_links();	
$data['result']=$this->sm->get_services($config["per_page"],$page);*/
$this->db->from('contactus');
    $query = $this->db->get();
    $data['resultphone']=$query->row();
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	//$data['siteinf']=$this->sm->get_siteinf();
$this->load->view('services/listsiteinformation',$data);	


}




public function listsocialmedialinks(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
$config = array();
$config["base_url"] = base_url() . "Welcome/listsiteinformation";
/*$config["total_rows"] = $this->sm->get_countservices();
$config["per_page"] = 10;
$config["uri_segment"] = 3;
$this->pagination->initialize($config);
$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
$data["links"] = $this->pagination->create_links();	
$data['result']=$this->sm->get_services($config["per_page"],$page);*/
$this->db->from('contactus');
    $query = $this->db->get();
    $data['resultphone']=$query->row();
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	$data['socialmedia']=$this->sm->get_socialmedialinks();
$this->load->view('services/listsocialmedialinks',$data);	


}


public function socialmedialinksprocess(){

	$whatsuplink=$this->input->post('whatsuplink');
	$linkldn=$this->input->post('linkldn');
	$youtube=$this->input->post('youtube');
	$facebook=$this->input->post('facebook');
	$instagram=$this->input->post('instagram');
	$twitter=$this->input->post('twitter');
	$calllnk=$this->input->post('wplink');
	$locationlink=$this->input->post('loclink');
	



	$data = array(
		'whatsuplink'=>"$whatsuplink",
	'linkldn'=>"$linkldn",
		'youtube'=>"$youtube",
		'facebook'=>$facebook,
		 'instagram' =>"$instagram",
		'twitter' =>"$twitter",
		 'calllnk'=>"$calllnk",
		 'locationlink'=>"$locationlink"
		 //'date'=>$date,'title'=>$blogtitle		
	  );


  //}
 
  //$id=$this->input->post('blogid'); 
  //$this->db->where('contentid',$id);
   $this->db->update('socialmedialinks', $data);

  ($this->db->affected_rows() != 1) ? $this->session->set_flashdata('flash_msg', 'Error in Editing Social media Links') : $this->session->set_flashdata('flash_msg', 'Social media Links Edited Successfully');

  redirect("welcome/listsocialmedialinks");


}

public function editsocialmedialinks(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	$this->db->from('socialmedialinks');
    $query = $this->db->get();
    $data['result']=$query->row();
	$data['contactus']=$this->sm->get_contactus(); 
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	$this->load->view('services/editsocialmedialinks',$data);


}


public function listservicesdetails(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}

$this->db->from('contactus');
    $query = $this->db->get();
    $data['resultphone']=$query->row();
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	$data['result']=$this->sm->get_servicesdetails();
$this->load->view('services/listservicesdetails',$data);	


}





public function deleteservices(){
	$id=$_GET['id'];
	$this->db->where('serviceid',$id);
	$this->db->delete('services');
	echo ($this->db->affected_rows() != 1) ? 'Error in deleting Services' : 'Services deleted Successfully';
}


public function listaboutus(){

	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
$config = array();
$config["base_url"] = base_url() . "Welcome/listaboutus";
$config["total_rows"] = $this->sm->get_countservices();
$config["per_page"] = 10;
$config["uri_segment"] = 3;
$this->pagination->initialize($config);
$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
$data["links"] = $this->pagination->create_links();	
$data['result']=$this->sm->get_aboutusadmin();
$this->db->from('contactus');
    $query = $this->db->get();
    $data['resultphone']=$query->row();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['contactus']=$this->sm->get_contactus();
	$data['siteinf']=$this->sm->get_siteinf();
$this->load->view('services/listaboutus',$data);	


}

public function listhomepage(){

	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
$config = array();
$config["base_url"] = base_url() . "Welcome/listhomepage";
$config["total_rows"] = $this->sm->get_countservices();
$config["per_page"] = 10;
$config["uri_segment"] = 3;
$this->pagination->initialize($config);
$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
$data["links"] = $this->pagination->create_links();	
$data['result']=$this->sm->get_homepageadmin();
$data['contactus']=$this->sm->get_contactus();
$data['newsletter']=$this->sm->get_newsletter();
$data['siteinf']=$this->sm->get_siteinf();
$this->load->view('services/listhomepage',$data);	


}

public function listcontactus(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$data['result']=$this->sm->get_contactus();
	$this->db->from('contactus');
    $query = $this->db->get();
    $data['resultphone']=$query->row();
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	$this->load->view('services/listcontactus',$data);	

}

public function listfaq(){

	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
$config = array();
$config["base_url"] = base_url() . "Welcome/listfaq";
$config["total_rows"] = $this->sm->get_countfaq();
$config["per_page"] = 10;
$config["uri_segment"] = 3;
$this->pagination->initialize($config);
$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
$data["links"] = $this->pagination->create_links();	
$data['result']=$this->sm->get_faqadmin($config["per_page"],$page);
$data['contactus']=$this->sm->get_contactus();
$data['newsletter']=$this->sm->get_newsletter();
$data['siteinf']=$this->sm->get_siteinf();
$this->load->view('services/listfaq',$data);	


}

public function listmenus(){

	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
$config = array();
$config["base_url"] = base_url() . "Welcome/listmenus";
$config["total_rows"] = $this->sm->get_countmenu();
$config["per_page"] = 10;
$config["uri_segment"] = 3;
$this->pagination->initialize($config);
$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
$data["links"] = $this->pagination->create_links();	
$data['result']=$this->sm->get_menuadmin($config["per_page"],$page);
$data['contactus']=$this->sm->get_contactus();
$data['newsletter']=$this->sm->get_newsletter();
$data['siteinf']=$this->sm->get_siteinf();
$this->load->view('services/listmenus',$data);	


}









public function listquality(){

	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
$config = array();
$config["base_url"] = base_url() . "Welcome/listquality";
$config["total_rows"] = $this->sm->get_countquality();
$config["per_page"] = 10;
$config["uri_segment"] = 3;
$this->pagination->initialize($config);
$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
$data["links"] = $this->pagination->create_links();	
$data['result']=$this->sm->get_qualityadmin($config["per_page"],$page);
$data['contactus']=$this->sm->get_contactus();
$data['newsletter']=$this->sm->get_newsletter();
$data['siteinf']=$this->sm->get_siteinf();
$this->load->view('services/listquality',$data);	


}




public function listblogcontents(){

	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
$config = array();
$config["base_url"] = base_url() . "Welcome/listblogcontents";
$config["total_rows"] = $this->sm->get_countblog();
$config["per_page"] = 10;
$config["uri_segment"] = 3;
$this->pagination->initialize($config);
$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
$data["links"] = $this->pagination->create_links();	
$data['result']=$this->sm->get_blogadmin($config["per_page"],$page);
$this->db->from('contactus');
    $query = $this->db->get();
    $data['resultphone']=$query->row();
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
$this->load->view('services/listblog',$data);	


}
public function listtestimonials(){


	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
$config = array();
$config["base_url"] = base_url() . "Welcome/listtestimonials";
$config["total_rows"] = $this->sm->get_counttestimonials();
$config["per_page"] = 10;
$config["uri_segment"] = 3;
$this->pagination->initialize($config);
$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
$data["links"] = $this->pagination->create_links();	
$data['result']=$this->sm->get_testimonialsadmin($config["per_page"],$page);
$this->db->from('contactus');
    $query = $this->db->get();
    $data['resultphone']=$query->row();
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
$this->load->view('services/listtestimonials',$data);
}


function delfaq(){

	$id=$_GET['id'];
	$this->db->where('faqid',$id);
	$this->db->delete('faq');
	echo ($this->db->affected_rows() != 1) ? 'Error in deleting Faq' : 'Faq deleted Successfully';


}

function delmenu(){

	$id=$_GET['id'];
	$this->db->where('parentmenuid',$id);
	$this->db->delete('menus');
	$this->db->where('menuid',$id);
	$this->db->delete('menus');
	
	//echo ($this->db->affected_rows() != 1) ? 'Error in deleting Menu' : 'Menu deleted Successfully';
	//echo ($this->db->affected_rows() ==0) ? $this->session->set_flashdata('flash_msg', 'Error in deleting Menu') : $this->session->set_flashdata('flash_msg', 'Menu deleted Successfully');
	($this->db->affected_rows() >0) ? $this->session->set_flashdata('flash_msg', 'Menu deleted Successfully') : $this->session->set_flashdata('flash_msg', 'Error in deleting menu');

}
function delql(){

	$id=$_GET['id'];
	$this->db->where('qualityid',$id);
	$this->db->delete('quality');
	echo ($this->db->affected_rows() != 1) ? 'Error in deleting Quality' : 'Quality deleted Successfully';


}


public function addtestimonialsprocess(){

	$file_name=$_FILES['image1']['name'];
   //$newfile_name= preg_replace('/[^A-Za-z0-9]/', "", $file_name);
   //$//ext=pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
   //$new_name = time().$file_name;
   $ext=pathinfo($file_name, PATHINFO_EXTENSION);
   $new_name = time().'testimonal'.'.'.$ext;
   $config['file_name'] = $new_name;
	$config['upload_path'] = 'uploads/testimonial';
	$config['allowed_types'] = 'gif|jpg|png|jpeg';	
	$config['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if (isset($_FILES['image1']['name'])) {
		if (0 < $_FILES['image1']['error']) {
			echo 'Error during file upload' . $_FILES['image1']['error'];
		} else {
			if (file_exists('uploads/testimonial/' .$new_name)) {
				echo 'File already exists : uploads/testimonial/' .$new_name;
			} else {
				
				if (!$this->upload->do_upload('image1')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
	} else {
		echo 'Please choose a file';
	}
	
	

	
	$image1=$new_name;
	$alttag1=$this->input->post('alttag1');

	 $testtitle=$this->input->post('testtitle');
	 $rating=$this->input->post('rating');
	 $description=$this->input->post('description');
	 $name=$this->input->post('name');
	  $place=$this->input->post('place');
	  $date=$this->input->post('date');
	  $status=$this->input->post('status');
	 $data = array(
		'title'=>"$testtitle",
		 'testimonial' =>"$description",
		 'rating' =>"$rating",
		 'name'=>"$name",
		 'image'=>$image1,'place'=>$place,'date'=>$date,'alttagimg1'=>"$alttag1",'active'=>$status		
	  );
	  
	  	  $this->db->insert('testimonials', $data);

	  echo ($this->db->affected_rows() != 1) ? 'Error in Adding Testimonials' : '<b>Testimonials added Successfully</b>';


}


public function deletetestimonials(){
	$id=$_GET['id'];
	$this->db->where('testimonialid',$id);
	$this->db->delete('testimonials');
	echo ($this->db->affected_rows() != 1) ? 'Error in deleting Testimonials' : 'Testimonials deleted Successfully';
}

public function deleteblog(){
	$id=$_GET['id'];
	$this->db->where('contentid',$id);
	$this->db->delete('blogcontents');
	echo ($this->db->affected_rows() != 1) ? 'Error in deleting Blog Contents' : 'Blog Contents deleted Successfully';
}


public function addblogcontentsprocess(){

	/*$config['upload_path'] = 'uploads/blog';
	$config['allowed_types'] = 'gif|jpg|png|jpeg';	
	$config['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if (isset($_FILES['image1']['name'])) {
		if (0 < $_FILES['image1']['error']) {
			echo 'Error during file upload' . $_FILES['image1']['error'];
		} else {
			if (file_exists('uploads/blog' . $_FILES['image1']['name'])) {
				echo 'File already exists : uploads/blog' . $_FILES['image1']['name'];
			} else {
				
				if (!$this->upload->do_upload('image1')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
	} else {
		echo 'Please choose a file';
	}
	if (isset($_FILES['image2']['name'])) {
		if (0 < $_FILES['image2']['error']) {
			echo 'Error during file upload' . $_FILES['image2']['error'];
		} else {
			if (file_exists('uploads/blog' . $_FILES['image2']['name'])) {
				echo 'File already exists : uploads/blog' . $_FILES['image2']['name'];
			} else {
				
				if (!$this->upload->do_upload('image2')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
	} else {
		echo 'Please choose a file';
	}
	

	
	$image1=$_FILES['image1']['name'];
	$image2=$_FILES['image2']['name'];*/


	if (isset($_FILES['image1']['name'])){
		$file_name=$_FILES['image1']['name'];
	//$new_name = time().$file_name;
	$ext=pathinfo($_FILES["image1"]["name"], PATHINFO_EXTENSION);
	$new_name = time().'blog1'.'.'.$ext;
	$config['file_name'] = $new_name;
	$config['upload_path'] = 'uploads/blog';
	$config['allowed_types'] = 'gif|jpg|png|jpeg';	
	$config['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if (isset($_FILES['image1']['name'])) {
		if (0 < $_FILES['image1']['error']) {
			echo 'Error during file upload' . $new_name;
		} else {
			if (file_exists('uploads/blog' . $new_name)) {
				echo 'File already exists : uploads/blog' . $new_name;
			} else {
				
				if (!$this->upload->do_upload('image1')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
	} else {
		//echo 'Please choose a file';
	}

	$image1=$new_name;
}else{
	$image1='';
}
if (isset($_FILES['image2']['name'])){
	$file_name=$_FILES['image2']['name'];
//$new_name = time().$file_name;
$ext=pathinfo($_FILES["image2"]["name"], PATHINFO_EXTENSION);
$new_name = time().'blog2nd'.'.'.$ext;
$config['file_name'] = $new_name;
$config['upload_path'] = 'uploads/blog';
$config['allowed_types'] = 'gif|jpg|png|jpeg';	
$config['max_size'] = '1024'; //1 MB
$this->load->library('upload', $config);
$this->upload->initialize($config);
if (isset($_FILES['image2']['name'])) {
	if (0 < $_FILES['image2']['error']) {
		echo 'Error during file upload' . $new_name;
	} else {
		if (file_exists('uploads/blog' . $new_name)) {
			echo 'File already exists : uploads/blog' . $new_name;
		} else {
			
			if (!$this->upload->do_upload('image2')) {
				//echo $this->upload->display_errors();
			} else {
				//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
			}
		}
	}
} else {
	//echo 'Please choose a file';
}

$image2=$new_name;
}else{
$image2='';
}







$status=$this->input->post('status');

	 $blogtitle=$this->input->post('blogtitle');
	 $toparticle=$this->input->post('toparticle');
	 $description=$this->input->post('description');
	 $name=$this->input->post('name');
	 $place=$this->input->post('place');
	  $companyname=$this->input->post('companyname');
	  $date=$this->input->post('date');
	  $alttag1=$this->input->post('alttag1');
	 $alttag2=$this->input->post('alttag2');
	 $data = array(
		'active'=>$status,
		'alttagimg1'=>"$alttag1",
		'alttagimg2'=>"$alttag2",
		'place'=>"$place",
		'companyname'=>$companyname,
		 'description' =>"$description",
		'toparticle' =>"$toparticle",
		 'authorname'=>"$name",
		 'autorimage'=>$image1,'toparticle'=>$toparticle,'date'=>$date,'title'=>$blogtitle,'contentimage'=>$image2		
	  );
	  //$id=$this->uri->segment(3); 
	  //$this->db->where('contentid',$id);
	   $this->db->insert('blogcontents', $data);

	  echo ($this->db->affected_rows() != 1) ? 'Error in Adding Blogs' : '<b>Blog Added Successfully</b>';




}


public function editblogcontentsprocess(){

	$id=$this->input->post('blogid'); 
	$this->db->where('contentid',$id);
	$this->db->select('*');
    $this->db->from('blogcontents');
    $query = $this->db->get();
   $imgdetails=$query->row();
   $image11=$imgdetails->autorimage;
   $image22=$imgdetails->contentimage;

	/*$config['upload_path'] = 'uploads/blog';
	$config['allowed_types'] = 'gif|jpg|png|jpeg';	
	$config['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if (isset($_FILES['image1']['name'])) {
		if (0 < $_FILES['image1']['error']) {
			echo 'Error during file upload' . $_FILES['image1']['error'];
		} else {
			if (file_exists('uploads/blog' . $_FILES['image1']['name'])) {
				echo 'File already exists : uploads/blog' . $_FILES['image1']['name'];
			} else {
				
				if (!$this->upload->do_upload('image1')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
	} else {
		echo 'Please choose a file';
	}
	if (isset($_FILES['image2']['name'])) {
		if (0 < $_FILES['image2']['error']) {
			echo 'Error during file upload' . $_FILES['image2']['error'];
		} else {
			if (file_exists('uploads/blog' . $_FILES['image2']['name'])) {
				echo 'File already exists : uploads/blog' . $_FILES['image2']['name'];
			} else {
				
				if (!$this->upload->do_upload('image2')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
	} else {
		echo 'Please choose a file';
	}
	

	
	$image1=$_FILES['image1']['name'];
	$image2=$_FILES['image2']['name'];*/



	$file_ext = pathinfo($_FILES["image1"]["name"],PATHINFO_EXTENSION);
	$new_name1 = time().'blog1'.'.'.$file_ext;
	 $config['file_name'] = $new_name1;
	 $config['upload_path'] = 'uploads/blog';
	 $config['allowed_types'] = 'gif|jpg|png|jpeg';	
	 $config['max_size'] = '1024'; //1 MB
	 $this->load->library('upload', $config);
	 $this->upload->initialize($config);
	 if (isset($_FILES['image1']['name'])) {
		 if (0 < $_FILES['image1']['error']) {
			 echo 'Error during file upload'.$new_name1;
		 } else {
			 if (file_exists('uploads/blog/'.$new_name1)) {
				 echo 'File already exists : uploads/blog/'.$new_name1;
			 } else {
				 
				 if (!$this->upload->do_upload('image1')) {
					 //echo $this->upload->display_errors();
				 } else {
					 //echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				 }
			 }
		 }
		 $image1=$new_name1;
	 } else {
		 $image1=$image11;
	 }
	 
	 
 
	 $file_ext = pathinfo($_FILES["image2"]["name"],PATHINFO_EXTENSION);
	$new_name2 = time().'blog2nd'.'.'.$file_ext;
	 $config2['file_name'] = $new_name2;
	 $config2['upload_path'] = 'uploads/blog';
	 $config2['allowed_types'] = 'gif|jpg|png|jpeg';	
	 $config2['max_size'] = '1024'; //1 MB
	 $this->load->library('upload', $config2);
	 $this->upload->initialize($config2);
	 if (isset($_FILES['image2']['name'])) {
		 if (0 < $_FILES['image2']['error']) {
			 echo 'Error during file upload'.$new_name2;
		 } else {
			 if (file_exists('uploads/blog/'.$new_name2)) {
				 echo 'File already exists : uploads/blog/'.$new_name2;
			 } else {
				 
				 if (!$this->upload->do_upload('image2')) {
					 //echo $this->upload->display_errors();
				 } else {
					 //echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				 }
			 }
		 }
		 $image2=$new_name2;
	 } else {
		 $image2=$image22;
	 }
 
	 $status=$this->input->post('status');
	 $blogtitle=$this->input->post('blogtitle');
	 $toparticle=$this->input->post('toparticle');
	 $description=$this->input->post('description');
	 $name=$this->input->post('name');
	 $place=$this->input->post('place');
	  $companyname=$this->input->post('companyname');
	  $date=$this->input->post('date');
	  $alttag1=$this->input->post('alttag1');
	 $alttag2=$this->input->post('alttag2');
	  //if (($image1!='') && ($image2!='')){

		$data = array(
			'active'=>$status,
			'alttagimg1'=>"$alttag1",
		'alttagimg2'=>"$alttag2",
			'place'=>"$place",
			'companyname'=>$companyname,
			 'description' =>"$description",
			'toparticle' =>"$toparticle",
			 'authorname'=>"$name",
			 'autorimage'=>$image1,'toparticle'=>$toparticle,'date'=>$date,'title'=>$blogtitle,'contentimage'=>$image2		
		  );

	  /*}else if ($image2!=''){

		$data = array(
			'alttagimg1'=>"$alttag1",
		'alttagimg2'=>"$alttag2",
			'place'=>"$place",
			'companyname'=>$companyname,
			 'description' =>"$description",
			'toparticle' =>"$toparticle",
			 'authorname'=>"$name",
			 'toparticle'=>$toparticle,'date'=>$date,'title'=>$blogtitle,'contentimage'=>$image2		
		  );


	  }else if ($image1!=''){
		$data = array(
			'alttagimg1'=>"$alttag1",
		'alttagimg2'=>"$alttag2",
			'place'=>"$place",
			'companyname'=>$companyname,
			 'description' =>"$description",
			'toparticle' =>"$toparticle",
			 'authorname'=>"$name",
			 'toparticle'=>$toparticle,'date'=>$date,'title'=>$blogtitle,'autorimage'=>$image1		
		  );


	  }else{
		$data = array(
			'alttagimg1'=>"$alttag1",
		'alttagimg2'=>"$alttag2",
			'place'=>"$place",
			'companyname'=>$companyname,
			 'description' =>"$description",
			'toparticle' =>"$toparticle",
			 'authorname'=>"$name",
			 'toparticle'=>$toparticle,'date'=>$date,'title'=>$blogtitle		
		  );


	  }*/
	 
	  $id=$this->input->post('blogid'); 
	  $this->db->where('contentid',$id);
	   $this->db->update('blogcontents', $data);
	   //echo $this->db->last_query();

	  echo ($this->db->affected_rows() != 1) ? 'Error in Editing Blogs' : '<b>Blog Edited Successfully</b>';




}
















public function edittestimonialsprocess(){
	$id=$this->uri->segment(3); 
	  $this->db->where('testimonialid',$id);
	$this->db->select('*');
    $this->db->from('testimonials');
    $query = $this->db->get();
   $imgdetails=$query->row();
   $image11=$imgdetails->image;

   $file_ext = pathinfo($_FILES["image1"]["name"],PATHINFO_EXTENSION);
	//$file_name=$_FILES['image1']['name'];
	//$newfile_name= preg_replace('/[^A-Za-z0-9]/', "", $file_name);
	//$//ext=pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
	$new_name = time().'testimonial'.'.'.$file_ext;
	$config['file_name'] = $new_name;
	$config['upload_path'] = 'uploads/testimonial';
	$config['allowed_types'] = 'gif|jpg|png|jpeg';	
	$config['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if (isset($_FILES['image1']['name'])) {
		if (0 < $_FILES['image1']['error']) {
			echo 'Error during file upload' . $_FILES['image1']['error'];
		} else {
			if (file_exists('uploads/testimonial/'.$new_name)) {
				//echo 'File already exists : uploads/contactus/'.$new_name;
				$image1=$image11;
			} else {
				
				if (!$this->upload->do_upload('image1')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
					$image1=$new_name;
				}
				$image1=$image11;

			}
		}
		$image1=$new_name;;

	} else {
		//echo 'Please choose a file';
		$image1=$image11;

	}




	/*$file_name=$_FILES['image1']['name'];
   //$newfile_name= preg_replace('/[^A-Za-z0-9]/', "", $file_name);
   //$//ext=pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
   $new_name = time().$file_name;
   $config['file_name'] = $new_name;
	$config['upload_path'] = 'uploads/testimonial';
	$config['allowed_types'] = 'gif|jpg|png|jpeg';	
	$config['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if (isset($_FILES['image1']['name'])) {
		if (0 < $_FILES['image1']['error']) {
			echo 'Error during file upload' . $_FILES['image1']['error'];
		} else {
			if (file_exists('uploads/testimonial' . $_FILES['image1']['name'])) {
				echo 'File already exists : uploads/testimonial' . $_FILES['image1']['name'];
			} else {
				
				if (!$this->upload->do_upload('image1')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
	} else {
		echo 'Please choose a file';
	}*/
	
	

	
	//$image1=$new_name;
	//$image2=$_FILES['image2']['name'];

	 $testtitle=$this->input->post('testtitle');
	 $rating=$this->input->post('rating');
	 $description=$this->input->post('description');
	 $name=$this->input->post('name');
	  $place=$this->input->post('place');
	  $date=$this->input->post('date');
	  $alttag1=$this->input->post('alttag1');
	  $status=$this->input->post('status');
/*if ($file_name==''){
	$data = array(
		'testimonial' =>"$description",'alttagimg1'=>"$alttag1",
		'rating' =>"$rating",
		'name'=>"$name",
		'place'=>$place,'date'=>$date,'title'=>$testtitle		
	 );

}else{*/
	 $data = array(
		 'testimonial' =>"$description",'alttagimg1'=>"$alttag1",
		 'rating' =>"$rating",
		 'name'=>"$name",
		 'image'=>$image1,'place'=>$place,'date'=>$date,'title'=>$testtitle,'active'=>$status		
	  );
	//}
	  $id=$this->uri->segment(3); 
	  $this->db->where('testimonialid',$id);
	   $this->db->update('testimonials', $data);

	  echo ($this->db->affected_rows() != 1) ? 'Error in Editing Testimonials' : '<b>Testimonials Edited Successfully</b>';


}


public function addsolutionsprocess(){

	$ext=pathinfo($_FILES["image1"]["name"], PATHINFO_EXTENSION);
	$new_name = time().'problems'.'.'.$ext;
	$config['file_name'] = $new_name;

	//$file_name=$_FILES['image1']['name'];
	//$new_name = time().$file_name;
	$config['file_name'] = $new_name;
	$config['upload_path'] = 'uploads/problems';
	$config['allowed_types'] = 'gif|jpg|png|jpeg';	
	$config['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if (isset($_FILES['image1']['name'])) {
		if (0 < $_FILES['image1']['error']) {
			echo 'Error during file upload' . $_FILES['image1']['error'];
		} else {
			if (file_exists('uploads/problems' . $_FILES['image1']['name'])) {
				echo 'File already exists : uploads/problems' . $_FILES['image1']['name'];
			} else {
				
				if (!$this->upload->do_upload('image1')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
	} else {
		echo 'Please choose a file';
	}

	//$image1=$_FILES['image1']['name'];
	//$image2=$_FILES['image2']['name'];
	$image1=$new_name;


	 $title=$this->input->post('maintitle');
	$link=$this->input->post('link');
	 $description=$this->input->post('description');
	 $alttag1=$this->input->post('alttag1');
	 $status=$this->input->post('status');
	  //$date=$this->input->post('date');
	  
	 $data = array(
		 'description' =>"$description",
		 'link' =>"$link",
		 'title'=>"$title",
		 'picture'=>$image1,
		 'alttagimg1'=>"$alttag1",'active'=>"$status"		
	  );
	  //print_r($data);
	  $id=$this->uri->segment(3); 
	  //$this->db->where('testimonialid',$id);
	   //$this->db->update('testimonials', $data);
	   $this->db->insert('problems', $data);

	  echo ($this->db->affected_rows() != 1) ? 'Error in Adding Solutions' : '<b>Solutions Added Successfully</b>';



}


public function editsolutionsprocess(){


	$problemid=$this->input->post('problemid');
	$this->db->where('problemid',$problemid);
	$this->db->select('*');
    $this->db->from('problems');
    $query = $this->db->get();
   $imgdetails=$query->row();
   
   $image11=$imgdetails->image1;
   //$image22=$imgdetails->faviconimg;
   //$image3=$imgdetails->serviceimg;

   /*$config['upload_path'] = 'uploads/logo';
   $config['allowed_types'] = 'gif|jpg|png|jpeg';	
   $config['max_size'] = '1024'; //1 MB
   $this->load->library('upload', $config);
   $this->upload->initialize($config);
   if (isset($_FILES['image1']['name'])) {
	   if (0 < $_FILES['image1']['error']) {
		   echo 'Error during file upload' . $_FILES['image1']['error'];
	   } else {
		   if (file_exists('uploads/logo' . $_FILES['image1']['name'])) {
			   echo 'File already exists : uploads/logo' . $_FILES['image1']['name'];
		   } else {
			   
			   if (!$this->upload->do_upload('image1')) {
				   //echo $this->upload->display_errors();
			   } else {
				   //echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
			   }
		   }
	   }
	   $image1=$_FILES['image1']['name'];
   } else {
	   $image1=$image11;
   }
   







	/*$config['upload_path'] = 'uploads/problems';
	$config['allowed_types'] = 'gif|jpg|png|jpeg';	
	$config['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if (isset($_FILES['image1']['name'])) {
		if (0 < $_FILES['image1']['error']) {
			echo 'Error during file upload' . $_FILES['image1']['error'];
		} else {
			if (file_exists('uploads/problems' . $_FILES['image1']['name'])) {
				echo 'File already exists : uploads/problems' . $_FILES['image1']['name'];
			} else {
				
				if (!$this->upload->do_upload('image1')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
	} else {
		echo 'Please choose a file';
	}*/


	if (($_FILES["image1"]["name"])!=''){

		$file_ext = pathinfo($_FILES["image1"]["name"],PATHINFO_EXTENSION);
		$new_name1 = time().'problems'.'.'.$file_ext;
		 $config['file_name'] = $new_name1;
		 $config['upload_path'] = 'uploads/problems';
		 $config['allowed_types'] = 'gif|jpg|png|jpeg';	
		 $config['max_size'] = '1024'; //1 MB
		 $this->load->library('upload', $config);
		 $this->upload->initialize($config);
		 if (isset($_FILES['image1']['name'])) {
			 if (0 < $_FILES['image1']['error']) {
				 echo 'Error during file upload'.$new_name1;
			 } else {
				 if (file_exists('uploads/problems/'.$new_name1)) {
					 echo 'File already exists : uploads/problems/'.$new_name1;
				 } else {
					 
					 if (!$this->upload->do_upload('image1')) {
						 //echo $this->upload->display_errors();
					 } else {
						 //echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
					 }
				 }
			 }
			 $image1=$new_name1;
		 } else {
			 $image1=$image11;
		 }
		 
	 }
	 else{
		 $image1=$image11;
	 }

	//$image1=$_FILES['image1']['name'];
	$status=$this->input->post('status');

	 $title=$this->input->post('maintitle');
	 $link=$this->input->post('link');
	 $description=$this->input->post('description');
	$problemid=$this->input->post('problemid');
	$alttag1=$this->input->post('alttag1');
	  //$date=$this->input->post('date');
	  if ($image1==''){
		$data = array(
			'description' =>"$description",
			'alttagimg1'=>"$alttag1",
			'title'=>"$title",
			//'picture'=>$image1,
			'link' =>"$link",'active'=>"$status"
			//,'place'=>$place,'date'=>$date,'title'=>$testtitle		
		 );

	  }else {
	 $data = array(
		 'description' =>"$description",
		 'alttagimg1'=>"$alttag1",
		 'title'=>"$title",
		 'picture'=>$image1,
		 'link' =>"$link",
		 //,'place'=>$place,'date'=>$date,'title'=>$testtitle		
	  );
	}
	  //print_r($data);
	  $id=$this->uri->segment(3); 
	  $this->db->where('problemid',$problemid);
	   $this->db->update('problems', $data);
	   //$this->db->insert('problems', $data);

	  //echo ($this->db->affected_rows() != 1) ? 'Error in Adding Solutions' : '<b>Solutions Added Successfully</b>';
	  echo ($this->db->affected_rows() != 1) ? $this->session->set_flashdata('flash_msg', 'Error in Editing Solutions') : $this->session->set_flashdata('flash_msg', 'Solutions Edited Successfully');


}














public function newsletter(){
	$data['result']=$this->sm->get_newsletterall();
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	$this->load->view('services/listnewsletter',$data);
}


public function newslettersubscribers(){
	$config = array();
$config["base_url"] = base_url() . "Welcome/newslettersubscribers";
$config["total_rows"] = $this->sm->get_countnewslettersubscribers();
$config["per_page"] = 10;
$config["uri_segment"] = 3;
$this->pagination->initialize($config);
$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
$data["links"] = $this->pagination->create_links();	
	$data['result']=$this->sm->get_newslettersubscribersall($config["per_page"],$page);
	$data['contactus']=$this->sm->get_contactus();
	//$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	$this->load->view('services/newslettersubscribers',$data);


}

public function deletenewsletter(){
	$id=$_GET['id'];
	$this->db->where('newsletterid',$id);
	$this->db->delete('newslettersubscribe');
	echo ($this->db->affected_rows() != 1) ? 'Error in deleting Newsletter Subscribers' : 'Newsletter Subscribers deleted Successfully';

}
function editnewsletter(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	$this->db->from('newsletter');
    $query = $this->db->get();
    $data['result']=$query->row();
	$data['contactus']=$this->sm->get_contactus(); 
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	$this->load->view('services/editnewsletter',$data);


}



function editgoogleanalyics(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	$this->db->from('googleanalyticscode');
    $query = $this->db->get();
    $data['result']=$query->row();
	$data['contactus']=$this->sm->get_contactus(); 
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	$this->load->view('services/editgoogleanalytics',$data);


}






function editnewsletterprocess(){
	$description=$this->input->post('description');
	/*$name=$this->input->post('name');
	 $place=$this->input->post('place');
	 $date=$this->input->post('date');*/
	$data = array(
		'newsletterdescription' =>"$description",
		//'rating' =>"$rating",
		//'name'=>"$name",
		//'image'=>$image1,'place'=>$place,'date'=>$date,'title'=>$testtitle		
	 );
	 $id=$this->uri->segment(3); 
	 $this->db->where('newsletterid',$id);
	  $this->db->update('newsletter', $data);

	 //echo ($this->db->affected_rows() != 1) ? 'Error in Editing Newsletter' : '<b>Newsletter Edited Successfully</b>';

	 echo ($this->db->affected_rows() != 1) ? $this->session->set_flashdata('flash_msg', 'Newsletter not edited') : $this->session->set_flashdata('flash_msg', 'Newsletter edited successfully');;



}










public function generatesitemap(){
	$data['result']=$this->sm->get_newsletterall();
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	$this->load->view('services/listsitemap',$data);
}


public function addfeatureupdate(){

	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	//$this->db->from('item');
    //$query = $this->db->get();
    //$data['result']=$query->result_array(); 
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	$this->load->view('services/addfeatureupdate',$data);



}




public function addsitemap(){

	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	$this->db->from('sitemap');
    $query = $this->db->get();
    $data['result']=$query->result_array(); 
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	$this->load->view('services/addsitemap',$data);



}



public function editfeature(){

	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');

	/*$this->db->where('imgid',1);
	$this->db->select('*');
    $this->db->from('productimages');
    $query = $this->db->get();
   $imgdetails=$query->row();
   $image11=$imgdetails->picture;*/

$id=$this->uri->segment(3);
   $this->db->where('featureid',$id);
	$this->db->from('featureupdate');
    $query = $this->db->get();
    $data['result']=$query->row();

	//$this->db->from('item');
    //$query = $this->db->get();
    //$data['result1']=$query->result_array();


	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	$this->load->view('services/editfeatureupdate',$data);



}

public function deletefeature(){
	$id=$_GET['id'];
	$this->db->where('featureid',$id);
	$this->db->delete('featureupdate');
	echo ($this->db->affected_rows() != 1) ? 'Error in deleting Feature Update' : 'Feature Update deleted Successfully';


}


public function deletekeywords(){
	$id=$_GET['id'];
	$this->db->where('keywordid',$id);
	$this->db->delete('sitemap');
	echo ($this->db->affected_rows() != 1) ? 'Error in deleting Keywords' : 'Keywords deleted Successfully';


}


public function addfeatureupdateprocess(){

	$ext=pathinfo($_FILES["image1"]["name"], PATHINFO_EXTENSION);
	$new_name = time().'featureicon'.'.'.$ext;
	$config['file_name'] = $new_name;

	//$file_name=$_FILES['image1']['name'];
	//$new_name = time().$file_name;
	$config['file_name'] = $new_name;
	$config['upload_path'] = 'uploads/featureicon';
	$config['allowed_types'] = 'gif|jpg|png|jpeg';	
	$config['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if (isset($_FILES['image1']['name'])) {
		if (0 < $_FILES['image1']['error']) {
			echo 'Error during file upload' . $_FILES['image1']['error'];
		} else {
			if (file_exists('uploads/featureicon' . $_FILES['image1']['name'])) {
				echo 'File already exists : uploads/featureicon' . $_FILES['image1']['name'];
			} else {
				
				if (!$this->upload->do_upload('image1')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
	} else {
		echo 'Please choose a file';
	}

	//$image1=$_FILES['image1']['name'];
	//$image2=$_FILES['image2']['name'];
	$image1=$new_name;


	 $prd=$this->input->post('prd');

	 //$title2=$this->input->post('title2');
	 //$title3=$this->input->post('title3');
	 //$title4=$this->input->post('title4');
	//$link=$this->input->post('link');
	 //$description=$this->input->post('description');
	 $alttag1=$this->input->post('alttag1');
	 $status=$this->input->post('status');
	  //$date=$this->input->post('date');
	  
	 $data = array(
		 //'description' =>"$description",
		 //'link' =>"$link",
		 //'productid'=>"$prd",
		 //'title2'=>"$title2",
		 //'title3'=>"$title3",
		 //'title4'=>"$title4",
		 'featureicon'=>$image1,
		 'alttagimg1'=>"$alttag1",'active'=>"$status"		
	  );
	  //print_r($data);
	  $id=$this->uri->segment(3); 
	  //$this->db->where('testimonialid',$id);
	   //$this->db->update('testimonials', $data);
	   //$this->db->insert('problems', $data);
	   
	   $this->db->insert('featureupdate', $data);
	  echo ($this->db->affected_rows() != 1) ? 'Error in Adding Images' : '<b>Images Added Successfully</b>';



}


public function editfupprocess(){


	$id=$this->input->post('id');
	$this->db->where('featureid',$id);
	$this->db->select('*');
    $this->db->from('featureupdate');
    $query = $this->db->get();
   $imgdetails=$query->row();
   $image11=$imgdetails->featureicon;

	$ext=pathinfo($_FILES["image1"]["name"], PATHINFO_EXTENSION);
	$new_name = time().'featureicon'.'.'.$ext;
	$config['file_name'] = $new_name;

	//$file_name=$_FILES['image1']['name'];
	//$new_name = time().$file_name;
	$config['file_name'] = $new_name;
	$config['upload_path'] = 'uploads/featureicon';
	$config['allowed_types'] = 'gif|jpg|png|jpeg';	
	$config['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if (($_FILES['image1']['name'])!='') {
	if (isset($_FILES['image1']['name'])) {
		if (0 < $_FILES['image1']['error']) {
			echo 'Error during file upload' . $_FILES['image1']['error'];
		} else {
			if (file_exists('uploads/featureicon' . $_FILES['image1']['name'])) {
				echo 'File already exists : uploads/featureicon' . $_FILES['image1']['name'];
			} else {
				
				if (!$this->upload->do_upload('image1')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
	} else {
		echo 'Please choose a file';
	}
	$image1=$new_name;
}else {

	$image1=$image11;

}

	//$image1=$_FILES['image1']['name'];
	//$image2=$_FILES['image2']['name'];
	


	 $prd=$this->input->post('prd');

	 //$title2=$this->input->post('title2');
	 //$title3=$this->input->post('title3');
	 //$title4=$this->input->post('title4');
	//$link=$this->input->post('link');
	 //$description=$this->input->post('description');
	 $alttag1=$this->input->post('alttag1');
	 $status=$this->input->post('status');
	  //$date=$this->input->post('date');
	  
	 $data = array(
		 //'description' =>"$description",
		 //'link' =>"$link",
		 //'productid'=>"$prd",
		 //'title2'=>"$title2",
		 //'title3'=>"$title3",
		 //'title4'=>"$title4",
		 'featureicon'=>$image1,
		 'alttagimg1'=>"$alttag1",'active'=>"$status"		
	  );
	  //print_r($data);
	  $id=$this->input->post('id');
	  $this->db->where('featureid',$id);
	   $this->db->update('featureupdate', $data);
	   //$this->db->insert('problems', $data);
	   
	   //$this->db->insert('productimages', $data);
	  echo ($this->db->affected_rows() != 1) ? 'Error in Adding Images' : '<b>Images Added Successfully</b>';
	  redirect("welcome/listfeatureupdate");


}



public function listfeatureupdate(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	$config = array();
	$config["base_url"] = base_url() . "Welcome/listfeatureupdate";
	//$config["total_rows"] = $this->sm->get_countsolutions();
	$config["total_rows"]=$this->sm->get_countfeatureupdate();
	$config["per_page"] = 10;
	$config["uri_segment"] = 3;
	$this->pagination->initialize($config);
	$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
	$data["links"] = $this->pagination->create_links();
	$data['result']=$this->sm->get_featureupdate($config["per_page"], $page);	
	//$data['result']=$this->sm->get_solutions($config["per_page"], $page);
	//$this->db->from('problems');
    //$query = $this->db->get();
    //$data['resultphone']=$query->row();
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();	
	$this->load->view('services/listfeatureupdate',$data);
}



public function listkeywords(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	$config = array();
	$config["base_url"] = base_url() . "Welcome/listkeywords";
	//$config["total_rows"] = $this->sm->get_countsolutions();
	$config["total_rows"]=$this->sm->get_countkeywords();
	$config["per_page"] = 10;
	$config["uri_segment"] = 3;
	$this->pagination->initialize($config);
	$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
	$data["links"] = $this->pagination->create_links();
	$data['result']=$this->sm->get_keywords($config["per_page"], $page);	
	//$data['result']=$this->sm->get_solutions($config["per_page"], $page);
	//$this->db->from('problems');
    //$query = $this->db->get();
    //$data['resultphone']=$query->row();
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();	
	$this->load->view('services/listkeywords',$data);
}



function addsitemapprocess(){

	//$prd=$this->input->post('prd');

	
	$alttag1=$this->input->post('alttag1');
	$status=$this->input->post('status');
	 //$date=$this->input->post('date');
	 
	$data = array(
		//'description' =>"$description",
		//'link' =>"$link",
		//'productid'=>"$prd",
		//'title2'=>"$title2",
		//'title3'=>"$title3",
		//'title4'=>"$title4",
		'changefreq'=>'Daily',
		'loc'=>"$alttag1",'active'=>"$status"		
	 );
	 //print_r($data);
	 $id=$this->uri->segment(3); 
	 //$this->db->where('testimonialid',$id);
	  //$this->db->update('testimonials', $data);
	  //$this->db->insert('problems', $data);
	  
	  $this->db->insert('sitemap', $data);
	 echo ($this->db->affected_rows() != 1) ? 'Error in Adding Keywords' : '<b>Keywords Added Successfully</b>';







}



public function editkeywords(){

	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');

	/*$this->db->where('imgid',1);
	$this->db->select('*');
    $this->db->from('productimages');
    $query = $this->db->get();
   $imgdetails=$query->row();
   $image11=$imgdetails->picture;*/

$id=$this->uri->segment(3);
   $this->db->where('keywordid',$id);
	$this->db->from('sitemap');
    $query = $this->db->get();
    $data['result']=$query->row();

	//$this->db->from('item');
    //$query = $this->db->get();
    //$data['result1']=$query->result_array();


	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	$this->load->view('services/editkeywords',$data);



}


function editkwprocess(){



	//$prd=$this->input->post('prd');

	//$title2=$this->input->post('title2');
	//$title3=$this->input->post('title3');
	//$title4=$this->input->post('title4');
   //$link=$this->input->post('link');
	//$description=$this->input->post('description');
	$alttag1=$this->input->post('alttag1');
	$status=$this->input->post('status');
	 //$date=$this->input->post('date');
	 
	$data = array(
		//'description' =>"$description",
		//'link' =>"$link",
		//'productid'=>"$prd",
		//'title2'=>"$title2",
		//'title3'=>"$title3",
		//'title4'=>"$title4",
		//'picture'=>$image1,
		'loc'=>"$alttag1",'active'=>"$status"		
	 );
	 //print_r($data);
	 $id=$this->input->post('id');
	 $this->db->where('keywordid',$id);
	  $this->db->update('sitemap', $data);
	  //$this->db->insert('problems', $data);
	  
	  //$this->db->insert('productimages', $data);
	 //echo ($this->db->affected_rows() != 1) ? 'Error in Editing Keywords' : '<b>Keywords Edited Successfully</b>';
	 ($this->db->affected_rows() != 1) ? $this->session->set_flashdata('flash_msg1', 'Error in Editing Keywords') : $this->session->set_flashdata('flash_msg1', 'Keywords Edited Successfully');

	 redirect("welcome/listkeywords");



}



function sendsubscribersemail(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	$data['contactus']=$this->sm->get_contactus();
	//$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	$this->load->view('services/sendsubscribersemail.php',$data);





}

function editemail(){

	$subject=$this->input->post('subject');
	$message=$this->input->post('description');
	$this->htmlmail($subject,$message);

	
	 $this->session->set_flashdata('flash_msg', 'Mail send Successfully');
	redirect("Welcome/newslettersubscribers");



}

public function htmlmail($subject,$msg){
	$this->db->select('*');
	$this->db->from('contactus');
	$query = $this->db->get();
	$contactusdte=$query->row();
	$email=$contactusdte->toemail1;

	$from_email=$email;
	$message=$msg;
	$name='Axiom';
	
	//$to_email =$toemailid;
	//$to_email = 'sumila.c@gmail.com';
	$config = array(
	   'protocol' => 'smtp', // 'mail', 'sendmail', or 'smtp'
	   'smtp_host' => 'smtp.gmail.com',
	   'smtp_port' => 587,
	   'smtp_user' => 'sumilaifix@gmail.com',
	   //'smtp_user' => 'crayoprojects2022@gmail.com',
	   //'smtp_pass' => 'wosmqbffmatsefdz',
	   'smtp_pass'=>'jcqa cvfq iwrc plsu',
	   'smtp_crypto' => 'tls', //can be 'ssl' or 'tls' for example
	   'mailtype' => 'html', //plaintext 'text' mails or 'html'
	   'smtp_timeout' => '4', //in seconds
	   'charset' => 'utf-8',
	   'wordwrap' => TRUE,
	   'newline' => "\r\n",
   );

    $this->load->library('email', $config);

  $this->email->set_newline("\r\n");

  

    $this->email->from($from_email,$name);

    $data = array(
'subject'=>$subject,
       'message'=>$message

         );

		 //$userEmail='sumilaifix@gmail.com';
		 //$subject='Pocket friendly Contact Us Enquiries';
		 $this->db->select('*');
		 $this->db->from('contactus');
		 $query = $this->db->get();
		 $contactusdte=$query->row();
		 $fn1=$contactusdte->toemail1;
		 $fn2=$contactusdte->toemail2;
		 $fn3=$contactusdte->toemail3;
		 //$this->email->to('sumila.c@gmail.com,sumilaifix@gmail.com,sumilaifix@gmail.com,sumilaifix@gmail.com');


		 $this->db->select('*');
		 $this->db->from('newslettersubscribe');
		 $query = $this->db->get();
		 $listarr=$query->result_array();
		 foreach($listarr as $li){
			$list[]=$li['subscribeemailid'];
		}

		$list = array('sumila.c@gmail.com', 'sumilaifix@gmail.com', 'sumilaifix@gmail.com');


//$this->email->to($list);
		 
		 //$this->email->to($fn1);
	
		 //$this->email->bcc(array($fn2,$fn3));
  $this->email->subject($subject); // replace it with relevant subject

  

     $body = $this->load->view('pocket/subscriberssemail1.php',$data,TRUE);
	//die;

  $this->email->message($body); 

    $this->email->send();

  }






}
