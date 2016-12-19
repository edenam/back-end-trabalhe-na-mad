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
        $selectCategorias.html("<option>Selecione uma categoria</option>");

        $.each( data,
            function(key, value){
                var o = new Option(value.nm_categoria, value.cd_id);
                $(o).html(value.nm_categoria);
                $selectCategorias.append(o);
            }
        );

    },
};

$(function() {

    teste2.obterTodasCategorias();
    

});