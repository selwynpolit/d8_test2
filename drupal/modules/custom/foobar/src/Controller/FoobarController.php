<?php
/**
 *
 */
namespace Drupal\foobar\Controller;

use Drupal\Core\Controller\ControllerBase;

use Symfony\Component\DependencyInjection\ContainerInterface;

class FoobarController extends ControllerBase {

  public static function create(ContainerInterface $container) {
    return new static($container->get('module_handler'));
  }

  /**
   * This will return the output of the foobar page.
   */
  public function foobarPage() {
    return array(
      '#markup' => t('This is the demo foobar page.'),
    );
  }

}