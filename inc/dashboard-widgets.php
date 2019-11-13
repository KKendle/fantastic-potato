<?php

// CUSTOM WELCOME WIDGET
add_action('wp_dashboard_setup', 'my_custom_dashboard_widgets');

function my_custom_dashboard_widgets() {
  global $wp_meta_boxes;

  wp_add_dashboard_widget('theme_overview', 'Theme Overview', 'theme_overview');
}

function theme_overview() {
  ?>
  <section class="c-magnetizeDashboardWidget">
    <section class="c-magnetizeDashboardWidget__group">
      <h2 class="c-magnetizeDashboardWidget__title">Forms</h2>
      <p>This is where you'll find submissions from all of the forms on your site. New submissions will also be emailed to you.</p>
    </section>

    <section class="c-magnetizeDashboardWidget__group">
      <h2 class="c-magnetizeDashboardWidget__title">Pages</h2>
      <p>This is where you'll find all your pages.</p>
    </section>

    <section class="c-magnetizeDashboardWidget__group">
      <h2 class="c-magnetizeDashboardWidget__title">Users</h2>
      <p>This is where you can add a new user to help manage the site. See the Theme User Roles for an overview of the different Roles available.</p>
    </section>

    <section class="c-magnetizeDashboardWidget__group">
      <h2 class="c-magnetizeDashboardWidget__title">Settings</h2>
      <p>This is where you can edit your site Name and Tagline. If links aren't working, you can try 'rebuilding' the Permalinks. Visit Settings &mdash;> Permalinks and click Save Changes.</p>
    </section>

    <section class="c-magnetizeDashboardWidget__group">
      <h2 class="c-magnetizeDashboardWidget__title">Theme Settings</h2>
      <p>Edit the Business Information (address, phone, email, etc.), social links and copyright date.</p>
    </section>

    <style>
      .c-magnetizeDashboardWidget__group {
        margin-bottom: 24px;
      }
      .c-magnetizeDashboardWidget__title {
        font-size: 20px !important;
        border-bottom: 2px solid;
      }

      .c-magnetizeDashboardWidget__subtitle {
        font-size: 16px !important;
        font-weight: 700 !important;
      }

      .c-list {
        padding-left: 40px;
        list-style-type: disc;
      }

      .c-list__blocks .c-list__blockName {
        font-weight: 700;
        text-transform: uppercase;
      }

      p {
        margin-top: 0;
      }
    </style>
  </section>
  <?php
}


// CUSTOM UPDATES AND SUPPORT WIDGET
add_action('wp_dashboard_setup', 'theme_updates_and_support_widget');

function theme_updates_and_support_widget() {
  global $wp_meta_boxes;

  add_meta_box('theme_updates_and_support', 'Theme Updates and Support', 'theme_updates_and_support', 'dashboard', 'side', 'high');
}

function theme_updates_and_support() {
  $support_email = "support@magnetizeagency.com";
  $support_phone = "314.696.2727";
  ?>
  <section class="c-magnetizeDashboardWidget">
    <section class="c-magnetizeDashboardWidget__group">
      <h2 class="c-magnetizeDashboardWidget__title">Site Updates and Security</h2>
      <p>You'll want to keep your site updated with the latest version of WordPress and the latest version of the Plugins. This will also help keep your site secure.</p>
      <p>You can find the Updates page under Dashboard &mdash;> Updates.</p>
    </section>

    <section class="c-magnetizeDashboardWidget__group">
      <h2 class="c-magnetizeDashboardWidget__title">Questions and Support</h2>
      <p>For Questions and Support, contact us at <a href="mailto:<?php echo $support_email; ?>"><?php echo $support_email; ?></a> or <a href="tel:<?php echo $support_phone; ?>"><?php echo $support_phone; ?></a>.</p>
    </section>
  </section>
  <?php
}

?>
