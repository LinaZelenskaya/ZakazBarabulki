<?php if(!defined('BASEPATH')) exit ('нет доступа к скрипту');
class Admin extends CI_Controller
{
  public function allcontragent(){
    $this->load->view('temp/head.php');
    $user = $this->session->userdata();
    $data['UserLogin'] = $user['UserLogin'];
    $this->load->view('temp/navadmin.php', $data);
    $this->load->model('user_model');
    $this->load->view('filterdate.php', $data);
    if(!empty($_POST))
    {
        $d1 = $_POST['d1'];
        $d2 = $_POST['d2'];
        $data['contragent'] = $this->user_model->selectallcontr($d1, $d2);
        $this->load->view('statcontragent.php', $data);
    }
    $this->load->view('temp/footer.php');
  }

  public function alltovar(){
    $this->load->view('temp/head.php');
    $user = $this->session->userdata();
    $data['UserLogin'] = $user['UserLogin'];
    $this->load->view('temp/navadmin.php', $data);
    $this->load->model('user_model');
    $this->load->view('filterdate.php', $data);
    if(!empty($_POST))
    {
        $d1 = $_POST['d1'];
        $d2 = $_POST['d2'];
        $data['product'] = $this->user_model->selectallproduct($d1, $d2);
        $this->load->view('statproduct.php', $data);
    }
    $this->load->view('temp/footer.php');
  }

  public function allcontragentzakaz(){
    $this->load->view('temp/head.php');
    $user = $this->session->userdata();
    $data['UserLogin'] = $user['UserLogin'];
    $this->load->view('temp/navadmin.php', $data);
    $this->load->model('user_model');
    $this->load->view('date.php', $data);
    if(!empty($_POST))
    {
        $d1 = $_POST['d1'];
        $d2 = $_POST['d2'];
        $data['contragent'] = $this->user_model->selectallprosrocheno($d1, $d2);
        $this->load->view('otchetprosroczakaz.php', $data);
    }
    $this->load->view('temp/footer.php');
  }

  public function contr1()
    {
        $this->load->view('temp/head.php');
        $user = $this->session->userdata();
        $data['UserLogin'] = $user['UserLogin'];
        $this->load->view('temp/navadmin.php', $data);
        $this->load->model('user_model'); 
        $data['contragent'] = $this->user_model->selectcontr();
        $this->load->view('contragent.php', $data);
        $this->load->view('temp/footer.php');

    }

    public function updpdcontr(){
        $ContragentID = $this->uri->segment(3,0);
        $this->load->view('temp/head.php');
        $user = $this->session->userdata();
        $data['UserLogin'] = $user['UserLogin'];
        $this->load->view('temp/navadmin.php', $data);
        $this->load->model('user_model'); 
        $data['contragent'] = $this->user_model->selectcontr2($ContragentID);
        $this->load->view('updpdcontr.php', $data);
        $this->load->view('temp/footer.php');
    }

    public function updpdcontr2(){
        $this->load->view('temp/head.php');
        $this->load->view('temp/navadmin.php');
        $this->load->model('user_model'); 
        if(!empty($_POST))
        {
            $ContragentID =$_POST['ContragentID'];
           $ContragentName = $_POST['ContragentName'];
           $ContragentAdress = $_POST['ContragentAdress'];
           $ContragentPhone = $_POST['ContragentPhone'];
           $ContragentBankRecvezit = $_POST['ContragentBankRecvezit'];
           $this->user_model->updpdcontr($ContragentBankRecvezit, $ContragentAdress, $ContragentPhone, $ContragentName, $ContragentID); 
           redirect('admin/contr1');
        }
        $this->load->view('temp/footer.php');
    }

    public function inssagent() // добавить агента
    {
        if(!empty($_POST))
        {
            $this->load->model('user_model'); 
            $ContragentName = $_POST['ContragentName']; 
            $ContragentPhone = $_POST['ContragentPhone']; 
            $ContragentAdress = $_POST['ContragentAdress']; 
            $ContragentBankRecvezit = $_POST['ContragentBankRecvezit']; 
            $this->user_model->inscontr($ContragentBankRecvezit, $ContragentAdress, $ContragentPhone, $ContragentName);
            redirect('admin/contr1');
        } 
    }
    
    public function deletecontr() // добавить агента
    {
        $ContragentID = $this->uri->segment(3,0);
        $this->load->model('user_model'); 
        $this->user_model->delcontr($ContragentID);
        redirect('admin/contr1');
    }

    public function product(){
    $this->load->view('temp/head.php');
    $user = $this->session->userdata();
    $data['UserLogin'] = $user['UserLogin'];
    $this->load->view('temp/navadmin.php', $data);
    $this->load->model('product_model');
    $data['fish'] = $this->product_model->productselect();
    $this->load->view('productspisok.php', $data);
    $this->load->view('temp/footer.php');
    }
    
    public function updprice(){
        $ProductID = $this->uri->segment(3,0);
        $this->load->view('temp/head.php');
        $user = $this->session->userdata();
        $data['UserLogin'] = $user['UserLogin'];
        $this->load->view('temp/navadmin.php', $data);
        $this->load->model('contr_model');
        $data['fish'] = $this->contr_model->selectaddzakaz($ProductID);
        $this->load->view('updprice.php', $data);
        $this->load->view('temp/footer.php');
    }

    public function updzakaz()
    {
        if(!empty($_POST))
        {
            $ProductID = $_POST['ProductID'];
            $ProductPrice = $_POST['ProductPrice'];
            $this->load->model('zakaz_model');
            $this->zakaz_model->updzakaz($ProductPrice, $ProductID);
            redirect("admin/product");
        }
    }  
}
?>