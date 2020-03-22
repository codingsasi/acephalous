<?php

namespace Drupal\acephalous\Tests;

use Drupal\simpletest\WebTestBase;
use Drupal\Core\Entity\EntityManagerInterface;

/**
 * Provides automated tests for the acephalous module.
 */
class SiteInfoAPIControllerTest extends WebTestBase {

  /**
   * Drupal\Core\Entity\EntityManagerInterface definition.
   *
   * @var \Drupal\Core\Entity\EntityManagerInterface
   */
  protected $entityManager;


  /**
   * {@inheritdoc}
   */
  public static function getInfo() {
    return [
      'name' => "acephalous SiteInfoAPIController's controller functionality",
      'description' => 'Test Unit for module acephalous and controller SiteInfoAPIController.',
      'group' => 'Other',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function setUp() {
    parent::setUp();
  }

  /**
   * Tests acephalous functionality.
   */
  public function testSiteInfoAPIController() {
    // Check that the basic functions of module acephalous.
    $this->assertEquals(TRUE, TRUE, 'Test Unit Generated via Drupal Console.');
  }

}
