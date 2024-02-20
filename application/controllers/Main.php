<?php if(!defined('BASEPATH')) exit ('нет доступа к скрипту');
class Main extends CI_Controller
{
  public function index(){
    $this->load->view('temp/head.php');
    $user = $this->session->userdata();
    if(!empty($user['RoleID']))
    {
        $data['UserLogin'] = $user['UserLogin'];
        if($user['RoleID'] == 1)
        {
            $this->load->view('temp/navadmin.php', $data);
            $this->load->model('product_model');
            $data['fish'] = $this->product_model->productselect();
            $this->load->view('main_view.php', $data);
        }
        else if($user['RoleID'] == 2)
        {
            $this->load->view('temp/navoperator.php', $data);
            $this->load->model('product_model');
            $data['fish'] = $this->product_model->productselect();
            $this->load->view('main_view.php', $data);
        }
        else if($user['RoleID'] == 3)
        {
            $this->load->view('temp/navcontr.php', $data);
            $this->load->view('main_view.php', $data);
        }
        
    }
    else
    {
        $this->load->view('temp/nav.php');
        $this->load->model('product_model');
        $data['fish'] = $this->product_model->productselect();
        $this->load->view('main_view.php', $data);
    }
    $this->load->view('temp/footer.php');
}

    // public function index()
    // {
    //     $this->load->view('temp/header.php');
    //     $this->load->view('temp/navbar.php');
    //     $this->load->view('main_view.php');
    //     $this->load->view('temp/footer.php');
    // }
  
    // public function grupp(){
    //     $this->load->view('temp/header.php');
    //     $this->load->view('temp/navbar.php');
    //     $this->load->view('form_grupp.php');
    //     $this->load->model('gruppa_model');
    //     $data['gruppa']= $this->gruppa_model->gruppa_select();
    //     $this->load->view('view_grupp.php',$data);
    //     $this->load->view('temp/footer.php'); 
    // }
    // public function ins_grupp()
    // {
    //   if (!empty($_POST)){
    //     $name_gruppa = $_POST['name_gruppa'];
    //     $spec = $_POST['spec'];
    //     $this->load->model('gruppa_model');
    //     $this->gruppa_model->gruppa_insert($name_gruppa, $spec);
    //     redirect('main/grupp');
    //       }
    //   }
  
}
?>