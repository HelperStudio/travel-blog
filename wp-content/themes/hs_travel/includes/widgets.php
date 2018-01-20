<?php
function ju_widgets(){
    register_sidebar(
    array(
    'name' => __('My first', 'study'),
    'id' =>'ju_sidebar',
    'description' => __('Sidebar for study theme', 'study'),
    'class'=> ''
    ));
}