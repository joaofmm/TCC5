@include('head.head')

@include('barra-navegacao.menu')

@include('catalogo', ['catalogo_nome' => 'time'])

@include('carrinho')

@include('listagem-produtos', $produtos);

@include('footer.footer')