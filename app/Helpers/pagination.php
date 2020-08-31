<?php

/**
 * Numeric page navigation, adapted from Bones.
 *
 * Use the global $wp_query. Should be used in archives only.
 * For custom queries that require pagination, try the
 * WPQueryBuilder with a corresponding model.
 *
 * @return void
 */
function mg_pagination()
{
    global $wp_query;
    $bignum = 999999999;
    if ($wp_query->max_num_pages <= 1) {
        return;
    }

    echo '<nav class="pagination container p-4 md:px-0">';

    echo paginate_links(
        array(
            'base' => str_replace($bignum, '%#%', esc_url(get_pagenum_link($bignum))),
            'format' => '',
            'current' => max(1, get_query_var('paged')),
            'total' => $wp_query->max_num_pages,
            'prev_text' => '&larr;',
            'next_text' => '&rarr;',
            'type' => 'list',
            'end_size' => 3,
            'mid_size' => 3,
        )
    );

    echo '</nav>';
}
