<?php
/**
 * @file
 * Contains \Drupal\first_module\Controller\FirstController.
 *
 * Created by PhpStorm.
 * User: selwyn.polit
 * Date: 11/23/15
 * Time: 10:11 AM
 */

namespace Drupal\first_module\Controller;

use Drupal\Core\Controller\ControllerBase;

class FirstController extends ControllerBase {
  public function content() {
    return array(
      '#type' => 'markup',
      '#markup' => t('Hello world'),
    );
  }
}
