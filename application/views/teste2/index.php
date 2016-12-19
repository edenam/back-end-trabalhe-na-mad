<!-- Modal de cadastro de produtos -->
<div id="cadastroProdutoModal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">+ Cadastrar Produto</h4>
			</div>
			<div class="modal-body">

				<div class="row">
					<div class="col-sm-6">
						<input type="text" class="form-control" placeholder="Nome">
					</div>

					<div class="col-sm-6">
						<input type="text" class="form-control" placeholder="Data de Fabricação">
					</div>
				</div>

				<div class="row">
					<div class="col-sm-4">
						<input type="text" class="form-control" placeholder="Tamanho">
					</div>

					<div class="col-sm-4">
						<input type="text" class="form-control" placeholder="Largura">
					</div>

					<div class="col-sm-4">
						<input type="text" class="form-control" placeholder="Peso">
					</div>
				</div>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-success" data-dismiss="modal">Salvar</button>
			</div>
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