@extends('layout.site')

@section('titulo', 'Cursos')

@section('conteudo')
	<div class="container">
		<h3 class="center"> Lista de cursos </h3>
	<div class="row">
		<table>
			<thead>
				<tr>
					<th>Id</th>
					<th>Titulo</th>
					<th>Descrição</th>
					<th>Imagem</th>
					<th>Publicado</th>
					<th>Ação</th>
				</tr>
			</thead>
			<tbody>
				@foreach($registros as $registro)
				<tr>
					<td>{{ $registro->id }}</td>
					<td>{{ $registro->titulo }}</td>
					<td>{{ $registro->descricao }}</td>
					<td><img height="60" src="{{asset($registro->imagem)}}" alt="{{ $registro->titulo }}"></td>
					<td>{{ $registro->publicado }}</td>
					<td>
						<a  class="btn deep-orange" href="{{ route('admin.cursos.editar', $registro->id)}}">Editar</a>
						<a  class="btn deep-orange lighten-2" href="{{ route('admin.cursos.deletar', $registro->id)}}">Deletar</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<div>
		<a class="btn blue" href="{{ route('admin.cursos.adicionar') }}">Adicionar</a>
	</div>
	</div>
@endsection