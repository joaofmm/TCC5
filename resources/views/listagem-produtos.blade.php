    <!--Listagem de Produtos -->
    <section class="produtos">
        @foreach ($produtos as $produto)
        <div class="produto promo">
            <img src="https://dcdn-us.mitiendanube.com/stores/004/131/792/products/19977bdd-f04b-418c-a657-3a2453f186df-6c68d8f23b71581d5717201887504235-480-0.jpeg"
                alt="AirMax Plus TN1">
            <h4>{{ $produto->nome }}</h4>
            <p>R$ {{ $produto->preco }}</p>
            <p>{{ $produto->descricao }}</p>
            <button
                onclick="adicionarAoCarrinho('AirMax Plus TN1', 279.00, 'https://dcdn-us.mitiendanube.com/stores/004/131/792/products/19977bdd-f04b-418c-a657-3a2453f186df-6c68d8f23b71581d5717201887504235-480-0.jpeg')">Comprar</button>
        </div>
        @endforeach
    </section>
