<?php

/**
 * @package block
 * @subpackage testaccount_automation
 * @copyright  2014 UCL
 * @license    http://www.ucl.ac.uk
 * 
 */

class block_testaccount_automation extends block_base{
    public function init(){
        $this->title = get_string('blocktitle','block_testaccount_automation');
    }
    
    public function applicable_formats() {
        parent::applicable_formats();
        
        return array('course-view' => true);
    }

    public function get_content() {
        global $CFG;
        
        parent::get_content();
        
        if($this->content !== null){
            return $this->content;
        }
        
        $this->content = new stdClass();
        $this->content->text = 'Testing content text';
        $this->content->footer = '<div><a href='.$CFG->wwwroot.'/local/testaccount_automation/index.php>Create Test Accounts</a> </div>';
        
    }
}