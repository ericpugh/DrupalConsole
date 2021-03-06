<?php

/**
 * @file
 * Contains \Drupal\Console\Generator\PluginImageEffectGenerator.
 */

namespace Drupal\Console\Generator;

class PluginImageEffectGenerator extends Generator
{
    /**
     * Generator Plugin Image Effect.
     *
     * @param string $module       Module name
     * @param string $class_name   Plugin Class name
     * @param string $plugin_label Plugin label
     * @param string $plugin_id    Plugin id
     * @param string $description  Plugin description
     */
    public function generate($module, $class_name, $label, $plugin_id, $description)
    {
        $parameters = [
          'module' => $module,
          'class_name' => $class_name,
          'label' => $label,
          'plugin_id' => $plugin_id,
          'description' => $description,
        ];

        $this->renderFile(
            'module/src/Plugin/ImageEffect/imageeffect.php.twig',
            $this->getSite()->getPluginPath($module, 'ImageEffect').'/'.$class_name.'.php',
            $parameters
        );
    }
}
