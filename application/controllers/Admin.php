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

    public function useradmin() // вывод пользователей
    {
        $this->load->view('temp/head.php');
        $user = $this->session->userdata();
        $data['UserLogin'] = $user['UserLogin'];
        $this->load->view('temp/navadmin.php', $data);
        $this->load->model('user_model'); 
        $data['users'] = $this->user_model->selectusers();
        $data['contragent'] = $this->user_model->selectcontr();
        $this->load->view('useradmin.php', $data);
        $this->load->view('temp/footer.php');

    }

    public function upduser(){ // вывод конкретного пользователя в изменении
        $UserID = $this->uri->segment(3,0);
        $this->load->view('temp/head.php');
        $user = $this->session->userdata();
        $data['UserLogin'] = $user['UserLogin'];
        $this->load->view('temp/navadmin.php', $data);
        $this->load->model('user_model'); 
        $data['users'] = $this->user_model->selectusers2($UserID);
        $this->load->view('upduser.php', $data);
        $this->load->view('temp/footer.php');
    }

    public function upduser2(){ // редактирование пользователя
        $this->load->view('temp/head.php');
        $this->load->view('temp/navadmin.php');
        $this->load->model('user_model'); 
        if(!empty($_POST))
        {
            $UserID=$_POST['UserID'];
           $LastName = $_POST['LastName'];
           $FirstName = $_POST['FirstName'];
           $FatherName = $_POST['FatherName'];
           $UserLogin = $_POST['UserLogin'];
           $UserPassword = $_POST['UserPassword'];
           $this->user_model->updpuser($UserPassword, $LastName, $FirstName, $FatherName, $UserLogin, $UserID); 
           redirect('admin/useradmin');
        }
        $this->load->view('temp/footer.php');
    }

    public function inssuser() // добавить пользователя
    {
        if(!empty($_POST))
        {
            $this->load->model('user_model'); 
            $LastName = $_POST['LastName']; 
            $FirstName = $_POST['FirstName']; 
            $FatherName = $_POST['FatherName']; 
            $UserLogin = $_POST['UserLogin']; 
            $UserPassword = $_POST['UserPassword'];
            $ContragentID = $_POST['ContragentName'];
            $this->user_model->insuser($LastName, $FirstName, $FatherName, $UserLogin, $UserPassword, $ContragentID);
            redirect('admin/useradmin');
        } 
    }

    public function inssprice() // добавить прайс лист
    {
        if(!empty($_POST))
        {
            $this->load->model('zakaz_model'); 
            $TypeName = $_POST['TypeName']; 
            $ProductName = $_POST['ProductName']; 
            $this->zakaz_model->insprice($TypeName, $ProductName);
            redirect('admin/pricelistadmin');
        } 
    }
    
    
    public function deleteuser() // удалить пользователя
    {
        $UserID = $this->uri->segment(3,0);
        $this->load->model('user_model'); 
        $this->user_model->deluser($UserID);
        redirect('admin/useradmin');
    }

    public function pricelistadmin() // вывод прайслиста
    {
        $this->load->view('temp/head.php');
        $user = $this->session->userdata();
        $data['UserLogin'] = $user['UserLogin'];
        $this->load->view('temp/navadmin.php', $data);
        $this->load->model('user_model'); 
        $data['pricelist'] = $this->user_model->selectprice();
        $data['product'] = $this->user_model->selectproduct();
        $data['typeprice'] = $this->user_model->selecttype();
        $this->load->view('pricelistadmin.php', $data);
        $this->load->view('temp/footer.php');

    }
    public function upddprice(){ // вывод конкретного прайслист в изменении
        $PriceID = $this->uri->segment(3,0);
        $this->load->view('temp/head.php');
        $user = $this->session->userdata();
        $data['UserLogin'] = $user['UserLogin'];
        $this->load->view('temp/navadmin.php', $data);
        $this->load->model('user_model');
        $data['product'] = $this->user_model->selectproduct();
        $data['typeprice'] = $this->user_model->selecttype(); 
        $data['pricelist'] = $this->user_model->selectprice2();
        $data['priceID'] = $this->user_model->selectprice5($PriceID);
        $this->load->view('upddprice.php', $data);
        $this->load->view('temp/footer.php');
    }

    public function upddprice2(){ // редактирование прайслист
        if(!empty($_POST))
        {
            $this->load->model('user_model');
            $PriceID = $_POST['PriceID'];
            $TypeID = $_POST['TypeName'];
            $ProductID = $_POST['ProductName'];
            $this->user_model->updprice($TypeID, $ProductID, $PriceID); 
            redirect('admin/pricelistadmin');
        }
    }

    public function deletprice() // удалить пользователя
    {
        $PriceID = $this->uri->segment(3,0);
        $this->load->model('zakaz_model'); 
        $this->zakaz_model->delprice($PriceID);
        redirect('admin/pricelistadmin');
    }
}
?>