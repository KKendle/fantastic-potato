<!-- START SOCIAL LINKS -->
<ul class="c-socialLinks c-list c-list--noStyle c-list--inline">
  <?php // social links
  $facebook = get_field('social_link_facebook', 'option');
  $twitter = get_field('social_link_twitter', 'option');
  $youtube = get_field('social_link_youtube', 'option');
  $linkedin = get_field('social_link_linkedin', 'option');
  $instagram = get_field('social_link_instagram', 'option');
  ?>

  <?php if(!empty($facebook)): ?>
    <li class="c-list__item">
      <a class="c-socialLinks__link c-socialLinks__facebook" href="<?php echo $facebook['url']; ?>" target="<?php echo $facebook['target'] ?: '_blank'; ?>">
        <span class="c-socialLinks__name visibility--hidden"><?php echo $facebook['title']; ?></span>
        <!-- START FACEBOOK ICON -->
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><path d="M36,436a16,16,0,1,0,16,16A16,16,0,0,0,36,436Zm4.155,10.656H38.648c-1.181,0-1.409.561-1.409,1.384v1.816h2.816l-.366,2.845h-2.45V460H34.3v-7.3H31.845v-2.845H34.3v-2.1A3.427,3.427,0,0,1,37.96,444a20.071,20.071,0,0,1,2.195.112Z" transform="translate(-20 -436)" fill="currentColor"/></svg>
        <!-- END FACEBOOK ICON -->
      </a>
    </li>
  <?php endif; ?>

  <?php if(!empty($twitter)): ?>
    <li class="c-list__item">
      <a class="c-socialLinks__link c-socialLinks__twitter" href="<?php echo $twitter['url']; ?>" target="<?php echo $twitter['target'] ?: '_blank'; ?>">
        <span class="c-socialLinks__name visibility--hidden"><?php echo $twitter['title']; ?></span>
        <!-- START TWITTER ICON -->
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><path d="M72,228v32h32V228Zm22.362,12.737c.006.141.01.282.01.425A9.337,9.337,0,0,1,80,249.027a6.744,6.744,0,0,0,.783.046,6.585,6.585,0,0,0,4.077-1.406,3.285,3.285,0,0,1-3.067-2.279,3.315,3.315,0,0,0,1.483-.057,3.283,3.283,0,0,1-2.633-3.218v-.042a3.27,3.27,0,0,0,1.487.411,3.285,3.285,0,0,1-1.016-4.383,9.32,9.32,0,0,0,6.766,3.43,3.285,3.285,0,0,1,5.593-2.994,6.568,6.568,0,0,0,2.085-.8,3.3,3.3,0,0,1-1.443,1.816A6.587,6.587,0,0,0,96,239.038,6.682,6.682,0,0,1,94.362,240.737Z" transform="translate(-72 -228)" fill="currentColor"/></svg>
        <!-- END TWITTER ICON -->
      </a>
    </li>
  <?php endif; ?>

  <?php if(!empty($youtube)): ?>
    <li class="c-list__item">
      <a class="c-socialLinks__link c-socialLinks__youtube" href="<?php echo $youtube['url']; ?>" target="<?php echo $youtube['target'] ?: '_blank'; ?>">
        <span class="c-socialLinks__name visibility--hidden"><?php echo $youtube['title']; ?></span>
        <!-- START YOUTUBE ICON -->
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"><g fill="currentColor"><path d="M16 0a16 16 0 1016 16A16 16 0 0016 0zm8 16.6a24.208 24.208 0 01-.16 2.59 3.459 3.459 0 01-.636 1.588 2.292 2.292 0 01-1.6.678c-2.239.162-5.6.167-5.6.167s-4.16-.038-5.44-.161a2.715 2.715 0 01-1.764-.684 3.459 3.459 0 01-.636-1.588A24.208 24.208 0 018 16.6v-1.213a24.208 24.208 0 01.16-2.59 3.455 3.455 0 01.636-1.588 2.287 2.287 0 011.6-.678c2.239-.162 5.6-.162 5.6-.162H16s3.359 0 5.6.162a2.287 2.287 0 011.6.678 3.455 3.455 0 01.636 1.588 24.208 24.208 0 01.16 2.59z"/><path d="M14.348 18.075l4.323-2.24-4.323-2.256z"/></g></svg>
        <!-- END YOUTUBE ICON -->
      </a>
    </li>
  <?php endif; ?>

  <?php if(!empty($linkedin)): ?>
    <li class="c-list__item">
      <a class="c-socialLinks__link c-socialLinks__linkedin" href="<?php echo $linkedin['url']; ?>" target="<?php echo $linkedin['target'] ?: '_blank'; ?>">
        <span class="c-socialLinks__name visibility--hidden"><?php echo $linkedin['title']; ?></span>
        <!-- START LINKEDIN ICON -->
        <svg xmlns="http://www.w3.org/2000/svg" width="31" height="31" viewBox="0 0 31 31"><g transform="translate(-744 -357)"><path d="M759.5,357A15.5,15.5,0,1,0,775,372.5,15.5,15.5,0,0,0,759.5,357Zm7.75,23.235h-3.211v-5.025c0-1.2-.02-2.741-1.669-2.741-1.671,0-1.926,1.306-1.926,2.654v5.111h-3.208V369.9h3.079v1.412h.044a3.372,3.372,0,0,1,3.039-1.669c3.252,0,3.853,2.14,3.853,4.923Zm-13.636-15.471a1.862,1.862,0,1,1-1.864,1.862A1.862,1.862,0,0,1,753.614,364.765Zm1.606,5.137v10.334H752V369.9Z" fill="currentColor"/></g></svg>
        <!-- END LINKEDIN ICON -->
      </a>
    </li>
  <?php endif; ?>

  <?php if(!empty($instagram)): ?>
    <li class="c-list__item">
      <a class="c-socialLinks__link c-socialLinks__instagram" href="<?php echo $instagram['url']; ?>" target="<?php echo $instagram['target'] ?: '_blank'; ?>">
        <span class="c-socialLinks__name visibility--hidden"><?php echo $instagram['title']; ?></span>
        <!-- START INSTAGRAM ICON -->
        <svg xmlns="http://www.w3.org/2000/svg" width="31" height="31" viewBox="0 0 31 31"><circle cx="3.119" cy="3.119" r="3.119" transform="translate(12.381 12.381)" fill="currentColor"/><path d="M144.272,131.46a3.1,3.1,0,0,0-1.776-1.776,5.179,5.179,0,0,0-1.737-.322c-.987-.045-1.283-.055-3.781-.055s-2.794.01-3.781.055a5.179,5.179,0,0,0-1.737.322,3.1,3.1,0,0,0-1.776,1.776,5.179,5.179,0,0,0-.322,1.737c-.045.987-.055,1.283-.055,3.781s.01,2.794.055,3.781a5.179,5.179,0,0,0,.322,1.737,3.1,3.1,0,0,0,1.776,1.776,5.179,5.179,0,0,0,1.737.322c.986.045,1.282.055,3.781.055s2.794-.01,3.781-.055a5.179,5.179,0,0,0,1.737-.322,3.1,3.1,0,0,0,1.776-1.776,5.179,5.179,0,0,0,.322-1.737c.045-.987.055-1.283.055-3.781s-.01-2.794-.055-3.781A5.179,5.179,0,0,0,144.272,131.46Zm-7.294,10.323a4.8,4.8,0,1,1,4.8-4.8A4.8,4.8,0,0,1,136.978,141.783Zm4.995-8.677a1.123,1.123,0,1,1,1.123-1.123A1.123,1.123,0,0,1,141.973,133.106Z" transform="translate(-121.478 -121.478)" fill="currentColor"/><path d="M15.5,0A15.5,15.5,0,1,0,31,15.5,15.5,15.5,0,0,0,15.5,0Zm9.3,19.358a6.868,6.868,0,0,1-.435,2.271,4.784,4.784,0,0,1-2.736,2.736,6.868,6.868,0,0,1-2.271.435c-1,.046-1.317.056-3.858.056s-2.86-.011-3.858-.056a6.868,6.868,0,0,1-2.271-.435,4.784,4.784,0,0,1-2.736-2.736A6.867,6.867,0,0,1,6.2,19.358c-.046-1-.056-1.317-.056-3.858s.011-2.86.056-3.858a6.867,6.867,0,0,1,.435-2.271A4.784,4.784,0,0,1,9.371,6.634,6.867,6.867,0,0,1,11.642,6.2c1-.046,1.317-.056,3.858-.056s2.86.011,3.858.056a6.867,6.867,0,0,1,2.271.435,4.784,4.784,0,0,1,2.736,2.736,6.868,6.868,0,0,1,.435,2.271c.046,1,.056,1.317.056,3.858S24.846,18.36,24.8,19.358Z" fill="currentColor"/></svg>
        <!-- END INSTAGRAM ICON -->
      </a>
    </li>
  <?php endif; ?>

</ul>
<!-- END SOCIAL LINKS -->
