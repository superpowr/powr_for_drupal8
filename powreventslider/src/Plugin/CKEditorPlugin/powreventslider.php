<?php

namespace Drupal\powreventslider\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginInterface;
use Drupal\ckeditor\CKEditorPluginContextualInterface;
use Drupal\ckeditor\CKEditorPluginButtonsInterface;
use Drupal\Component\Plugin\PluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "powreventslider" plugin, with a CKEditor.
 *
 * @CKEditorPlugin(
 *   id = "powreventslider",
 *   label = @Translation("powreventslider Plugin")
 * )
 */
class powreventslider extends PluginBase implements CKEditorPluginInterface, CKEditorPluginContextualInterface, CKEditorPluginButtonsInterface {

  /**
   * {@inheritdoc}
   */
  public function isEnabled(Editor $editor) {
    return TRUE;
  }

  /**
   * {@inheritdoc}
   */
  public function getDependencies(Editor $editor) {
    return [];
  }

  /**
   * {@inheritdoc}
   */
  public function getLibraries(Editor $editor) {
    return [];
  }

  /**
   * {@inheritdoc}
   */
  public function isInternal() {
    return FALSE;
  }

  /**
   * {@inheritdoc}
   */
  public function getFile() {
    return drupal_get_path('module', 'powreventslider') . '/js/plugins/powreventslider/plugin.js';
  }

  /**
   * @return array
   */
  public function getButtons() {
    $powr_eventslider_icon = drupal_get_path('module', 'powreventslider') . '/js/plugins/powreventslider/icons/eventslider.png';
    $powr_icon = drupal_get_path('module', 'powreventslider') . '/js/plugins/powreventslider/icons/powr.png';

    return [
      'powr_apps_dropdown' => [
        'label' => t('POWr Plugins'),
        'image' => $powr_icon,
      ],
      'powr_eventslider' => [
        'label' => t('POWr Event Slider'),
        'image' => $powr_eventslider_icon,
      ]
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function getConfig(Editor $editor) {
    return [];
  }

}
