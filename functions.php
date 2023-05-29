<?php

//ajax评论
require get_template_directory(). '/inc/comment/main.php';

//缩略图裁剪
require get_template_directory(). '/inc/thumbnails.php';

//wp优化
require get_template_directory(). '/inc/index.php';

//基础
require get_template_directory(). '/inc/norm.php';

//注册导航
register_nav_menus(
	array(
	'main'     => __( '主菜单导航' ),
	'mob'      => __( '手机导航' ),
	'footnav'  => __( '底部导航' )
	)
);

//小工具
require get_template_directory(). '/inc/widget.php';

// 替换 Gravatar 头像源
if ( ! function_exists( 'dr_filter_get_avatar' ) ) {
    function dr_filter_get_avatar( $avatar ) {
        // 新 Gravatar 头像源，可自行修改
        $new_gravatar_sever = 'cravatar.cn';

        $sources = array(
            'www.gravatar.com/avatar/',
            '0.gravatar.com/avatar/',
            '1.gravatar.com/avatar/',
            '2.gravatar.com/avatar/',
            'secure.gravatar.com/avatar/',
            'cn.gravatar.com/avatar/'
        );

        return str_replace( $sources, $new_gravatar_sever.'/avatar/', $avatar );
    }
    add_filter( 'get_avatar', 'dr_filter_get_avatar' );
}