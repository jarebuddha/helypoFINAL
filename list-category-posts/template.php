<?php

$lcp_display_output = '';
$lcp_display_output .= $this->get_category_link('strong');
$lcp_display_output .= $this->get_conditional_title();

// Posts Loop
global $post;
while ( have_posts() ): the_post();

// Here we open the DIV for each post. If the post has a thumbnail, we get it. Else we can define a placeholder or delete the line to leave an empty space.
  if (has_post_thumbnail($post->ID)):
    $lcp_display_output .= '<div class="postlist withthumb">';
    $lcp_display_output .= '<span class="thumbmagic">';
    $lcp_display_output .= $this->get_thumbnail($post);
    $lcp_display_output .= '</span>';
  else:
    $lcp_display_output .= '<div class="postlist withthumb">';
    $lcp_display_output .= '<span class="thumbmagic">';
    $lcp_display_output .= '<img src="http://your-domain.com/wp-content/uploads/default-thumb.jpg" alt="placeholder"></img>';
// Comment the line above if you don't want to use a placeholder
    $lcp_display_output .= '</span>';
  endif;

// Here we open an additional container DIV to wrap our content    
  $lcp_display_output .= '<div class="lcp-container">';

  $lcp_display_output .= $this->get_post_title($post, 'h3');
  $lcp_display_output .= $this->get_comments($post);
  $lcp_display_output .= ' ' . $this->get_date($post);
  $lcp_display_output .= ' ' . $this->get_modified_date($post);
  $lcp_display_output .= $this->get_author($post);
  $lcp_display_output .= $this->get_custom_fields($post);
  $lcp_display_output .= $this->get_content($post, 'p', 'lcp_content');
  $lcp_display_output .= $this->get_excerpt($post, 'p', 'lcp_excerpt');
  $lcp_display_output .= '<div class="morelink">' . $this->get_posts_morelink($post) . '</div>';

// Closing our divs
  $lcp_display_output .= '</div></div>';

endwhile;

$lcp_display_output .= $this->get_morelink();
$lcp_display_output .= $this->get_category_count();
$lcp_display_output .= $this->get_pagination();

$this->lcp_output = $lcp_display_output;
