<?php

class Browter_Widget_Quiz extends \Elementor\Widget_Base {

    public function get_name() {
        return 'Browter Quiz';
    }

    public function get_title() {
        return 'Browter Quiz/MCQ';
    }

    public function get_icon() {
        return 'eicon-form-horizontal';
    }

    public function get_categories() {
        return ['basic'];
    }

    protected function _register_controls() {
        $this->start_controls_section(
            'quiz_section',
            [
                'label' => __('Quiz Info', 'browter_quiz_addon'),
            ]
        );


        $this->add_control(
            'question',
            [
                'label' => __('Question', 'browter_quiz_addon'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('What is the capital of France?', 'browter_quiz_addon'),
            ]
        );

        $this->add_control(
            'question_subtitle',
            [
                'label' => __('Sub Title', 'browter_quiz_addon'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('Question 1', 'browter_quiz_addon'),
            ]
        );

        $this->end_controls_section();


        $this->start_controls_section(
            'answer_section',
            [
                'label' => __( 'Answers', 'browter_quiz_addon' ),
            ]
        );
        

        $this->add_control(
            'answer1',
            [
                'label' => __('Answer One', 'browter_quiz_addon'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('Rome', 'browter_quiz_addon'),
            ]
        );
        $this->add_control(
            'answer2',
            [
                'label' => __('Answer Two', 'browter_quiz_addon'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('Dhaka', 'browter_quiz_addon'),
            ]
        );
        $this->add_control(
            'answer3',
            [
                'label' => __('Answer Three', 'browter_quiz_addon'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('Paris', 'browter_quiz_addon'),
            ]
        );
        $this->add_control(
            'answer4',
            [
                'label' => __('Answer Four', 'browter_quiz_addon'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('Moscow', 'browter_quiz_addon'),
            ]
        );
        $this->add_control(
            'correct_answer',
            [
                'label' => __('Correct Answer', 'browter_quiz_addon'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('Paris', 'browter_quiz_addon'),
            ]
        );

        $this->add_control(
            'explainer_prefix',
            [
                'label' => __('Explainer Prefix', 'browter_quiz_addon'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('Explanation:', 'browter_quiz_addon'),
            ]
        );

        $this->add_control(
            'explainer',
            [
                'label' => __('Explainer', 'browter_quiz_addon'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __('Paris is the capital and most populous city of France. Situated on the Seine River, in the north of the country, it is in the centre of the Île-de-France region, also known as the région parisienne, "Paris Region".', 'browter_quiz_addon'),
            ]
        );

        // Add more controls for answers if needed

        $this->end_controls_section();

        $this->start_controls_section(
            'layout_style_section',
            [
                'label' => __( 'Layout', 'browter_quiz_addon' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'layout_padding',
            [
                'label' => __( 'Padding', 'browter_quiz_addon' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', 'em', '%' ],
                'selectors' => [
                    '{{WRAPPER}} .quiz-container' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'layout_margin',
            [
                'label' => __( 'Margin', 'browter_quiz_addon' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', 'em', '%' ],
                'selectors' => [
                    '{{WRAPPER}} .quiz-container' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'layout_border',
                'label' => 'Border',
				'selector' => '{{WRAPPER}} .quiz-container',
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'layout_box_shadow',
                'label' => 'Box Shadow',
				'selector' => '{{WRAPPER}} .quiz-container',
			]
		);


        $this->end_controls_section();

        $this->start_controls_section(
            'question_style_section',
            [
                'label' => __( 'Question', 'browter_quiz_addon' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

 
        $this->add_control(
            'question_color',
            [
                'label' => __( 'Question Color', 'browter_quiz_addon' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .question' => 'color: {{VALUE}}',
                ],
            ]
        );

        
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'question_typography',
				'selector' => '{{WRAPPER}} .question',
			]
		);


        $this->add_control(
            'question_padding',
            [
                'label' => __( 'Padding', 'browter_quiz_addon' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', 'em', '%' ],
                'selectors' => [
                    '{{WRAPPER}} .question' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'question_margin',
            [
                'label' => __( 'Margin', 'browter_quiz_addon' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', 'em', '%' ],
                'selectors' => [
                    '{{WRAPPER}} .question' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'question_subtitle_style_section',
            [
                'label' => __( 'Question Subtitle', 'browter_quiz_addon' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'question_subtitle_color',
            [
                'label' => __( 'Color', 'browter_quiz_addon' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .question-subtitile' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'question_subtitle_typography',
				'selector' => '{{WRAPPER}} .question-subtitile',
			]
		);

        $this->add_control(
            'question_subtitle_padding',
            [
                'label' => __( 'Padding', 'browter_quiz_addon' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', 'em', '%' ],
                'selectors' => [
                    '{{WRAPPER}} .question-subtitile' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'question_subtitle_margin',
            [
                'label' => __( 'Margin', 'browter_quiz_addon' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', 'em', '%' ],
                'selectors' => [
                    '{{WRAPPER}} .question-subtitile' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'answer_style_section',
            [
                'label' => __( 'Answer', 'browter_quiz_addon' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'answer_background_color',
                'label' => __( 'Background', 'browter_quiz_addon' ),
                'types' => [ 'classic', 'gradient' ],
                'selector' => '{{WRAPPER}} .answer',
            ]
        );

        

        $this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'answer_border',
                'label' => 'Border',
				'selector' => '{{WRAPPER}} .answer',
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'answer_box_shadow',
                'label' => 'Box Shadow',
				'selector' => '{{WRAPPER}} .answer',
			]
		);

        // Color Picker Control
        $this->add_control(
            'answer_color',
            [
                'label' => __( 'Answer Color', 'browter_quiz_addon' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .answer_text' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'answer_typography',
				'selector' => '{{WRAPPER}} .answer_text',
			]
		);

        $this->add_control(
            'answer_padding',
            [
                'label' => __( 'Padding', 'browter_quiz_addon' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', 'em', '%' ],
                'selectors' => [
                    '{{WRAPPER}} .answer_text' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'answer_margin',
            [
                'label' => __( 'Margin', 'browter_quiz_addon' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', 'em', '%' ],
                'selectors' => [
                    '{{WRAPPER}} .answer_text' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );


        $this->end_controls_section();

        $this->start_controls_section(
            'bullet_style_section',
            [
                'label' => __( 'Point', 'browter_quiz_addon' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'bullet_background_color',
                'label' => __( 'Background', 'browter_quiz_addon' ),
                'types' => [ 'classic', 'gradient' ],
                'selector' => '{{WRAPPER}} .bullet',
            ]
        );

        $this->add_control(
            'bullet_color',
            [
                'label' => __( 'Color', 'browter_quiz_addon' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .bullet' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bullet_typography',
				'selector' => '{{WRAPPER}} .bullet',
			]
		);

        $this->add_control(
            'bullet_width',
            [
                'label' => __( 'Width', 'browter_quiz_addon' ),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => [ 'px', 'em', '%' ],
                'selectors' => [
                    '{{WRAPPER}} .bullet' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'bullet_height',
            [
                'label' => __( 'Height', 'browter_quiz_addon' ),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => [ 'px', 'em', '%' ],
                'selectors' => [
                    '{{WRAPPER}} .bullet' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'bullet_padding',
            [
                'label' => __( 'Padding', 'browter_quiz_addon' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', 'em', '%' ],
                'selectors' => [
                    '{{WRAPPER}} .bullet' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'bullet_margin',
            [
                'label' => __( 'Margin', 'browter_quiz_addon' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', 'em', '%' ],
                'selectors' => [
                    '{{WRAPPER}} .bullet' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bullet_border',
                'label' => 'Border',
				'selector' => '{{WRAPPER}} .bullet',
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bullet_box_shadow',
                'label' => 'Box Shadow',
				'selector' => '{{WRAPPER}} .bullet',
			]
		);

        $this->end_controls_section();

        $this->start_controls_section(
            'explanation_style_section',
            [
                'label' => __( 'Explanation', 'browter_quiz_addon' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'explanation_background_color',
                'label' => __( 'Background', 'browter_quiz_addon' ),
                'types' => [ 'classic', 'gradient' ],
                'selector' => '{{WRAPPER}} .explanation',
            ]
        );

        $this->add_control(
            'explanation_color',
            [
                'label' => __( 'Color', 'browter_quiz_addon' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .explanation_content' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'explanation_typography',
				'selector' => '{{WRAPPER}} .explanation_content',
			]
		);

        $this->add_control(
            'explanation_padding',
            [
                'label' => __( 'Padding', 'browter_quiz_addon' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', 'em', '%' ],
                'selectors' => [
                    '{{WRAPPER}} .explanation' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'explanation_margin',
            [
                'label' => __( 'Margin', 'browter_quiz_addon' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', 'em', '%' ],
                'selectors' => [
                    '{{WRAPPER}} .explanation' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'explanation_border',
                'label' => 'Border',
				'selector' => '{{WRAPPER}} .explanation',
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'explanation_box_shadow',
                'label' => 'Box Shadow',
				'selector' => '{{WRAPPER}} .explanation',
			]
		);

        $this->end_controls_section();

        $this->start_controls_section(
            'explanation_prefix_section',
            [
                'label' => __( 'Explanation Prefix', 'browter_quiz_addon' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'explanation_prefix_color',
            [
                'label' => __( 'Color', 'browter_quiz_addon' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .explanation_prefix' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'explanation_prefix_typography',
				'selector' => '{{WRAPPER}} .explanation_prefix',
			]
		);

        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'explanation_prefix_background_color',
                'label' => __( 'Background', 'browter_quiz_addon' ),
                'types' => [ 'classic', 'gradient' ],
                'selector' => '{{WRAPPER}} .explanation_prefix',
            ]
        );



        $this->add_control(
            'explanation_prefix_padding',
            [
                'label' => __( 'Padding', 'browter_quiz_addon' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', 'em', '%' ],
                'selectors' => [
                    '{{WRAPPER}} .explanation_prefix' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'explanation_prefix_margin',
            [
                'label' => __( 'Margin', 'browter_quiz_addon' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', 'em', '%' ],
                'selectors' => [
                    '{{WRAPPER}} .explanation_prefix' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'explanation_prefix_border',
                'label' => 'Border',
				'selector' => '{{WRAPPER}} .explanation_prefix',
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'explanation_prefix_box_shadow',
                'label' => 'Box Shadow',
				'selector' => '{{WRAPPER}} .explanation_prefix',
			]
		);

        $this->end_controls_section();

        

        
    }

    protected function render() {
    $settings = $this->get_settings_for_display();
    $widget_id = 'browter-quiz-' . $this->get_id();
    ?>


        <style>
            .<?php echo esc_attr( $widget_id ); ?> .answer.true .bullet::before, .<?php echo esc_attr( $widget_id ); ?> .answer.false .bullet::before {
                width: <?php echo esc_attr( $settings['bullet_width']['size'] ); ?><?php echo esc_attr( $settings['bullet_width']['unit'] ); ?> ;
                height: <?php echo esc_attr( $settings['bullet_height']['size'] ); ?><?php echo esc_attr( $settings['bullet_height']['unit'] ); ?> ;
            }
        </style>

    <div class="quiz-container <?php echo esc_attr( $widget_id ); ?>">
        <div class="question-subtitile">
            <p><?php echo esc_html($settings['question_subtitle']); ?></p>
        </div>
        <div class="question"><?php echo esc_html($settings['question']); ?></div>

        <div class="answers">
            <div class="answer" data-correct="<?php echo $settings['answer1'] == $settings['correct_answer'] ? 'true' : 'false'; ?>">
                <div class="bullet" >A</div>
                <p class="answer_text"><?php echo esc_html($settings['answer1']); ?></p>
                
            </div>
            <div class="answer" data-correct="<?php echo $settings['answer2'] == $settings['correct_answer'] ? 'true' : 'false'; ?>">
                <div class="bullet" >B</div>
                <p class="answer_text"><?php echo esc_html($settings['answer2']); ?></p>
            </div>
            <div class="answer" data-correct="<?php echo $settings['answer3'] == $settings['correct_answer'] ? 'true' : 'false'; ?>">
                <div class="bullet" >C</div>
                <p class="answer_text"><?php echo esc_html($settings['answer3']); ?></p>
            </div>
            <div class="answer" data-correct="<?php echo $settings['answer4'] == $settings['correct_answer'] ? 'true' : 'false'; ?>">
                <div class="bullet" >D</div>
                <p class="answer_text"><?php echo esc_html($settings['answer4']); ?></p>
            </div>
        </div>

        <div class="explanation">
            <span class="explanation_prefix"><?php echo esc_html($settings['explainer_prefix']); ?></span>
            <p class="explanation_content"><?php echo esc_html($settings['explainer']); ?></p>
            
        </div>
    </div>



    <?php
}

}

\Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Browter_Widget_Quiz());
