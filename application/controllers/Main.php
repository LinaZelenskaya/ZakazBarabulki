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
            $data['fishselect'] = $this->product_model->fishselect();
            $this->load->view('filterfish.php', $data);
            if(!empty($_POST))
            {
                $fishname = $_POST['fishname'];
                $searchproductpriceC = $_POST['searchproductpriceC'];
                $searchproductpricePo = $_POST['searchproductpricePo'];
                $data['fish'] = $this->product_model->productfilter($fishname, $searchproductpriceC, $searchproductpricePo);
                $this->load->view('main_viewgost.php', $data);
            }
            else
            {
                $data['fish'] = $this->product_model->productselect();
                $this->load->view('main_viewgost.php', $data);
            }
        }
        else if($user['RoleID'] == 2)
        {
            $this->load->view('temp/navoperator.php', $data);
            $this->load->model('product_model');
            $data['fishselect'] = $this->product_model->fishselect();
            $this->load->view('filterfish.php', $data);
            if(!empty($_POST))
            {
                $fishname = $_POST['fishname'];
                $searchproductpriceC = $_POST['searchproductpriceC'];
                $searchproductpricePo = $_POST['searchproductpricePo'];
                $data['fish'] = $this->product_model->productfilter($fishname, $searchproductpriceC, $searchproductpricePo);
                $this->load->view('main_viewgost.php', $data);
            }
            else
            {
                $data['fish'] = $this->product_model->productselect();
                $this->load->view('main_viewgost.php', $data);
            }
        }
        else if($user['RoleID'] == 3)
        {
            $this->load->view('temp/navcontr.php', $data);
            $this->load->model('product_model');
            $data['fishselect'] = $this->product_model->fishselect();
            $this->load->view('filterfish.php', $data);
            if(!empty($_POST))
            {
                $fishname = $_POST['fishname'];
                $searchproductpriceC = $_POST['searchproductpriceC'];
                $searchproductpricePo = $_POST['searchproductpricePo'];
                $data['fish'] = $this->product_model->productfilter($fishname, $searchproductpriceC, $searchproductpricePo);
                $this->load->view('main_view.php', $data);
            }
            else
            {
                $data['fish'] = $this->product_model->productselect();
                $this->load->view('main_view.php', $data);
            }
        }
    }
    else
    {
        $this->load->view('temp/nav.php');
        $this->load->model('product_model');
        $data['fishselect'] = $this->product_model->fishselect();
        $this->load->view('filterfish.php', $data);
        if(!empty($_POST))
            {
                $fishname = $_POST['fishname'];
                $searchproductpriceC = $_POST['searchproductpriceC'];
                $searchproductpricePo = $_POST['searchproductpricePo'];
                $data['fish'] = $this->product_model->productfilter($fishname, $searchproductpriceC, $searchproductpricePo);
                $this->load->view('main_viewgost.php', $data);
            }
            else
            {
                $data['fish'] = $this->product_model->productselect();
                $this->load->view('main_viewgost.php', $data);
            }
    }
    $this->load->view('temp/footer.php');
  }

    //Авторизация
    public function login(){
      $this->load->view('temp/head.php');
      $this->load->view('temp/nav.php');
      if(!empty($_POST))
      {
          $UserLogin = $_POST['UserLogin'];
          $UserPassword = $_POST['UserPassword'];
          $this->load->model('user_model');
          $user = $this->user_model->selectuser($UserLogin, $UserPassword);
          var_dump($user);
          if(!empty($user))
          {
              $this->session->set_userdata($user);
          }
          redirect("main/index");
      }
      $this->load->view('login.php');
      $this->load->view('temp/footer.php');
      //Запишем данные в сессию
    }

    //Выход
    public function logout()
    {
        $this->session->unset_userdata('UserID');
        $this->session->unset_userdata('UserLogin');
        $this->session->unset_userdata('RoleID');
        redirect('main/index');
    }
}
?>