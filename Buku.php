<?php

class Buku extends CI_Controller
{
    var $data = array();

    function __construct() 
    {
        parent::__construct();

        $this->load->helper('form');
        $this->load->helper('url');

        $this->data['opt_kategori'] = array('' => '- Pilih salah satu -',
                                            'novel' => 'Novel',
                                            'komik' => 'Komik',
                                            'kamus' => 'Kamus');
        $this->load->model('Buku_m');
    }

    function index() 
    {
        $this->add_new();
    }

    function add_new() 
    {
        $this->data['is_update'] = 0; 
        $this->load->view('buku_form_v', $this->data);
    }
    function save($is_update= 0)
{
    $data['Judul']      = $this->input->post('judul', true);
    $data['Pengarang']  = $this->input->post('pengarang', true);
    $data['Kategori']   = $this->input->post('kategori', true);

    if ($is_update == 0)
    {
        // Insert new data
        if ($this->Buku_m->insert($data))
            redirect('buku');
    } 
    else
        {
            // Update existing data
            $id = $this->input->post('id');

            if ($this->Buku_m->update_by_id($data, $id));
            redirect('buku');
    }
}


}

?>