<?php

/**
 * @file
 * Definition of Drupal\content_moderation_reviewer\Plugin\views\argument\NodeModerationReviewer.
 */

namespace Drupal\content_moderation_reviewer\Plugin\views\argument;

use Drupal\user\Plugin\views\argument\Uid;

/**
 * Filters by given list of node title options.
 *
 * @ingroup views_filter_handlers
 *
 * @ViewsArgument("content_moderation_reviewer_node_reviewer")
 */
class NodeModerationReviewer extends Uid {

  /**
   * {@inheritdoc}
   */
  public function query() {
    $table = $this->ensureMyTable();
    $this->query->addWhere(0, "$table.content_moderation_reviewer", $this->argument, 'IN');
  }

}