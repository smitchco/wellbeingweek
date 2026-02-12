<?php
/**
 * Primary menu.
 *
 * @since   3.0.0
 * @package The7/Templates
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

echo '<div class="menu--custom">';

echo '<div class="menu--top">';
echo '<ul class="main-nav"><li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-7863 act has-children depth-0"><a href="https://institute.lawyerwellbeing.net/general/register_member_type.asp?" data-level="1"><span class="menu-item-text"><span class="menu-text">Partnership</span></span></a><ul class="sub-nav level-arrows-on"><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7855 first depth-1"><a href="https://institute.lawyerwellbeing.net/general/register_member_type.asp?" data-level="2"><span class="menu-item-text"><span class="menu-text">Partnership Types</span></span></a></li><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7855 first depth-1"><a href="https://institute.lawyerwellbeing.net/Login.aspx" data-level="2"><span class="menu-item-text"><span class="menu-text">Login</span></span></a></li></ul></li></ul>';
presscore_render_header_elements( 'near_menu_right' ); 
echo '</div>';


do_action( 'presscore_before_primary_menu' );

$menu_location = ( isset( $menu_location ) ? $menu_location : 'primary' );

 echo '<ul id="' . esc_attr( "{$menu_location}-menu" ) . '" class="' . implode( ' ', presscore_get_primary_menu_class( 'main-nav' ) ) . '">';

	presscore_primary_nav_menu( 'new_menu' );

echo '</ul>';

do_action( 'presscore_after_primary_menu' );

echo '</div>';
echo '<style> ';
echo '.menu--custom {display: flex;flex-direction: column; } ';
echo '.menu--top { margin-left: auto; display: flex; flex-direction: row; align-items: center; justify-content: center; } ';
echo '.menu-item-7882 > a { background: #69B67D;  border-radius: 7px!important; margin-left: 10px; } ';

echo '.hover-bg-decoration > .menu-item-7882 > a:hover { background: #4A915B!important; } ';
echo '.menu-item-7862 { display: none!important; } ';
echo '.menu--custom .menu-item-7863 a { color: #FFFFFF; } ';
echo 'body .main-nav > li.menu-item-7863 > a .menu-text { font-size: 14px!important; }';
echo '.menu-item-7919 a.mega-menu-img { background-color: #0c9ec7; border-radius: 7px;} ';
echo '.menu-item-7919 a.mega-menu-img:hover { background-color: #2F708E!important; border-color: #2F708E!important;} ';
echo '.header-bar { max-width: 1280px!important; } ';
echo '.same-logo { padding-left: 0!important; } '; 
echo '.current-menu-parent > a { border-radius: 7px!important;}';
echo '.header-bar {padding-top: 5px; padding-bottom: 10px!important; }';
echo '#primary-menu { margin-top: 5px;}';
echo '.ph-wrap.with-logo .menu-box { flex-direction: column; }';
echo '.widget-box { display: none!important; }';
echo ' </style>';