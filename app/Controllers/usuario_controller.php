<?php
namespace App\Controllers;
use App\Models\usuario_model;
use CodeIgniter\Controller;

class usuario_controller extends Controller
{
    public function __construct()
    {
        helper(['form', 'url']);
    }

    public function create()
    {
        $dato['titulo'] = 'Registro';
        echo view('front/head_view', $dato);
        echo view('front/navbar_view');
        echo view('back/usuario/registro');
        echo view('front/footer_view');
    }

    public function FormValidation()
    {
        // reglas de validación
        $rules = [
            'nombre' => 'required|min_length[3]|max_length[50]',
            'apellido' => 'required|min_length[3]|max_length[25]',
            'email' => 'required|min_length[4]|max_length[100]|valid_email|is_unique[usuarios.email]',
            'telefono' => 'permit_empty|min_length[10]|max_length[15]',
            'empresa' => 'permit_empty|max_length[100]',
            'sector' => 'permit_empty|in_list[tecnologia,salud,educacion,finanzas,retail,otro]',
            'pass' => 'required|min_length[6]|max_length[255]',
            'confirmPassword' => 'required|matches[pass]'
        ];

        // validar datos
        if (!$this->validate($rules)) {
            // en caso de errores, volver a mostrar el formulario con los errores
            $data['titulo'] = 'Registro';
            $data['validation'] = $this->validator;
            
            echo view('front/head_view', $data);
            echo view('front/navbar_view');
            echo view('back/usuario/registro', $data);
            echo view('front/footer_view');
        } else {
            // si pasa la validación , guardar en la base de datos
            $formModel = new usuario_model();
            
            $userData = [
                'nombre' => $this->request->getPost('nombre'),
                'apellido' => $this->request->getPost('apellido'),
                'email' => $this->request->getPost('email'),
                'telefono' => $this->request->getPost('telefono'),
                'empresa' => $this->request->getPost('empresa'),
                'sector' => $this->request->getPost('sector'),
                'pass' => password_hash($this->request->getPost('pass'), PASSWORD_DEFAULT),
                'baja' => 'NO',
                'perfil_id' => 2 // por defecto usuario común
            ];

            if ($formModel->save($userData)) {
                // registrado
                return redirect()->to('/usuario_controller/login_form')->with('success', 'Usuario registrado exitosamente. Ya puedes iniciar sesión.');
            } else {
                // error para guardar
                return redirect()->to('/usuario_controller/create')->with('error', 'Error al registrar el usuario');
            }
        }
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
            $userModel = new usuario_model();
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
                    return redirect()->to('/')->with('success', 'Bienvenido ' . $user['nombre']);
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
}