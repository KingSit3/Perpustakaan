<?php namespace App\Controllers;

use App\Models\UsersModel;

class Login extends BaseController
{
    public function __construct()
    {
        $this->model = new UsersModel();
    }

	public function index()
	{
            echo view('layout/header');
            echo view('login');
            echo view('layout/footer');
    }

    public function login()
    {
        $getEmail = $this->request->getPost('email');
        $getPassword = $this->request->getPost('password');
        $getDatabaseEmail = $this->model->where('email', $getEmail)->first();

        // Jika ada emailnya
        if($getDatabaseEmail){

            // jika passwordnya benar
            if(password_verify($getPassword, $getDatabaseEmail['password'])){

                // tambahkan data session
                session()->set([
                                    'id' => $getDatabaseEmail['id'],
                                    'no_anggota' => $getDatabaseEmail['no_anggota'],
                                    'role' => $getDatabaseEmail['role'],
                                    'nama' => $getDatabaseEmail['nama'],
                                    'login' => true,
                                ]);
                $info = [
                            'nama' => $getDatabaseEmail['nama'],
                        ];

                log_message('info', 'User {nama} Telah Login' , $info);

                session()->setFlashData('success', 'Berhasil Login');
                return redirect()->to('/dashboard');

            // jika passwordnya salah 
            } else {
                
                session()->setFlashData('gagal', 'Email Atau Password Salah');
                return redirect()->to('/login')->withInput();
            }
            
        // Jika emailnya salah
        } else {
            session()->setFlashData('gagal', 'Email Atau Password Salah');
            return redirect()->to('/login')->withInput();
        }
    }
    
    
    public function logout()
    {   
        $getDatabaseEmail = $this->model->where('id', session()->get('id'))->first();

        $info = [
            'nama' => $getDatabaseEmail['nama'],
        ];

        log_message('info', 'User {nama} Telah Logout' , $info);


        // Logout
        $logout = session()->remove(['id', 'role', 'login']);
        session()->setFlashData('success', 'Berhasil Logout');
        return redirect()->to('/login');
    }


}
