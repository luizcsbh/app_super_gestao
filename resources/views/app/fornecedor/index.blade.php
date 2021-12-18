<h3>Fornecedores</h3>

@php
/*
    if(!<condicao>) {} //enquanto executa se o retornofor true
  
*/
@endphp

{{-- @unless execute se o retorno for falso --}}

Forncedor: {{ $fornecedores[0]['nome'] }}
<br>
Status: {{ $fornecedores[0]['status'] }}
<br>
@if( !($fornecedores[0]['status'] == 'S') )
        Fornecedor inativo
@endif
<br>
@unless($fornecedores[0]['status'] == 'S') <!-- se o retorno da condição for false -->
    Fornecedor inativo
@endunless
<br>