<script type="text/javascript" src="/assets/js/teste2.js"></script>

<!-- Modal de cadastro de produtos -->
<div id="cadastroProdutoModal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">+ Cadastrar Produto</h4>
			</div>
			<div class="modal-body">

				<form id="formSalvarProduto">
				<div class="row">
					<div class="col-sm-6">
						<input type="text" name="nome" id="nome" class="form-control" placeholder="Nome" required>
					</div>

					<div class="col-sm-6">
						<input type="date" name="dataFabricacao" id="dataFabricacao" class="form-control data" placeholder="Data de Fabricação" required>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-4">
						<input type="text" name="tamanho" id="tamanho" class="form-control metros" placeholder="Tamanho" required>
					</div>

					<div class="col-sm-4">
						<input type="text" name="largura" id="largura" class="form-control metros" placeholder="Largura" required>
					</div>

					<div class="col-sm-4">
						<input type="text" name="peso" id="peso" class="form-control kilos" placeholder="Peso" required>
					</div>
				</div>

			</div>

			<div class="modal-body">
				<div class="row">
					<div class="col-sm-12">
						<select name="categoria" id="select-categorias" multiple required></select>
					</div>
				</div>
			</div>

			<div class="modal-footer">
				<div class="row">
					<div class="col-sm-6 text-center">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
					</div>

					<div class="col-sm-6 text-center">
						<button type="button" id="botaoSalvarProduto" class="btn btn-success">Salvar</button>
					</div>
				</div>
			</div>

			</form>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-sm-4">
		<h3>Produtos Mongeral Aegon</h3>
	</div>
</div>

<div class="row">
	<div class="col-sm-12 text-right">
		<button type="button" class="btn btn-success" data-toggle="modal" data-target="#cadastroProdutoModal">+ Cadastrar Produto</button>
	</div>
</div>

<div>

	<table class="table table-striped">
		<thead>
		<tr>
			<th>ID</th>
			<th>Nome</th>
			<th>Data de Fabricação</th>
			<th>Tamanho</th>
			<th>Largura</th>
			<th>Peso</th>
			<th>Categorias</th>
		</tr>
		</thead>

		<tbody>
		<tr>
			<td>John</td>
			<td>Doe</td>
			<td>john@example.com</td>
		</tr>
		<tr>
			<td>Mary</td>
			<td>Moe</td>
			<td>mary@example.com</td>
		</tr>
		<tr>
			<td>July</td>
			<td>Dooley</td>
			<td>july@example.com</td>
		</tr>
		</tbody>

	</table>

</div>