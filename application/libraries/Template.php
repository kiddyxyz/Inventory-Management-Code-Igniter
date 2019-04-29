<?php

class Template {

    protected $_ci;

    function __construct()
    {
        $this->_ci =&get_instance();
    }

    function load($template, $data = null)
    {
        $data['content'] = $this->_ci->load->view($template, $data, true);
        $this->_ci->load->view('base', $data);
    }
}