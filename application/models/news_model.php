<?php 
    class News_model extends CI_Model{
        public function __constuct(){
            parent::__constuct();
            $this->load->database();        // this for load database in model
        }

        //function get data for use 
        public function get_news($slug=false){

            if($slug === false){
                $query = $this->db->get('news');
                return $query->result_array();   // result_array return all rows from database       
            }
            $query = $this->db->get_where('news', array('slug'=>$slug));    // this query to get data from table 'news' where data from slug
            return $query->row_array();                                     // row_array return a single row from database if have many row it show the first row
        }
        

        // insert function 
        public function set_news(){
            $this->load->helper('url');

            $data = array(
                'title' => $this->input->post('title'),
                'slug' => $this->input->post('slug'),
                'text' => $this->input->post('text')
            );

            return $this->db->insert('news', $data);
            
        }

        //delete function
        public function delete_news($id){
            $this->db->where('id', $id);
            $this->db->delete('news');

            //Can use below query same as top 
            //$query = $this->db->query("DELETE FROM news WHERE id='{$id}'");
            return true;
        }

        //update function >>

        //show data on form
        public function update_news($id, $data){
            $this->db->where('id', $id);
            $this->db->update('news', $data);
            log_message('error', $this->db->affected_rows());
            if($this->db->_error_number()==0){
                $this->load->view('news/update_success');
            }else{
                echo 'Fail to Update Form';
            }
        }

        // qurery get data return as row
        public function fetch_news($id){
            $this->db->where('id', $id);
            $row = $this->db->get('news')->row();
            return $row;
        }

    }
?> 