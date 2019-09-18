<?php

namespace Drupal\acephalous_extras\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Entity\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Class SiteInfoAPIController.
 */
class SiteInfoAPIController extends ControllerBase {

  /**
   * Drupal\Core\Entity\EntityManagerInterface definition.
   *
   * @var \Drupal\Core\Entity\EntityManagerInterface
   */
  protected $entityManager;


  /**
   * Constructs a new SiteInfoAPIController object.
   */
  public function __construct(EntityManagerInterface $entity_manager) {
    $this->entityManager = $entity_manager;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('entity.manager')
    );
  }

  /**
   * Siteinfo.
   *
   * @return string
   *   Return Hello string.
   */
  public function siteInfo() {
    $config = $this->config('system.site');
    $site_info = [
      'name' => $config->get('name'),
      'slogan' => $config->get('slogan'),
      'page' => $config->get('page'),
    ];
    return new JsonResponse($site_info);
  }

}
