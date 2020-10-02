<?php

namespace Drupal\status_module\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Database\Connection;
use Symfony\Component\DependencyInjection\ContainerInterface;

class StatusController extends ControllerBase
{
  protected $database;

  public function __construct(Connection $database)
  {
    $this->database = $database;
  }

  public static function create(ContainerInterface $container)
  {
    return new static(
      $container->get('database'),
    );
  }

  public function content()
  {
    $intro = 'Welcome to the Task Status Monitor';
    $header = ['Task', 'Completion Status'];

    $query = $this->database->select('status_module_task', 't')
      ->fields('t', ['body', 'complete']);

    $result = $query->execute();

    $rows = [];
    foreach ($result as $row) {
      //$complete = (bool)$row['complete'] ? 'Complete' : 'Not Complete';
      $rows[] = ['data' => (array) $row];
    }

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
