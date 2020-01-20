  <div class="comments">


        <?php $args = array(
      	'walker'            => null,
      	'max_depth'         => '',
      	'style'             => 'div',
      	'callback'          => null,
      	'end-callback'      => null,
      	'type'              => 'all',
      	'reply_text'        => 'Vastaa',
      	'page'              => '',
      	'per_page'          => '',
      	'avatar_size'       => 54,
      	'reverse_top_level' => null,
      	'reverse_children'  => '',
      	'format'            => 'html5', // or 'xhtml' if no 'HTML5' theme support
      	'short_ping'        => false,   // @since 3.6
        'echo'              => true     // boolean, default is true
      ); ?>

      <?php
      wp_list_comments($args, $comments);

      ?>

      <?php
            $commenter = wp_get_current_commenter();
            $req = get_option( 'require_name_email' );
            $aria_req = ( $req ? " aria-required='true'" : '' );
            $fields =  array(
              'author' => '<p class="comment-form-author">' . '<label for="author">' . __( 'Name' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
                  '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>',
              'email'  => '<p class="comment-form-email"><label for="email">' . __( 'Email' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
                  '<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></p>',
            );

            $comments_args = array(
              'fields' =>  $fields
            );

            comment_form($comments_args);
      ?>

  </div>
