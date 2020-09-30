<?php

namespace Drupal\first_module\Controller;

class WelcomeController {

  public function welcome() {
    return [
      '#markup' => 'ALRIGHT MATE?!'
    ];
  }
}