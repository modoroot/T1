<?php
include_once 'especialidad.php';
class Libro
{
    private Especialidad $especialidad;
    private $titulo;
    private $idioma;
    private $ejemplar;

    public function __construct(Especialidad &$especialidad, $titulo, $idioma)
    {
        $this->especialidad = $especialidad;
        $this->titulo = $titulo;
        $this->idioma = $idioma;
        $this->ejemplar = array();

        if (isset($especialidad)) {
            $this->especialidad->add_libro($this);
        }
    }
    public function add_ejemplar($ejemplar)
    {
        array_push($this->ejemplar, $ejemplar);
    }
    public function remove_ejemplar($ejemplar)
    {
        $this->ejemplar = NULL;
    }
    public function get_especialidad()
    {
        return $this->especialidad;
    }
    public function get_titulo()
    {
        return $this->titulo;
    }
    public function get_idioma()
    {
        return $this->idioma;
    }
}
