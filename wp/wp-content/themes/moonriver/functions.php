<?php
    register_sidebar();
?>

<?php

function content_nav() {
	global $wp_query;

	if ( $wp_query->max_num_pages > 1 ) : ?>
		<nav id="post_nav">
			<h3 class="assistive-text"><?php _e( 'Post navigation', 'moonrover' ); ?></h3>
			<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'moonrover' ) ); ?></div>
			<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'moonrover' ) ); ?></div>
		</nav>
	<?php endif;
}

function posted_on() {
	printf( __( '<span class="sep">Posted on </span><a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s" pubdate>%4$s</time></a><span class="by-author"> <span class="sep"> by </span> <span class="author vcard"><a class="url fn n" href="%5$s" title="%6$s" rel="author">%7$s</a></span></span>', 'moonriver' ),
		esc_url( get_permalink() ),
		esc_attr( get_the_time() ),
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
		sprintf( esc_attr__( 'View all posts by %s', 'moonriver' ), get_the_author() ),
		esc_html( get_the_author() )
	);
}

if ( ! function_exists( 'moonriver_comment' ) ) {
    function moonriver_comment( $comment, $args, $depth ) {
            $GLOBALS['comment'] = $comment;
            switch ( $comment->comment_type ) :
                    case 'pingback' :
                    case 'trackback' :
            ?>
            <li class="post pingback">
                    <p><?php _e( 'Pingback:', 'moonriver' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( 'Edit', 'moonriver' ), '<span class="edit-link">', '</span>' ); ?></p>
            <?php
                            break;
                    default :
            ?>
            <li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
                    <article id="comment-<?php comment_ID(); ?>" class="comment">
                            <footer class="comment-meta">
                                    <div class="comment-author vcard">
                                            <?php
                                                    $avatar_size = 68;
                                                    if ( '0' != $comment->comment_parent )
                                                            $avatar_size = 39;

                                                    echo get_avatar( $comment, $avatar_size );

                                                    /* translators: 1: comment author, 2: date and time */
                                                    printf( __( '%1$s on %2$s <span class="says">said:</span>', 'moonriver' ),
                                                            sprintf( '<span class="fn">%s</span>', get_comment_author_link() ),
                                                            sprintf( '<a href="%1$s"><time pubdate datetime="%2$s">%3$s</time></a>',
                                                                    esc_url( get_comment_link( $comment->comment_ID ) ),
                                                                    get_comment_time( 'c' ),
                                                                    /* translators: 1: date, 2: time */
                                                                    sprintf( __( '%1$s at %2$s', 'moonriver' ), get_comment_date(), get_comment_time() )
                                                            )
                                                    );
                                            ?>

                                            <?php edit_comment_link( __( 'Edit', 'moonriver' ), '<span class="edit-link">', '</span>' ); ?>
                                    </div><!-- .comment-author .vcard -->

                                    <?php if ( $comment->comment_approved == '0' ) : ?>
                                            <em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'moonriver' ); ?></em>
                                            <br />
                                    <?php endif; ?>

                            </footer>

                            <div class="comment-content"><?php comment_text(); ?></div>

                            <div class="reply">
                                    <?php comment_reply_link( array_merge( $args, array( 'reply_text' => __( 'Reply <span>&darr;</span>', 'moonriver' ), 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
                            </div><!-- .reply -->
                    </article><!-- #comment-## -->

            <?php
                            break;
            endswitch;
    }
}
?>
