<?php get_header(); ?>
<?php while(have_posts()):the_post();?>




          </article>
          </section>
         <section class="top-content">
          <header>
              <h2><a href="<?php the_permalink();?>"title="<?php the_title();?> "><?php the_title();?> </a> </h2>
          </header> 
          <footer>
            <P class="post-info"><?php the_author_posts_link();?> <?php the_time();?></P>
          </footer>
            <a href="<?php the_permalink();?>">
                <?php the_post_thumbnail('medium'); ?>
             </a>

          <article>
              <p>
                  <?php the_content('***Read More ');?>
              </p>
          </article>
      </section>

 <?php endwhile; ?>
 <?php get_sidebar(); ?>
 <?php get_footer(); ?>


