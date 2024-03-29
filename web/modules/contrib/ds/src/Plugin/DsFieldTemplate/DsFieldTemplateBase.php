<?php

namespace Drupal\ds\Plugin\DsFieldTemplate;

use Drupal\Core\Plugin\PluginBase;
use Drupal\Core\Entity\EntityInterface;
use Drupal\ds\Ds;

/**
 * Base class for all the ds plugins.
 */
abstract class DsFieldTemplateBase extends PluginBase implements DsFieldTemplateInterface {

  /**
   * The entity used for token replacement.
   *
   * @var \Drupal\Core\Entity\EntityInterface
   */
  protected $entity = NULL;

  /**
   * Constructs a Display Suite field plugin.
   */
  public function __construct($configuration, $plugin_id, $plugin_definition) {
    parent::__construct($configuration, $plugin_id, $plugin_definition);
    $this->configuration += $this->defaultConfiguration();
  }

  /**
   * {@inheritdoc}
   */
  public function getEntity() {
    return $this->entity;
  }

  /**
   * {@inheritdoc}
   */
  public function setEntity(EntityInterface $entity) {
    $this->entity = $entity;
  }

  /**
   * {@inheritdoc}
   */
  public function alterForm(&$form) {
    $config = $this->getConfiguration();

    $form['lb'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Label'),
      '#size' => '10',
      '#default_value' => $config['lb'],
    ];
    $form['lb-col'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Show label colon'),
      '#default_value' => $config['lb-col'],
      '#attributes' => [
        'class' => ['colon-checkbox'],
      ],
      '#description' => $this->t('Note: depending on the selected template, this setting might have no effect at all.')
    ];
    $field_classes = Ds::getClasses('field');

    if (!empty($field_classes)) {
      $form['classes'] = [
        '#type' => 'select',
        '#multiple' => TRUE,
        '#options' => $field_classes,
        '#title' => $this->t('Choose additional CSS classes for the field'),
        '#default_value' => $config['classes'],
        '#prefix' => '<div class="field-classes">',
        '#suffix' => '</div>',
      ];
    }
    else {
      $form['classes'] = [
        '#type' => 'value',
        '#value' => [],
      ];
    }
  }

  /**
   * {@inheritdoc}
   */
  public function massageRenderValues(&$field_settings, $values) {
    if (!empty($values['lb'])) {
      $field_settings['lb'] = $values['lb'];
    }
    if (!(empty($values['lb-col']))) {
      $field_settings['lb-col'] = TRUE;
    }
    if (isset($values['classes'])) {
      $field_settings['classes'] = $values['classes'];
    }
  }

  /**
   * {@inheritdoc}
   */
  public function getThemeFunction() {
    return $this->pluginDefinition['theme'];
  }

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    $config = [];
    $config['lb'] = '';
    $config['lb-col'] = \Drupal::config('ds.settings')->get('ft_show_colon');
    $config['classes'] = [];

    return $config;
  }

  /**
   * {@inheritdoc}
   */
  public function getConfiguration() {
    return $this->configuration;
  }

  /**
   * {@inheritdoc}
   */
  public function setConfiguration(array $configuration) {
    $this->configuration = $configuration + $this->configuration;
  }

}
