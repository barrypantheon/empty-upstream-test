<?php

namespace Drupal\cu_example\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * An example controller.
 */
class CuExampleController extends ControllerBase {

  /**
   * Returns a render-able array for a test page.
   */
  public function content() {
    $build = [
      '#markup' => $this->t('Example controller page content.'),
    ];
    return $build;
  }

}
