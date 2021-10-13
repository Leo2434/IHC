<?php
    namespace App\Models;

    use CodeIgniter\Model;

    class miModelo extends Model{

        protected $db = null;
        public function __construct()
        {
            $this->db=\Config\DataBase::connect();
        }

        public function selectUsuarios(){



            //$db = \Config\DataBase::connect(); //establecemos la cedena de conneccion

            $tab = $this->db->table('tbl_usuarios u'); //esto es PDO, y asignele un alias u \\\\\ $tab = $this->db->table('tbl_usuaios u');

            //$tab->select('u.*');//no deberia invocar todo

            $tab->select('u.USU_USUARIO, u.USU_ESTADO, u.DAP_ID, dp.DAP_NOMBRES, dp.DAP_CORREO');

            //Quiero hacer un join

            $tab->join('tbl_datosp dp', 'dp.DAP_ID = u.DAP_ID');

            //Quiero poner condiciones

            $tab->where('u.USU_ESTADO',1);

            $query = $tab->get(); //obtenemos todos los elementos de esa tabla
            $user = $query->getResultArray(); //los convertimos en un arreglo

            return $user;

        }

        

    }



?>