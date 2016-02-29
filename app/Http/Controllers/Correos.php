<?php

namespace App\Http\Controllers;
use Mail;
Use Redirect;
use Illuminate\Http\Request;

class Correos extends Controller
{
      public function store(Request $datos){


      	if ($datos->hasFile('curriculo')) {

			$file = $datos->file('curriculo');
			$destinationPath = 'uploads/files';
			$extension = $file->getClientOriginalExtension();
			$filename1 = "".str_random(3).".".$extension."";
			$upload_success = $file->move($destinationPath, $filename1);			
			//Storage::disk('local')->put($nombre,  \File::get($file));

		}

		$nombre        =  $datos->input('nombre');
		$email         =  $datos->input('email');
		$telefono_fijo =  $datos->input('telefono_fijo');
		$celular       =  $datos->input('celular');
		$profesion     =  $datos->input('profesion');
		$mensaje       =  $datos->input('mensaje');
		$cv            =  ''.$destinationPath.'/'.$filename1.'';

		$data = array('nombre'=>$nombre,'email'=>$email,'telefono_fijo'=>$telefono_fijo, 'celular'=>$celular, 'profesion'=>$profesion, 'mensaje'=>$mensaje);

		
		

      	Mail::send('emails.curriculo', $data, function ($message) use($cv) {
      	   // $message->from('john@johndoe.com', 'John Doe');
      	    $message->to('registrohojadevidamulti@gmail.com', 'Servicio a Domicilio');
      	
      	 //   $message->to('john@johndoe.com', 'John Doe');    	
      	
      	    $message->subject('Curriculo Nuevo');
      	
      	    $message->priority(3);
      	
      	    $message->attach($cv);
      	});

      	return redirect('contacto');

    }

}
