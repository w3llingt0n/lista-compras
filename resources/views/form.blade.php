@extends('principal')
@section('main-content')
<section class="section">
    <div class="row">
        <form class="col s12" action="{{route('store')}}" method="POST">
            {{-- cross-site request forgery --}}
            @csrf
            <div class="row">
                <div class="row">
                    <div class="input-field col s12">
                        <input type="text" name="nome" id="nome">
                        <label for="nome">Nome</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input type="text" name="preco" id="preco">
                        <label for="preco">Preço</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <select name="loja_id" id="loja_id">
                            <option value="" disabled selected>Selecione uma loja</option>
                            @foreach ($lojas as $loja)
                                <option value="{{$loja->id}}">{{$loja->nome}}</option>
                            @endforeach
                        </select>
                        <label for="loja_id">Loja</label>
                    </div>

                </div>
                <div class="row">
                    <div class="right-align">
                        <a href="{{url()->previous()}}" class="btn-flat waves-effect">Cancelar</a>
                        <button class="btn waver-effect waves-light" type="submit">Salvar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection
