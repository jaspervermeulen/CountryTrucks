<?php 

require_once __DIR__ . '/Controller.php';

require_once __DIR__ . '/../dao/TruckDAO.php';

class PagesController extends Controller {


  function __construct() {
    $this->truckDAO = new TruckDAO();
    if (!empty($_POST['action'])) {
      if ($_POST['action'] == 'insertEmail') {
        if (!empty($_POST['email'])) {
          $mail = $this->truckDAO->insert($_POST['email']);
        }
      }
    }
  }

  public function index() {
    $this->set('destinations',$this->truckDAO->selectAll());
    $this->set('currentPage', 'home');
  }

  public function about() {
    $this->set('currentPage', 'about');
  }

  public function trucks() {
    $this->set('destinations',$this->truckDAO->selectAll()); 
    $this->set('currentPage', 'trucks');
  }

  public function detail() {
    if($_GET['id'] < 6 && $_GET['id'] > 0){
      $this->set('destination',$this->truckDAO->selectById($_GET['id']));
      $this->set('facts',$this->truckDAO->selectFacts($_GET['id']));
      $this->set('toDo',$this->truckDAO->selectToDo($_GET['id']));
      $this->set('products',$this->truckDAO->selectActivity($_GET['id']));
    }else{
      $this->set('destination',$this->truckDAO->selectById(1));
      $this->set('facts',$this->truckDAO->selectFacts(1));
      $this->set('toDo',$this->truckDAO->selectToDo(1));
      $this->set('products',$this->truckDAO->selectActivity(1));
    }
    $this->set('currentPage', 'detail');
  }

  public function practical(){
    $this->set('faqs',$this->truckDAO->selectQuestions());
    $this->set('currentPage', 'practical');
  }
  
}

