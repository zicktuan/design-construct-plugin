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
                'label'       => __( 'General', 'bookawesome' ),
                'id'          => 'general',
                'type'        => 'tab',
                'section'     => 'blog_setting',
            ],
            [
                'label'   => __('Receiver', 'awetour'),
                'id'      => 'listMail',
                'type'    => 'tab',
                'section' => 'blogs',
            ],
            [
                'id'      => 'bg',
                'label'   => __('Background', 'awetour'),
                'type'    => 'upload',
                'section' => 'blogs',
            ],
        ];
        $this->setListSettings($setting);
    }
}
