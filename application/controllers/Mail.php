<?php

    /* Controller: Mail */

    class Mail extends CI_Controller {


        // IMAP/POP3 (mail server) LOGIN
        var $imap_server    = '';
        var $port_server    = '143';
        var $imap_user        = '';
        var $imap_pass        = '';


        // Constuctor

        function __construct() {

            parent::__construct();

            $this->load->library('Imap');

        }

        // index

        function index() {

            $inbox = $this->imap->cimap_open($this->imap_server, $this->port_server, 'INBOX', $this->imap_user, $this->imap_pass) or die(imap_last_error());

            $data_array['totalmsg']    = $this->imap->cimap_num_msg($inbox);
            $data_array['quota']    = $this->imap->cimap_get_quota($inbox);
			
			$data_array['result'] = $this->imap->cimap_fetch_overview($inbox);
			
			imap_close($inbox);

            $this->load->view('mail_view', $data_array);    
        }
    }
	
/* End of file Mail.php */
/* Location: ./application/controllers/Mail.php */
?> 
