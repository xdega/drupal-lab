<?php

namespace Drupal\status_module\Controller;

use Drupal\Core\Controller\ControllerBase;

class StatusController extends ControllerBase
{
  public function content()
  {

    $intro = 'Welcome to the Task Status Monitor';
    $header = ['Task', 'Complete?'];

    $rows = [
      [$this->t('Cook Breakfast'), 'X'],
      [$this->t('Wash Dishes'), 'X'],
      [$this->t('Get Groceries'), ''],
      [$this->t('Study Some Drupal'), ''],
    ];

    $build['introduction'] = [
      '#markup' => '<p>' . $this->t($intro) . '</p>',
    ];

    $build['form'] = \Drupal::formBuilder()->getForm('Drupal\status_module\Form\TaskForm');

    $build['table'] = [
      '#type' => 'table',
      '#header' => $header,
      '#rows' => $rows,
      '#empty' => 'No Data Found',
    ];

    return $build;
  }
}
