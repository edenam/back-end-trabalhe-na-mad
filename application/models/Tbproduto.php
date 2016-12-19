<?php


class Tbproduto extends MY_Model
{
    protected $tbName = "tb_produto";

    protected $defaultOrderBy = "cd_id";

    private $cd_id;
    private $nm_produto;
    private $dt_fabricacao;
    private $vl_tamanho;
    private $vl_largura;
    private $vl_peso;
    private $categorias;

    public function __construct()
    {
        parent::__construct();
    }

    public function saveProduto($produto){

        $categorias = $produto['categorias'];
        unset($produto['categorias']);

        $this->db->insert('tb_produto', $produto);
        $id = $this->db->insert_id();

        foreach($categorias as $categoria => $valor){

            $produto_categoria = [
                'cd_id_produto' => $id,
                'cd_id_categoria' => $valor
            ];

            $this->db->insert('produto_categoria', $produto_categoria);

        }
    }

    public function getAll(){

        $this->db->order_by('cd_id', "ASC");

        $this->db->select('tb_produto.*, tb_categoria.nm_categoria');
        $this->db->from('tb_produto');
        $this->db->join('produto_categoria', 'produto_categoria.cd_id_produto = tb_produto.cd_id');
        $this->db->join('tb_categoria', 'produto_categoria.cd_id_categoria = tb_categoria.cd_id');

        $query = $this->db->get();

        return $query->result();

    }
}