<?php
$comment_form_args = array(
    'title_reply'          => __( 'Say Something Below!' ),
    'comment_notes_before' => '',
    'comment_notes_after'  => '',
    'class_submit'         => 'submit-button-class', // Replace 'submit-button-class' with your custom CSS class for the submit button.
    'label_submit'         => __( 'Post Comment' ), // Replace 'Post Comment' with your desired submit button label.
    'comment_field'        => '<div class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label> <br> <textarea class="commentform-input" id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></div>',
    'fields'               => apply_filters(
        'comment_form_default_fields',
        array(
            'author' => '<div class="comment-form-author cf">' . '<label for="author">' . __( 'Name', 'domain' ) . '</label> <br> ' . ( $req ? '<span class="required"></span>' : '' ) .
                        '<input class="commentform-input" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"/></div>',
            'email'  => '<div class="comment-form-email cf"><label for="email">' . __( 'Email', 'domain' ) . '</label> <br> ' . ( $req ? '<span class="required"></span>' : '' ) .
                        '<input class="commentform-input" id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"/></div>',
            'url'    => '<div class="comment-form-url cf"><label for="url">' . __( 'Website (optional)', 'domain' ) . '</label> <br>' .
                        '<input class="commentform-input" id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /></div>',
        )
    ),
);

comment_form( $comment_form_args );
?>

<?php  

    $comments_number = get_comments_number();
        if($comments_number != 0) {
            ?>

            <div class="comments">
                <h3 class="comments-heading">read more comments from this post</h3>
                <ol class="all-comments">
                    <?php

                        $comments = get_comments(array(
                            'post_id' => $post->ID,
                            'status' => 'approve'
                        ));

                        wp_list_comments(array(
                            'per_page' => -1
                        ), $comments);
                    ?>
                </ol>
            </div>


            <?php
        } 
?>
