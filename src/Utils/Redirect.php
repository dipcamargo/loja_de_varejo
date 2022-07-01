<?php

namespace APP\Utils;

class Redirect
{
    public static function redirect(
        string | array $mensagem, 
        string $tipo = 'success',
        string $url = '../View/mensagem.php'
    )
    {
        session_start();
        if (is_array($mensagem)){
            $error = '';
            foreach($mensagem as $msg){
                $error .="<Li>$msg</Li>";
            }
$_SESSION['msg_warning'] = $error;

        }else{
            if ($tipo == 'error')
                $_SESSION['msg_error'] = $mensagem;
            else if ($tipo == 'success')
                $_SESSION['msg_success']= $mensagem;
        }
        header("location:$url");
    }
}

