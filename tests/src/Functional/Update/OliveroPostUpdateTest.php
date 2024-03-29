<?php

namespace Drupal\Tests\myolivero\Functional\Update;

use Drupal\FunctionalTests\Update\UpdatePathTestBase;

/**
 * Tests the update path for Olivero. But MyOlivero does not use a core base theme so no updates
 * should actually be done via this route, or auto.
 * @group Update
 */
class OliveroPostUpdateTest extends UpdatePathTestBase {

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'false';

  /**
   * {@inheritdoc}
   */
  protected function setDatabaseDumpFiles() {
    $this->databaseDumpFiles = [
      __DIR__ . '/../../../../../../modules/system/tests/fixtures/update/drupal-9.4.0.filled.standard.php.gz',
    ];
  }

  /**
   * Tests update hook setting base primary color.
   */
  public function testOliveroPrimaryColorUpdate() {
    $config = $this->config('myolivero.settings');
    $this->assertEmpty($config->get('base_primary_color'));

    // Run updates.
    $this->runUpdates();

    $config = $this->config('myolivero.settings');
    $this->assertSame('#1b9ae4', $config->get('base_primary_color'));
  }

}
