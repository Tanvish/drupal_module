<?php

namespace Drupal\drupal_module\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormBuilderInterface;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Drupal_module block code.
 *
 * @Block(
 *   id = "drupal_module_redirectingblock",
 *   admin_label = @Translation("Redirecting Block"),
 * )
 */
class RedirectingBlock extends BlockBase implements ContainerFactoryPluginInterface {

/**
   * {@inheritdoc}
   */  
protected $formBuilder;
/**
   * {@inheritdoc}
   */  
 

  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
/**
   * {@inheritdoc}
   **/  
   
 return new static(

/**
   * {@inheritdoc}
   */  

      $configuration,
      $plugin_id,
      $plugin_definition,
      $container->get('form_builder')
    );
  }
   public function __construct(array $configuration, $plugin_id, $plugin_definition, FormBuilderInterface $formBuilder) {
 parent::__construct($configuration, $plugin_id, $plugin_definition);
    $this->formBuilder = $formBuilder;
  }
$user_id = $this->formBuilder->id();



}
