<?php

namespace MyPlugin\ThemeSettings\AdminSettings;

use MyPlugin\ThemeSettings\SettingFactory;

/**
 * @author lookawesome team
 * @version 1.0
 * @package AdminSettings
 * 
 * Setting General theme setting for theme bookawesome
 */

class Blog extends SettingFactory
{

    public function section()
    {
        return array(
            'id'          => 'blog_setting',
            'title' => __('Blog', 'nautzick'),
        );
    }

    public function settings()
    {
        $this->Blog();
        return $this->fieldsSettings;
    }

    public function Blog() {
        $setting = [
            [
                'label'       => __( 'General', 'nautzick' ),
                'id'          => 'general',
                'type'        => 'tab',
                'section'     => 'blog_setting',
            ],
            [
                'id'      => 'blog_bg',
                'label'   => __('Background', 'nautzick'),
                'type'    => 'upload',
                'section' => 'blog_setting',
            ],
            [
                'id'      => 'blog_header_title_bg',
                'label'   => __( 'Header Title Background', 'nautzick' ),
                'type'    => 'text',
                'section' => 'blog_setting',
            ],
            [
                'id'      => 'blog_header_sub_title_bg',
                'label'   => __( 'Sub Title Background', 'nautzick' ),
                'type'    => 'text',
                'section' => 'blog_setting',
            ],
        ];
        $this->setListSettings($setting);
    }
}
