<?php
class Model extends CI_Model
{
  public function check_user($user, $password){
    $str = 'usuarios.idusuarios idusuario, usuarios.usuario, usuarios.nombre, usuarios.email, usuarios.clave, usuarios.status, ';

    $q= $this
        ->db
        ->select($str)
	      ->from('usuarios')
        ->where('usuario', $user)
        ->where('clave', $password)
        ->get();
    if($q->num_rows() > 0) {
      return $q->result_array();
    }
    return array();
  }

  public function get_donadores($status) {
    $q = $this
        ->db
        ->select("*")
        ->from('donadores')
        ->where('status', $status)
        ->order_by('created_at', 'desc')
        ->get();
      if($q->num_rows() > 0) {
        return $q->result_array();
      }
      return array();
  }
}