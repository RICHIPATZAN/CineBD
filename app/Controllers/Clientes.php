<?php

namespace App\Controllers;
use App\Models\ClientesModels;
use CodeIgniter\Controller;



class Clientes extends Controller
{
    // user list
        public function cliente()
        {
        
            $ClientesModels = new ClientesModels();
       $data['Clientes']=$ClientesModels->orderBy ('cliente_id','DESC')->findAll();
        return view ('Cliente_Vista',$data);
    }

    //use form
    public function nuevo(){
        return view('cliente_nuevo');
    }


//insert data into base

public function guardar(){
    $ClientesModels = new ClientesModels();
    $data =[
            'nombre' => $this -> request ->getVar('nombre'),
            'apellido' => $this -> request ->getVar('apellido'),
            'fecha_nacimiento' => $this -> request ->getVar('fecha_nacimiento'),
            'fecha_suscripcion' => $this -> request ->getVar('fecha_suscripcion'),
            'correo_electronico' => $this -> request ->getVar('correo_electronico'),
            'telefono_movil' => $this -> request ->getVar('telefono_movil'),
    ];
    $ClientesModels->insert ($data);
    return $this->response->redirect(site_url('/users-list'));
}


    // view single user
    public function singleUser($id = null){
        $ClientesModels = new ClientesModels();
        $data['user_obj'] = $ClientesModels->where('cliente_id', $id)->first();
        return view('Editar_cliente', $data);

    }

 // update user data
 public function update(){
    $ClientesModels = new ClientesModels();
    $id = $this->request->getVar('id');
    $data = [
             'nombre' => $this -> request ->getVar('nombre'),
            'apellido' => $this -> request ->getVar('apellido'),
            'fecha_nacimiento' => $this -> request ->getVar('fecha_nacimiento'),
            'fecha_suscripcion' => $this -> request ->getVar('fecha_suscripcion'),
            'correo_electronico' => $this -> request ->getVar('correo_electronico'),
            'telefono_movil' => $this -> request ->getVar('telefono_movil'),
    ];
    $ClientesModels->update($id, $data);
    return $this->response->redirect(site_url('/users-list'));
}

  //delete user
    public function delete($id = null){
        $ClientesModels = new ClientesModels();
        $data['clientes'] = $ClientesModels->where('cliente_id', $id)->delete($id);
        return $this->response->redirect(site_url('/users-list'));
    }    
}
    
