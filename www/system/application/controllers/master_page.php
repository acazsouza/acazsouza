<?php
class Master_page extends Controller {
    function Master_page() {
        parent::Controller();
    }

    function index($view, $data = null) {
        //$this->load->helper('relative_time');

        $this->layout->view($view, $data);
    }
}
?>