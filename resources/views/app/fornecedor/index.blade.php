<h3>Fornecedores</h3>

@php
/*
    if(isset()) {} //retornar true se a variavel estiver definida
  
*/
@endphp
@isset($fornecedores)
    Forncedor: {{ $fornecedores[0]['nome'] }}
    <br>
    Status: {{ $fornecedores[0]['status'] }}
    <br>
    @isset($fornecedores[0]['cnpj'])
        CNPJ: {{ $fornecedores[0]['cnpj'] }}
    @endisset
@endisset
