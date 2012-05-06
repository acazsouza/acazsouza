<?php
class Article_model extends Model {
    function getArticles($limit = NULL)
    {
        $this->db->select('id, date, title, summary, title_url');
        $this->db->from('posts');
        $this->db->where('status', 1);
        $this->db->orderby('date', 'desc');
        $this->db->limit($limit);
        return $this->db->get();
    }
}