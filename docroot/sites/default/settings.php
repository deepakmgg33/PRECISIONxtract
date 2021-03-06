<?php

/**
 * The active installation profile.
 *
 * Changing this after installation is not recommended as it changes which
 * directories are scanned during extension discovery. If this is set prior to
 * installation this value will be rewritten according to the profile selected
 * by the user
 *
 * @see install_select_profile()
 *
 * @deprecated in Drupal 8.3.0 and will be removed before Drupal 9.0.0. The
 *   install profile is written to the core.extension configuration. If a
 *   service requires the install profile use the 'install_profile' container
 *   parameter. Functional code can use \Drupal::installProfile().
 */
$settings['install_profile'] = 'wcms';

/**
 * Load separated configurations per environment.
 */
include dirname(DRUPAL_ROOT) . '/envs/default.inc';
