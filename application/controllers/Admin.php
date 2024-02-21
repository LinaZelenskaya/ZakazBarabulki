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
}
?>