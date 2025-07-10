<?php
namespace App\Filters;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Auth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Verificar si el usuario está autenticado
        if (!session()->get('logged_in')) 
        {
            // Redirigir al usuario a la página de inicio de sesión
            return redirect()->to('/login');
        }
    }    

 //---------------------------------------------------------------------------
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // No se necesita lógica después de la solicitud
        // Este método puede permanecer vacío si no se requiere ninguna acción posterior
    }        
}