<?php 
use GuzzleHttp\Client;

class Mahasiswa_model extends CI_model {
    public function getAllMahasiswa()
    {
        $client = new Client();

        $response = $client->request('GET', 'http://localhost/rest-api/rest-server/api/mahasiswa');

        $result = json_decode($response->getBody()->getContents(), true);
        
        return $result['data'];
    }

    public function getMahasiswaById($id)
    {
        $client = new Client($id);

        $response = $client->request('GET', 'http://localhost/rest-api/rest-server/api/mahasiswa', [
            'query' => [
                'id' => $id
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        
        return $result['data'][0];
    }

    public function tambahDataMahasiswa()
    {
        
        $client = new Client();

        $response = $client->request('POST', 'http://localhost/rest-api/rest-server/api/mahasiswa', [
            'form_params' => [
                "nama"      => $this->input->post('nama', true),
                "nim"       => $this->input->post('nim', true),
                "email"     => $this->input->post('email', true),
                "jurusan"   => $this->input->post('jurusan', true)
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        
        return $result;
    }

    public function hapusDataMahasiswa($id)
    {
        $client = new Client();

        $response = $client->request('DELETE', 'http://localhost/rest-api/rest-server/api/mahasiswa', [
            'form_params' => [
                'id' => $id
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        
        return $result;
    }



    public function ubahDataMahasiswa()
    {
        $client = new Client();

        $response = $client->request('PUT', 'http://localhost/rest-api/rest-server/api/mahasiswa', [
            'form_params' => [
                "nama"      => $this->input->post('nama', true),
                "nim"       => $this->input->post('nim', true),
                "email"     => $this->input->post('email', true),
                "jurusan"   => $this->input->post('jurusan', true),
                "id"        => $this->input->post('id', true)
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        
        return $result;
    }

}