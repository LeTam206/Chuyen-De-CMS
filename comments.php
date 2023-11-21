<?php
if ( have_comments() ) {
?>
    <div id="comments" class="comments-area" style="background-color: #f5f5f5;
    padding: 20px;
    margin-top: 20px;">

        <h2 class="comments-title" style="font-size: 20px;">
            <?php
            $comment_count = get_comments_number();
            echo 'Số lượng bình luận: ' . $comment_count;
            ?>
        </h2>
        
        <ol class="comment-list">
            <?php
            wp_list_comments( array(
                'style'      => 'ol',
                'short_ping' => true,
            ) );
            ?>
        </ol>

        <?php
        the_comments_pagination( array(
            'prev_text' => '« Trước',
            'next_text' => 'Tiếp theo »',
        ) );
}
        ?>

    </div>
<?php
if ( comments_open() || get_comments_number() ) :
    comment_form();
endif;
?>
