<?php

defined('MOODLE_INTERNAL') || die();

global $CFG;

require_once($CFG->dirroot . '/question/behaviour/adaptive/renderer.php');


class qbehaviour_adaptive_adapted_for_coderunner_renderer extends qbehaviour_adaptive_renderer
{
    public function controls(question_attempt $qa, question_display_options $options) {
        return $this->precheck_button($qa, $options) . "\n" . $this->submit_button($qa, $options);
    }


    /**
     * Construct the HTML for the optional 'precheck' button, which triggers
     * a partial submit in which no penalties are imposed but only the
     * 'Use as example' test cases are run.
     * This code is identical to the 'submit_button' code in
     * qbehaviour_renderer::submit_button except for the id and name of the
     * button.
     */
    protected function precheck_button(question_attempt $qa, question_display_options $options) {
        if (!$qa->get_state()->is_active()) {
            return '';  // Not sure if this can happen, but the submit button does it
        }
        $attributes = array(
            'type' => 'submit',
            'id' => $qa->get_behaviour_field_name('precheck'),
            'name' => $qa->get_behaviour_field_name('precheck'),
            'value' => get_string('precheck', 'qbehaviour_adaptive_adapted_for_coderunner'),
            'class' => 'submit btn',
        );
        if ($options->readonly) {
            $attributes['disabled'] = 'disabled';
        }
        $output = html_writer::empty_tag('input', $attributes);
        if (!$options->readonly) {
            $this->page->requires->js_init_call('M.core_question_engine.init_submit_button',
                    array($attributes['id'], $qa->get_slot()));
        }
        return $output;
    }
}
