<?php

    namespace MyPlugin\PostType\MetaBox\Post;

    use MyPlugin\PostType\MetaBox\AbstractMetaBox;

    class PostMetaBox extends AbstractMetaBox
    {
        protected $useOptionTree = true;

        public function __construct($objectPosttype)
        {
            parent::__construct($objectPosttype);
        }

        public function register()
        {

        }

        public function output($post)
        {
            $galleryMetaBox = array(
                'id'       => 'bas_post_gallery',
                'title'    => __('Post Gallery', 'bookawesome'),
                'pages'    => array('post'),
                'context'  => 'side',
                'priority' => 'low',
                'fields'   => array(
                    array(
                        'id'   => 'bas_post_gallery',
                        'type' => 'gallery',
                    ),
                )
            );
//            $informationMetaBox = [
//                'id'       => 'awe_post_meta_box',
//                'title'    => __('Post Meta Box', 'nautzick'),
//                'desc'     => '',
//                'pages'    => array('post'),
//                'fields'   => [
//                    [
//                        'label' => __( 'General', 'nautzick' ),
//                        'id'    => 'general',
//                        'type'  => 'tab'
//                    ],
//                    [
//                        'label' => __('Id video', 'nautzick'),
//                        'id'    => 'awe_id_video',
//                        'type'  => 'text',
//                    ],
//                ]
//            ];

            /**
             * Register our meta boxes using the
             * ot_register_meta_box() function.
             */

//            ot_register_meta_box($informationMetaBox);
            ot_register_meta_box($galleryMetaBox);
        }

        public function save($post_id)
        {

        }
    }
