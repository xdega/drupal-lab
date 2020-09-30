<?php

namespace Drupal\first_module\Controller;

class WelcomeController {

  public function welcome() {
    return [
      '#markup' => 'Schedule Form/Table Here'
    ];
  }
}