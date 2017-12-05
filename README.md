# Workbench Reviewer

[Workbench Reviewer](https://github.com/patrickfweston/workbench_reviewer) is a module to allow for content editors to assign individual pieces of content to other users for review. It extends from the Workbench and Workbench Moderation modules. Using additional modules like [Workbench Moderation]() or [Workbench Email]() allows for custom workflows to be implemented.

A new "Workflow" section is added to the right-hand set of tools when editing nodes. This module provides an entity reference field where a reviewer may be tagged. In addition, the revision log message is also displayed here to make it easy to add notes about what has been updated.

Additionally, a new "Assigned to Me" view is created for Workbench. This view allows editors to see which pieces of content are assigned for them to review.

### How to Setup
By default, Workbench Reviewer adds the reviewer field to any content type that has moderation enabled. If moderation is not enabled, Workbench Reviewer is not used.

### How to Use
To use Workbench Reviewer, just create a node like you would normally do. Assigning the node to someone to review is optional. When you mark someone else as the reviewer in the "Assign to for review" field, the node will appear in their list of items to review through the "Assigned to Me" tab in Workbench.

## Example Implementation
Using transitions created with the _Workbench Moderation_ module and automated emails set up via the _Workbench Email_ module, content editors can assign content to administrators for review. During this state transition, automated emails will be sent. Administrators and editors can view content ready for their review using the _Assigned to Me_ view this module provides.

## Copyright

Copyright 2017 Palantir.net, Inc.
