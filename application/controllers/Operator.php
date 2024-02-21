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

  public function updzakazstatus(){
    $OrderID = $this->uri->segment(3,0);
    $this->load->model('zakaz_model');
    $this->zakaz_model->updstatus($OrderID);
    redirect("operator/allzakazoperator");
  }
  
  public function updzakazstatusdostavl(){
    $OrderID = $this->uri->segment(3,0);
    $this->load->model('zakaz_model');
    $this->zakaz_model->updzakazstatusdostavl($OrderID);
    redirect("operator/allzakazoperator");
  }

  public function kontr()
    {
        $this->load->view('temp/head.php');

        $user = $this->session->userdata();
        $data['UserLogin'] = $user['UserLogin'];
        $this->load->view('temp/navoperator.php', $data);
        $this->load->model('contr_model');
        $data['contragent'] = $this->contr_model->filterkontr();

        $this->load->view('kontr.php', $data);
        $this->load->view('temp/footer.php');
    }
    public function product()
    {
        $this->load->view('temp/head.php');
        $user = $this->session->userdata();
        $data['UserLogin'] = $user['UserLogin'];
        $this->load->view('temp/navoperator.php', $data);
        $this->load->model('product_model');
        $this->load->view('filterproduct.php');
        if(!empty($_POST))
        {   
            $Searchproduct = $_POST['searchproductname'];
            $SearchPrice = $_POST['searchproductprice'];
            $data['product'] = $this->product_model->selectproductfilter($Searchproduct,$SearchPrice);
            $this->load->view('product.php', $data);
        }
        else
        {
            $data['product'] = $this->product_model->product();
            $this->load->view('product.php', $data);
        }
        $this->load->view('temp/footer.php');
    }
}
?>