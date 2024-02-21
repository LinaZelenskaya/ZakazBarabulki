<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Contragent extends CI_Controller
{
    public function kontrorders()
    {
        $this->load->view('temp/head.php');

        $user = $this->session->userdata();
        $data['UserLogin'] = $user['UserLogin'];
        $this->load->view('temp/navcontr.php', $data);
        $this->load->model('order_model');
        $data['orders'] = $this->order_model->selectorders();

        $this->load->view('orders.php', $data);
        $this->load->view('temp/footer.php');
    }   

    public function addzakaz()
    {
        $ProductID = $this->uri->segment(3,0);
        $this->load->view('temp/head.php');
        $user = $this->session->userdata();
        $data['UserLogin'] = $user['UserLogin'];
        $this->load->view('temp/navcontr.php', $data);
        $this->load->model('contr_model');
        $data['fish'] = $this->contr_model->selectaddzakaz($ProductID);
        $this->load->view('addzakaz.php', $data);
        $this->load->view('temp/footer.php');
    }  

    public function inszakaz()
    {
        if(!empty($_POST))
        {
            $UserID = $this->session->userdata('UserID');
            $ProductID = $_POST['ProductID'];
            $ProductName = $_POST['ProductName'];
            $ProductPrice = $_POST['ProductPrice'];
            $countfish = $_POST['countfish'];
            $oplata = $ProductPrice*$countfish;
            $this->load->model('zakaz_model');
            $this->zakaz_model->inszakaz($UserID, $ProductID, $countfish);
            redirect("contragent/lichniykabinet");
        }
    }  
    
    public function lichniykabinet()
    {
        $user = $this->session->userdata();
        $data['UserID'] = $user['UserID'];
        $this->load->view('temp/head.php');
        $user = $this->session->userdata();
        $data['UserLogin'] = $user['UserLogin'];
        $this->load->view('temp/navcontr.php', $data);
        $this->load->model('contr_model');
        $UserID = $data['UserID'];
        $data['contr'] = $this->contr_model->selectcontr($UserID);
        $this->load->view('lichniykabinet.php', $data);
        $this->load->view('temp/footer.php');
    }  

    public function updzakazstatus()
    {
        $OrderID = $this->uri->segment(3,0);
        $this->load->model('zakaz_model');
        $this->zakaz_model->updstatuscontr($OrderID);
        redirect("contragent/lichniykabinet");
    }  
}
?>