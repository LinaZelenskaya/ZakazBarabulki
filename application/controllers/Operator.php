<?php if(!defined('BASEPATH')) exit ('нет доступа к скрипту');
class Operator extends CI_Controller
{
  public function allzakazoperator(){
    $this->load->view('temp/head.php');
    $user = $this->session->userdata();
    $data['UserLogin'] = $user['UserLogin'];
    $this->load->view('temp/navoperator.php', $data);
    $this->load->model('user_model');
    $data['contragent'] = $this->user_model->selectcontragent();
    $data['contragentFIO'] = $this->user_model->selectcontragentFIO();
    $this->load->view('filterallzakaz.php', $data);
    $this->load->model('zakaz_model');
    if(!empty($_POST))
    {
        $UserID = $_POST['contragentsFIO'];
        $data['zakaz'] = $this->zakaz_model->selectzakaz($UserID);
        $this->load->view('allzakazoperator.php', $data);
    }
    else
    {
        $data['zakaz'] = $this->zakaz_model->selectallzakaz();
        $this->load->view('allzakazoperator.php', $data);
    }
    $this->load->view('temp/footer.php');
  }
}
?>