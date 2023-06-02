<?php
namespace Drupal\c_pages\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Provides route responses for the Example module.
 */
class ExampleController extends ControllerBase {

  /**
   * Returns a simple page.
   *
   * @return array
   *   A simple renderable array.
  */
function myPage() {
  $test = "";

  return [
    '#type' => 'markup',
    '#markup' => 'Hello, world 2',
  ];
}


}