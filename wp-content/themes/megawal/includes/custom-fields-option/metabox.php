<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;


Container::make( 'theme_options', __( 'Сдайдер банера' ) )
    ->set_page_parent( 'themes.php' )
    ->add_fields( array(

        Field::make( 'complex', 'slider_content', 'Слайдер, максимум 5 изображений' )->set_layout( 'tabbed-vertical' )->set_max( 5 )
            ->add_fields( array(
                Field::make( 'image', 'photo', __( ' Photo' ) )->set_width( 30 ),
                Field::make( 'text', 'title', __( ' Альтернативный текст для изображения "Alt"' ) )->set_width( 70 ),
            ) ),
        Field::make( 'rich_text', 'offer', __( ' Оффер' ) ),

    ) );


Container::make("post_meta", "Наши преимущества")
    // ->set_context('side')
     
    ->show_on_template("templates/front-page.php")
    // video box
    ->add_fields( array(

        Field::make( 'complex', 'enefits_content', 'Блок "плитка"  максимум 20шт' )->set_layout( 'tabbed-horizontal' )->set_max( 20 )
            ->add_fields( array(
                Field::make( 'image', 'icon', __( ' Иконка' ))->set_width( 10 ),
                Field::make( 'textarea', 'alt', __( ' "Alt" иконки' ))->set_width( 10 ),
                Field::make( 'textarea', 'title', __( ' Заголовок' ))->set_width( 30 ),
                Field::make( 'textarea', 'description', __( ' Описание' ))->set_width(50 ),
            ) ),


    ) );
Container::make("post_meta", "Наши заказчики и партнеры")
    // ->set_context('side')
     
    ->show_on_template("templates/front-page.php")
    // video box
    ->add_fields( array(
        Field::make( 'text', 'parthners_title', __( ' Заголовок блока' )),

        Field::make( 'complex', 'parthners_content', 'Блок "плитка"  максимум 50шт' )->set_layout( 'tabbed-horizontal' )->set_max( 50 )
            ->add_fields( array(
                Field::make( 'image', 'icon', __( ' Иконка' ) )->set_width( 50 ),
                Field::make( 'textarea', 'alt', __( ' "Alt" иконки' ))->set_width( 50 )
            ) ),


    ) );

Container::make("post_meta", "Виды офисных перегородок")
    // ->set_context('side')
     
    ->show_on_template("templates/front-page.php")
    // video box
    ->add_fields( array(
        Field::make( 'text', 'partition_title', __( ' Заголовок Блока' )),
        Field::make( 'text', 'partition_title_small', __( ' Подзаголовок' )),

        Field::make( 'complex', 'partition', 'кнопка  максимум 10шт' )->set_layout( 'tabbed-horizontal' )->set_max( 10 )
            ->add_fields( array(
                Field::make( 'textarea', 'title', __( ' Заголовок кнопки' ))->set_width( 15 ),
                Field::make( 'image', 'icon', __( ' Фоновое изображение' ) )->set_width( 10 ),
                Field::make( 'textarea', 'alt', __( ' "Alt" Фонового изображения' ))->set_width( 15 ),
                Field::make( 'rich_text', 'description', __( ' Описание' ))->set_width( 60 ),
            ) ),


    ) );

Container::make( 'post_meta', __( 'Single project' ) )
     
    ->show_on_template("templates/front-page.php")
    ->add_fields( array(
        Field::make( 'complex', 'slider_projects', 'Слайдер, максимум 35 изображений' )->set_layout( 'tabbed-vertical' )->set_max( 35 )
            ->add_fields( array(
                Field::make( 'complex', 'slider_projects_item', 'Изображений слайда' )->set_layout( 'tabbed-vertical' )
                    ->add_fields( array(
                        Field::make( 'image', 'photo', __( ' Photo' ) )->set_width( 50 ),
                        Field::make( 'text', 'alt', __( ' Альтернативный текст для изображения "Alt"' ) )->set_width( 50 ),
                    ) ),
                Field::make( 'text', 'id', __( ' Индификатор' ))->set_width(50),
                Field::make( 'rich_text', 'description', __( ' Описание' ))->set_width(100),


            ))
    ));

Container::make( 'post_meta', __( 'Выполненные проекты - Главное фото' ) )
     
    ->show_on_template("templates/front-page.php")
    ->add_fields( array(

        Field::make( 'complex', 'main_photo_projects', 'Слайдер, максимум 35 изображений' )->set_layout( 'tabbed-vertical' )->set_max( 35 )
            ->add_fields( array(
                Field::make( 'image', 'photo', __( ' Photo' ) )->set_width( 50 ),
                Field::make( 'text', 'alt', __( ' Альтернативный текст для изображения "Alt"' ) )->set_width( 50 ),
                Field::make( 'text', 'link', __( 'ID проекта' ) )->set_width( 50 ),
            ) ),
    ) );

//----------  Продукция --------------

Container::make("post_meta", "Продукция")
     
    ->show_on_template("templates/products_page.php")
    ->add_fields( array(
        Field::make( 'text', 'products_title', __( ' Заголовок блока' )),
    ) );

Container::make( 'post_meta', __( 'Блок продукта' ) )
     
    ->show_on_template("templates/products_page.php")
    ->add_fields( array(
        Field::make( 'complex', 'single_product', 'Максимум 15 блоков' )->set_layout( 'tabbed-vertical' )->set_max( 15 )
            ->add_fields( array(
                Field::make( 'complex', 'product_photo', 'Фото продукта' )->set_layout( 'tabbed-vertical' )->set_max( 1 )
                    ->add_fields( array(
                        Field::make( 'image', 'photo', __( ' Photo' ) )->set_width( 50 ),
                        Field::make( 'text', 'alt', __( ' Альтернативный текст для изображения "Alt"' ) )->set_width( 50 ),
                    ) ),
                Field::make( 'rich_text', 'product_description', __( ' Описание' ))->set_width(100),
                Field::make( 'complex', 'links_to_page', 'Ссылка на страницу, максимум 10' )->set_layout( 'tabbed-vertical' )->set_max( 15 )
                    ->add_fields( array(
                        Field::make( 'text', 'link', __( 'Ссылка на страницу' ))->set_width(50),
                        Field::make( 'text', 'text', __( 'Текст ссылки' ))->set_width(50),
                    )),


            ))
    ));

    Container::make("post_meta", "Первичная уборка")

     
    ->show_on_template("templates/front-page.php")
 
    ->add_fields( array(
        Field::make( 'image', 'first_clean_background', __( ' Фоновое изображение' ) )->set_width( 50 ),
        Field::make( 'rich_text', 'first_clean_text', __( ' Текст' ))->set_width( 50 )
       
    ) );

Container::make("post_meta", "Почему стоит обратиться к нам")

     
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

Container::make("post_meta", "О компании")
 
->show_on_template("templates/front-page.php")
->add_fields( array(
    Field::make( 'image', 'about_icon', __( ' Изображение' ) )->set_width( 10 ),
    Field::make( 'textarea', 'about_alt', __( ' "Alt"   изображения' ))->set_width( 15 ),
    Field::make( 'rich_text', 'about_text', __( ' Описание картинки' ))->set_width( 70 ),
    Field::make( 'rich_text', 'about_direction', __( ' текст наши направления' )),
    Field::make( 'rich_text', 'about_family', __( ' «МЕГАВОЛ» – это одна большая семья' )),
    Field::make( 'rich_text', 'about_mission', __( ' Миссия компании:' )) ->set_width( 40 ),
    Field::make( 'complex', 'about_slider', 'Блок "Слайдер"  максимум 20шт' )->set_layout( 'tabbed-horizontal' )->set_max( 20 )->set_width( 50 )
    ->add_fields( array(
        Field::make( 'image', 'image', __( ' изображение' ))->set_width( 10 ),
        Field::make( 'textarea', 'alt', __( ' "Alt" иконки' ))->set_width( 10 ))),
    Field::make( 'rich_text', 'about', __( ' текст после слайдера' )),

    ) );

Container::make("post_meta", "Сертификаты")
 
->show_on_template("templates/front-page.php")
->add_fields( array(

    Field::make( 'complex', 'sert', 'Блок "плитка"  максимум 20шт' )->set_layout( 'tabbed-horizontal' )->set_max( 20 )
    ->add_fields( array(
        Field::make( 'image', 'image', __( ' изображение' ))->set_width( 10 ),
        Field::make( 'textarea', 'alt', __( ' "Alt" иконки' ))->set_width( 10 ))),
    

    ) );


    Container::make("post_meta", "Таймер Скидка")
 
    ->show_on_template("templates/front-page.php")
    ->add_fields( array(
        Field::make( 'image', 'count_image', __( ' Фоновое изображение' ) )->set_width( 10 ),
        Field::make( 'textarea', 'count_title', __( ' Заголовок блока' ))->set_width( 15 ),
        Field::make( 'rich_text', 'count_text', __( ' Подзаголовок' ))->set_width( 70 ),
        Field::make( 'textarea', 'count_timer_text', __( ' Спешите до конца осталось' ))->set_width( 15 ),
        ) );