<?php
include_once 'libro.php';
class Ejemplar
{
    private Libro $libro;
    private $numEjemplar;
    private $precio;


    public function __construct(Libro &$libro, $numEjemplar, $precio)
    {
        $this->libro = $libro;
        $this->numEjemplar = $numEjemplar;
        $this->precio = $precio;
        if (isset($libro)) {
            $this->libro->add_ejemplar($this);
        }
    }
    public function get_numEjemplar()
    {
        return $this->numEjemplar;
    }
    public function get_precio()
    {
        return $this->precio;
    }
}
