<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
        {
            return view('Site.Main.index');
        }

        public function perfil()
        {
            return view('admin.perfil.perfil');
        }
        public function EditarPerfil()
        {
            return view('admin.perfil.editar');
        }
        public function TabelaShow(){
            return view('admin.perfil.table');
        }
}
