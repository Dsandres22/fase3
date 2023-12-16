<?php
//genero una variable
$alert='';
session_start();

//valido si hay una sesion true

if(!empty($_SESSION['active']))//si existe me lleva a sistema
{
    header('location:/index.html/');
}else{      //sino debe ejecutar todo el codigo

    // valido el formulario
    if(!empty($_POST))  //valido si hay envio
    {
        //valido que escriban en las casillas
        if(empty($_POST['usuario']) || empty($_POST['clave']))
        {    //si la variable usuario esta
            $alert="extitoso";

        }else{  //me conecto a la base de datos}

        require_once "conex.php";

        $user=mysqli_real_esccapee_string($connetion,$_POST['usuario
        ']);
        $pass=mysqli_real_esccapee_string($connetion,$_POST['clave
        ']);

        //consulto que existan datos
        $query=mysqli_query($onnection,"SELECT * FROM usuario WHERE usuario='$user' AND clave='$pass ' ");
        $result=mysqli_num_rows($query);     

        if($result>0){     //cuando encuentra usuario y clave correcta

            $data= mysqli_fetch_array($query);   //guarda el array
            // guardo en variables de sesion
            $_SESSION['active'] =true; //creo sesion
            $_SESSION['idUser'] =$data['idusuario']; //creo sesion usuario
            $_SESSION['nombre'] =$data['nombre'];
            $_SESSION['email'] =$data['correo'];
            $_SESSION['user'] =$data['usuario'];

            //al tener estos datos vamos a redireccionar a la carpeta sistema
            header('location:/index.html/');

            }else{
                $alert='el usuario o clave estan erradas';
                //destruyo la sesion
                session_destroy();
            }
        }

    }
    }   

?>