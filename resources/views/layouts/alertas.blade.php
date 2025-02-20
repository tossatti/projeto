
@section('alertas')
        <!-- alertas -->
        @if($errors->any())<!-- mensagem de erro -->
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            @foreach($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fechar"></button>
        </div>
        @endif<!-- mensagem de erro -->
        @if(session('success'))<!-- mensagem de sucesso -->
        <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fechar"></button>
        </div>
        @endif<!-- mensagem de sucesso -->
        <!-- /alertas -->
@endsection