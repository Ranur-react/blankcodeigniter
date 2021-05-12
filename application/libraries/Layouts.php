<?php
class Layouts
{
    protected $_ci;
    function __construct()
    {
        $this->_ci = &get_instance();
    }
    function display($template, $data = null)
    {
        $data['content'] = $this->_ci->load->view($template, $data, true);
        $this->_ci->parser->parse('layouts/extends', $data);
    }
    function modal_form($form, $data)
    {
        $data['body'] = $this->_ci->load->view($form, $data, true);
        $this->_ci->load->view('layouts/modal/form', $data);
    }
    function modal_data($form, $data)
    {
        $data['body'] = $this->_ci->load->view($form, $data, true);
        $this->_ci->load->view('layouts/modal/data', $data);
    }
}
