<?php

class BukuTamu_Model extends CI_Model {

    public function ambilDataTamu() {
        $this->load->database();

        $query = $this->db->query('SELECT
        a.id,
        a.nama_tamu,
        b.prov,
        c.kab,
        a.alamat AS alamat_tamu,
        d.nama_instansi,
        d.alamat AS alamat_instansi
    FROM
        tamu AS a
    INNER JOIN provinsi AS b ON a.id_provinsi = b.id_provinsi
    INNER JOIN kabupaten AS c ON a.id_kabupaten = c.id_kabupaten
    INNER JOIN instansi AS d ON a.id_instansi = d.id_instansi;');
        return $query->result();
    }

}

?>