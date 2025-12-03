<?php

class M_materi extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('materi');
    }

    public function belajar($id = null)
    {
        $query = $this->db->get_where('materi', array('id' => $id))->row();
        return $query;
    }

    public function detail_materi($id = null)
    {
        $query = $this->db->get_where('materi', array('id' => $id))->row();
        return $query;
    }

    public function delete_materi($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function update_materi($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function iaas_x()
    {
        $mapel = 'Infrastructure as a Service';
        $kelas = 'X';
        $this->db->where('kelas', $kelas);
        $this->db->where('nama_mapel', $mapel);
        return $this->db->get('materi');
    }

    public function iaas_xi()
    {
        $mapel = 'Infrastructure as a Service';
        $kelas = 'XI';
        $this->db->where('kelas', $kelas);
        $this->db->where('nama_mapel', $mapel);
        return $this->db->get('materi');
    }

    public function iaas_xii()
    {
        $mapel = 'Infrastructure as a Service';
        $kelas = 'XII';
        $this->db->where('kelas', $kelas);
        $this->db->where('nama_mapel', $mapel);
        return $this->db->get('materi');
    }

    public function paas_x()
    {
        $mapel = 'Platform as a Service';
        $kelas = 'X';
        $this->db->where('kelas', $kelas);
        $this->db->where('nama_mapel', $mapel);
        return $this->db->get('materi');
    }

    public function paas_xi()
    {
        $mapel = 'Platform as a Service';
        $kelas = 'XI';
        $this->db->where('kelas', $kelas);
        $this->db->where('nama_mapel', $mapel);
        return $this->db->get('materi');
    }

    public function paas_xii()
    {
        $mapel = 'Platform as a Service';
        $kelas = 'XII';
        $this->db->where('kelas', $kelas);
        $this->db->where('nama_mapel', $mapel);
        return $this->db->get('materi');
    }

    public function saas_x()
    {
        $mapel = 'Software as a Service';
        $kelas = 'X';
        $this->db->where('kelas', $kelas);
        $this->db->where('nama_mapel', $mapel);
        return $this->db->get('materi');
    }

    public function saas_xi()
    {
        $mapel = 'Software as a Service';
        $kelas = 'XI';
        $this->db->where('kelas', $kelas);
        $this->db->where('nama_mapel', $mapel);
        return $this->db->get('materi');
    }

    public function saas_xii()
    {
        $mapel = 'Software as a Service';
        $kelas = 'XII';
        $this->db->where('kelas', $kelas);
        $this->db->where('nama_mapel', $mapel);
        return $this->db->get('materi');
    }

    public function skj_x()
    {
        $mapel = 'Cyber Security';
        $kelas = 'X';
        $this->db->where('kelas', $kelas);
        $this->db->where('nama_mapel', $mapel);
        return $this->db->get('materi');
    }

    public function skj_xi()
    {
        $mapel = 'Cyber Security';
        $kelas = 'XI';
        $this->db->where('kelas', $kelas);
        $this->db->where('nama_mapel', $mapel);
        return $this->db->get('materi');
    }

    public function skj_xii()
    {
        $mapel = 'Cyber Security';
        $kelas = 'XII';
        $this->db->where('kelas', $kelas);
        $this->db->where('nama_mapel', $mapel);
        return $this->db->get('materi');
    }

    public function iot_x()
    {
        $mapel = 'Internet of Things';
        $kelas = 'X';
        $this->db->where('kelas', $kelas);
        $this->db->where('nama_mapel', $mapel);
        return $this->db->get('materi');
    }

    public function iot_xi()
    {
        $mapel = 'Internet of Things';
        $kelas = 'XI';
        $this->db->where('kelas', $kelas);
        $this->db->where('nama_mapel', $mapel);
        return $this->db->get('materi');
    }

    public function iot_xii()
    {
        $mapel = 'Internet of Things';
        $kelas = 'XII';
        $this->db->where('kelas', $kelas);
        $this->db->where('nama_mapel', $mapel);
        return $this->db->get('materi');
    }
}
