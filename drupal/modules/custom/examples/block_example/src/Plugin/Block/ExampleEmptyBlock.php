<?php

/**
 * @file
 * Contains \Drupal\block_example\Plugin\Block\ExampleEmptyBlock.
 */

namespace Drupal\block_example\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Example: empty block' block.
 *
 * @Block(
 *   id = "example_empty",
 *   admin_label = @Translation("Example: empty block"),
 *   category = @Translation("Example")
 * )
 */
class ExampleEmptyBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    // We return an empty array on purpose. The block will thus not be rendered
    // on the site. See BlockExampleTest::testBlockExampleBasic().
    return array();
  }

}
