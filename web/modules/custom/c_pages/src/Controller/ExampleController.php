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
    $display = array();
    $display['title'] = 'Test Page';

    $page[] = array(
      '#theme' => 'c_pages_template', //twig template
      '#title' => 'Example Page', //page title
      '#test_var' => $this->t('Test Value'),
      '#cache' => ['max-age' => 0],
      '#type' => 'markup'
    );

    return $page;   
  }
}