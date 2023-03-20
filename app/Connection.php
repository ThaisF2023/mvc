<?php
    namespace App;
    use PDOException; 
    use PDO; 

    class Connection{
        public function getDb(){
            #informações do banco
            $host  =  "localhost";
            $user  =  "root";
            $pass  =  "root";
            $db_name = "mvc_49";
            $db_driver = "mysql";
            $charset = "utf8";

            #informações sobre o banco
            $nome_sistema = "MVC DA TURMA M49";
            $email = "thaisfernanda@gmail.com";

            try{
                $conn = new PDO(
                    $db_driver . ":host" . $host . ";dbname" . $db_name. "," . $user, $pass);
                    return $conn;

            } catch( PDOException $error ) {
                //vamos tratar o erro caso exista em outro momento 
                //por exemplo podemos enviar um email para o adm 
                //caso erro aconteça na conexão

                die("Erro de conexão" . $error->getMessage());
            }

        }
    }


?>