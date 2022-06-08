<?php 

    include "C:/laragon/www/carlos/G/dataBase/connect.php";
    $alert = '';
    session_start();

    if (!empty($_SESSION['active'])) {
        header('location:system_open/system.php');
    }
    else{
        if (!empty($_POST)) {
            $user = mysqli_real_escape_string($conexion, $_POST['user']);
            $password = md5(mysqli_real_escape_string($conexion, $_POST['password']));
    
            if (empty($_POST['user']) && empty($_POST['password'])) {
                $alert = '<i class="fa-solid fa-circle-exclamation"></i><span>Ingrese el usuario y la contraseña</span';
            }
            elseif (empty($_POST['user'])) {
                $alert = '<i class="fa-solid fa-circle-exclamation"></i><span>Ingrese el usuario</span>';
            }
            elseif (empty($_POST['password'])) {
                $alert = '<i class="fa-solid fa-circle-exclamation"></i><span>Ingrese la contraseña</span>';
            }
            else{
                $sql_login = "SELECT * FROM cg.user WHERE usuario = '$user' AND clave = '$password'";
    
                $data_login = consulta($conexion, $sql_login);
                if (count($data_login) > 0) {
                    foreach ($data_login as $key => $value) {
                        $_SESSION['active'] = true;
                        $_SESSION['id_user'] = $value['id_user'];
                        $_SESSION['nombre'] = $value['nombre'];
                        $_SESSION['apellido'] = $value['apellido'];
                        // $_SESSION['correo'] = $value['correo'];
                        $_SESSION['usuario'] = $value['usuario'];
                        $_SESSION['rol'] = $value['rol_user'];
                        header('location:system_open/system.php');
                    }
                }
                else{
        
                    $sql_same = "SELECT IF(condata.usersgroup LIKE '%".$user."%',1,0) AS usuario, 
                                        IF(condata.passgroup LIKE '%".$password."%',1,0) AS clave 
                                        FROM(SELECT GROUP_CONCAT(usuario) AS usersgroup, 
                                                    GROUP_CONCAT(clave) AS passgroup 
                                                    FROM cg.user WHERE usuario = '$user' OR clave = '$password') AS condata";

                    $data_same = consulta($conexion, $sql_same);
                    
                    // $arr_same = $data_same;
                    if (!empty($data_same)) {
                        $arr_same = $data_same[0];

                        if ($arr_same['usuario'] == 0 && $arr_same['clave'] == 0) {
                            $alert = "<i class='fa-solid fa-circle-exclamation'></i>
                                    <span>El usuario y la contraseña ingresados son incorrectos</span>";
                        }
                        elseif ($arr_same['usuario'] == 0) {
                            $alert = "<i class='fa-solid fa-circle-exclamation'></i>
                                    <span>El usuario ingresado es incorrecto</span>";   
                        }
                        elseif ($arr_same['clave'] == 0) {
                            $alert = "<i class='fa-solid fa-circle-exclamation'></i>
                                    <span>La contraseña ingresada es incorrecta</span>";   
                        }
                    }

                    session_destroy();
                }
            }
        }
    }


    
?>