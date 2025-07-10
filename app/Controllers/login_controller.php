<?php
namespace App\Controllers;
use App\Models\usuario_model;
use CodeIgniter\Controller;

class login_controller extends BaseController

{
    public function index()
    {
        helper(['form', 'url']);
    
        $dato['titulo'] = 'login';
        echo view('front/head_view', $dato);
        echo view('front/navbar_view');
        echo view('back/usuario/login');
        echo view('front/footer_view');
    }

    public function auth()
    {
        $session = session();
        $model = new usuario_model();

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('pass');

        $data = $model->where('email', $email)->first();
        if ($data) {
           $pass = $data['pass'];
            $ba = $data['baja'];
            if ($ba == 'SI') {
                $session->setFlashdata('msg', 'Usuario dado de baja');
                return redirect()->to('/login_controller');
            }
            $verify_pass = password_verify($password, $pass);
                if ($verify_pass) {
                    $ses_data = [
                        'id_usuario' => $data['id_usuario'],
                        'nombre' => $data['nombre'],
                        'apellido' => $data['apellido'],
                        'email' => $data['email'],
                        'perfil_id' => $data['perfil_id'],
                        'logged_in' => TRUE
                    ];
                    // se cumple con la verificacion, inicio de sesión
                    $session->set($ses_data);

                    session()->setFlashdata('msg', 'Bienvenido ' . $data['nombre'] . ' ' . $data['apellido']);
                    return redirect()->to('/panel'); //¿que carajos va panel?

                } else {
                    $session->setFlashdata('msg', 'Contraseña incorrecta');
                    return redirect()->to('/login_controller');
                }
            }else {
                $session->setFlashdata('msg', 'Email no registrado, usuario incorrecto');
                return redirect()->to('/login_controller');
            }
        }
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
}



//     public function forgot_password()
//     {
//         $data['titulo'] = 'Recuperar Contraseña';
//         echo view('front/head_view', $data);
//         echo view('front/navbar_view');
//         echo view('back/usuario/forgot_password');
//         echo view('front/footer_view');
//     }

//     // verificar si el usuario está logueado
//     private function isLoggedIn()
//     {
//         return session()->get('logged_in') === true;
//     }

//     // verificar si el usuario es admin
//     private function isAdmin()
//     {
//         return session()->get('perfil_id') == 1;
//     }
// }