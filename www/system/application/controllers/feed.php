<?php
class Feed extends Controller {
    function Feed()
    {
        parent::Controller();

        $this->load->helper('xml');
        $this->load->helper('text');
        $this->load->helper('url');
        $this->load->model('article_model', 'articles');
    }

    function index()
    {
        $data['feed_name'] = 'acazsouza.com.br';
        $data['encoding'] = 'utf-8';
        $data['feed_url'] = 'http://www.acazsouza.com.br/feed';
        $data['page_description'] = 'Relatos de um desenvolvedor...';
        $data['page_language'] = 'pt-br';
        $data['creator_email'] = 'acazsouza@gmail.com';
        $data['articles'] = $this->articles->getArticles(10);
        header("Content-Type: text/xml");

        $this->load->view('rss', $data);
    }

}

