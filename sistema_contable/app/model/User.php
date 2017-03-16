<?php


class User
{

    private $id;
    private $email;
    private $usuario;
    private $pass;
    private $estado;
    private $privilegio;

    /**
     * User constructor.
     * @param $id
     * @param $email
     * @param $usuario
     * @param $pass
     * @param $estado
     * @param $privilegio
     */
    public function __construct($id, $email, $usuario, $pass, $estado, $privilegio)
    {
        $this->id = $id;
        $this->email = $email;
        $this->usuario = $usuario;
        $this->pass = $pass;
        $this->estado = $estado;
        $this->privilegio = $privilegio;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * @param mixed $usuario
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }

    /**
     * @return mixed
     */
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * @param mixed $pass
     */
    public function setPass($pass)
    {
        $this->pass = $pass;
    }

    /**
     * @return mixed
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * @param mixed $estado
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
    }

    /**
     * @return mixed
     */
    public function getPrivilegio()
    {
        return $this->privilegio;
    }

    /**
     * @param mixed $privilegio
     */
    public function setPrivilegio($privilegio)
    {
        $this->privilegio = $privilegio;
    }





}