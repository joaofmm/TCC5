@include('head.head')

@include('barra-navegacao.menu')

@include('catalogo', ['catalogo_nome' => 'feminino'])

@include('carrinho')

@include('listagem-produtos', $produtos);

@include('footer.footer')