<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;


Container::make("post_meta", "Первичная уборка")

    ->set_priority("high")
    ->show_on_template("templates/front-page.php")
 
    ->add_fields( array(
        Field::make( 'image', 'first_clean_background', __( ' Фоновое изображение' ) )->set_width( 50 ),
        Field::make( 'rich_text', 'first_clean_text', __( ' Текст' ))->set_width( 50 )
       
    ) );

Container::make("post_meta", "Первичная уборка")

    ->set_priority("high")
    ->show_on_template("templates/front-page.php")
    
    ->add_fields( array(     
        Field::make( 'image', 'why_are_we_background_container', __( ' Фоновое изображение' ) ),
        Field::make( 'complex', 'why_are_we', 'Блок "плитка"  максимум 20шт' )->set_layout( 'tabbed-horizontal' )->set_max( 20 )
        ->add_fields( array( 
              Field::make( 'rich_text', 'why_are_we_text', __( ' Текст' ))->set_width( 50 ),
              Field::make( "checkbox", "why_color", "Белый цвет текста" )->set_width( 10 ),
              Field::make( 'image', 'why_are_we_background', __( ' Фоновое изображение' ) )->set_width( 10 ),
             
				 

        ) )       
    ) );

// tabs
    Container::make("post_meta", "Виды профилей")
    // ->set_context('side')
    ->set_priority("high")
    ->show_on_template("templates/front-page.php")
    // video box
    ->add_fields( array(
        Field::make( 'complex', 'views', 'кнопка  максимум 10шт' )->set_layout( 'tabbed-horizontal' )->set_max( 10 )
            ->add_fields( array(
                Field::make( 'textarea', 'view_title', __( ' Заголовок кнопки' ))
                ->set_width( 15 )
                ->set_required(true),
                Field::make( 'image', 'view_icon', __( ' Изображение' ) )
                ->set_width( 10 ),
                Field::make( 'textarea', 'view_alt', __( ' "Alt" Фонового изображения' ))
                ->set_width( 15 ),
                Field::make( 'rich_text', 'view_description', __( ' Описание' ))
                ->set_width( 60 )
                ->set_required(true),
            ) )
    ) );
//\tabs    