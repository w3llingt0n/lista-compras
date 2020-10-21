@extends('principal')
@section('main-content')
<section class="section">
    <table class="highlight">
        <thead>
            <tr>
                <th>Produto</th>
                <th>Preço</th>
                <th>Loja</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($produtos as $produto)
            <tr>
                <td>{{$produto->nome}}</td>
                <td>{{$produto->preco}}</td>
                <td>{{$produto->loja->nome}}</td>
            </tr>
            @empty
            <tr>
                <td colspan="4">Não existem produtos cadastrados.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
    <div class="fixed-action-btn">
        <a href="{{route('create')}}" class="btn-floating btn-large waves-effect waves-light">
            <i class="large material-icons">add</i>
        </a>
    </div>
</section>
@endsection
