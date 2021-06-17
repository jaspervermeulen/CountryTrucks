<?php

class Controller {

  public $route;
  protected $viewVars = array();
  protected $env = 'development';

  public function filter() {
    if (basename(dirname(dirname(__FILE__))) != 'src') {
      $this->env = 'production';
    }
    setlocale(LC_ALL, 'nl_BE');
    if(!isset($_SESSION['cart'])) {
      $_SESSION['cart'] = array();
    }
    call_user_func(array($this, $this->route['action']));
  }

  public function render() {
    $this->set('js', '<script src="http://localhost:8080/script.js"></script>');
    // webpack dev server: css is injected by the script
    $this->set('css', '');
    if ($this->env == 'production') {
      // regular script in production
      $this->set('js', '<script src="script.js"></script>');
       // regular css in production
      $this->set('css', '<link href="style.css" rel="stylesheet">');
    }
    $numItems = 0;
    foreach ($_SESSION['cart'] as $productId => $info) {
      $numItems += $info['quantity'];
    }
    $this->set('numItems', $numItems);
    $this->createViewVarWithContent();
    $this->renderInLayout();
    if (!empty($_SESSION['info'])) {
      unset($_SESSION['info']);
    }
    if (!empty($_SESSION['error'])) {
      unset($_SESSION['error']);
    }
  }

  public function set($variableName, $value) {
    $this->viewVars[$variableName] = $value;
  }

  private function createViewVarWithContent() {
    extract($this->viewVars, EXTR_OVERWRITE);
    ob_start();
    require __DIR__ . '/../view/' . strtolower($this->route['controller']) . '/' . $this->route['action'] . '.php';
    $content = ob_get_clean();
    $this->set('content', $content);
  }

  private function renderInLayout() {
    extract($this->viewVars, EXTR_OVERWRITE);
    include __DIR__ . '/../view/layout.php';
  }

}
