<?php
class Article extends Master_page {
    function Article() {
        parent::Master_page();
    }

    /*function _article() {
        $this->db->select('id, date, title, description, title_url');
        $this->db->from('posts');

        $title_url = $this->uri->segment(1);

        if (empty($title_url)) {
            $this->db->limit(1);
            $this->db->orderby('date', 'desc');
        } else {
            $this->db->where('title_url', $title_url);
        //}

        $data['article'] = $this->db->get()->result();
        $data['title'] = $data['article'][0]->title;

        return $data;
    }*/

        /*function _article() {
        $this->db->select('id, date, title, description, title_url');
        $this->db->from('posts');

        $title_url = $this->uri->segment(1);

        if (empty($title_url)) {
            $this->db->limit(1);
            $this->db->orderby('date', 'desc');
        } else {
            $this->db->where('title_url', $title_url);
        //}

        $data['article'] = $this->db->get()->result();
        $data['title'] = $data['article'][0]->title;

        return $data;
    }*/

    function get_all_article() {

        $this->db->select('id, date, title, summary, title_url');
        $this->db->from('posts');
        $this->db->where('status', 1);
        $this->db->orderby('date', 'desc');

        $data['article'] = $this->db->get()->result();
        $data['title'] = '';

        return $data;

    }

    function get_article($title_url) {

        $this->db->select('id, date, title, description, title_url');
        $this->db->from('posts');
        $this->db->where('status', 1);
        $this->db->where('title_url', $title_url);

        $data['article'] = $this->db->get()->result();
        $data['title'] = $data['article'][0]->title;

        return $data;

    }

    function index() {

        $title_url = $this->uri->segment(1);

        if (empty($title_url)) {

            $data = $this->get_all_article();
            $view = 'default';

        } else {

            $data = $this->get_article($title_url);
            $view = 'article';

        }

        parent::index($view, $data);

    }

    function new_post() {

        $data['title'] = 'New post';

        parent::index('new_post', $data);
        
    }
}