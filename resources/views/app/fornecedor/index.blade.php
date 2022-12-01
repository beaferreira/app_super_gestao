<h3>Fornecedor</h3>

{{-- comentário --}}

@php
/*
   if(){
    
   } elseif() {
   
   } else() {

   }
   */
@endphp

@isset($fornecedores)
   Fornecedor: {{ $fornecedores[0]['nome'] }}
   <br>
   Status: {{ $fornecedores[0]['status'] }}
   <br>
   @isset( $fornecedores[0]['cnpj'])
   CPNJ: {{ $fornecedores[0]['cnpj'] }}
   @endisset
@endisset
