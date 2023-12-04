<?php

class GetDataMobile extends Controller
{

    public function getUserData($id)
    {
        try {
            $user = $this->model('GetDataApi_model')->getUserById($id);

            if ($user) {
                $response = [
                    'code' => 200,
                    'status' => 'success',
                    'data' => $user
                ];
            } else {
                $response = [
                    'code' => 404,
                    'status' => 'error',
                    'message' => 'User not found'
                ];
            }
        } catch (Exception $e) {
            $response = [
                'code' => 500,
                'status' => 'error',
                'message' => $e->getMessage()
            ];
        }

        echo json_encode($response);
    }

    public function getUserKost($idKamar)
    {
        try {
            $user = $this->model('GetDataApi_model')->getDataKost($idKamar);

            if ($user) {
                $response = [
                    'code' => 200,
                    'status' => 'Success',
                    'data' => $user
                ];
            } else {
                $response = [
                    'code' => 404,
                    'status' => 'error',
                    'message' => 'Data tidak ditemukan'
                ];
            }
        } catch (Exception $e) {
            $response = [
                'code' => 500,
                'status' => 'error',
                'message' => $e->getMessage()
            ];
        }

        echo json_encode($response);
    }

    public function getPembayaran($idUser)
    {
        try {
            $user = $this->model('GetDataApi_model')->getPembayaranUser($idUser);

            if ($user) {
                $response = [
                    'code' => 200,
                    'status' => 'Success',
                    'data' => $user
                ];
            } else {
                $response = [
                    'code' => 404,
                    'status' => 'error',
                    'message' => 'Data tidak ditemukan'
                ];
            }
        } catch (Exception $e) {
            $response = [
                'code' => 500,
                'status' => 'error',
                'message' => $e->getMessage()
            ];
        }
        echo json_encode($response);
    }

    public function getHistory($idUser)
    {
        try {
            $user = $this->model('GetDataApi_model')->getTransactionHistory($idUser);

            if ($user) {
                $response = [
                    'code' => 200,
                    'status' => 'Success',
                    'data' => $user
                ];
            } else {
                $response = [
                    'code' => 404,
                    'status' => 'error',
                    'message' => 'Data tidak ditemukan'
                ];
            }
        } catch (Exception $e) {
            $response = [
                'code' => 500,
                'status' => 'error',
                'message' => $e->getMessage()
            ];
        }
        echo json_encode($response);
    }

    public function getHistoryDetail($idUser, $idTransaksi)
    {
        try {
            $user = $this->model('GetDataApi_model')->getTransactionHistoryDetail($idUser, $idTransaksi);

            if ($user) {
                $response = [
                    'code' => 200,
                    'status' => 'Success',
                    'data' => $user
                ];
            } else {
                $response = [
                    'code' => 404,
                    'status' => 'error',
                    'message' => 'Data tidak ditemukan'
                ];
            }
        } catch (Exception $e) {
            $response = [
                'code' => 500,
                'status' => 'error',
                'message' => $e->getMessage()
            ];
        }
        echo json_encode($response);
    }

    public function getStatus($idUser){
        try {
            $user = $this->model('GetDataApi_model')->getStatusBayarUser($idUser);

            if ($user) {
                $response = [
                    'code' => 200,
                    'status' => 'Success',
                    'data' => $user
                ];
            } else {
                $response = [
                    'code' => 404,
                    'status' => 'error',
                    'message' => 'Data tidak ditemukan'
                ];
            }
        } catch (Exception $e) {
            $response = [
                'code' => 500,
                'status' => 'error',
                'message' => $e->getMessage()
            ];
        }
        echo json_encode($response);
    }
}
