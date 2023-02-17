<?php 
    class News extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('news_model', "news");  //news got from here /new name of model or instance variable
            $this->load->helper('url');
        }

        // this index function use for display front page
        // view all news items
        public function index(){
            $data['news'] = $this->news->get_news();  //oy domlai news bos $data = oy model function = (news_model/get_news)
            $data['title'] = 'New archive';     //oy domlai title = New acrchive

            $this->load->view('templates/header',$data);
            $this->load->view('news/index',$data);
            $this->load->view('templates/footer');
        }

        //this slug function use to call (model/function) = (news_model/get_news($slug)) to controller
        //for a specific news item
        public function slug(){
            $data['news'] = $this->news->get_news($slug);       //The model is using this slug to identify the news item to be returned
        }
        
        // show or view function >>
        public function view($slug){
            $news = $this->news->get_news($slug);   // varible news = oy model function = (news_model/get_news)

            if (empty($data['news_item']))
            {
                show_404();
            }
            
            $data['title'] = $data['news_item']['title'];
            

            $this->load->view('templates/header', $data);
            $this->load->view('news/view', $data);
            $this->load->view('templates/footer', $data);
        }
        
        // insert function  >>
        public function create(){                       // helper,library are codeigniter build in function //research for more use 
            $this->load->helper('form');
            $this->load->library('form_validation');

            $data['title'] = 'Create a News item';

            // set rule
            $this->form_validation->set_rules('title', 'title', 'required');        // form_validation->set_rules is from library function
            $this->form_validation->set_rules('text', 'text', 'required');
            // check rule if form is complete or not
            if($this->form_validation->run() === false){            //if not complete run the same form
                
                $this->load->view('templates/header', $data);
                $this->load->view('news/create');
                $this->load->view('templates/footer', $data);
            }
            else{                            //if complete run below
                $this->news->set_news();    //push data into database   //$this->model->function ($this->news->set_news())
                $this->load->view('news/success');      //load view
            }
        }

        // delete function  >>
        public function delete(){
            $id = $this->input->get('id');  //jab id pi record
            $respone = $this->news->delete_news($id);  //load model //$respone to give this qurery a name for other use  //this case is delete news by id
            if($respone == true){
                redirect();     // redirect() function is codeigniter bulid in function use for direct where url go 
                                // this case if data is successfully deleted it deirect to it own page 
            }
           
        }

        // function for get data to load form update/edit
        public function update(){
            $this->load->helper('form');
            $this->load->library('form_validation');

            // load view
            $id = $this->input->get('id');          // $id = jab data by id
           // log_message('error', $id);              //log_message('message', varible) to debug data
            $data['id'] = $id;                      // oy domlai id = above $id
            $news_row = $this->news->fetch_news($id);   //$news_row = jab model with function fetch_new($id)
            //log_message('error', print_r($news_row,1));
            $data['news_row'] = $news_row;          // to jab data pi $news_row
            $this->load->view('news/update', $data);        //$data can jab all $data above 

        }
        
        // function for send updated data into database and view 
        public function update_data(){
            // update condition
            $id = $this->input->post('id');             //this $id for get id and pass to parameter
            $title = $this->input->post('title');       // get variable title to put into data
            $text = $this->input->post('text');         // get variable text to put into data
            $slug = $this->input->post('slug');         // get variable slug to put into data
            $data = array(                              // this data is to pass into method(update_news) parameter 
                'title' => $title,
                'text' => $text,
                'slug' => $slug                          // this is how to write update or edit function
            );
            $this->news->update_news($id, $data);
        }
    }
?>