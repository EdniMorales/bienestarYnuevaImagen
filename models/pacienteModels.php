<?php
// require_once 'config/modeloBase.php';
require_once $_SERVER['DOCUMENT_ROOT']."\cbyni\config\modeloBase.php";


class Usuario extends ModeloBase{
    private $idPaciente;
    private $intputname;
    private $inputAppat;
    private $inputApmat;
    private $customRadioSexo;
    private $dateInicio;
    private $inpuEdad;
    private $inpuEstatura;
    private $inpuOcupacion;
    private $inpuEstadoCivil;
    private $inpuCelular;
    private $email;
    private $inpuRedSocial;
    private $idEstado;
    private $inpuMunicipio;
    private $inpuCP;
    private $inpuColonia;
    private $inpuCalle;
    private $inpuNumCasa;
    private $inpuTelEmergencia;
    private $inpuParentesco;
    private $inpuNombreRecomienda;
    private $inpuMotivo;
    private $select;
    private $inputNombreMedicamento;

    private $tabla;

    public function __construct() {
        parent::__construct();
    }
        /**
     * Get the value of tabla
     */ 
    public function getTabla()
    {
        return $this->tabla;
    }

    /**
     * Set the value of tabla
     *
     * @return  self
     */ 
    public function setTabla($tabla)
    {
        $this->tabla = $tabla;

        return $this;
    }
    
    /**
     * @return mixed
     */
    public function getIdPaciente()
    {
        return $this->idPaciente;
    }

    /**
     * @param mixed $idPaciente
     *
     * @return self
     */
    public function setIdPaciente($idPaciente)
    {
        $this->idPaciente = $idPaciente;

        return $this;
    }
        /**
     * @return mixed
     */
    public function getIntputname()
    {
        return $this->intputname;
    }

    /**
     * @param mixed $intputname
     *
     * @return self
     */
    public function setIntputname($intputname)
    {
        $this->intputname = $intputname;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getInputAppat()
    {
        return $this->inputAppat;
    }

    /**
     * @param mixed $inputAppat
     *
     * @return self
     */
    public function setInputAppat($inputAppat)
    {
        $this->inputAppat = $inputAppat;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getInputApmat()
    {
        return $this->inputApmat;
    }

    /**
     * @param mixed $inputApmat
     *
     * @return self
     */
    public function setInputApmat($inputApmat)
    {
        $this->inputApmat = $inputApmat;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCustomRadioSexo()
    {
        return $this->customRadioSexo;
    }

    /**
     * @param mixed $customRadioSexo
     *
     * @return self
     */
    public function setCustomRadioSexo($customRadioSexo)
    {
        $this->customRadioSexo = $customRadioSexo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDateInicio()
    {
        return $this->dateInicio;
    }

    /**
     * @param mixed $dateInicio
     *
     * @return self
     */
    public function setDateInicio($dateInicio)
    {
        $this->dateInicio = $dateInicio;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getInpuEdad()
    {
        return $this->inpuEdad;
    }

    /**
     * @param mixed $inpuEdad
     *
     * @return self
     */
    public function setInpuEdad($inpuEdad)
    {
        $this->inpuEdad = $inpuEdad;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getInpuEstatura()
    {
        return $this->inpuEstatura;
    }

    /**
     * @param mixed $inpuEstatura
     *
     * @return self
     */
    public function setInpuEstatura($inpuEstatura)
    {
        $this->inpuEstatura = $inpuEstatura;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getInpuOcupacion()
    {
        return $this->inpuOcupacion;
    }

    /**
     * @param mixed $inpuOcupacion
     *
     * @return self
     */
    public function setInpuOcupacion($inpuOcupacion)
    {
        $this->inpuOcupacion = $inpuOcupacion;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getInpuEstadoCivil()
    {
        return $this->inpuEstadoCivil;
    }

    /**
     * @param mixed $inpuEstadoCivil
     *
     * @return self
     */
    public function setInpuEstadoCivil($inpuEstadoCivil)
    {
        $this->inpuEstadoCivil = $inpuEstadoCivil;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getInpuCelular()
    {
        return $this->inpuCelular;
    }

    /**
     * @param mixed $inpuCelular
     *
     * @return self
     */
    public function setInpuCelular($inpuCelular)
    {
        $this->inpuCelular = $inpuCelular;

        return $this;
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
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getInpuRedSocial()
    {
        return $this->inpuRedSocial;
    }

    /**
     * @param mixed $inpuRedSocial
     *
     * @return self
     */
    public function setInpuRedSocial($inpuRedSocial)
    {
        $this->inpuRedSocial = $inpuRedSocial;

        return $this;
    }
    /**
     * @return mixed
     */
    public function getIdEstado()
    {
        return $this->idEstado;
    }

    /**
     * @param mixed $idEstado
     *
     * @return self
     */
    public function setIdEstado($idEstado)
    {
        $this->idEstado = $idEstado;

        return $this;
    }
    
    /**
     * @return mixed
     */
    public function getInpuMunicipio()
    {
        return $this->inpuMunicipio;
    }

    /**
     * @param mixed $inpuMunicipio
     *
     * @return self
     */
    public function setInpuMunicipio($inpuMunicipio)
    {
        $this->inpuMunicipio = $inpuMunicipio;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getInpuCP()
    {
        return $this->inpuCP;
    }

    /**
     * @param mixed $inpuCP
     *
     * @return self
     */
    public function setInpuCP($inpuCP)
    {
        $this->inpuCP = $inpuCP;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getInpuColonia()
    {
        return $this->inpuColonia;
    }

    /**
     * @param mixed $inpuColonia
     *
     * @return self
     */
    public function setInpuColonia($inpuColonia)
    {
        $this->inpuColonia = $inpuColonia;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getInpuCalle()
    {
        return $this->inpuCalle;
    }

    /**
     * @param mixed $inpuCalle
     *
     * @return self
     */
    public function setInpuCalle($inpuCalle)
    {
        $this->inpuCalle = $inpuCalle;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getInpuNumCasa()
    {
        return $this->inpuNumCasa;
    }

    /**
     * @param mixed $inpuNumCasa
     *
     * @return self
     */
    public function setInpuNumCasa($inpuNumCasa)
    {
        $this->inpuNumCasa = $inpuNumCasa;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getInpuTelEmergencia()
    {
        return $this->inpuTelEmergencia;
    }

    /**
     * @param mixed $inpuTelEmergencia
     *
     * @return self
     */
    public function setInpuTelEmergencia($inpuTelEmergencia)
    {
        $this->inpuTelEmergencia = $inpuTelEmergencia;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getInpuParentesco()
    {
        return $this->inpuParentesco;
    }

    /**
     * @param mixed $inpuParentesco
     *
     * @return self
     */
    public function setInpuParentesco($inpuParentesco)
    {
        $this->inpuParentesco = $inpuParentesco;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getInpuNombreRecomienda()
    {
        return $this->inpuNombreRecomienda;
    }

    /**
     * @param mixed $inpuNombreRecomienda
     *
     * @return self
     */
    public function setInpuNombreRecomienda($inpuNombreRecomienda)
    {
        $this->inpuNombreRecomienda = $inpuNombreRecomienda;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getInpuMotivo()
    {
        return $this->inpuMotivo;
    }

    /**
     * @param mixed $inpuMotivo
     *
     * @return self
     */
    public function setInpuMotivo($inpuMotivo)
    {
        $this->inpuMotivo = $inpuMotivo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSelect()
    {
        return $this->select;
    }

    /**
     * @param mixed $select
     *
     * @return self
     */
    public function setSelect($select)
    {
        $this->select = $select;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getInputNombreMedicamento()
    {
        return $this->inputNombreMedicamento;
    }

    /**
     * @param mixed $inputNombreMedicamento
     *
     * @return self
     */
    public function setInputNombreMedicamento($inputNombreMedicamento)
    {
        $this->inputNombreMedicamento = $inputNombreMedicamento;

        return $this;
    }

    public function getMunModels(){
    	$consulta = "SELECT mp.id,mp.municipio,es.estado FROM estados_municipios esmp
									INNER JOIN municipios mp
									ON esmp.municipios_id = mp.id
									INNER JOIN estados es
									ON esmp.estados_id = es.id
									WHERE es.id = {$this->getIdEstado()}";
    	$query = $this->db->query($consulta);

        return $query;
    }

    public function getEmailExis(){
        $validar = "SELECT cl.correoCliente FROM cliente cl WHERE cl.correoCliente = '{$this->getEmail()}'";
        $query = $this->db->query($validar);

        return $query;
    }

    public function insertPaciente(){
        $insert = "INSERT INTO cliente
        (idCliente, nombreCliente, apPatCliente, apMatCliente, generoCliente,edadCliente,fechaNacimientoCliente, estaturaCliente,ocupacionCliente, estadoCivilCliente,celCliente, correoCliente, redSocialCliente,calleCliente,cpCliente,numeroCasaCleinte,coliniaCliente,idMuncipioCliente,nombreRecomiendaCliente,motivoCliente, telefonoEmergencia,parentescoEmergenciaCliente, medicamentoAnteriorCliente,envioCliente, fechaAltaCliente, statusCliente)
        VALUES ('{$this->getIdPaciente()}', '{$this->getIntputname()}', '{$this->getInputAppat()}', '{$this->getInputApmat()}', '{$this->getCustomRadioSexo()}', '{$this->getInpuEdad()}', '{$this->getDateInicio()}', '{$this->getInpuEstatura()}', '{$this->getInpuOcupacion()}', '{$this->getInpuEstadoCivil()}', '{$this->getInpuCelular()}', '{$this->getEmail()}', '{$this->getInpuRedSocial()}', '{$this->getInpuCalle()}', '{$this->getInpuCP()}', '{$this->getInpuNumCasa()}', '{$this->getInpuColonia()}', '{$this->getInpuMunicipio()}', '{$this->getInpuNombreRecomienda()}', '{$this->getInpuMotivo()}', '{$this->getInpuTelEmergencia()}', '{$this->getInpuParentesco()}', '{$this->getInputNombreMedicamento()}', '1', NOW(), '1')";
        $guardar = $this->db->query($insert);

        $result = false;
        if($guardar){
            $result = true;
        }

        return $result;
    }

    public function insertEnfermedad(){
        $result = false;
        foreach($this->getSelect() as $valor){
            $insertEnfermedad = "INSERT INTO {$this->getTabla()}
            VALUES (null,'{$this->getIdPaciente()}', '{$valor[0]}', '{$valor[2]}', '{$valor[1]}')";
            $guardar = $this->db->query($insertEnfermedad);

            if($guardar){
                $result = true;
            }

        }
        return $result;
    }
}