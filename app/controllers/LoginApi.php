<?php
class LoginApi extends Controller
{
    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $login_model = $this->model('Login_model_api');
            $userByEmail = $login_model->getUserByEmail($email);

            if ($userByEmail) {
                $user = $login_model->checkLogin($email, $password);

                if ($user) {
                    $response = array(
                        'code' => 200,
                        'status' => 'Login Sukses',
                        'data_user' => $user
                    );
                } else {
                    $response = array(
                        'code' => 401,
                        'status' => 'Password salah',
                    );
                }
            } else {
                $response = array(
                    'code' => 404,
                    'status' => 'Email tidak ditemukan',
                );
            }
        } else {
            $response = array(
                'code' => 404,
                'status' => 'Data tidak ditemukan',
            );
        }
        echo json_encode($response);
    }
}
