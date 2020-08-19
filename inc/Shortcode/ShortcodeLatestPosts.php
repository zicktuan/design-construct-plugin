<?php
namespace MyPlugin\Shortcode;

class ShortcodeLatestPosts extends AbstractShortcode
{
    public function __construct($self = null) {
        $this->parent = $self;
        add_shortcode($this->get_name(), array($this, 'render'));
        vc_lean_map($this->get_name(), array($this, 'map'));
    }

    /**
     * Get ShortCode name.
     *
     * @return string
     */
    public function get_name() {
        return 'design_construct_post';
    }

    /**
     * ShortCode handler.
     *
     * @param array $atts ShortCode attributes.
     *
     * @return string ShortCode output.
     */
    public function render($atts) {
        $atts = vc_map_get_attributes($this->get_name(), $atts);
        $atts = array_map('trim', $atts);

        $listItems = vc_param_group_parse_atts( $atts['items'] );

        ob_start();
        include $this->parent->locateTemplate('shortcode-latest-posts.tpl.php');
        return ob_get_clean();
    }

    /**
     * Get shortCode settings.
     *
     * @return array
     *
     * @see vc_lean_map()
     */
    public function map() {
        $argsCat = [];
        $categories = get_categories();
        if( !empty($categories) ) {
            foreach($categories as $category ) {
                $cats = [];
                $cats['label'] = $category->name;
                $cats['id'] = $category->term_id;
                $argsCat[] = $cats;
            }
        }

        $params = array(
            array(
                "type" => "textfield",
                "heading" => __( "Title", "bookawesome" ),
                "param_name" => "awe_post_title",
            ),
            array(
                "type" => "textfield",
                "heading" => __( "Description", "bookawesome" ),
                "param_name" => "awe_post_desc",
            ),
            array(
                "type" => "dropdown",
                "heading" => __( "List Category", "bookawesome" ),
                "param_name" => "category_latest_posts",
                "value" => $argsCat,
            ),
            array(
                "type" => "textfield",
                "heading" => __( "Number Post", "bookawesome" ),
                "param_name" => "number_posts",
                "value" => 3,
            ),
        );

        return array(
            'name'        => esc_html__('Latest Posts', 'bookawesome'),
            'description' => esc_html__('Latest Posts', 'bookawesome'),
            'category'    => $this->get_category(),
            'icon'        => $this->get_icon(),
            'params'      => $params
        );
    }
}
