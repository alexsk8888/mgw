<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;


Container::make( 'theme_options', __( 'Таймер скидки' ) )
        ->set_icon('dashicons-backup')
        ->add_fields( array(
            Field::make('date_time', 'date_and_time', 'Дата и время')
        ) );


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

    ));

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
        Field::make( 'textarea', 'count_title', __( ' Заголовок блока' ))->set_width( 15 )->set_rows(4),
        Field::make( 'textarea', 'count_text', __( ' Подзаголовок' ))->set_width( 50 )->set_rows(4),
        Field::make( 'textarea', 'count_timer_text', __( ' Спешите до конца осталось' ))->set_width( 20 )->set_rows(4),
        ) );


    Container::make("post_meta", "Seo-шный текст")
 
    ->show_on_template("templates/front-page.php")
    ->add_fields( array(
        Field::make( 'textarea', 'seo_small_text', __( ' Текст который видно' ))->set_width( 50 )->set_rows(10),
        Field::make( 'rich_text', 'seo_full_text', __( ' Скрывающийся текст' ))->set_width( 50 )->set_rows(8),
        ) );


Container::make("post_meta", "Баннер стеклянных перегородок")

    ->show_on_template("templates/stationary_partitions.php")
    ->add_fields( array(
        Field::make( 'image', 'background_img', __( ' Фоновое изображение' ) )->set_width( 30 ),
        Field::make( 'text', 'banner_title', __( ' Заголовок блока' ))->set_width( 70 ),
    ) );

Container::make("post_meta", "Стационарные перегородки")

    ->show_on_template("templates/stationary_partitions.php")
    ->add_fields( array(

        Field::make( 'complex', 'stnr_block_first', 'Первый блок' )->set_layout( 'tabbed-horizontal' )->set_max(1)
            ->add_fields( array(
                Field::make( 'image', 'photo', __( ' Изображение' ))->set_width( 50 ),
                Field::make( 'text', 'alt', __( ' "Alt" иконки' ))->set_width( 50 ),
                Field::make( 'rich_text', 'info_text', __( ' Информационный текст' ))->set_width( 100 ))),

        Field::make( 'complex', 'stnr_block_second', 'Второй блок' )->set_layout( 'tabbed-horizontal' )->set_max(1)
            ->add_fields( array(
                Field::make( 'image', 'background_img', __( 'Фоновое Изображение' ))->set_width( 50 ),
                Field::make( 'text', 'alt', __( ' "Alt" иконки' ))->set_width( 50 ),
                Field::make( 'text', 'title', __( ' Заголовок блока' ))->set_width( 70 ),
            )),

        Field::make( 'complex', 'stnr_block_second_list', ' Список второго блока' )->set_layout( 'tabbed-horizontal' )->set_max(7)
            ->add_fields( array(
                Field::make( 'rich_text', 'li_text', __( 'Текст списка' ))->set_width(100))),

        Field::make( 'rich_text', 'type_partitions', __( ' Заголовок "Виды перегородок" ' )),

        Field::make( 'complex', 'stnr_type_partitions', 'Виды перегородок' )->set_layout( 'tabbed-horizontal' )->set_max(6)
            ->add_fields( array(
                Field::make( 'image', 'photo', __( ' Изображение' ))->set_width( 50 ),
                Field::make( 'text', 'alt', __( ' "Alt" иконки' ))->set_width( 50 ),
                Field::make( 'text', 'info_text', __( ' Информационный текст' ))->set_width( 50 ),
                Field::make( 'text', 'price', __( ' Цена' ))->set_width( 50 ),
                )),

        Field::make( 'rich_text', 'door_type_title', __( ' Заголовок "Виды дверей" ' )),

        Field::make( 'complex', 'stnr_door_type_bg', 'Фоновое Изображение "Виды дверей"' )->set_layout( 'tabbed-horizontal' )->set_max(1)
            ->add_fields( array(
                Field::make( 'image', 'background_img', __( 'Фоновое Изображение' ))->set_width( 50 ),
                Field::make( 'text', 'alt', __( ' "Alt" иконки' ))->set_width( 50 ),
            )),

        Field::make( 'complex', 'stnr_door_type', 'Виды дверей' )->set_layout( 'tabbed-horizontal' )->set_max(6)
            ->add_fields( array(
                Field::make( 'image', 'photo', __( ' Изображение' ))->set_width( 50 ),
                Field::make( 'text', 'alt', __( ' "Alt" иконки' ))->set_width( 50 ),
                Field::make( 'text', 'info_text', __( ' Информационный текст' ))->set_width( 50 ),
                Field::make( 'text', 'price', __( ' Цена' ))->set_width( 50 ),
            )),

        Field::make( 'text', 'stnr_projects_title', __( ' Заголовок "Выполненные проекты" ' )),

        Field::make( 'rich_text', 'stnr_slider_title', __( ' Заголовок "Другие услуги компании" ' )),

        Field::make( 'complex', 'stnr_slider_bg', 'Фоновое Изображение "Другие услуги компании" ' )->set_layout( 'tabbed-horizontal' )->set_max(1)
        ->add_fields( array(
            Field::make( 'image', 'background_img', __( 'Фоновое Изображение' ))->set_width( 50 ),
            Field::make( 'text', 'alt', __( ' "Alt" иконки' ))->set_width( 50 ),
        )),

        Field::make( 'complex', 'stnr_slider', 'Слайдер' )->set_layout( 'tabbed-vertical' )->set_max( 20 )
        ->add_fields( array(
            Field::make( 'image', 'photo', __( ' Photo' ) )->set_width( 30 ),
            Field::make( 'text', 'alt', __( ' Альтернативный текст для изображения "Alt"' ) )->set_width( 20 ),
            Field::make( 'text', 'text', __( 'Текст' ) )->set_width( 50 ),
        ) ),

    ) );


    Container::make("post_meta", "изображения галереи")
    ->show_on_post_type('post')
    ->add_fields( array(

        Field::make( 'complex', 'post_cb_field', 'Блок "галерея изображений"  максимум 20шт' )->set_layout( 'tabbed-horizontal' )->set_max( 20 )
        
        ->add_fields( array(
            Field::make( 'image', 'image', __( ' изображение' ))->set_width( 10 ),
            Field::make( 'textarea', 'alt', __( ' "Alt" иконки' ))->set_width( 10 ))),

        ) );


    Container::make("post_meta", "Преимущества")
    ->show_on_template("templates/benefits.php")
    ->add_fields( array(
        Field::make( 'complex', 'benefits', 'Блок - максимум 8шт' )->set_layout( 'tabbed-vertical' )->set_max( 8 )
        
->add_fields( array(
    Field::make( 'image', 'benefits_image', __( '01 фоновое изображение' ))->set_width( 50),
    Field::make( 'rich_text', 'benefits_text', __( '01 текст' ))->set_width( 50 )->set_rows(8)))
    ->set_required(true),
     ));

    // ------------------------- about page

    Container::make("post_meta", "О компании")
    ->show_on_template("templates/about.php")

->add_fields( array(
    Field::make( 'rich_text', 'about1_text', __( '01 текст' ))->set_width( 50 )->set_rows(8),
    Field::make( 'image', 'about1_image', __( '01 фоновое изображение' ))->set_width( 30),
    Field::make( 'text', 'about1_alt', __( ' "Alt"   изображения' ))->set_width( 20 ),
    ));


     Container::make("post_meta", "Направления")
     ->show_on_template("templates/about.php") 

->add_fields( array(
    Field::make( 'text', 'direction_title', __( ' заголовок блока' ))->set_width( 20 ),
    Field::make( 'image', 'direction_image', __( ' Изображение' ) )->set_width( 15 ),
    Field::make( 'text', 'direction_alt', __( ' "Alt"   изображения' ))->set_width( 15 ),
     Field::make( 'rich_text', 'direction_about', __( ' текст' ))->set_width( 50 ),
));
     Container::make("post_meta", "Семья")
     ->show_on_template("templates/about.php") 

->add_fields( array(
    Field::make( 'text', 'family_title', __( ' заголовок блока' ))->set_width( 20 ),
    Field::make( 'rich_text', 'family_about', __( ' текст' ))->set_width( 50 ),
     Field::make( 'image', 'family_image', __( ' Изображение' ) )->set_width( 15 ),
     Field::make( 'text', 'family_alt', __( ' "Alt"   изображения' ))->set_width( 15 ),
));

     Container::make("post_meta", "Про производство")
     ->show_on_template("templates/about.php") 

->add_fields( array(
    Field::make( 'text', 'proizv_title', __( ' заголовок блока' ))->set_width( 20 ),
    Field::make( 'image', 'proizv_image', __( ' Изображение' ) )->set_width( 15 ),
    Field::make( 'text', 'proizv_alt', __( ' "Alt"   изображения' ))->set_width( 15 ),
    Field::make( 'rich_text', 'proizv_about', __( ' текст' ))->set_width( 50 ),
));

Container::make("post_meta", "Миссия")
->show_on_template("templates/about.php") 

->add_fields( array(
Field::make( 'text', 'mission_title', __( ' заголовок блока' ))->set_width( 20 ),
Field::make( 'rich_text', 'mission_about', __( ' текст' ))->set_width( 50 ),
Field::make( 'image', 'mission_image', __( ' Изображение' ) )->set_width( 15 ),
Field::make( 'text', 'mission_alt', __( ' "Alt"   изображения' ))->set_width( 15 ),
));

    Container::make("post_meta", "Наша команда")
    ->show_on_template("templates/about.php")
    ->add_fields( array(

        Field::make( 'complex', 'command', 'Блок - максимум 8шт' )->set_layout( 'tabbed-horizontal' )->set_max( 8 )
        
    ->add_fields( array(
        Field::make( 'image', 'photo', __( 'фото' ))->set_width( 33),
        Field::make( 'text',  'alt', __( ' "Alt"   фото' ))->set_width( 15 ),
        Field::make( 'text',  'name', __( 'Имя' ))->set_width( 33 )->set_required(true),
        Field::make( 'text',  'prof', __( 'Должность' ))->set_width( 33 )->set_required(true)
        )),
     ));

     Container::make("post_meta", "Сертификаты")
 
     ->show_on_template("templates/about.php")
     ->add_fields( array(
     
         Field::make( 'complex', 'sert', 'Блок "плитка"  максимум 20шт' )->set_layout( 'tabbed-horizontal' )->set_max( 20 )
         ->add_fields( array(
             Field::make( 'image', 'image', __( ' изображение' ))->set_width( 10 ),
             Field::make( 'textarea', 'alt', __( ' "Alt" иконки' ))->set_width( 10 ))),
         ) );


     Container::make("post_meta", "Вакансии")
 
     ->show_on_template("templates/vakant.php")
     ->add_fields( array(
     
         Field::make( 'complex', 'vakants', 'Одна вакансия' )->set_layout( 'tabbed-vertical' )->set_max( 20 )
         ->add_fields( array(
            Field::make( 'text',  'prof', __( 'Должность' ))->set_required(true),
            Field::make( 'text',  'zp', __( 'средняя з/п' )),
            Field::make( 'complex', 'skils', '.. должен знать и уметь:' )->set_layout( 'tabbed-vertical' )->set_max( 20 )
            ->add_fields( array(
                Field::make( 'text',  'skil', __( 'текст' ))
                ) ),
                Field::make( 'text',  'shortcode', __( 'шорткод contactForm7' )),
         ) ),

         ) );
         
         Container::make("post_meta", "ОФИС МОСКВА")
 
         ->show_on_template("templates/contacts.php")
         ->add_fields( array(
                      
                Field::make( 'textarea',  'adres_office', __( 'АДРЕС' ))->set_width( 33 ),
                Field::make( 'rich_text',  'contact_office', __( 'ВЫ МОЖЕТЕ СВЯЗАТЬСЯ С НАМИ' ))->set_width( 33 ),
                Field::make( 'textarea',  'time_work_office', __( 'РЕЖИМ РАБОТЫ' ))->set_width( 33 ),
                Field::make( 'rich_text',  'requisit', __( 'РЕКВИЗИТЫ' ))->set_width( 50 ),            
                Field::make( 'textarea',  'iframe_office', __( 'iframe' )) ->set_width( 50 )           
    
             ) );

         Container::make("post_meta", "ПРОИЗВОДСТВО")
 
         ->show_on_template("templates/contacts.php")
         ->add_fields( array(
                      
                Field::make( 'textarea',  'adres_production', __( 'АДРЕС' ))->set_width( 33 ),
                Field::make( 'rich_text',  'contact_production', __( 'ВЫ МОЖЕТЕ СВЯЗАТЬСЯ С НАМИ' ))->set_width( 33 ),
                Field::make( 'textarea',  'time_work_production', __( 'РЕЖИМ РАБОТЫ' ))->set_width( 33 ),
                Field::make( 'textarea',  'iframe_production', __( 'iframe' ))       
            ) );

         Container::make("post_meta", "ДРУГИЕ ГОРОДА")
 
         ->show_on_template("templates/contacts.php")
         ->add_fields( array(
                      
                Field::make( 'textarea',  'adres_other', __( 'АДРЕС' ))->set_width( 100 ),
   
            ) );