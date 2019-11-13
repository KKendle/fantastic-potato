<?php

// CUSTOM USER ROLES WIDGET
add_action('wp_dashboard_setup', 'theme_user_roles_widget');

function theme_user_roles_widget() {
  global $wp_meta_boxes;

  add_meta_box('theme_user_roles', 'Theme User Roles', 'theme_user_roles', 'dashboard', 'side', 'high');
}

function theme_user_roles() {
  ?>
  <section class="c-magnetizeDashboardWidget">
    <section class="c-magnetizeDashboardWidget__group">
      <h2 class="c-magnetizeDashboardWidget__title">Administrator</h2>
      <p>Users with the administrator role can add new posts, edit any posts by any users on the site, and even delete those posts.

      <p>They can install, edit, and delete plugins as well as themes. Most importantly an administrator user can add new users to the site, change information about existing users including their passwords as well as delete any user (yes other administrators too).</p>
    </section>

    <section class="c-magnetizeDashboardWidget__group">
      <h2 class="c-magnetizeDashboardWidget__title">Editor</h2>
      <p>Users with the editor role in WordPress have full control on the content sections your website. They can add, edit, publish, and delete any posts on a WordPress site including the ones written by others. An editor can moderate, edit, and delete comments as well.

      <p>Editors do not have access to change your site settings, install plugins and themes, or add new users.</p>
    </section>

    <section class="c-magnetizeDashboardWidget__group">
      <h2 class="c-magnetizeDashboardWidget__title">Author</h2>
      <p>Users with the author role can write, edit, and publish their own posts. They can also delete their own posts, even if they are published. When writing posts, authors cannot create categories however they can choose from existing categories.</p>
    </section>

    <section class="c-magnetizeDashboardWidget__group">
      <h2 class="c-magnetizeDashboardWidget__title">Contributor</h2>
      <p>Contributors can add new posts and edit their own posts, but they cannot publish any posts not even their own. When writing posts they can not create new categories and will have to choose from existing categories.</p>
      <p>The biggest disadvantage of a contributor role is that they cannot upload files (meaning they can’t add images on their own article).</p>
    </section>

    <section class="c-magnetizeDashboardWidget__group">
      <h2 class="c-magnetizeDashboardWidget__title">Subscriber</h2>
      <p>Users with the subscriber user role can login to your WordPress site and update their user profiles. They can change their passwords if they want to. They cannot write posts, view comments, or do anything else inside your WordPress admin area.

      <p>This user role is particularly useful if you require users to login before they can read a post or leave a comment.</p>
    </section>

  </section>
  <?php
}

?>
