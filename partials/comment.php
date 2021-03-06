<?php
/**
 * Single comment
 *
 * @category Theme
 * @package  MountainGoat
 * @author   Matt Radford <matt@mattrad.uk>
 * @license  http://www.wtfpl.net/about/ WTFPL
 * @link     https://github.com/mattradford/mountaingoat
 * @since    1.0.0
 **/
?>
<?php echo get_avatar($comment, $size = '64'); ?>
<div class="media-body">
      <h4 class="media-body__heading"><?php echo get_comment_author_link(); ?></h4>
        <time datetime="<?php echo get_comment_date('c'); ?>">
            <a href="<?php echo htmlspecialchars(get_comment_link($comment->comment_ID)); ?>">
                <?php printf(__('%1$s', '@textdomain'), get_comment_date(),  get_comment_time()); ?>
            </a>
        </time>
    <?php edit_comment_link(__('(Edit)', '@textdomain'), '', ''); ?>

    <?php if ('0' == $comment->comment_approved) { ?>
        <div class="alert alert-info">
            <?php _e('Your comment is awaiting moderation.', '@textdomain'); ?>
        </div>
    <?php } ?>

    <?php comment_text(); ?>
    <?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))); ?>
</div>
