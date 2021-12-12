<?php
$categories = get_the_category();
$separator = ' ';
$output = '<div class="flex">';
if (!empty($categories)) {
    foreach ($categories as $category) {
        $output .= '<a class="text-white flex px-2 py-1 mr-1 text-xs font-bold uppercase rounded-lg bg-purple-600 hover:bg-purple-700 focus:ring-4 focus:ring-purple-300" href="' . esc_url(get_category_link($category->term_id)) . '" alt="' . esc_attr(sprintf(__('View all posts in %s', 'textdomain'), $category->name)) . '">' . esc_html($category->name) . '</a>' . $separator;
    }
    $output .= '</div>';
    echo trim($output, $separator);
}
