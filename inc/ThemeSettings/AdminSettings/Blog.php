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
            'id'          => 'blogs',
            'title' => __('Blogs', 'nautzick'),
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
            // [
            //     'id'       => 'awe_tour_page_row_ads',
            //     'label'    => __('Banner Link', 'awetour'),
            //     'desc'     => ' ',
            //     'type'     => 'list-item',
            //     'section'  => 'blogs',
            //     'settings' => [
            //         [
            //             'id'      => 'desc',
            //             'label'   => __('Description', 'awetour'),
            //             'desc'    => '',
            //             'type'    => 'text',
            //         ],
            //         [
            //             'id'      => 'labelBtn',
            //             'label'   => __('Label', 'awetour'),
            //             'type'    => 'text',
            //             'std'     => 'Read now'
            //         ],
            //         [
            //             'id'      => 'btnLink',
            //             'label'   => __('Link', 'awetour'),
            //             'type'    => 'text',
            //             'std'     => '#'
            //         ],
            //         [
            //             'id'      => 'bg',
            //             'label'   => __('Background', 'awetour'),
            //             'type'    => 'upload',
            //         ],
            //     ]
            // ]
        ];
        $this->setListSettings($setting);
    }
}
