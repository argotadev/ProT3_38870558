<?php
namespace App\Controllers;
use App\Models\usuario_models;
use CodeIgniter\Controller;

class login_controller extends BaseController
{
    public function __construct()
    {
        helper(['form', 'url']);
    }

    public function login_form()
    {
        $data['titulo'] = 'Iniciar Sesión';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('back/usuario/login');
        echo view('front/footer_view');
    }

    public function login()
    {
        // reglas de validación para login
        $rules = [
            'email' => 'required|valid_email',
            'pass' => 'required|min_length[6]'
        ];

        if (!$this->validate($rules)) {
            // por errores de validación
            $data['titulo'] = 'Iniciar Sesión';
            $data['validation'] = $this->validator;
            
            echo view('front/head_view', $data);
            echo view('front/navbar_view');
            echo view('back/usuario/login', $data);
            echo view('front/footer_view');
        } else {
            // bbtener datos del formulario
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('pass');
            $recordar = $this->request->getPost('recordar');

            // buscar usuario en la base de datos
            $userModel = new usuario_models();
            $user = $userModel->where('email', $email)->where('baja', 'NO')->first();

            if ($user && password_verify($password, $user['pass'])) {
                // login superado
                $sessionData = [
                    'id_usuario' => $user['id_usuario'],
                    'nombre' => $user['nombre'],
                    'apellido' => $user['apellido'],
                    'email' => $user['email'],
                    'perfil_id' => $user['perfil_id'],
                    'logged_in' => true
                ];

                session()->set($sessionData);

                // manejo para "recordar sesión"
                if ($recordar) {
                    // ¿uso de cookies?
                }

                // redirigir según el perfil del usuario
                if ($user['perfil_id'] == 1) {
                    // admin
                    return redirect()->to('/panel_admin')->with('success', 'Bienvenido ' . $user['nombre']);
                } else {
                    // usuario normal
                    //return redirect()->to('/')->with('success', 'Bienvenido ' . $user['nombre']);
                    return redirect()->to('/usuario_controller/bienvenida')->with('success', 'Bienvenido ' . $user['nombre']);

                }
            } else {
                // login fallido
                return redirect()->to('/usuario_controller/login_form')->with('error', 'Email o contraseña incorrectos');
            }
        }
    }

    public function logout()
    {
        // cerrar sesión
        session()->destroy();
        return redirect()->to('/')->with('success', 'Has cerrado sesión exitosamente');
    }

    public function forgot_password()
    {
        $data['titulo'] = 'Recuperar Contraseña';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('back/usuario/forgot_password');
        echo view('front/footer_view');
    }

    // verificar si el usuario está logueado
    private function isLoggedIn()
    {
        return session()->get('logged_in') === true;
    }

    // verificar si el usuario es admin
    private function isAdmin()
    {
        return session()->get('perfil_id') == 1;
    }

    public function bienvenida()
{
    if (!session()->get('logged_in')) {
        return redirect()->to('/usuario_controller/login_form')->with('error', 'Debes iniciar sesión primero.');
    }

    $data['titulo'] = 'Bienvenido';
    $data['nombre'] = session()->get('nombre');

    echo view('front/head_view', $data);
    echo view('front/navbar_view');
    echo view('front/bienvenida_view', $data);
    echo view('front/footer_view');
}

}