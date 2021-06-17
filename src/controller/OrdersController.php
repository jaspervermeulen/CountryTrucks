<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/TruckDAO.php';

class OrdersController extends Controller {

  private $truckDAO;

  function __construct() {
    $this->truckDAO = new TruckDAO();
  }

  public function cart() {
    if (!empty($_POST['action'])) {
      if ($_POST['action'] == 'add') {
        $this->_handleAdd();
      }
      if ($_POST['action'] == 'empty') {
        $_SESSION['cart'] = array();
      }
      if ($_POST['action'] == 'update') {
        $this->_handleUpdate();
      }
    }
    if (!empty($_POST['remove'])) {
      $this->_handleRemove();
    }
    $this->set('currentPage', 'cart');
  }

  public function checkout() {
    if (!empty($_POST['action'])) {
      if ($_POST['action'] == 'insertBuyer') {
        if (!empty($_POST['action'])) {
          $info = $this->truckDAO->insertBuyer($_POST);
          $_SESSION['cart'] = array();
        }
      }
    }
    $this->set('currentPage', 'checkout');
  }

  private function _handleCheckout() {
    header('Location: https://stripe.com/checkout');
    exit();
  }

  private function _handleAdd() {
    if (empty($_SESSION['cart'][$_POST['product_id']])) {
      $product = $this->truckDAO->selectProducts($_POST['product_id']);
      if (empty($product)) {
        return;
      }
      $_SESSION['cart'][$_POST['product_id']] = array(
        'product' => $product,
        'quantity' => 0
      );
    }
    $_SESSION['cart'][$_POST['product_id']]['quantity']++;
  }

  private function _handleRemove() {
    if (isset($_SESSION['cart'][$_POST['remove']])) {
      unset($_SESSION['cart'][$_POST['remove']]);
    }
  }

  private function _handleUpdate() {
    foreach ($_POST['quantity'] as $productId => $quantity) {
      if (!empty($_SESSION['cart'][$productId])) {
        $_SESSION['cart'][$productId]['quantity'] = $quantity;
      }
    }
    $this->_removeWhereQuantityIsZero();
  }

  private function _removeWhereQuantityIsZero() {
    foreach($_SESSION['cart'] as $productId => $info) {
      if ($info['quantity'] <= 0) {
        unset($_SESSION['cart'][$productId]);
      }
    }
  }
}
