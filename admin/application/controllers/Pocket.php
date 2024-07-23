<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pocket extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
	public function __construct(){
        parent::__construct();

         //load the model 
		 $this->load->library('session'); 
         $this->load->model('Servicesmodel','sm');
		 $this->load->database();
		 $this->session->keep_flashdata('flash_msg'); 
		 $this->load->helper(['form', 'url']); 
		 $this->load->library("pagination");
		 $this->load->library('email');

    }

	/*public function testindex(){

		$data['result']=$this->sm->get_categoriesall();
		$data['resultsub']=$this->sm->get_subcategoriesall();
		$data['resultcontents']=$this->sm->get_blogcontents();
		$data['resultfaq']=$this->sm->get_faq();
		$data['resulttest']=$this->sm->get_testimonial();
		$data['about']=$this->sm->get_aboutus();
		$data['contactus']=$this->sm->get_contactus();
		$data['newsletter']=$this->sm->get_newsletter();
		$data['featureupdate']=$this->sm->get_featureupdate();
		$data['resulthome']=$this->sm->get_homepage();
		$this->load->view('pocket/indextest.php',$data);



	}*/

	public function index()
	{
		$data['result']=$this->sm->get_categoriesallactive();
		$data['resultsuball']=$this->sm->get_subcategoriesallactive();
		$data['resultsub']=$this->sm->get_subcategoriesrand();
		$data['resultcontents']=$this->sm->get_blogcontentsactive();
		$data['resultfaq']=$this->sm->get_faqactive();
		$data['resulttest']=$this->sm->get_testimonialactive();
		$data['about']=$this->sm->get_aboutus();
		$data['contactus']=$this->sm->get_contactus();
		$data['newsletter']=$this->sm->get_newsletter();
		$data['featureupdate']=$this->sm->get_featureupdateactive();
		$data['resulthome']=$this->sm->get_homepage();
		$data['qualities']=$this->sm->get_qualitiesactive();
		$data['menus']=$this->sm->get_menus();
		$data['siteinf']=$this->sm->get_siteinf();
		$this->load->view('pocket/index.php',$data);
	}


    public function about()
	{
		$data['contactus']=$this->sm->get_contactus();
		$data['about']=$this->sm->get_aboutus();
		$data['newsletter']=$this->sm->get_newsletter();
		$data['featureupdate']=$this->sm->get_featureupdateactive();
		$data['menus']=$this->sm->get_menus();
		$data['siteinf']=$this->sm->get_siteinf();
		$this->load->view('pocket/about.php',$data);
	}


public function service(){
	$data['contactus']=$this->sm->get_contactus();
	//$data['result']=$this->sm->get_categoriesall();
	$data['result']=$this->sm->get_categoriesallactive();
	$data['service']=$this->sm->get_servicesall();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['featureupdate']=$this->sm->get_featureupdateactive();
	$data['about']=$this->sm->get_aboutus();
	$data['menus']=$this->sm->get_menus();
	$data['siteinf']=$this->sm->get_siteinf();
	$data['steps']=$this->sm->get_stepsactive();
    $this->load->view('pocket/service.php',$data);
}
public function blog(){
	$data['result']=$this->sm->get_blog();
	$data['resultcontents']=$this->sm->get_blogcontentsactive();
	$data['resulttopcontent']=$this->sm->get_blogcontentstop();
	$data['resulttopcontentcount']=$this->sm->get_blogcontentstopcount();

	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['featureupdate']=$this->sm->get_featureupdateactive();
	$data['about']=$this->sm->get_aboutus();
	$data['menus']=$this->sm->get_menus();
	$data['siteinf']=$this->sm->get_siteinf();
    $this->load->view('pocket/blog.php',$data);
}

public function services(){
	$data['menus']=$this->sm->get_menus();
	$data['siteinf']=$this->sm->get_siteinf();
	$this->load->model('Servicesmodel');
	$this->load->view('services/sign-in');
	

} 

public function contact1(){
	$data['menus']=$this->sm->get_menus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['featureupdate']=$this->sm->get_featureupdate();
	$data['contactus']=$this->sm->get_contactus();
	$data['about']=$this->sm->get_aboutus();
	$data['siteinf']=$this->sm->get_siteinf();
    //$this->load->view('pocket/contact.php',$data);
 $this->load->view('pocket/contact1.php',$data);

}

public function contact(){
	$data['menus']=$this->sm->get_menus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['featureupdate']=$this->sm->get_featureupdateactive();
	$data['contactus']=$this->sm->get_contactus();
	$data['about']=$this->sm->get_aboutus();
	$data['siteinf']=$this->sm->get_siteinf();
    //$this->load->view('pocket/contact.php',$data);
 $this->load->view('pocket/contact.php',$data);

}

public function dashboard(){
	
	$this->load->model('Servicesmodel');
	$this->load->view('services/dashboard');
	
} 





public function logout(){
	$this->load->model('Servicesmodel');
	redirect("welcome/services");




}


public function enquiryprocess(){
$firstname=$this->input->post('firstname');
$lastname=$this->input->post('lastname');
$email=$this->input->post('email');
$phone=$this->input->post('phone');
$businessnature=$this->input->post('natureofbusiness');
$packages=$this->input->post('package');
$note=$this->input->post('note');
$businesswebsiteduration=$this->input->post('businesswebsiteduration');
$data = array(
	'firstname' =>"$firstname",
	'lastname' =>"$lastname",
	'email' =>"$email",
	'phone' =>"$phone",
	'businessnature' =>"$businessnature",
	'packages'=>"$packages",
	'note'=>"$note",
	'businesswebsiteduration'=>"$businesswebsiteduration"
 );
 $this->db->insert('enquiries', $data);

 $toemailid='sumilaifix@gmail.com';
 $this->htmlmailenquiry($firstname,$lastname,$email,$phone,$note,$toemailid,$packages,$businessnature,$businesswebsiteduration);




 /*$from_email = "sumilaifix@gmail.com";
 $to_email = 'sumilaifix@gmail.com';
 
 $config = Array(
    'protocol' => 'smtp',
    'smtp_host' => 'ssl://smtp.googlemail.com',
    'smtp_port' => 465,
    'smtp_user' => 'sumilaifix@gmail.com',
    'smtp_pass' => 'sumila@2023',
    'mailtype'  => 'html', 
    'charset'   => 'iso-8859-1'
	'wordwrap' => TRUE
);
 $this->load->library('email',$config);
 $this->email->from($from_email,"$firstname $lastname");
 $this->email->to($to_email);
 $this->email->subject('Pocket Friendly Enquiries');
 $this->email->message('The email send using codeigniter library');
 //Send mail
 if($this->email->send()){
	 
 else{
	 
}*/
echo "Your enquiry send successfully";
}

//jcqa cvfq iwrc plsu 

public function contactenquiryprocess(){
	$name=$this->input->post('name');
	$companyname=$this->input->post('companyname');
	$email=$this->input->post('email');
	$phone=$this->input->post('phone');
	$message=$this->input->post('message');	
	$data = array(
		'name' =>"$name",
		'companyname' =>"$companyname",
		'email' =>"$email",
		'phone' =>"$phone",
		'message' =>"$message",
		//'packages'=>"$packages",
		//'note'=>"$note",
		//'businesswebsiteduration'=>"$businesswebsiteduration"
	 );
	 $this->db->insert('contactenquiries',$data);
	 $toemailid='sumilaifix@gmail.com';
	 
	$this->htmlmailcontactus($name,$companyname,$email,$phone,$message,$email,$toemailid);
	echo "Your enquiry send successfully";
	}

	



	public function contactenquiryprocesspopup(){
		$name=$this->input->post('name');
		$companyname=$this->input->post('companyname');
		$email=$this->input->post('email');
		$phone=$this->input->post('phone');
		$message=$this->input->post('message');	
		$business=$this->input->post('business');
		$package=$this->input->post('package');
		$natureofbusiness=$this->input->post('business');
		$data = array(
			'name' =>"$name",
			'companyname' =>"$companyname",
			'email' =>"$email",
			'phone' =>"$phone",
			'message' =>"$message",
			'packageid'=>"$package",
			'natureofbusiness'=>"$natureofbusiness",
			//'businesswebsiteduration'=>"$businesswebsiteduration"
		 );
		 $this->db->insert('contactenquiries',$data);
		 $toemailid='sumilaifix@gmail.com';
		 $this->htmlmailcontactuspopup($name,$companyname,$email,$phone,$message,$email,$toemailid,$package,$natureofbusiness);
		 /*$from_email = "sumilaifix@gmail.com";
		 $to_email = 'sumilaifix@gmail.com';
		 
		 $config = Array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_user' => 'sumilaifix@gmail.com',
			'smtp_pass' => 'sumila@2023',
			'mailtype'  => 'html', 
			'charset'   => 'iso-8859-1'
		);
		 $this->load->library('email',$config);
		 $this->email->from($from_email,"$name");
		 $this->email->to($to_email);
		 $this->email->subject('Pocket Friendly Enquiries');
		 $this->email->message('The email send using codeigniter library');
		 //Send mail
		 if($this->email->send()){
			
		 }
		 else{
			 
		}*/
		echo "Your enquiry send successfully";
		}








public function servicedetails(){

    //$serid=$this->uri->segment(3);
	$url=$this->uri->segment(2);
	$urlkey='services/'.$url;
	//die;
$fieldid3='urlkey';
	$resultrow3=$this->sm->get_activedatarowwhere('category',$urlkey,$fieldid3);
	

	$serid=$resultrow3->categoryid;
	
	$data['servicedetails']=$this->sm->get_servicedetalsactive($serid);
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['featureupdate']=$this->sm->get_featureupdate();
	$data['about']=$this->sm->get_aboutus();
	
	$data['categories']=$this->sm->get_categoriesallactive();
	$data['lowestpackage']=$this->sm->get_lowestpackage($serid);
	$data['lowestpackagecount']=$this->sm->get_lowestpackagecount($serid);
	$data['easeyourproblems']=$this->sm->get_problemsactive();
	$data['menus']=$this->sm->get_menus();
	$data['siteinf']=$this->sm->get_siteinf();
	$data['result']=$this->sm->get_servicesdetails();
	$data['resultsub']=$this->sm->get_subcategoriesallactive();

	$this->load->view('pocket/service-details.php',$data);

}

public function newslettersubscribe(){
	
	$newsletteremailid=$this->input->post('emailidnews');
	$data=array('subscribeemailid'=>$newsletteremailid);
	$this->db->insert('newslettersubscribe', $data);
	echo ($this->db->affected_rows() != 1) ? 'Error in Subscription' : 'Your emailid subscribed Successfully';

}

public function hosting(){
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['featureupdate']=$this->sm->get_featureupdate();
	$data['about']=$this->sm->get_aboutus();
	$data['menus']=$this->sm->get_menus();
	$data['siteinf']=$this->sm->get_siteinf();
	//$data['contactus']=$this->sm->get_contactus();
	$this->load->view('pocket/hosting.php',$data);

}


public function indexload(){
	$this->load->view('pocket/post_view');
 }

 /**
  * This method returns all the data.
  *
  * @return Response
 */

 public function indexloaddiv(){
	$this->load->view('pocket/post_viewdiv');
 }



public function loadRecord($rowno=0){

    // Row per page
    $rowperpage = 5;

    // Row position
    if($rowno != 0){
      $rowno = ($rowno-1) * $rowperpage;
    }
 
    // All records count
    $allcount = $this->sm->getrecordCount();

    // Get records
    $users_record = $this->sm->getData($rowno,$rowperpage);
 
    // Pagination Configuration
    $config['base_url'] = base_url().'Pocket/loadRecord';
    $config['use_page_numbers'] = TRUE;
    $config['total_rows'] = $allcount;
    $config['per_page'] = $rowperpage;

    // Initialize
    $this->pagination->initialize($config);

    // Initialize $data Array
    $data['pagination'] = $this->pagination->create_links();
    $data['result'] = $users_record;
    $data['row'] = $rowno;

    echo json_encode($data);
 
  }

//}


public function loadRecorddiv($rowno=0){

    // Row per page
    $rowperpage = 5;

    // Row position
    if($rowno != 0){
      $rowno = ($rowno-1) * $rowperpage;
    }
 
    // All records count
    $allcount = $this->sm->getrecordCountsubcategory();

    // Get records
    $users_record = $this->sm->getDatasubcategory($rowno,$rowperpage);
 
    // Pagination Configuration
    $config['base_url'] = base_url().'Pocket/loadRecorddiv';
    $config['use_page_numbers'] = TRUE;
    $config['total_rows'] = $allcount;
    $config['per_page'] = $rowperpage;

    // Initialize
    $this->pagination->initialize($config);

    // Initialize $data Array
    $data['pagination'] = $this->pagination->create_links();
    $data['result'] = $users_record;
    $data['row'] = $rowno;

    echo json_encode($data);
 
  }












public function htmlmailcontactus($name,$companyname,$email,$phone,$msg,$fromemailid,$toemailid){

	$from_email=$email;
	$message=$msg;
	
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

       'name'=>$name,'companyname'=>$companyname,'email'=>$email,'phone'=>$phone,'message'=>$message

         );

		 //$userEmail='sumilaifix@gmail.com';
		 $subject='Pocket friendly Contact Us Enquiries';
		 $this->db->select('*');
		 $this->db->from('contactus');
		 $query = $this->db->get();
		 $contactusdte=$query->row();
		 $fn1=$contactusdte->toemail1;
		 $fn2=$contactusdte->toemail2;
		 $fn3=$contactusdte->toemail3;
		 
		 
		 $this->email->to($fn1);
		 //$this->email->to($fn2);
		 $this->email->bcc(array($fn2,$fn3));
  $this->email->subject($subject); // replace it with relevant subject

  

     $body = $this->load->view('pocket/contactusenquiresemail1.php',$data,TRUE);
	//die;

  $this->email->message($body); 

    $this->email->send();

  }




  public function htmlmailcontactuspopup($name,$companyname,$email,$phone,$msg,$fromemailid,$toemailid,$packageid,$natureofbusiness){

	$from_email=$email;
	$message=$msg;
	$to_email =$toemailid;
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
	if (!empty($packageid)){
		$this->db->where('subcategoryid',$packageid);
		$this->db->select('*');
		$this->db->from('subcategory');
		$query = $this->db->get();
		$packagedt=$query->row();
		$packagename=$packagedt->subcategoryname;
	  }






    $data = array(

       'name'=>$name,'companyname'=>$companyname,'email'=>$email,'phone'=>$phone,'message'=>$message,'package'=>$packagename,'natureofbusiness'=>$natureofbusiness

         );

		 //$userEmail='sumilaifix@gmail.com';
		 $subject='Pocket friendly Contact Us Enquiries';

    //$this->email->to($to_email); // replace it with receiver mail id
	$this->db->select('*');
	$this->db->from('contactus');
	$query = $this->db->get();
	$contactusdte=$query->row();
	$fn1=$contactusdte->toemail1;
	$fn2=$contactusdte->toemail2;
	$fn3=$contactusdte->toemail3;
	
	
	$this->email->to($fn1);

	$this->email->bcc(array($fn2,$fn3));

  $this->email->subject($subject); // replace it with relevant subject

  

    $body = $this->load->view('pocket/contactusenquiresemail2.php',$data,TRUE);

  $this->email->message($body); 

    $this->email->send();

  }



  public function htmlmailenquiry($firstname,$lastname,$email,$phone,$note,$toemailid,$packageid,$natureofbusiness,$businesswebsiteduration){

  //public function htmlmailenquiry($name,$companyname,$email,$phone,$msg,$fromemailid,$toemailid,$packageid,$natureofbusiness){

	$from_email=$email;
	$message=$note;
	$to_email =$toemailid;
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

  

    $this->email->from($from_email,$firstname);
	if (!empty($packageid)){
		$this->db->where('subcategoryid',$packageid);
		$this->db->select('*');
		$this->db->from('subcategory');
		$query = $this->db->get();
		$packagedt=$query->row();
		$packagename=$packagedt->subcategoryname;
	  }






    $data = array(
		'businesswebsiteduration'=>$businesswebsiteduration,
       'firstname'=>$firstname,'lastname'=>$lastname,'email'=>$email,'phone'=>$phone,'message'=>$message,'packagename'=>$packagename,'natureofbusiness'=>$natureofbusiness

         );

		 //$userEmail='sumilaifix@gmail.com';
		 $subject='Pocket friendly Enquiries';
		 $this->db->select('*');
		 $this->db->from('contactus');
		 $query = $this->db->get();
		 $contactusdte=$query->row();
		 $fn1=$contactusdte->toemail1;
		 $fn2=$contactusdte->toemail2;
		 $fn3=$contactusdte->toemail3;
		 
		 
		 $this->email->to($fn1);
	
		 $this->email->bcc(array($fn2,$fn3));
	   
		 $this->email->subject($subject); 

  

  

    $body = $this->load->view('pocket/contactusenquiresemail3.php',$data,TRUE);

  $this->email->message($body); 

    $this->email->send();

  }














	
}
