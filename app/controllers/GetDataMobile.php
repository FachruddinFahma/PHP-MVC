<?php

class GetDataMobile extends Controller
{
    public function getAllUser()
    {
        $data['penghuni'] = $this->model('Penghuni_model')->getAllPenghuni_TestApi();
        $dataArray = array();

        foreach ($data['penghuni'] as $value) {
            array_push($dataArray, array(
                'id' => $value['id_user'],
                'name' => $value['nama_lengkap'],
                'email' => $value['email']
            ));
        }

        $result = [
            'status' => '200',
            'message' => 'success',
            'data' => $dataArray
        ];
        echo json_encode($result);
    }

    public function getUserById($id)
    {
        try {

            $data['penghuni'] = $this->model('Penghuni_model')->getUserById($id);
            $dataArray = array();

            foreach ($data['penghuni'] as $value) {
                array_push($dataArray, array(
                    'id' => $value['id_user'],
                    'name' => $value['nama_lengkap'],
                    'email' => $value['email'],
                    'password' => $value['password']
                ));
            }

            $result = [
                'status' => '200',
                'message' => 'success',
                'data' => $dataArray
            ];
            echo json_encode($result);
        } catch (Exception $e) {
            echo ($e->getMessage());
        }
    }
}
