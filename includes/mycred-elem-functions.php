<?php

function add_elementor_widget_categories($elements_manager) {

    $elements_manager->add_category(
            'mycred', [
        'title' => __('MyCred', 'mycred-elementor'),
        'icon' => 'fa fa-plug',
            ]
    );
}

add_action('elementor/elements/categories_registered', 'add_elementor_widget_categories');

function mycred_get_cred_types() {
    $mycred_types = mycred_get_types(true);
    $mycred_types = array_merge(array('' => __('Select point type', 'mycred_elem')), $mycred_types);
    return $mycred_types;
}

function mycred_get_order() {
    $orders = array(
        __('Descending', 'mycred_elem') => 'DESC',
        __('Ascending', 'mycred_elem') => 'ASC'
    );
    return array_flip($orders);
}
