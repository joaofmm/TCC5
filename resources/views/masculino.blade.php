@include('head.head')

@include('barra-navegacao.menu')

@include('catalogo', ['catalogo_nome' => 'masculino'])

@include('carrinho')

@include('listagem-produtos', $produtos);

@include('footer.footer')