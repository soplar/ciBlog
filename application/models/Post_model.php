<?php
// Vergeet niet in config/autoload model te laden
// in config/database voer gegevens in
    class post_model extends CI_Model{

        public function __construct(){
            $this->load->Database();
        }

        public function get_posts($slug = FALSE){
            if($slug === FALSE){
                // zorg ervoor dat laatste post bovenaan komt te staan
                $this->db->order_by('p.id', 'DESC');
                // om de categorie te laten zien maken we een join
                $this->db->select('p.name as p_name, p.id as p_id, p.title, p.body, p.slug, p.created as p_created, p.post_image, c.name as c_name, c.id as c_id, c.created as c_created', false);
                $this->db->from('posts p');
                $this->db->join('categories c', 'c.id=p.category_id');
                // https://www.codeigniter.com/userguide3/database/query_builder.html#selecting-data
                $query = $this->db->get();
                if ($query->num_rows() > 0) {
                    return $query->result_array();
                } else {
                    return false;
                }
            }
            $query = $this->db->get_where('posts', array('slug'=>$slug));
            return $query->row_array();
        }

        public function create_post($post_image)
        {
            $slug = url_title($this->input->post('title'));
            $data = array(
                'title' => $this->input->post('title'),
                'slug' => $slug,
                'body' => $this->input->post('body'),
                'category_id' => $this->input->post('category_id'),
                'post_image' => $post_image
            );
            return $this->db->insert('posts', $data);
        }

        public function delete_post($id)
        {
            $this->db->where('id',$id);
            $this->db->delete('posts');
            return true;
        }

        public function update_post()
        {
            // test echo
            // echo $this->input->post('id');die();
            $slug = url_title($this->input->post('title'));
            $data = array(
                'title' => $this->input->post('title'),
                'slug' => $slug,
                'body' => $this->input->post('body'),
                'category_id' => $this->input->post('category_id')
            );
            $this->db->where('id', $this->input->post('id'));
            return $this->db->update('posts', $data);
        }

        public function get_categories()
        {
            $this->db->order_by('name');
            $query = $this->db->get('categories');
            return $query->result_array();
        }
    }