<?php

/**
 * @file
 * Post update functions for MyOlivero.
 */

/**
 * Sets the default `base_primary_color` value of MyOlivero's theme settings.
 */
function myolivero_post_update_add_myolivero_primary_color() {
  \Drupal::configFactory()->getEditable('myolivero.settings')
    ->set('base_primary_color', '#1b9ae4')
    ->save();
}
