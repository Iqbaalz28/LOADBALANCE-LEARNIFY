<?php
defined('BASEPATH') or exit('No direct script access allowed');



class Materi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('disqus');
        $this->load->model('m_materi');
        $this->list_materi['iaas_x'] = $this->m_materi->iaas_x()->result();
        $this->list_materi['iaas_xi'] = $this->m_materi->iaas_xi()->result();
        $this->list_materi['iaas_xii'] = $this->m_materi->iaas_xii()->result();
        $this->list_materi['paas_x'] = $this->m_materi->paas_x()->result();
        $this->list_materi['paas_xi'] = $this->m_materi->paas_xi()->result();
        $this->list_materi['paas_xii'] = $this->m_materi->paas_xii()->result();
        $this->list_materi['saas_x'] = $this->m_materi->saas_x()->result();
        $this->list_materi['saas_xi'] = $this->m_materi->saas_xi()->result();
        $this->list_materi['saas_xii'] = $this->m_materi->saas_xii()->result();
        $this->list_materi['skj_x'] = $this->m_materi->skj_x()->result();
        $this->list_materi['skj_xi'] = $this->m_materi->skj_xi()->result();
        $this->list_materi['skj_xii'] = $this->m_materi->skj_xii()->result();
        $this->list_materi['iot_x'] = $this->m_materi->iot_x()->result();
        $this->list_materi['iot_xi'] = $this->m_materi->iot_xi()->result();
        $this->list_materi['iot_xii'] = $this->m_materi->iot_xii()->result();
    }

    function generateMateri($materi){
    
        $data['materi'] = $this->list_materi[$materi];
        $data['user'] = $this->db->get_where('siswa', ['email' =>
            $this->session->userdata('email')])->row_array();
        $this->load->view('materi/'.str_replace('_', '-', $materi), $data);
        $this->load->view('template/footer');
    }

    public function belajar($id)
    {
        $where = array('id' => $id);
        $detail = $this->m_materi->belajar($id);
        $data['detail'] = $detail;
        $data['disqus'] = $this->disqus->get_html();
        $this->load->view('materi/belajar', $data);
    }

    public function iaas_x()
    {
        $this->generateMateri('iaas_x');
    }
    
    public function iaas_xi()
    {
        $this->generateMateri('iaas_xi');
    }

    public function iaas_xii()
    {
        $this->generateMateri('iaas_xii');
    }

    public function paas_x()
    {
        $this->generateMateri('paas_x');
    }

    public function paas_xi()
    {
        $this->generateMateri('paas_xi');
    }

    public function paas_xii()
    {
        $this->generateMateri('paas_xii');
    }

    public function saas_x()
    {
        $this->generateMateri('saas_x');
    }

    public function saas_xi()
    {
        $this->generateMateri('saas_xi');
    }

    public function saas_xii()
    {
        $this->generateMateri('saas_xii');
    }

    public function skj_x()
    {
        $this->generateMateri('skj_x');
    }
    
    public function skj_xi()
    {
        $this->generateMateri('skj_xi');
    }
    
    public function skj_xii()
    {
        $this->generateMateri('skj_xii');
    }
    
    public function iot_x()
    {
        $this->generateMateri('iot_x');
    }
    
    public function iot_xi()
    {
        $this->generateMateri('iot_xi');
    }
    
    public function iot_xii()
    {
        $this->generateMateri('iot_xii');
    }

}
