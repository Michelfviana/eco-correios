@isset($fornecedores)
    @forelse($fornecedores as $indice => $fornecedor)
    @dd($loop)
        iteração atual{{ $loop->iteration }}
        <br>
        Fornecedor: {{ $fornecedor['nome'] }}
        <br>
        Status: {{ $fornecedor['status'] }}
        <br>
        CPF: {{ $fornecedor['cpf'] ?? 'Não prenchido' }}
        <br>
        Telefone: {{ $fornecedor['ddd'] ?? '' }} {{ $fornecedor['telefone'] ?? '' }}
        <br>
        @if ($loop->first)
            primeira iteração do loop
            <br>
        @endif
        @if ($loop->last)
            última iteração do loop
            <br>
            Total de registros: {{ $loop->count }}
        @endif
    @empty
        não existem fornecedores cadastrados
    @endforelse
@endisset
