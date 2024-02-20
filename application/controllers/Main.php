<?php if(!defined('BASEPATH')) exit ('нет доступа к скрипту');
class Main extends CI_Controller
{
  public function index(){
    $this->load->view('temp/head.php');
    $this->load->view('temp/nav.php');
    $this->load->view('main_view.php');
    $this->load->view('temp/footer.php');
    // $user = $this->session->userdata();
    // if(!empty($user['RoleID']))
    // {
    //     $data['UserLogin'] = $user['UserLogin'];
    //     if($user['RoleID'] == 1)
    //     {
    //         $this->load->view('temp/navadmin.php', $data);
    //         // $this->load->model('car_model');
    //         // $data['car'] = $this->car_model->filtercar();
    //         $this->load->view('main_view.php', $data);
    //     }
    //     else if($user['RoleID'] == 2)
    //     {
    //         $this->load->view('temp/navoperator.php', $data);
    //         // $this->load->model('car_model');
    //         // $data['car'] = $this->car_model->filtercar();
    //         // $this->load->model('car_model');
    //         // $data['car'] = $this->car_model->filtercar();
    //         $this->load->view('main_view.php', $data);
    //     }
    //     else if($user['RoleID'] == 3)
    //     {
    //         $this->load->view('temp/navcontr.php', $data);
    //         $this->load->view('main_view.php', $data);
    //     }
        
    // }
    // else
    // {
    //     $this->load->view('temp/nav.php');
    //     // $this->load->model('car_model');
    //     // $data['car'] = $this->car_model->filtercar();
    //     $this->load->view('main_view.php');
    // }
    }
}
?>