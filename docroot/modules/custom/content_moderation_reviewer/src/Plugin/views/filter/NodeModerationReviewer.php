<?php

/**
 * @file
 * Definition of Drupal\content_moderation_reviwer\Plugin\views\filter\NodeModerationReviewer.
 */

namespace Drupal\content_moderation_reviwer\Plugin\views\filter;

use Drupal\user\Plugin\views\filter\Name;

/**
 * Filters by given list of node title options.
 *
 * @ingroup views_filter_handlers
 *
 * @ViewsFilter("content_moderation_reviewer_node_reviewer")
 */
class NodeModerationReviewer extends Name {


  /**
   * {@inheritdoc}
   */
  public function query() {
    $table = $this->ensureMyTable();
    $this->query->addWhere(0, "$table.content_moderation_reviewer", (array) $this->value, 'IN');
  }

  /**
   * {@inheritdoc}
   */
  public function getCacheContexts() {
    $contexts = parent::getCacheContexts();

    $contexts[] = 'user';

    return $contexts;
  }

}