<?php
namespace Drupal\c_pages\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Provides route responses for the Example module.
 */
class ExampleController extends ControllerBase {
  /**
   * Returns a Twig template.
   */
  function myPage() {

    return [
      '#theme' => 'c_pages_template',
      '#test_var' => $this->t('Test Value'),
    ];

  }

}