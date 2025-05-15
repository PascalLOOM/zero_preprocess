<?php

namespace Drupal\zero_preprocess\Plugin\Zero\Preprocess;

use Drupal\zero_preprocess\Base\PreprocessExtenderInterface;
use Drupal\zero_preprocess\Base\PreprocessExtenderPlugin;
use Drupal\zero_preprocess\Base\PreprocessPluginBuilderInterface;

/**
 * @PreprocessPluginBuilder(
 *   id = "demo_plugin",
 *   label = "Demo Plugin",
 *   description = "snooze"
 * )
 */
class DemoPlugin implements PreprocessPluginBuilderInterface
{


  public function preprocess(array &$vars, array $zero, array $template)
    {
      $vars['PreprocessPluginTest'] = TRUE;
    }

  public function weight(): int
  {
    return 1;
  }

  public function registry(array &$zero, array $item, $name, array $theme_registry)
  {
    // TODO: Implement registry() method.
  }
}
