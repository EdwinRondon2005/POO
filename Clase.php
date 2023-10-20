<?php

//Edwin Rondón, C.I.: V-31.157.974, Sección 1 Trayecto II.

class Rectangulo
{
    private $longitud = 1;
    private $ancho = 1;

    public function construct($longitud, $ancho)
    {
        $this->setlong($longitud);
        $this->setancho($ancho);
    }


    public function perimetro()
    {
        return 2 * ($this->longitud) +  2 * ($this->ancho);
    }

    public function area()
    {
        return $this->longitud * $this->ancho;
    }

    public function setlong($longitud)
    {
        if(is_float($longitud) && $longitud > 0.0 && $longitud < 20.0)
        {
            $this->longitud = $longitud;
        }
        else
        {
            echo "Valores inválidos.";
        }
    }

    public function getlong()
    {
        return $this->longitud;
    }

    public function setancho($ancho)
    {
        if(is_float($ancho) && $ancho > 0.0 && $ancho < 20.0)
        {
            $this->ancho = $ancho;
        }
        else
        {
            echo "Valores inválidos.";
        }
    }

    public function getancho()
    {
        return $this->ancho;
    }

if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $longitud = floatval($_POST['Longitud']);
    $ancho = floatval($_POST['Ancho']);
    $objRec = new Rectangulo();
    $objRec->setlong($longitud);
    $objRec->setAncho($ancho);   
}
else
{
    $objRec = new Rectangulo();
}

$perm = $objRec->perimetro;

$area = $objRec->area->area;

?>