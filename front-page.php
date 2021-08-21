<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Seblito
 */

get_header(); ?>

<main style="margin-top:5em;" id="primary" class="site-main">

  <?php
        if (have_posts()) :
            if (is_home() && ! is_front_page()) :
            endif;

            /* Start the Loop */
            while (have_posts()) :
                the_post();

?>


  <!-- Remove section as it's purely for demonstration and testing purposes -->
  <!-- 
    <section>
        <div class="above-cols">
            <p class="cool-text">scroll down pls</p>
        </div>
    </section>

    <section>
        <div class="container">
            <h1 class="main-title">This is the title</h1>
            <div class="row">
                <div class="col col-to-reveal">
                    <h2 class="display-1">Sample Text</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem ex harum numquam amet
                        doloremque, voluptatibus hic soluta repudiandae nemo tenetur nostrum a at laborum quaerat animi,
                        reprehenderit incidunt ad debitis?</p>
                </div>
                <div class="col col-to-reveal">
                    <h2 class="display-1">Sample Text</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem ex harum numquam amet
                        doloremque, voluptatibus hic soluta repudiandae nemo tenetur nostrum a at laborum quaerat animi,
                        reprehenderit incidunt ad debitis?</p>
                </div>
            </div>

            <div class="row">
                <div class="col col-to-reveal">
                    <h2 class="display-1">Sample Text</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem ex harum numquam amet
                        doloremque, voluptatibus hic soluta repudiandae nemo tenetur nostrum a at laborum quaerat animi,
                        reprehenderit incidunt ad debitis?</p>
                </div>
                <div class="col col-to-reveal">
                    <h2 class="display-1">Sample Text</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem ex harum numquam amet
                        doloremque, voluptatibus hic soluta repudiandae nemo tenetur nostrum a at laborum quaerat animi,
                        reprehenderit incidunt ad debitis?</p>
                </div>
            </div>

            <div class="row">
                <div class="col col-to-reveal">
                    <h2 class="display-1">Sample Text</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem ex harum numquam amet
                        doloremque, voluptatibus hic soluta repudiandae nemo tenetur nostrum a at laborum quaerat animi,
                        reprehenderit incidunt ad debitis?</p>
                </div>
                <div class="col col-to-reveal">
                    <h2 class="display-1">Sample Text</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem ex harum numquam amet
                        doloremque, voluptatibus hic soluta repudiandae nemo tenetur nostrum a at laborum quaerat animi,
                        reprehenderit incidunt ad debitis?</p>
                </div>
            </div>

            <div class="row">
                <div class="col col-to-reveal">
                    <h2 class="display-1">Sample Text</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem ex harum numquam amet
                        doloremque, voluptatibus hic soluta repudiandae nemo tenetur nostrum a at laborum quaerat animi,
                        reprehenderit incidunt ad debitis?</p>
                </div>
                <div class="col col-to-reveal">
                    <h2 class="display-1">Sample Text</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem ex harum numquam amet
                        doloremque, voluptatibus hic soluta repudiandae nemo tenetur nostrum a at laborum quaerat animi,
                        reprehenderit incidunt ad debitis?</p>
                </div>
            </div>
        </div>
    </section> -->

  <?php
    $user_sebbe = get_user_by('id', 1);
    $user_peter = get_user_by('id', 2);
    $user_thomas = get_user_by('id', 3);
    $user_anders = get_user_by('id', 4);
    $user_mikael = get_user_by('id', 5);
  ?>

  <section id="our-team">

    <pre>
    <?php
      print_r($user_sebbe);
    ?>
  </pre>

    <div class="container">
      <div class="our-team">
        <div class="profile">

          <!-- Row 1 -->
          <div class="row row-cols-2 row-cols-4">
            <div class="col-2">&nbsp;</div>
            <!-- Col 1 Row 1-->
            <div class="col-6 col-sm-6 col-md-4">
              <!-- Profile-box 1 -->
              <figure class="profile__box">
                <div class="profile__img-wrapper">
                  <?php
                  if ($user_peter) { ?>
                  <img class="profile__img" src="<?php echo esc_url(get_avatar_url($user_peter, ['size' => '250'])); ?>" alt="Peter Dottax - CEO & SharePoint-expert">
                  <?php } else { ?>
                  <img class="profile__img" src="<?php echo get_theme_file_uri('/images/avatar_01.jpg'); ?>" alt="Peter Dottax - CEO & SharePoint-expert">
                  <?php } ?>
                </div>
                <figcaption class="profile__details">
                  <div class="profile__details__name">
                    <a class="profile__details__name__link" href=""><?php echo $user_peter->display_name; ?></a>
                  </div>
                  <div class="profile__details__job-title"><?php the_field('work_title', 'user_2'); ?>
                  </div>
                  <div class="profile__details__social-icons">
                    <a class="profile__social-link" href="" target="_blank">
                      <span class="linkedin">
                        <svg id="linkedin-icon" data-name="Linkedin Icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 447.98">
                          <defs>
                            <style>
                              .linkedin-icon-color {
                                fill: #333;
                              }
                            </style>
                          </defs>
                          <path class="linkedin-icon-color" d="M100.28,448H7.4V148.9h92.88ZM53.79,108.1C24.09,108.1,0,83.5,0,53.8a53.79,53.79,0,0,1,107.58,0C107.58,83.5,83.48,108.1,53.79,108.1ZM447.9,448H355.22V302.4c0-34.7-.7-79.2-48.29-79.2-48.29,0-55.69,37.7-55.69,76.7V448H158.46V148.9h89.08v40.8h1.3c12.4-23.5,42.69-48.3,87.88-48.3,94,0,111.28,61.9,111.28,142.3V448Z" transform="translate(0 -0.02)" />
                        </svg>
                      </span>
                    </a>
                    <a class="profile__social-link" href="">
                      <span class="email">
                        <svg id="email-icon" data-name="Email Icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 384">
                          <defs>
                            <style>
                              .email-icon-color {
                                fill: #333;
                              }
                            </style>
                          </defs>
                          <path class="email-icon-color" d="M464,64H48A48,48,0,0,0,0,112V400a48,48,0,0,0,48,48H464a48,48,0,0,0,48-48V112A48,48,0,0,0,464,64Zm0,48v40.8c-22.42,18.26-58.17,46.66-134.59,106.49C312.57,272.54,279.21,304.37,256,304c-23.21.37-56.58-31.46-73.41-44.71C106.18,199.46,70.43,171.07,48,152.8V112ZM48,400V214.4c22.91,18.25,55.41,43.86,104.94,82.64,21.85,17.21,60.13,55.19,103.06,55,42.72.23,80.51-37.2,103.05-54.95,49.53-38.78,82-64.4,105-82.65V400Z" transform="translate(0 -64)" />
                        </svg>
                      </span>
                    </a>
                  </div>
                </figcaption>
              </figure> <!-- / Profile-box 1 -->
            </div> <!-- / Col 1 Row 1 -->

            <!-- Col 2 Row 1 -->
            <div class="col-6 col-sm-6 col-md-4">
              <!-- Profile-box 2 -->
              <figure class="profile__box">
                <div class="profile__img-wrapper">
                  <?php
                  if ($user_thomas) { ?>
                  <img class="profile__img" src="<?php echo esc_url(get_avatar_url($user_thomas, ['size' => '250'])); ?>" alt="Thomas Sandberg - CEO & SharePoint-expert">
                  <?php } else { ?>
                  <img class="profile__img" src="<?php echo get_theme_file_uri('/images/avatar_02.jpg'); ?>" alt="Thomas Sandberg - CEO & SharePoint-expert">
                  <?php } ?>
                </div>
                <figcaption class="profile__details">
                  <div class="profile__details__name">
                    <a class="profile__details__name__link" href=""><?php echo $user_thomas->display_name; ?></a>
                  </div>
                  <div class="profile__details__job-title"><?php the_field('work_title', 'user_3'); ?>
                  </div>
                  <div class="profile__details__social-icons">
                    <a class="profile__social-link" href="" target="_blank">
                      <span class="linkedin">
                        <svg id="linkedin-icon" data-name="Linkedin Icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 447.98">
                          <defs>
                            <style>
                              .linkedin-icon-color {
                                fill: #333;
                              }
                            </style>
                          </defs>
                          <path class="linkedin-icon-color" d="M100.28,448H7.4V148.9h92.88ZM53.79,108.1C24.09,108.1,0,83.5,0,53.8a53.79,53.79,0,0,1,107.58,0C107.58,83.5,83.48,108.1,53.79,108.1ZM447.9,448H355.22V302.4c0-34.7-.7-79.2-48.29-79.2-48.29,0-55.69,37.7-55.69,76.7V448H158.46V148.9h89.08v40.8h1.3c12.4-23.5,42.69-48.3,87.88-48.3,94,0,111.28,61.9,111.28,142.3V448Z" transform="translate(0 -0.02)" />
                        </svg>
                      </span>
                    </a>
                    <a class="profile__social-link" href="">
                      <span class="email">
                        <svg id="email-icon" data-name="Email Icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 384">
                          <defs>
                            <style>
                              .email-icon-color {
                                fill: #333;
                              }
                            </style>
                          </defs>
                          <path class="email-icon-color" d="M464,64H48A48,48,0,0,0,0,112V400a48,48,0,0,0,48,48H464a48,48,0,0,0,48-48V112A48,48,0,0,0,464,64Zm0,48v40.8c-22.42,18.26-58.17,46.66-134.59,106.49C312.57,272.54,279.21,304.37,256,304c-23.21.37-56.58-31.46-73.41-44.71C106.18,199.46,70.43,171.07,48,152.8V112ZM48,400V214.4c22.91,18.25,55.41,43.86,104.94,82.64,21.85,17.21,60.13,55.19,103.06,55,42.72.23,80.51-37.2,103.05-54.95,49.53-38.78,82-64.4,105-82.65V400Z" transform="translate(0 -64)" />
                        </svg>
                      </span>
                    </a>
                  </div>
                </figcaption>
              </figure> <!-- / Profile-box 2 -->
            </div> <!-- / Col 2 Row 1 -->
            <div class="col-2">&nbsp;</div>
          </div> <!-- / Row 1 -->

          <!-- Row 2 -->
          <div class="row row-cols-2">
            <!-- Col 1 Row 2 -->
            <div class="col col-md-4">
              <!-- Profile-box 3 -->
              <figure class="profile__box">
                <div class="profile__img-wrapper">
                  <?php
                  if ($user_mikael) { ?>
                  <img class="profile__img" src="<?php echo esc_url(get_avatar_url($user_mikael, ['size' => '250'])); ?>" alt="Mikael Alveberg - Utveckling">
                  <?php } else { ?>
                  <img class="profile__img" src="<?php echo get_theme_file_uri('/images/avatar_03.jpg'); ?>" alt="Mikael Alveberg - Utveckling">
                  <?php } ?>
                </div>
                <figcaption class="profile__details">
                  <div class="profile__details__name">
                    <a class="profile__details__name__link" href=""><?php echo $user_mikael->display_name; ?></a>
                  </div>
                  <div class="profile__details__job-title"><?php the_field('work_title', 'user_5'); ?>
                  </div>
                  <div class="profile__details__social-icons">
                    <a class="profile__social-link" href="" target="_blank">
                      <span class="linkedin">
                        <svg id="linkedin-icon" data-name="Linkedin Icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 447.98">
                          <defs>
                            <style>
                              .linkedin-icon-color {
                                fill: #333;
                              }
                            </style>
                          </defs>
                          <path class="linkedin-icon-color" d="M100.28,448H7.4V148.9h92.88ZM53.79,108.1C24.09,108.1,0,83.5,0,53.8a53.79,53.79,0,0,1,107.58,0C107.58,83.5,83.48,108.1,53.79,108.1ZM447.9,448H355.22V302.4c0-34.7-.7-79.2-48.29-79.2-48.29,0-55.69,37.7-55.69,76.7V448H158.46V148.9h89.08v40.8h1.3c12.4-23.5,42.69-48.3,87.88-48.3,94,0,111.28,61.9,111.28,142.3V448Z" transform="translate(0 -0.02)" />
                        </svg>
                      </span>
                    </a>
                    <a class="profile__social-link" href="">
                      <span class="email">
                        <svg id="email-icon" data-name="Email Icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 384">
                          <defs>
                            <style>
                              .email-icon-color {
                                fill: #333;
                              }
                            </style>
                          </defs>
                          <path class="email-icon-color" d="M464,64H48A48,48,0,0,0,0,112V400a48,48,0,0,0,48,48H464a48,48,0,0,0,48-48V112A48,48,0,0,0,464,64Zm0,48v40.8c-22.42,18.26-58.17,46.66-134.59,106.49C312.57,272.54,279.21,304.37,256,304c-23.21.37-56.58-31.46-73.41-44.71C106.18,199.46,70.43,171.07,48,152.8V112ZM48,400V214.4c22.91,18.25,55.41,43.86,104.94,82.64,21.85,17.21,60.13,55.19,103.06,55,42.72.23,80.51-37.2,103.05-54.95,49.53-38.78,82-64.4,105-82.65V400Z" transform="translate(0 -64)" />
                        </svg>
                      </span>
                    </a>
                  </div>
                </figcaption>
              </figure> <!-- / Profile-box 3 -->
            </div> <!-- / Col 1 Row 2 -->

            <!-- Col 2 Row 2 -->
            <div class="col col-md-4">
              <!-- Profile-box 4 -->
              <figure class="profile__box">
                <div class="profile__img-wrapper">
                  <?php
                  if ($user_anders) { ?>
                  <img class="profile__img" src="<?php echo esc_url(get_avatar_url($user_anders, ['size' => '250'])); ?>" alt="Sebastian Bernhardtz - UX Design & Webutveckling">
                  <?php } else { ?>
                  <img class="profile__img" src="<?php echo get_theme_file_uri('/images/avatar_04.jpg'); ?>" alt="Anders Björklund - Utveckling">
                  <?php } ?>
                </div>
                <figcaption class="profile__details">
                  <div class="profile__details__name">
                    <a class="profile__details__name__link" href=""><?php echo $user_anders->display_name; ?></a>
                  </div>
                  <div class="profile__details__job-title"><?php the_field('work_title', 'user_4'); ?>
                  </div>
                  <div class="profile__details__social-icons">
                    <a class="profile__social-link" href="" target="_blank">
                      <span class="linkedin">
                        <svg id="linkedin-icon" data-name="Linkedin Icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 447.98">
                          <defs>
                            <style>
                              .linkedin-icon-color {
                                fill: #333;
                              }
                            </style>
                          </defs>
                          <path class="linkedin-icon-color" d="M100.28,448H7.4V148.9h92.88ZM53.79,108.1C24.09,108.1,0,83.5,0,53.8a53.79,53.79,0,0,1,107.58,0C107.58,83.5,83.48,108.1,53.79,108.1ZM447.9,448H355.22V302.4c0-34.7-.7-79.2-48.29-79.2-48.29,0-55.69,37.7-55.69,76.7V448H158.46V148.9h89.08v40.8h1.3c12.4-23.5,42.69-48.3,87.88-48.3,94,0,111.28,61.9,111.28,142.3V448Z" transform="translate(0 -0.02)" />
                        </svg>
                      </span>
                    </a>
                    <a class="profile__social-link" href="">
                      <span class="email">
                        <svg id="email-icon" data-name="Email Icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 384">
                          <defs>
                            <style>
                              .email-icon-color {
                                fill: #333;
                              }
                            </style>
                          </defs>
                          <path class="email-icon-color" d="M464,64H48A48,48,0,0,0,0,112V400a48,48,0,0,0,48,48H464a48,48,0,0,0,48-48V112A48,48,0,0,0,464,64Zm0,48v40.8c-22.42,18.26-58.17,46.66-134.59,106.49C312.57,272.54,279.21,304.37,256,304c-23.21.37-56.58-31.46-73.41-44.71C106.18,199.46,70.43,171.07,48,152.8V112ZM48,400V214.4c22.91,18.25,55.41,43.86,104.94,82.64,21.85,17.21,60.13,55.19,103.06,55,42.72.23,80.51-37.2,103.05-54.95,49.53-38.78,82-64.4,105-82.65V400Z" transform="translate(0 -64)" />
                        </svg>
                      </span>
                    </a>
                  </div>
                </figcaption>
              </figure> <!-- / Profile-box 4 -->
            </div> <!-- / Col 2 Row 2 -->

            <!-- Col 3 Row 2 -->
            <div class="col col-md-4">
              <!-- Profile-box 5 -->
              <figure class="profile__box">
                <div class="profile__img-wrapper">
                  <?php
                  if ($user_sebbe) { ?>
                  <img class="profile__img" src="<?php echo esc_url(get_avatar_url($user_sebbe, ['size' => '250'])); ?>" alt="Sebastian Bernhardtz - UX Design & Webutveckling">
                  <?php } else { ?>
                  <img class="profile__img" src="<?php echo get_theme_file_uri('/images/avatar_05.jpg'); ?>" alt="Sebastian Bernhardtz - UX Design & Webutveckling">
                  <?php } ?>
                </div>
                <figcaption class="profile__details">
                  <div class="profile__details__name">
                    <a class="profile__details__name__link" href=""><?php echo $user_sebbe->display_name; ?></a>
                  </div>
                  <div class="profile__details__job-title"><?php the_field('work_title', 'user_1'); ?>
                  </div>
                  <div class="profile__details__social-icons">
                    <a class="profile__social-link" href="" target="_blank">
                      <span class="linkedin">
                        <svg id="linkedin-icon" data-name="Linkedin Icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 447.98">
                          <defs>
                            <style>
                              .linkedin-icon-color {
                                fill: #333;
                              }
                            </style>
                          </defs>
                          <path class="linkedin-icon-color" d="M100.28,448H7.4V148.9h92.88ZM53.79,108.1C24.09,108.1,0,83.5,0,53.8a53.79,53.79,0,0,1,107.58,0C107.58,83.5,83.48,108.1,53.79,108.1ZM447.9,448H355.22V302.4c0-34.7-.7-79.2-48.29-79.2-48.29,0-55.69,37.7-55.69,76.7V448H158.46V148.9h89.08v40.8h1.3c12.4-23.5,42.69-48.3,87.88-48.3,94,0,111.28,61.9,111.28,142.3V448Z" transform="translate(0 -0.02)" />
                        </svg>
                      </span>
                    </a>
                    <a class="profile__social-link" href="">
                      <span class="email">
                        <svg id="email-icon" data-name="Email Icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 384">
                          <defs>
                            <style>
                              .email-icon-color {
                                fill: #333;
                              }
                            </style>
                          </defs>
                          <path class="email-icon-color" d="M464,64H48A48,48,0,0,0,0,112V400a48,48,0,0,0,48,48H464a48,48,0,0,0,48-48V112A48,48,0,0,0,464,64Zm0,48v40.8c-22.42,18.26-58.17,46.66-134.59,106.49C312.57,272.54,279.21,304.37,256,304c-23.21.37-56.58-31.46-73.41-44.71C106.18,199.46,70.43,171.07,48,152.8V112ZM48,400V214.4c22.91,18.25,55.41,43.86,104.94,82.64,21.85,17.21,60.13,55.19,103.06,55,42.72.23,80.51-37.2,103.05-54.95,49.53-38.78,82-64.4,105-82.65V400Z" transform="translate(0 -64)" />
                        </svg>
                      </span>
                    </a>
                  </div>
                </figcaption>
              </figure> <!-- / Profile-box 5 -->
            </div> <!-- / Col 3 Row 2 -->
          </div> <!-- / Col 2 -->

        </div>
      </div>

    </div>
  </section>



  <?php
    
    /*
    * Include the Post-Type-specific template for the content.
    * If you want to override this in a child theme, then include a file
    * called content-___.php (where ___ is the Post Type name) and that will be used instead.
    */
    // get_template_part('template-parts/content-front-page', get_post_type());

    endwhile;

            the_posts_navigation();

        else :

            get_template_part('template-parts/content', 'none');

        endif;
        ?>

</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
