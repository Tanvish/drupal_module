<?php

namespace Drupal\drupal_module\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Drupal_module block code.
 *
 * @Block(
 *   id = "drupal_module_redirectingblock",
 *   admin_label = @Translation("Redirecting Block"),
 * )
 */
class Redirectingblock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $builtForm = \Drupal::formBuilder()->getForm('Drupal\drupal_module\Form\redirectingform');
    $renderArray['form'] = $builtForm;
    return $renderArray;
  }

}
