<?php

    namespace socialgrace\Widgets;
    
    use Elementor\Widget_Base;
    use Elementor\Controls_Manager;
    
    if (!defined('ABSPATH')) exit; // Exit if accessed directly
    
    class FeatureImage extends Widget_Base {
        
        public function get_name() {
            
            return 'portfolio feature';
        }
        
        public function get_title() {
            
            return 'Portfolio Feature';
        }
        
        public function get_icon() {
            
            return 'fab fa-amilia';
        }
        
        public function get_categories() {
            
            return ['basic'];
        }
        
        protected function _register_controls() {
            
            $this->start_controls_section(
                'section_content',
                [
                    'label' => 'Settings',    
                ]
            );
            
            // Add content here
            
            $this->add_control(
                'feature_image',
                [
                    'label' => 'Feature Image',
                    'type' => \Elementor\Controls_Manager::MEDIA,
                    'default' => [ 'url' => 'https://hadley.work/test/wp-content/uploads/2020/12/couples-cat.jpg'],
                ]
            );
            
            $this->add_control(
                'btn_text',
                [
                    'label' => 'Button Text',
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => 'My Example Heading'
                ]
            );
            
            $this->add_control(
                'btn_link',
                [
                    'label' => 'Button Link',
                    'type' => \Elementor\Controls_Manager::URL,
                    'default' => [ 'url' => 'https://hadley.work/test/work'],
                ]
            );
            
            
            $this->end_controls_section();
        }
        
        
        // PHP Render
        protected function render() {
            
            $settings = $this->get_settings_for_display();
            ?>

            <div class="round-parent">
                <div class="round-img" style="background-image: url('<?php echo $settings['feature_image']['url'] ?>')"></div>
                <button><a href="<?php echo $settings['btn_link']['url'] ?>"><?php echo $settings['btn_text'] ?></a></button>
            </div>
            
            <?php
        }
        
    }


?>