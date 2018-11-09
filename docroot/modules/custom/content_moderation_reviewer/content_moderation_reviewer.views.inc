<?php

/**
 * @file
 * Content moderation views file.
 */

/**
 *
 * Implements hook_views_data_alter().
 */
function content_moderation_reviewer_views_data_alter(&$data) {
  $data['node_field_revision']['nodes_moderation_reviewer'] = [
    'title' => t('Node Moderation Reviewer'),
    'argument' => [
      'title' => t('Node Moderation Reviewer'),
      'help' => t('Specify a user that can be assigned as moderation reviewer a node can have.'),
      'field' => 'content_moderation_reviewer',
      'id' => 'content_moderation_reviewer_node_reviewer',
    ],
  ];
}
