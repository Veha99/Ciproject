<?php 
    class Pages extends CI_Controller
    {
        public function view($page = 'home')
        {
            if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))   // this if statment is to check if have file or path   //APPATH short for Application Path Folder
            {
                show_404();
                //echo 'fail';
            }

            $data['title'] = ucfirst($page);    // ucfirst() this function is to Capitalize the first letter

            $this->load->view('templates/header',$data);
            $this->load->view('pages/'.$page,$data);
            $this->load->view('templates/footer',$data);
        } 
    }
?>