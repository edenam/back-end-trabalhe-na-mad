var teste2 = {

    obterTodasCategorias: function(){

        $.get(
            "/index.php/api/teste2/getCategories",
            {},
            function(data){
                teste2.montaSelectboxCategorias(data);
            },
            'json'
        );

    },

    montaSelectboxCategorias: function(data){

        var $selectCategorias = $("#select-categorias");

        $.each( data,
            function(key, value){
                var o = new Option(value.nm_categoria, value.cd_id);
                $(o).html(value.nm_categoria);
                $selectCategorias.append(o);
            }
        );

        $selectCategorias.select2({
            placeholder: "Selecione as categorias"
        });

    },

    setupMasks: function(){
        $('.data').mask('00/00/0000', {placeholder: "__/__/____"});
        $('.metros').mask('###,00',
            {
                reverse: true,
                placeholder: "000,00 metros"
            }
        );
        $('.kilos').mask('####,000',
            {
                reverse: true,
                placeholder: "0000,000 Kgs"
            }
        );
    },
    
    setupBotaoSalvarProduto: function(){
        $botaoSalvarProduto = $("#botaoSalvarProduto");
        
        $botaoSalvarProduto.click(function(){
            teste2.runValidationsAndGo();
        });
    },

    runValidationsAndGo: function(){

        var formSalvarProduto = $("#formSalvarProduto");

        if(formSalvarProduto.validate({
                rules: {
                    nome: "required",
                    dataFabricacao: "required",
                    tamanho: "required",
                    largura: "required",
                    peso: "required"
                }
            }
        )){

            var serialized = {
                nm_produto: $('#nome', formSalvarProduto).val(),
                dt_fabricacao: $('#dataFabricacao', formSalvarProduto).val(),
                vl_tamanho: $('#tamanho', formSalvarProduto).val(),
                vl_largura: $('#largura', formSalvarProduto).val(),
                vl_peso: $('#peso', formSalvarProduto).val(),
                categorias: $('#select-categorias').val()
            };

            teste2.salvarProduto(serialized);

        }
    },

    salvarProduto: function(formSerialized){

        $.post(
            "/index.php/api/teste2/saveProduto",
            formSerialized,
            function(data){
                if(data.error){
                    alert(data.error);
                }else{
                    // TODO: transformar em MODAL
                    alert("Produto cadastrado com sucesso!");
                    teste2.getAllProdutos();
                    teste2.resetFormAndCloseModal();
                }
            },
            'json'
        );
    },

    resetFormAndCloseModal: function(){
        $('#formSalvarProduto').trigger("reset");
        $("#cadastroProdutoModal").modal('toggle');
    },

    getAllProdutos: function(){
        $.get(
            "/index.php/api/teste2/getProdutos",
            {},
            function(data){
                alert(data);
            },
            'json'
        );
    }
};

$(function() {

    teste2.obterTodasCategorias();
    teste2.setupMasks();
    teste2.setupBotaoSalvarProduto();

});