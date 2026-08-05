<?php

defined( 'ABSPATH' ) || exit;

function mp_prep_theme_uri( $path = '' ) {
    return get_template_directory_uri() . '/' . ltrim( $path, '/' );
}

function mp_prep_text( $value, $default = '' ) {
    if ( is_string( $value ) ) {
        $value = trim( $value );
    }

    return ( $value !== null && $value !== '' ) ? $value : $default;
}

function mp_prep_image_url( $image, $default_path ) {
    if ( is_array( $image ) && ! empty( $image['url'] ) ) {
        return esc_url( $image['url'] );
    }

    if ( is_string( $image ) && trim( $image ) !== '' ) {
        if ( filter_var( $image, FILTER_VALIDATE_URL ) ) {
            return esc_url( $image );
        }
    }

    if ( is_numeric( $image ) ) {
        $url = wp_get_attachment_image_url( (int) $image, 'full' );
        if ( $url ) {
            return esc_url( $url );
        }
    }

    if ( $default_path && filter_var( $default_path, FILTER_VALIDATE_URL ) ) {
        return esc_url( $default_path );
    }

    return esc_url( mp_prep_theme_uri( $default_path ) );
}

function mp_prep_default_announce() {
    return array(
        'announce_badge_title'     => 'NEW at MATHPAL',
        'announce_badge_sub'     => 'We now prepare your teen for SAT',
        'announce_badge_highlight' => 'Reading & Writing',
        'announce_text_1'        => "MathPal has always been the place for expert SAT Math tutoring. Now we've expanded — your teen can get 1-on-1 prep for the ",
        'announce_text_1_bold'     => 'SAT Reading & Writing section too.',
        'announce_text_2'          => 'The same trusted tutors, the same personalized approach, covering every section that matters for their score.',
        'announce_image'           => 'https://www.mathpal.us/wp-content/uploads/2026/06/boy-green-1.png',
        'announce_icon'            => 'https://www.mathpal.us/wp-content/uploads/2026/06/3afb6ba5cd90373ce5461d3238c3834a1429b3fc.png',
        'announce_card_bg'       => 'https://www.mathpal.us/wp-content/uploads/2026/06/mask.png',
        'announce_check_icon'    => 'https://www.mathpal.us/wp-content/uploads/2026/06/%E2%9C%93.png',
        'announce_checklist'       => array(
            array( 'check_text' => 'Math' ),
            array( 'check_text' => 'Reading & Writing' ),
            array( 'check_text' => 'The complete SAT — one place, one plan' ),
        ),
    );
}

function mp_prep_checkout_url( $page ) {
    if ( is_string( $page ) && $page !== '' ) {
        if ( filter_var( $page, FILTER_VALIDATE_URL ) ) {
            return esc_url( $page );
        }

        if ( is_numeric( $page ) ) {
            return get_permalink( (int) $page );
        }
    }

    if ( is_object( $page ) && ! empty( $page->ID ) ) {
        return get_permalink( $page->ID );
    }

    if ( is_numeric( $page ) ) {
        return get_permalink( (int) $page );
    }

    return '#';
}

function mp_prep_default_plans( $exam = 'sat' ) {
    $label = strtoupper( $exam );

    $premium_description = ( 'sat' === $exam )
        ? 'Our Premium Plan gives students a strategic advantage: prepare for both SAT with personalized 1:1 tutoring and total flexibility to submit their strongest test score with confidence.'
        : 'Our Premium Plan gives students a strategic advantage: prepare for both ACT with personalized 1:1 tutoring and total flexibility to submit their strongest test score with confidence.';

    $premium_plan = array(
        'plan_title'         => ( 'act' === $exam ) ? 'Premium ACT/SAT Course' : "Premium {$label} Course",
        'plan_price'         => '670',
        'plan_description'   => $premium_description,
        'plan_validity'      => '',
        'plan_features'      => array(
            array( 'feature_text' => '18 one-on-one tutoring hours' ),
            array( 'feature_text' => "{$label} Expert Tutors" ),
            array( 'feature_text' => 'Personalized Approach' ),
            array( 'feature_text' => 'Comprehensive Curriculum' ),
            array( 'feature_text' => '16 Full Length Practice Exams' ),
            array( 'feature_text' => 'Strategic Test- Taking Techniques' ),
        ),
        'plan_checkout'      => get_permalink( 'sat' === $exam ? 1951 : 445 ),
        'plan_is_premium'    => 1,
        'plan_premium_exp'   => 'No expiration',
        'plan_show_new_badge'=> ( 'sat' === $exam ) ? 1 : 0,
        'plan_new_label'     => 'NEW',
        'plan_new_sub'       => 'Now includes',
        'plan_new_highlight' => ( 'sat' === $exam ) ? 'Reading & Writing Prep' : '',
        'plan_subline'       => '',
    );

    return array(
        array(
            'plan_title'       => "Emergency {$label} Course",
            'plan_price'       => '250',
            'plan_description' => 'Need a last-minute boost? Our certified tutors deliver expert tips, tricks, focused lessons, and practice to maximize your score fast.',
            'plan_validity'    => 'Valid for one month',
            'plan_features'    => array(
                array( 'feature_text' => '6 one-on-one tutoring hours' ),
                array( 'feature_text' => "{$label} Expert Tutors" ),
                array( 'feature_text' => 'Personalized Approach' ),
                array( 'feature_text' => 'Comprehensive Curriculum' ),
                array( 'feature_text' => '10 Full Length Practice Exams' ),
                array( 'feature_text' => 'Strategic Test- Taking Techniques' ),
            ),
            'plan_checkout'      => get_permalink( 'act' === $exam ? 1947 : 1949 ),
            'plan_is_premium'    => 0,
            'plan_premium_exp'   => '',
            'plan_show_new_badge'=> 0,
            'plan_subline'       => '',
        ),
        array(
            'plan_title'       => "Intensive {$label} Course",
            'plan_price'       => '420',
            'plan_description' => 'Need a last-minute boost? Our certified tutors deliver expert tips, tricks, focused lessons, and practice to maximize your score fast.',
            'plan_validity'    => 'Valid for 3 months',
            'plan_features'    => array(
                array( 'feature_text' => '12 one-on-one tutoring hours to use within 3 months' ),
                array( 'feature_text' => "{$label} Expert Tutors" ),
                array( 'feature_text' => 'Personalized Approach' ),
                array( 'feature_text' => 'Comprehensive Curriculum' ),
                array( 'feature_text' => '10 Full Length Practice Exams' ),
                array( 'feature_text' => 'Strategic Test- Taking Techniques' ),
            ),
            'plan_checkout'      => get_permalink( 'act' === $exam ? 1948 : 1950 ),
            'plan_is_premium'    => 0,
            'plan_premium_exp'   => '',
            'plan_show_new_badge'=> 0,
            'plan_subline'       => '',
        ),
        $premium_plan,
    );
}

function mp_prep_default_info( $exam = 'sat' ) {
    if ( 'act' === $exam ) {
        return array(
            'info_title'     => 'What is the ACT?',
            'info_lead'      => 'The ACT is one of the two major college admissions exams in the U.S. — and a strong Math score can make a real difference in scholarships, program eligibility, and college options.',
            'info_text'      => '',
            'info_highlight' => '',
            'info_image'     => '',
            'info_items'     => array(
                array(
                    'item_icon' => '',
                    'item_text' => 'Our 1-on-1 ACT Math tutoring focuses exclusively on what the exam tests: 60 questions, 60 minutes, covering Pre-Algebra, Algebra, Geometry, and Trigonometry.',
                ),
                array(
                    'item_icon' => '',
                    'item_text' => 'No fluff, no generic lessons — just targeted prep with expert tutors who know exactly how the ACT Math section is structured and what it takes to score higher.',
                ),
            ),
        );
    }

    return array(
        'info_title'      => 'What is the SAT?',
        'info_lead'       => 'The SAT is one of the most recognized college admissions tests in the United States.',
        'info_text'       => "It's designed to assess reasoning, problem-solving, mathematical skills, and English language proficiency — and a ",
        'info_highlight'  => 'strong score can make a real difference in college options and scholarships.',
        'info_image'      => '',
        'info_items'      => array(),
    );
}

function mp_prep_default_cta( $exam = 'sat' ) {
    $exam_name = ( 'act' === $exam ) ? 'ACT' : 'SAT';

    return array(
        'cta_subtitle' => 'Ready to boost your score?',
        'cta_title'    => "Start your {$exam_name} Preparation today",
        'cta_btn_text' => "Explore {$exam_name} prep plans",
        'cta_btn_url'  => '#block_precios',
    );
}

function mp_prep_default_ixl( $exam = 'sat' ) {
    return array(
        'ixl_tag'       => 'Learning tailored for you',
        'ixl_title'     => 'IXL',
        'ixl_text'      => 'Is an online learning platform designed to help students excel in various subjects. It is used by over 15 million students worldwide and offers personalized learning experiences across more than 17,000 topics, including math, language arts, science, social studies, and Spanish. IXL provides a comprehensive curriculum, actionable analytics, and real-time diagnostics to meet the unique needs of each learner.',
        'ixl_highlight' => 'All our subscription plans include free access to the IXL platform.',
        'ixl_footnote'  => ( 'act' === $exam )
            ? ''
            : 'IXL access applies to Math preparation only and is not included in Reading & Writing tutoring sessions.',
        'ixl_image'     => '',
    );
}

function mp_prep_default_steps( $exam = 'sat' ) {
    $exam_upper = strtoupper( $exam );

    return array(
        array(
            'step_number' => '1',
            'step_title'  => 'Plan to Spend 20–40 hours Studying',
            'step_text'   => 'Spread your study sessions consistently over weeks leading up to the test.',
            'step_items'  => array(
                array( 'item_text' => 'Focus on understanding key concepts' ),
                array( 'item_text' => 'Use regular progress assessment' ),
                array( 'item_text' => 'Adjust study hours to your starting point and improvement goals' ),
            ),
            'step_footer' => '→ Subscribe to MathPal today and get your custom plan.',
        ),
        array(
            'step_number' => '2',
            'step_title'  => 'Practice, Practice, Practice',
            'step_text'   => "Take 4–6 full-length {$exam_upper} practice tests to master pacing and question types.",
            'step_items'  => array(
                array( 'item_text' => 'Simulate real test conditions' ),
                array( 'item_text' => 'Adhere to time constraints' ),
                array( 'item_text' => 'Review mistakes regularly' ),
            ),
            'step_footer' => '10 Official Full-Length Tests included in every subscription.',
        ),
        array(
            'step_number' => '3',
            'step_title'  => 'Learn Tips and Tricks',
            'step_text'   => 'Refine time management and develop effective strategies for success.',
            'step_items'  => array(
                array( 'item_text' => 'Reduce stress and identify weaknesses' ),
                array( 'item_text' => 'Adapt to real testing conditions' ),
                array( 'item_text' => 'Gain insider strategies for successful test-taking' ),
            ),
            'step_footer' => '→ Your subscription comes with exclusive tips from expert tutors.',
        ),
    );
}

function mp_prep_default_blocks( $exam = 'sat' ) {
    $exam_label = strtoupper( $exam );
    $exam_name  = ( 'act' === $exam ) ? 'ACT' : 'SAT';

    $hero_defaults = ( 'sat' === $exam )
        ? array(
            'acf_fc_layout'    => 'hero',
            'hero_tag'         => 'Own the SAT',
            'hero_title'       => 'SAT Prep Courses',
            'hero_highlight'   => 'Math + Reading & Writing',
            'hero_text'        => 'Build the skills and confidence your teen needs to score higher',
            'hero_btn_text'    => 'Start training',
            'hero_btn_url'     => '#block_precios',
            'hero_image'       => '',
        )
        : array(
            'acf_fc_layout'    => 'hero',
            'hero_tag'         => 'Train & Lead',
            'hero_title'       => 'ACT Prep',
            'hero_highlight'   => 'Courses: Math',
            'hero_text'        => 'Personalized practice to boost confidence and ace your school exams.',
            'hero_btn_text'    => 'Start training',
            'hero_btn_url'     => '#block_precios',
            'hero_image'       => '',
        );

    $blocks = array( $hero_defaults );

    if ( 'sat' === $exam ) {
        $blocks[] = array_merge(
            array( 'acf_fc_layout' => 'announcement_new' ),
            mp_prep_default_announce()
        );
    }

    $blocks[] = array(
        'acf_fc_layout'    => 'pricing',
        'pricing_title'    => "{$exam_name} Prep:",
        'pricing_bg_class' => 'bg-3',
        'pricing_plans'    => mp_prep_default_plans( $exam ),
    );

    $blocks[] = array_merge(
        array( 'acf_fc_layout' => 'info' ),
        mp_prep_default_info( $exam )
    );

    $blocks[] = array(
        'acf_fc_layout'  => 'steps',
        'steps_title'    => ( 'sat' === $exam ) ? 'Get your teen prepared today!' : 'Get Prepared Today!',
        'steps_items'    => mp_prep_default_steps( $exam ),
    );

    $blocks[] = array_merge(
        array( 'acf_fc_layout' => 'ixl' ),
        mp_prep_default_ixl( $exam )
    );

    $blocks[] = array_merge(
        array( 'acf_fc_layout' => 'cta' ),
        mp_prep_default_cta( $exam )
    );

    return $blocks;
}

function mp_prep_seed_page_blocks( $post_id, $exam = 'sat' ) {
    if ( ! function_exists( 'update_field' ) ) {
        return false;
    }

    $existing = get_field( 'prep_blocks', $post_id );
    if ( ! empty( $existing ) ) {
        return false;
    }

    return update_field( 'prep_blocks', mp_prep_default_blocks( $exam ), $post_id );
}

function mp_prep_get_field_group_definition() {
    return array(
            'key'    => 'group_mp_prep_courses',
            'title'  => 'Prep Courses — Bloques',
            'fields' => array(
                array(
                    'key'          => 'field_mp_prep_blocks',
                    'label'        => 'Bloques de página',
                    'name'         => 'prep_blocks',
                    'type'         => 'flexible_content',
                    'button_label' => 'Agregar bloque',
                    'layouts'      => array(
                        'layout_mp_prep_hero' => array(
                            'key'        => 'layout_mp_prep_hero',
                            'name'       => 'hero',
                            'label'      => 'Hero',
                            'display'    => 'block',
                            'sub_fields' => array(
                                array( 'key' => 'field_mp_hero_tag', 'label' => 'Badge', 'name' => 'hero_tag', 'type' => 'text', 'default_value' => 'Own the SAT' ),
                                array( 'key' => 'field_mp_hero_title', 'label' => 'Título', 'name' => 'hero_title', 'type' => 'text', 'default_value' => 'SAT Prep Courses' ),
                                array( 'key' => 'field_mp_hero_highlight', 'label' => 'Texto destacado (caja morada)', 'name' => 'hero_highlight', 'type' => 'text', 'default_value' => 'Math + Reading & Writing' ),
                                array( 'key' => 'field_mp_hero_text', 'label' => 'Descripción', 'name' => 'hero_text', 'type' => 'textarea', 'rows' => 3 ),
                                array( 'key' => 'field_mp_hero_btn_text', 'label' => 'Texto botón', 'name' => 'hero_btn_text', 'type' => 'text', 'default_value' => 'Start training' ),
                                array( 'key' => 'field_mp_hero_btn_url', 'label' => 'URL botón', 'name' => 'hero_btn_url', 'type' => 'text', 'default_value' => '#block_precios' ),
                                array(
                                    'key'           => 'field_mp_hero_image',
                                    'label'         => 'Imagen principal',
                                    'name'          => 'hero_image',
                                    'type'          => 'image',
                                    'return_format' => 'array',
                                    'preview_size'  => 'medium',
                                    'instructions'  => 'La imagen ya incluye el texto (Ages 15 to 18, etc.). No se superpone texto adicional.',
                                ),
                            ),
                        ),
                        'layout_mp_prep_announce' => array(
                            'key'        => 'layout_mp_prep_announce',
                            'name'       => 'announcement_new',
                            'label'      => 'Anuncio NEW (SAT)',
                            'display'    => 'block',
                            'sub_fields' => array(
                                array( 'key' => 'field_mp_ann_badge_title', 'label' => 'Badge título', 'name' => 'announce_badge_title', 'type' => 'text', 'default_value' => 'NEW at MATHPAL' ),
                                array( 'key' => 'field_mp_ann_badge_sub', 'label' => 'Badge subtítulo', 'name' => 'announce_badge_sub', 'type' => 'text', 'default_value' => 'We now prepare your teen for' ),
                                array( 'key' => 'field_mp_ann_badge_highlight', 'label' => 'Badge highlight', 'name' => 'announce_badge_highlight', 'type' => 'text', 'default_value' => 'SAT Reading & Writing' ),
                                array( 'key' => 'field_mp_ann_text_1', 'label' => 'Párrafo 1 (inicio)', 'name' => 'announce_text_1', 'type' => 'textarea', 'rows' => 3 ),
                                array( 'key' => 'field_mp_ann_text_1_bold', 'label' => 'Párrafo 1 (negrita final)', 'name' => 'announce_text_1_bold', 'type' => 'text' ),
                                array( 'key' => 'field_mp_ann_text_2', 'label' => 'Párrafo 2', 'name' => 'announce_text_2', 'type' => 'textarea', 'rows' => 3 ),
                                array( 'key' => 'field_mp_ann_image', 'label' => 'Imagen persona', 'name' => 'announce_image', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'medium' ),
                                array( 'key' => 'field_mp_ann_icon', 'label' => 'Icono megáfono', 'name' => 'announce_icon', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'thumbnail' ),
                                array( 'key' => 'field_mp_ann_card_bg', 'label' => 'Decoración card (mask)', 'name' => 'announce_card_bg', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'medium' ),
                                array(
                                    'key'          => 'field_mp_ann_checklist',
                                    'label'        => 'Lista con checks',
                                    'name'         => 'announce_checklist',
                                    'type'         => 'repeater',
                                    'layout'       => 'table',
                                    'button_label' => 'Agregar ítem',
                                    'sub_fields'   => array(
                                        array( 'key' => 'field_mp_ann_check_text', 'label' => 'Texto', 'name' => 'check_text', 'type' => 'text' ),
                                    ),
                                ),
                            ),
                        ),
                        'layout_mp_prep_pricing' => array(
                            'key'        => 'layout_mp_prep_pricing',
                            'name'       => 'pricing',
                            'label'      => 'Precios',
                            'display'    => 'block',
                            'sub_fields' => array(
                                array( 'key' => 'field_mp_pricing_title', 'label' => 'Título sección', 'name' => 'pricing_title', 'type' => 'text', 'default_value' => 'Prep:' ),
                                array( 'key' => 'field_mp_pricing_bg_class', 'label' => 'Clase CSS fondo', 'name' => 'pricing_bg_class', 'type' => 'text', 'default_value' => 'bg-3' ),
                                array(
                                    'key'          => 'field_mp_pricing_plans',
                                    'label'        => 'Planes',
                                    'name'         => 'pricing_plans',
                                    'type'         => 'repeater',
                                    'layout'       => 'block',
                                    'button_label' => 'Agregar plan',
                                    'sub_fields'   => array(
                                        array( 'key' => 'field_mp_plan_title', 'label' => 'Nombre', 'name' => 'plan_title', 'type' => 'text' ),
                                        array( 'key' => 'field_mp_plan_price', 'label' => 'Precio', 'name' => 'plan_price', 'type' => 'text' ),
                                        array( 'key' => 'field_mp_plan_description', 'label' => 'Descripción', 'name' => 'plan_description', 'type' => 'textarea', 'rows' => 4 ),
                                        array( 'key' => 'field_mp_plan_validity', 'label' => 'Validez', 'name' => 'plan_validity', 'type' => 'text' ),
                                        array(
                                            'key'          => 'field_mp_plan_features',
                                            'label'        => 'Beneficios',
                                            'name'         => 'plan_features',
                                            'type'         => 'repeater',
                                            'layout'       => 'table',
                                            'button_label' => 'Agregar beneficio',
                                            'sub_fields'   => array(
                                                array( 'key' => 'field_mp_plan_feature_text', 'label' => 'Texto', 'name' => 'feature_text', 'type' => 'text' ),
                                            ),
                                        ),
                                        array( 'key' => 'field_mp_plan_checkout', 'label' => 'Página checkout', 'name' => 'plan_checkout', 'type' => 'page_link', 'post_type' => array( 'page' ), 'allow_null' => 1 ),
                                        array( 'key' => 'field_mp_plan_is_premium', 'label' => 'Plan premium', 'name' => 'plan_is_premium', 'type' => 'true_false', 'ui' => 1 ),
                                        array( 'key' => 'field_mp_plan_premium_exp', 'label' => 'Texto premium (ej. No expiration)', 'name' => 'plan_premium_exp', 'type' => 'text' ),
                                        array( 'key' => 'field_mp_plan_show_new_badge', 'label' => 'Mostrar badge NEW', 'name' => 'plan_show_new_badge', 'type' => 'true_false', 'ui' => 1 ),
                                        array( 'key' => 'field_mp_plan_new_label', 'label' => 'Badge NEW — etiqueta', 'name' => 'plan_new_label', 'type' => 'text', 'default_value' => 'NEW' ),
                                        array( 'key' => 'field_mp_plan_new_sub', 'label' => 'Badge NEW — subtítulo', 'name' => 'plan_new_sub', 'type' => 'text', 'default_value' => 'Now includes' ),
                                        array( 'key' => 'field_mp_plan_new_highlight', 'label' => 'Badge NEW — highlight', 'name' => 'plan_new_highlight', 'type' => 'text', 'default_value' => 'Reading & Writing Prep' ),
                                        array( 'key' => 'field_mp_plan_subline', 'label' => 'Subtexto bajo beneficio', 'name' => 'plan_subline', 'type' => 'text' ),
                                    ),
                                ),
                            ),
                        ),
                        'layout_mp_prep_info' => array(
                            'key'        => 'layout_mp_prep_info',
                            'name'       => 'info',
                            'label'      => 'Sección informativa (What is the SAT/ACT?)',
                            'display'    => 'block',
                            'sub_fields' => array(
                                array( 'key' => 'field_mp_info_title', 'label' => 'Título', 'name' => 'info_title', 'type' => 'text', 'default_value' => 'What is the SAT?' ),
                                array(
                                    'key'           => 'field_mp_info_lead',
                                    'label'         => 'Párrafo intro (ACT)',
                                    'name'          => 'info_lead',
                                    'type'          => 'textarea',
                                    'rows'          => 4,
                                    'instructions'  => 'ACT: texto destacado bajo el título. Ej: "The ACT is one of the two major college admissions exams..."',
                                ),
                                array(
                                    'key'          => 'field_mp_info_items',
                                    'label'        => 'Ítems con icono (ACT)',
                                    'name'         => 'info_items',
                                    'type'         => 'repeater',
                                    'layout'       => 'block',
                                    'min'          => 0,
                                    'max'          => 4,
                                    'button_label' => 'Agregar ítem con icono',
                                    'instructions' => 'ACT: agrega 2 ítems. Sube icono verde PNG transparente + texto. El círculo negro lo pone el CSS.',
                                    'sub_fields'   => array(
                                        array(
                                            'key'           => 'field_mp_info_item_icon',
                                            'label'         => 'Icono (imagen)',
                                            'name'          => 'item_icon',
                                            'type'          => 'image',
                                            'return_format' => 'array',
                                            'preview_size'  => 'thumbnail',
                                            'mime_types'    => 'png,jpg,jpeg,webp,svg',
                                        ),
                                        array(
                                            'key'          => 'field_mp_info_item_text',
                                            'label'        => 'Texto del ítem',
                                            'name'         => 'item_text',
                                            'type'         => 'textarea',
                                            'rows'         => 4,
                                        ),
                                    ),
                                ),
                                array(
                                    'key'           => 'field_mp_info_image',
                                    'label'         => 'Imagen principal (derecha)',
                                    'name'          => 'info_image',
                                    'type'          => 'image',
                                    'return_format' => 'array',
                                    'preview_size'  => 'medium',
                                ),
                                array( 'key' => 'field_mp_info_text', 'label' => 'Párrafo secundario (solo SAT)', 'name' => 'info_text', 'type' => 'textarea', 'rows' => 4 ),
                                array( 'key' => 'field_mp_info_highlight', 'label' => 'Texto en negrita final (solo SAT)', 'name' => 'info_highlight', 'type' => 'text' ),
                            ),
                        ),
                        'layout_mp_prep_steps' => array(
                            'key'        => 'layout_mp_prep_steps',
                            'name'       => 'steps',
                            'label'      => 'Slider pasos',
                            'display'    => 'block',
                            'sub_fields' => array(
                                array( 'key' => 'field_mp_steps_title', 'label' => 'Título', 'name' => 'steps_title', 'type' => 'text', 'default_value' => 'Get your teen prepared today!' ),
                                array(
                                    'key'          => 'field_mp_steps_items',
                                    'label'        => 'Pasos',
                                    'name'         => 'steps_items',
                                    'type'         => 'repeater',
                                    'layout'       => 'block',
                                    'button_label' => 'Agregar paso',
                                    'sub_fields'   => array(
                                        array( 'key' => 'field_mp_step_number', 'label' => 'Número', 'name' => 'step_number', 'type' => 'text' ),
                                        array( 'key' => 'field_mp_step_title', 'label' => 'Título', 'name' => 'step_title', 'type' => 'text' ),
                                        array( 'key' => 'field_mp_step_text', 'label' => 'Texto', 'name' => 'step_text', 'type' => 'textarea', 'rows' => 3 ),
                                        array(
                                            'key'          => 'field_mp_step_items',
                                            'label'        => 'Lista',
                                            'name'         => 'step_items',
                                            'type'         => 'repeater',
                                            'layout'       => 'table',
                                            'button_label' => 'Agregar ítem',
                                            'sub_fields'   => array(
                                                array( 'key' => 'field_mp_step_item_text', 'label' => 'Texto', 'name' => 'item_text', 'type' => 'text' ),
                                            ),
                                        ),
                                        array( 'key' => 'field_mp_step_footer', 'label' => 'Texto final', 'name' => 'step_footer', 'type' => 'text' ),
                                    ),
                                ),
                            ),
                        ),
                        'layout_mp_prep_ixl' => array(
                            'key'        => 'layout_mp_prep_ixl',
                            'name'       => 'ixl',
                            'label'      => 'IXL',
                            'display'    => 'block',
                            'sub_fields' => array(
                                array( 'key' => 'field_mp_ixl_tag', 'label' => 'Tag', 'name' => 'ixl_tag', 'type' => 'text', 'default_value' => 'Learning tailored for you' ),
                                array( 'key' => 'field_mp_ixl_title', 'label' => 'Título', 'name' => 'ixl_title', 'type' => 'text', 'default_value' => 'IXL' ),
                                array( 'key' => 'field_mp_ixl_text', 'label' => 'Descripción', 'name' => 'ixl_text', 'type' => 'textarea', 'rows' => 5 ),
                                array( 'key' => 'field_mp_ixl_highlight', 'label' => 'Texto destacado', 'name' => 'ixl_highlight', 'type' => 'text' ),
                                array( 'key' => 'field_mp_ixl_footnote', 'label' => 'Nota al pie', 'name' => 'ixl_footnote', 'type' => 'textarea', 'rows' => 2 ),
                                array( 'key' => 'field_mp_ixl_image', 'label' => 'Imagen', 'name' => 'ixl_image', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'medium' ),
                            ),
                        ),
                        'layout_mp_prep_cta' => array(
                            'key'        => 'layout_mp_prep_cta',
                            'name'       => 'cta',
                            'label'      => 'CTA final',
                            'display'    => 'block',
                            'sub_fields' => array(
                                array( 'key' => 'field_mp_cta_subtitle', 'label' => 'Subtítulo', 'name' => 'cta_subtitle', 'type' => 'text', 'default_value' => 'Ready to boost your score?' ),
                                array( 'key' => 'field_mp_cta_title', 'label' => 'Título', 'name' => 'cta_title', 'type' => 'text' ),
                                array( 'key' => 'field_mp_cta_btn_text', 'label' => 'Texto botón', 'name' => 'cta_btn_text', 'type' => 'text' ),
                                array( 'key' => 'field_mp_cta_btn_url', 'label' => 'URL botón', 'name' => 'cta_btn_url', 'type' => 'text', 'default_value' => '#block_precios' ),
                                array( 'key' => 'field_mp_cta_bg_class', 'label' => 'Clase CSS fondo', 'name' => 'cta_bg_class', 'type' => 'text', 'default_value' => 'bg-22' ),
                            ),
                        ),
                    ),
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param'    => 'page_template',
                        'operator' => '==',
                        'value'    => 'template-prep-courses.php',
                    ),
                ),
                array(
                    array(
                        'param'    => 'page',
                        'operator' => '==',
                        'value'    => '571',
                    ),
                ),
                array(
                    array(
                        'param'    => 'page',
                        'operator' => '==',
                        'value'    => '572',
                    ),
                ),
            ),
            'position'              => 'acf_after_title',
            'style'                 => 'default',
            'label_placement'       => 'top',
            'instruction_placement' => 'label',
            'show_in_rest'          => 1,
            'active'                => true,
        );
}

function mp_prep_delete_prep_acf_field_groups() {
    if ( ! function_exists( 'acf_delete_field_group' ) ) {
        return;
    }

    $posts = get_posts(
        array(
            'post_type'      => 'acf-field-group',
            'posts_per_page' => -1,
            'post_status'    => 'any',
            'name'           => 'group_mp_prep_courses',
        )
    );

    foreach ( $posts as $post ) {
        acf_delete_field_group( $post->ID );
    }
}

function mp_prep_purge_prep_acf_fields() {
    $fields = get_posts(
        array(
            'post_type'      => 'acf-field',
            'posts_per_page' => -1,
            'post_status'    => 'any',
        )
    );

    foreach ( $fields as $field_post ) {
        if ( 0 === strpos( $field_post->post_name, 'field_mp_' ) ) {
            wp_delete_post( $field_post->ID, true );
        }
    }
}

function mp_prep_install_acf_field_group() {
    if ( ! function_exists( 'acf_import_field_group' ) ) {
        return;
    }

    $version       = '1.6.3';
    $saved_version = get_option( 'mp_prep_acf_version', '' );

    if ( $saved_version === $version ) {
        return;
    }

    mp_prep_delete_prep_acf_field_groups();
    mp_prep_purge_prep_acf_fields();
    acf_import_field_group( mp_prep_get_field_group_definition() );
    update_option( 'mp_prep_acf_version', $version );
}
add_action( 'acf/init', 'mp_prep_install_acf_field_group', 5 );

function mp_prep_update_hero_block( $post_id, $exam = 'sat' ) {
    if ( ! function_exists( 'get_field' ) || ! function_exists( 'update_sub_field' ) ) {
        return;
    }

    $defaults = mp_prep_default_blocks( $exam )[0];

    update_sub_field( array( 'prep_blocks', 1, 'hero_tag' ), $defaults['hero_tag'], $post_id );
    update_sub_field( array( 'prep_blocks', 1, 'hero_title' ), $defaults['hero_title'], $post_id );
    update_sub_field( array( 'prep_blocks', 1, 'hero_highlight' ), $defaults['hero_highlight'], $post_id );
    update_sub_field( array( 'prep_blocks', 1, 'hero_text' ), $defaults['hero_text'], $post_id );
}

function mp_prep_maybe_refresh_hero_content() {
    if ( get_option( 'mp_prep_hero_refresh_v1_1' ) ) {
        return;
    }

    $sat = get_page_by_path( 'sat-prep-courses' );
    $act = get_page_by_path( 'act-prep-courses' );

    if ( $sat ) {
        mp_prep_update_hero_block( $sat->ID, 'sat' );
    }

    if ( $act ) {
        mp_prep_update_hero_block( $act->ID, 'act' );
    }

    update_option( 'mp_prep_hero_refresh_v1_1', 1 );
}
add_action( 'init', 'mp_prep_maybe_refresh_hero_content', 25 );

function mp_prep_maybe_refresh_pricing_content() {
    if ( get_option( 'mp_prep_pricing_refresh_v1_2' ) ) {
        return;
    }

    $pages = array(
        'sat-prep-courses' => 'sat',
        'act-prep-courses' => 'act',
    );

    foreach ( $pages as $slug => $exam ) {
        $page = get_page_by_path( $slug );
        if ( ! $page ) {
            continue;
        }

        $blocks = get_field( 'prep_blocks', $page->ID );
        if ( empty( $blocks ) ) {
            continue;
        }

        foreach ( $blocks as $index => $block ) {
            if ( ( $block['acf_fc_layout'] ?? '' ) !== 'pricing' ) {
                continue;
            }

            $blocks[ $index ]['pricing_title']    = ( 'sat' === $exam ) ? 'SAT Prep:' : 'ACT Prep:';
            $blocks[ $index ]['pricing_plans']    = mp_prep_default_plans( $exam );
            $blocks[ $index ]['pricing_bg_class'] = '';
            break;
        }

        update_field( 'prep_blocks', $blocks, $page->ID );
    }

    update_option( 'mp_prep_pricing_refresh_v1_2', 1 );
}
add_action( 'init', 'mp_prep_maybe_refresh_pricing_content', 26 );

function mp_prep_maybe_refresh_premium_badge() {
    if ( get_option( 'mp_prep_premium_badge_v1_3' ) ) {
        return;
    }

    $page = get_page_by_path( 'sat-prep-courses' );
    if ( ! $page || ! function_exists( 'get_field' ) || ! function_exists( 'update_field' ) ) {
        return;
    }

    $blocks = get_field( 'prep_blocks', $page->ID );
    if ( empty( $blocks ) ) {
        return;
    }

    foreach ( $blocks as $index => $block ) {
        if ( ( $block['acf_fc_layout'] ?? '' ) !== 'pricing' || empty( $block['pricing_plans'] ) ) {
            continue;
        }

        foreach ( $block['pricing_plans'] as $plan_index => $plan ) {
            if ( empty( $plan['plan_is_premium'] ) ) {
                continue;
            }

            $blocks[ $index ]['pricing_plans'][ $plan_index ]['plan_show_new_badge'] = 1;
            $blocks[ $index ]['pricing_plans'][ $plan_index ]['plan_new_label']      = 'NEW';
            $blocks[ $index ]['pricing_plans'][ $plan_index ]['plan_new_sub']        = 'Now includes';
            $blocks[ $index ]['pricing_plans'][ $plan_index ]['plan_new_highlight'] = 'Reading & Writing Prep';
        }

        update_field( 'prep_blocks', $blocks, $page->ID );
        break;
    }

    update_option( 'mp_prep_premium_badge_v1_3', 1 );
}
add_action( 'init', 'mp_prep_maybe_refresh_premium_badge', 27 );

function mp_prep_maybe_refresh_info_content() {
    if ( get_option( 'mp_prep_info_refresh_v1_3' ) ) {
        return;
    }

    $pages = array(
        'sat-prep-courses' => 'sat',
        'act-prep-courses' => 'act',
    );

    foreach ( $pages as $slug => $exam ) {
        $page = get_page_by_path( $slug );
        if ( ! $page || ! function_exists( 'get_field' ) || ! function_exists( 'update_field' ) ) {
            continue;
        }

        $blocks = get_field( 'prep_blocks', $page->ID );
        if ( empty( $blocks ) ) {
            continue;
        }

        $defaults = mp_prep_default_info( $exam );

        foreach ( $blocks as $index => $block ) {
            if ( ( $block['acf_fc_layout'] ?? '' ) !== 'info' ) {
                continue;
            }

            $blocks[ $index ] = array_merge( $block, $defaults );
            break;
        }

        update_field( 'prep_blocks', $blocks, $page->ID );
    }

    update_option( 'mp_prep_info_refresh_v1_3', 1 );
}
add_action( 'init', 'mp_prep_maybe_refresh_info_content', 28 );

function mp_prep_maybe_refresh_steps_content() {
    if ( get_option( 'mp_prep_steps_refresh_v1_4' ) ) {
        return;
    }

    $pages = array(
        'sat-prep-courses' => 'sat',
        'act-prep-courses' => 'act',
    );

    foreach ( $pages as $slug => $exam ) {
        $page = get_page_by_path( $slug );
        if ( ! $page || ! function_exists( 'get_field' ) || ! function_exists( 'update_field' ) ) {
            continue;
        }

        $blocks = get_field( 'prep_blocks', $page->ID );
        if ( empty( $blocks ) ) {
            continue;
        }

        foreach ( $blocks as $index => $block ) {
            if ( ( $block['acf_fc_layout'] ?? '' ) !== 'steps' ) {
                continue;
            }

            $blocks[ $index ]['steps_title'] = ( 'sat' === $exam )
                ? 'Get your teen prepared today!'
                : 'Get Prepared Today!';
            $blocks[ $index ]['steps_items'] = mp_prep_default_steps( $exam );
            break;
        }

        update_field( 'prep_blocks', $blocks, $page->ID );
    }

    update_option( 'mp_prep_steps_refresh_v1_4', 1 );
}
add_action( 'init', 'mp_prep_maybe_refresh_steps_content', 29 );

function mp_prep_maybe_refresh_ixl_content() {
    if ( get_option( 'mp_prep_ixl_refresh_v1_4' ) ) {
        return;
    }

    foreach ( array( 'sat-prep-courses', 'act-prep-courses' ) as $slug ) {
        $page = get_page_by_path( $slug );
        if ( ! $page || ! function_exists( 'get_field' ) || ! function_exists( 'update_field' ) ) {
            continue;
        }

        $blocks = get_field( 'prep_blocks', $page->ID );
        if ( empty( $blocks ) ) {
            continue;
        }

        $defaults = mp_prep_default_ixl();

        foreach ( $blocks as $index => $block ) {
            if ( ( $block['acf_fc_layout'] ?? '' ) !== 'ixl' ) {
                continue;
            }

            $blocks[ $index ] = array_merge( $block, $defaults );
            break;
        }

        update_field( 'prep_blocks', $blocks, $page->ID );
    }

    update_option( 'mp_prep_ixl_refresh_v1_4', 1 );
}
add_action( 'init', 'mp_prep_maybe_refresh_ixl_content', 30 );

function mp_prep_maybe_refresh_act_ixl_content() {
    if ( get_option( 'mp_prep_act_ixl_refresh_v1_9' ) ) {
        return;
    }

    $page = get_page_by_path( 'act-prep-courses' );
    if ( ! $page || ! function_exists( 'get_field' ) || ! function_exists( 'update_field' ) ) {
        return;
    }

    $blocks = get_field( 'prep_blocks', $page->ID );
    if ( empty( $blocks ) ) {
        return;
    }

    $defaults = mp_prep_default_ixl( 'act' );

    foreach ( $blocks as $index => $block ) {
        if ( ( $block['acf_fc_layout'] ?? '' ) !== 'ixl' ) {
            continue;
        }

        $blocks[ $index ] = array_merge( $block, $defaults );
        $blocks[ $index ]['ixl_footnote'] = '';
        break;
    }

    update_field( 'prep_blocks', $blocks, $page->ID );
    update_option( 'mp_prep_act_ixl_refresh_v1_9', 1 );
}
add_action( 'init', 'mp_prep_maybe_refresh_act_ixl_content', 31 );

function mp_prep_maybe_refresh_announce_assets() {
    if ( get_option( 'mp_prep_announce_assets_v1_5' ) ) {
        return;
    }

    $page = get_page_by_path( 'sat-prep-courses' );
    if ( ! $page || ! function_exists( 'get_field' ) || ! function_exists( 'update_field' ) ) {
        return;
    }

    $blocks = get_field( 'prep_blocks', $page->ID );
    if ( empty( $blocks ) ) {
        return;
    }

    $defaults = mp_prep_default_announce();

    foreach ( $blocks as $index => $block ) {
        if ( ( $block['acf_fc_layout'] ?? '' ) !== 'announcement_new' ) {
            continue;
        }

        $blocks[ $index ] = array_merge( $block, $defaults );
        break;
    }

    update_field( 'prep_blocks', $blocks, $page->ID );
    update_option( 'mp_prep_announce_assets_v1_5', 1 );
}
add_action( 'init', 'mp_prep_maybe_refresh_announce_assets', 31 );

function mp_prep_maybe_refresh_act_hero_content() {
    if ( get_option( 'mp_prep_act_hero_refresh_v1_8' ) ) {
        return;
    }

    $page = get_page_by_path( 'act-prep-courses' );
    if ( ! $page || ! function_exists( 'get_field' ) || ! function_exists( 'update_field' ) ) {
        return;
    }

    $blocks = get_field( 'prep_blocks', $page->ID );
    if ( empty( $blocks ) ) {
        return;
    }

    $defaults = mp_prep_default_blocks( 'act' )[0];

    foreach ( $blocks as $index => $block ) {
        if ( ( $block['acf_fc_layout'] ?? '' ) !== 'hero' ) {
            continue;
        }

        $blocks[ $index ] = array_merge( $block, $defaults );
        break;
    }

    update_field( 'prep_blocks', $blocks, $page->ID );
    update_option( 'mp_prep_act_hero_refresh_v1_8', 1 );
}
add_action( 'init', 'mp_prep_maybe_refresh_act_hero_content', 32 );

function mp_prep_maybe_refresh_act_pricing_content() {
    if ( get_option( 'mp_prep_act_pricing_refresh_v1_8' ) ) {
        return;
    }

    $page = get_page_by_path( 'act-prep-courses' );
    if ( ! $page || ! function_exists( 'get_field' ) || ! function_exists( 'update_field' ) ) {
        return;
    }

    $blocks = get_field( 'prep_blocks', $page->ID );
    if ( empty( $blocks ) ) {
        return;
    }

    foreach ( $blocks as $index => $block ) {
        if ( ( $block['acf_fc_layout'] ?? '' ) !== 'pricing' ) {
            continue;
        }

        $blocks[ $index ]['pricing_title'] = 'ACT Prep:';
        $blocks[ $index ]['pricing_plans'] = mp_prep_default_plans( 'act' );
        break;
    }

    update_field( 'prep_blocks', $blocks, $page->ID );
    update_option( 'mp_prep_act_pricing_refresh_v1_8', 1 );
}
add_action( 'init', 'mp_prep_maybe_refresh_act_pricing_content', 33 );

function mp_prep_maybe_refresh_act_info_content() {
    if ( get_option( 'mp_prep_act_info_refresh_v1_8_2' ) ) {
        return;
    }

    $page = get_page_by_path( 'act-prep-courses' );
    if ( ! $page || ! function_exists( 'get_field' ) || ! function_exists( 'update_field' ) ) {
        return;
    }

    $blocks = get_field( 'prep_blocks', $page->ID );
    if ( empty( $blocks ) ) {
        return;
    }

    $defaults = mp_prep_default_info( 'act' );

    foreach ( $blocks as $index => $block ) {
        if ( ( $block['acf_fc_layout'] ?? '' ) !== 'info' ) {
            continue;
        }

        $saved_image = $block['info_image'] ?? '';
        $blocks[ $index ] = array_merge(
            $defaults,
            array(
                'acf_fc_layout' => 'info',
                'info_image'    => $saved_image,
            )
        );
        break;
    }

    update_field( 'prep_blocks', $blocks, $page->ID );
    update_option( 'mp_prep_act_info_refresh_v1_8_2', 1 );
}
add_action( 'init', 'mp_prep_maybe_refresh_act_info_content', 34 );

function mp_prep_maybe_refresh_sat_info_cleanup() {
    if ( get_option( 'mp_prep_sat_info_cleanup_v1_8_6' ) ) {
        return;
    }

    $page = get_page_by_path( 'sat-prep-courses' );
    if ( ! $page || ! function_exists( 'get_field' ) || ! function_exists( 'update_field' ) ) {
        return;
    }

    $blocks = get_field( 'prep_blocks', $page->ID );
    if ( empty( $blocks ) ) {
        return;
    }

    $defaults = mp_prep_default_info( 'sat' );

    foreach ( $blocks as $index => $block ) {
        if ( ( $block['acf_fc_layout'] ?? '' ) !== 'info' ) {
            continue;
        }

        $saved_image = $block['info_image'] ?? '';
        $blocks[ $index ] = array_merge(
            $defaults,
            array(
                'acf_fc_layout' => 'info',
                'info_image'    => $saved_image,
                'info_items'    => array(),
            )
        );
        break;
    }

    update_field( 'prep_blocks', $blocks, $page->ID );
    update_option( 'mp_prep_sat_info_cleanup_v1_8_6', 1 );
}
add_action( 'init', 'mp_prep_maybe_refresh_sat_info_cleanup', 35 );

function mp_prep_fixup_info_items_from_meta( $post_id ) {
    if ( ! function_exists( 'get_field' ) || ! function_exists( 'update_field' ) ) {
        return false;
    }

    $blocks = get_field( 'prep_blocks', $post_id );
    if ( empty( $blocks ) ) {
        return false;
    }

    $changed = false;

    foreach ( $blocks as $block_index => $block ) {
        if ( ( $block['acf_fc_layout'] ?? '' ) !== 'info' ) {
            continue;
        }

        $row_count = (int) get_post_meta( $post_id, "prep_blocks_{$block_index}_info_items", true );
        if ( $row_count < 1 ) {
            continue;
        }

        $items = array();

        for ( $i = 0; $i < $row_count; $i++ ) {
            $text = get_post_meta( $post_id, "prep_blocks_{$block_index}_info_items_{$i}_item_text", true );
            if ( ! $text ) {
                $text = get_post_meta( $post_id, "prep_blocks_{$block_index}_info_items_{$i}_info_text", true );
            }

            $icon_id = get_post_meta( $post_id, "prep_blocks_{$block_index}_info_items_{$i}_item_icon", true );

            if ( ! $text && ! $icon_id ) {
                continue;
            }

            $items[] = array(
                'item_icon' => $icon_id ? (int) $icon_id : '',
                'item_text' => $text,
            );

            delete_post_meta( $post_id, "prep_blocks_{$block_index}_info_items_{$i}_info_icon" );
            delete_post_meta( $post_id, "_prep_blocks_{$block_index}_info_items_{$i}_info_icon" );
            delete_post_meta( $post_id, "prep_blocks_{$block_index}_info_items_{$i}_info_text" );
            delete_post_meta( $post_id, "_prep_blocks_{$block_index}_info_items_{$i}_info_text" );
        }

        if ( ! empty( $items ) ) {
            $blocks[ $block_index ]['info_items'] = $items;
            $changed = true;
        }

        break;
    }

    if ( $changed ) {
        update_field( 'prep_blocks', $blocks, $post_id );
    }

    return $changed;
}

function mp_prep_maybe_fixup_info_items_meta() {
    if ( get_option( 'mp_prep_info_items_fixup_v1_8_8' ) ) {
        return;
    }

    foreach ( array( 571, 572 ) as $post_id ) {
        mp_prep_fixup_info_items_from_meta( $post_id );
    }

    update_option( 'mp_prep_info_items_fixup_v1_8_8', 1 );
}
add_action( 'init', 'mp_prep_maybe_fixup_info_items_meta', 36 );

function mp_prep_admin_edit_notice() {
    if ( ! is_admin() ) {
        return;
    }

    $screen = function_exists( 'get_current_screen' ) ? get_current_screen() : null;
    if ( ! $screen || 'page' !== $screen->id ) {
        return;
    }

    global $post;
    if ( ! $post || 'page' !== $post->post_type ) {
        return;
    }

    if ( 'act-sat-prep' === $post->post_name ) {
        echo '<div class="notice notice-warning"><p><strong>Nota:</strong> Esta página usa la plantilla antigua sin bloques ACF. Para editar SAT/ACT con campos administrables, usa las páginas <a href="' . esc_url( admin_url( 'post.php?post=571&action=edit' ) ) . '">SAT Prep Courses</a> o <a href="' . esc_url( admin_url( 'post.php?post=572&action=edit' ) ) . '">ACT Prep Courses</a>.</p></div>';
        return;
    }

    if ( in_array( $post->post_name, array( 'sat-prep-courses', 'act-prep-courses' ), true ) ) {
        $template = get_page_template_slug( $post->ID );
        if ( 'template-prep-courses.php' !== $template ) {
            echo '<div class="notice notice-error"><p>Selecciona la plantilla <strong>Prep Courses</strong> en Atributos de página y guarda para ver los campos ACF.</p></div>';
            return;
        }

        echo '<div class="notice notice-info"><p>Los bloques editables están en <strong>Prep Courses — Bloques</strong>, debajo del título. Haz clic en cada bloque para expandirlo.</p></div>';

        if ( 'act-prep-courses' === $post->post_name ) {
            echo '<div class="notice notice-info"><p><strong>ACT — bloque «Sección informativa»:</strong> expande ese bloque para editar <em>Párrafo intro (ACT)</em>, <em>Ítems con icono (ACT)</em> (sube icono + texto en cada fila) e <em>Imagen principal</em>.</p></div>';
        }
    }
}
add_action( 'admin_notices', 'mp_prep_admin_edit_notice' );

function mp_prep_enqueue_assets() {
    if ( ! is_page_template( 'template-prep-courses.php' ) ) {
        return;
    }

    wp_enqueue_style(
        'mp-prep-courses',
        get_template_directory_uri() . '/assets/css/prep-courses.css',
        array(),
        '1.9.11'
    );
}
add_action( 'wp_enqueue_scripts', 'mp_prep_enqueue_assets', 25 );

function mp_prep_enqueue_programs_pricing_premium_card() {
    $templates = array(
        'template-Programs-Pricing.php',
        'template-Programs-Pricing-prueba2.php',
        'template-Programs-Pricing-3.php',
        'template-Programs-Pricing-Boxing.php',
        'template-Programs-PricingBlackFriday.php',
        'template-act-sat.php',
    );

    $load = false;
    foreach ( $templates as $template ) {
        if ( is_page_template( $template ) ) {
            $load = true;
            break;
        }
    }

    if ( ! $load ) {
        return;
    }

    wp_enqueue_style(
        'mp-prep-programs-pricing-premium',
        get_template_directory_uri() . '/assets/css/programs-pricing-premium-card.css',
        array(),
        '1.0.8'
    );
}
add_action( 'wp_enqueue_scripts', 'mp_prep_enqueue_programs_pricing_premium_card', 25 );

function mp_prep_ensure_pages() {
    if ( ! function_exists( 'update_field' ) ) {
        return;
    }

    $pages = array(
        'sat-prep-courses' => array(
            'title' => 'SAT Prep Courses',
            'exam'  => 'sat',
        ),
        'act-prep-courses' => array(
            'title' => 'ACT Prep Courses',
            'exam'  => 'act',
        ),
    );

    foreach ( $pages as $slug => $data ) {
        $existing = get_page_by_path( $slug );
        if ( $existing ) {
            $post_id = $existing->ID;
            if ( get_page_template_slug( $post_id ) !== 'template-prep-courses.php' ) {
                update_post_meta( $post_id, '_wp_page_template', 'template-prep-courses.php' );
            }
        } else {
            $post_id = wp_insert_post(
                array(
                    'post_title'   => $data['title'],
                    'post_name'    => $slug,
                    'post_status'  => 'publish',
                    'post_type'    => 'page',
                    'post_content' => '',
                )
            );

            if ( is_wp_error( $post_id ) ) {
                continue;
            }

            update_post_meta( $post_id, '_wp_page_template', 'template-prep-courses.php' );
        }

        mp_prep_seed_page_blocks( $post_id, $data['exam'] );
    }
}
add_action( 'init', 'mp_prep_ensure_pages', 20 );
