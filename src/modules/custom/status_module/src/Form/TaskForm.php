<?php

namespace Drupal\status_module\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class TaskForm extends FormBase
{
  public function getFormId()
  {
    return 'status_module_task_form';
  }

  public function buildForm(array $form, FormStateInterface $form_state)
  {
    $form['description'] = [
      '#type' => 'item',
      '#markup' => $this->t('A form for adding new tasks')
    ];

    $form['task'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Task Name'),
      '#description' => $this->t('Task should be less than 50 characters'),
      '#required' => TRUE,
    ];

    $form['actions'] = [
      '#type' => 'actions',
    ];

    $form['actions']['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Add Task'),
    ];

    return $form;
  }

  public function validateForm(array &$form, FormStateInterface $form_state)
  {
    $task = $form_state->getValue('task');

    if (strlen($task) > 50) {
      $msg = 'Task should not exceed 50 characters';
      $form_state->setErrorByName('task', $this->t($msg));
    }
  }

  public function submitForm(array &$form, FormStateInterface $form_state)
  {
    $props['%task'] = $form_state->getValue('task');

    $this->messenger()->addMessage($this->t('New Task Added! %task', $props));
  }
}
