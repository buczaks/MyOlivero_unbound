## CONTENTS OF THIS FILE

- Introduction
- Requirements
- Installation
- Configuration
- Changes from original

## INTRODUCTION
- 20240209
- This is the MyOlivero theme v1. MyOlivero is an unbound replica of the Drupal10
  Olivero core theme that works as an already loaded starter theme without dependencies on core or
  other contrib themes. Menus and search are pre-configured. Preprocessors exist. Theme is not dependent on the 
  core/olivero theme so you can rip, shred, redesign, remove or add to it any way you desire.
- Place this theme package in /themes/custom and install as usual from
  the admin/appearance page. MyOlivero is not a subtheme and does not require a base theme.

## REQUIREMENTS

- Drupal 10
- This theme requires no modules or themes outside of Drupal 10 core.

## INSTALLATION

- Install the MyOlivero theme as you would normally install a
  Drupal theme. Visit
  <https://www.drupal.org/docs/extending-drupal/installing-themes> for
  further information.

## CONFIGURATION

- The original Olivero appearance settings are unchanged.  
- Click 'Settings' from the Appearance page MyOlivero screenshot.

## Changes from original

- namespace references are changed throughout from olivero to myolivero.
- templates/includes/preload.twig  rel="preload" was causing errors, attribute is removed to avoid error.
- js/navigation.js Error on resize of web browser fixed.



