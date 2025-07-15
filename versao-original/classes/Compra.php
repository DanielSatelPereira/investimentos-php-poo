<?php

require_once 'Database.php';
class Compra
{

    private $db;

    public function __construct()
    {
        $this->db = (new Database())->connect();
    }

    public function adicionarCompra($ativo, $quantidade, $valorUnitario, $dataCompra)
    {
        $sql = "INSERT INTO compras (ativo, quantidade, valor_unitario, data_compras) VALUES (:ativo, :quantidade, :valor_unitario,:data_compras)";
        $inserir = $this->db->prepare($sql);
        $inserir->execute([
            'ativo' => $ativo,
            'quantidade' => $quantidade,
            'valor_unitario' => $valorUnitario,
            'data_compras' => $dataCompra
        ]);

        return true;
    }
}