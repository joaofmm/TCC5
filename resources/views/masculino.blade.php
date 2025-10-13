{{-- IMPORTAÇÃO DO BODY --}}
  @include('head.head')

  {{-- BARRA DE NAVEGAÇÃO --}}
  @include('barra-navegacao.menu')


    <!-- carrinho -->
    <div class="cart" id="cart">
        <div class="cart-header">
            <h3>Carrinho</h3>
            <button class="close-cart" onclick="toggleCart()">X</button>
        </div>
        <ul id="cart-items"></ul>
        <div id="cart-total">Total: R$ 0,00</div>
        <button class="finalizar" onclick="finalizarPedido()">Finalizar Compra</button>
    </div>

    <!-- catálago -->
    <div class="slider">
        <div class="title">
            Catálago Masculino!
        </div>
        <div class="images">
            <div class="item" style="--i: 1">
                <img src="./img/masc/Catálago/1.png">
            </div>
            <div class="item" style="--i: 2">
                <img src="./img/masc/Catálago/2.png">
            </div>
            <div class="item" style="--i: 3">
                <img src="./img/masc/Catálago/3.png">
            </div>
            <div class="item" style="--i: 4">
                <img src="./img/masc/Catálago/4.png">
            </div>
            <div class="item" style="--i: 5">
                <img src="./img/masc/Catálago/5.png">
            </div>
            <div class="item" style="--i: 6">
                <img src="./img/masc/Catálago/6.png">
            </div>
        </div>

        <!-- barra separada -->
        <div class="content">
            <div class="item active">
                <h1>ALFAIATARIA EXECUTIVA</h1>
                <div class="des">
                    <p>
                        Descubra o ápice da <strong>SOFISTICAÇÃO</strong> com nossa seleção de <strong>TERNOS</strong>, <strong>CAMISAS SOCIAIS</strong> e <strong>GRAVATAS</strong>, nacionais e importados. Cada peça é cuidadosamente escolhida para oferecer <strong>CORTES IMPECÁVEIS</strong>, <strong>TECIDOS PREMIUM</strong> e detalhes que fazem toda a diferença.<br>
                        A coleção <strong>ALFAIATARIA EXECUTIVA</strong> é para quem busca <strong>ELEGÂNCIA</strong>, <strong>PRESENÇA</strong> e <strong>CONFORTO</strong>, seja no escritório, eventos ou ocasiões especiais. Vista-se com <strong>CLASSE</strong>, <strong>ESTILO</strong> e <strong>EXCLUSIVIDADE</strong>.
                    </p>
                </div>
                <button>Ver Mais</button>
            </div>
            <div class="item">
                <h1>SHORTS PREMIUM LUXO</h1>
                <div class="des">
                    <p>
                        Experimente o máximo em sofisticação com nossos <strong>shorts premium luxo</strong>, confeccionados com malhas nacionais e importadas de altíssima qualidade. Cada peça é pensada para oferecer <strong>caimento perfeito</strong>, <strong>durabilidade excepcional</strong> e um toque de exclusividade que eleva qualquer visual. Ideal para quem não abre mão do conforto aliado ao design refinado e à autenticidade que só um produto de luxo pode proporcionar.
                    </p>
                </div>
                <button>Ver Mais</button>
            </div>
            <div class="item">
                <h1>CALÇA EXCLUSIVA</h1>
                <div class="des">
                    <p>
                        Descubra a <strong>exclusividade</strong> em cada detalhe com nossas <strong>calças premium</strong>, feitas em malhas nacionais e importadas que garantem <strong>conforto</strong>, <strong>durabilidade</strong> e <strong>estilo único</strong>. Perfeitas para quem busca um visual autêntico e moderno, sem abrir mão da qualidade e do ajuste perfeito em qualquer ocasião. Sua melhor escolha para elevar o look com atitude e personalidade.
                    </p>

                </div>
                <button>Ver Mais</button>
            </div>
            <div class="item">
                <h1>CAMISAS <br> DE ALTA <br> QUALIDADE</h1>
                <div class="des">
                    <p>
                        Camisas confeccionadas com <strong>malha nacional premium</strong> e <strong>malha importada</strong>, pensadas para quem exige <strong>conforto</strong>, <strong>estilo</strong> e <strong>acabamento impecável</strong>. Modelagens versáteis que valorizam o corpo e elevam qualquer composição — do casual ao sofisticado. Ideal para quem busca <strong>qualidade</strong> e <strong>presença</strong> em cada detalhe.
                    </p>

                </div>
                <button>Ver Mais</button>
            </div>
            <div class="item">
                <h1>CALÇADOS ESSENCIAIS</h1>
                <div class="des">
                    <p>
                        Seleção exclusiva de <strong>CALÇADOS</strong> que unem <strong>ESTILO</strong>, <strong>CONFORTO</strong> e <strong>QUALIDADE PREMIUM</strong>. Nossa coleção traz modelos nacionais e importados, cuidadosamente escolhidos para quem busca <strong>EXCLUSIVIDADE</strong> e presença marcante em cada passo. Do clássico ao contemporâneo, calçados pensados para completar seu visual com <strong>SOFISTICAÇÃO</strong> e personalidade.
                    <   /p>
                </div>
                <button>Ver Mais</button>
            </div>
            <div class="item">
                <h1>VESTUÁRIO DE <br> INVERNO</h1>
                <div class="des">
                    <p>
                        Roupas selecionadas para os <strong>DIAS MAIS FRIOS</strong>, com peças <strong>NACIONAIS E IMPORTADAS</strong> que unem <strong>QUALIDADE</strong>, <strong>CONFORTO</strong> e <strong>ESTILO ÚNICO</strong>. Nossa coleção traz <strong>BLUSAS</strong>, <strong>MOLETOM</strong>, <strong>JAQUETAS</strong> e <strong>TECH FLEECE</strong> exclusivos, pensados para quem não abre mão de estar aquecido com <strong>ELEGÂNCIA</strong> e <strong>PERSONALIDADE</strong>.<br>
                        Produtos escolhidos para garantir <strong>DURABILIDADE</strong>, <strong>DESIGN DIFERENCIADO</strong> e o melhor do <strong>VESTUÁRIO DE INVERNO</strong>.
                    </p>

                </div>
                <button>Ver Mais</button>
            </div>
        </div>
    <button id="prev"><</button>
    <button id="next">></button>
    </div>

    <!--produtos 1-->
    <section class="produtos">
        <div class="produto promo">
            <img src="https://dcdn-us.mitiendanube.com/stores/004/131/792/products/19977bdd-f04b-418c-a657-3a2453f186df-6c68d8f23b71581d5717201887504235-480-0.jpeg"
                alt="AirMax Plus TN1">
            <h4>AirMax Plus TN1</h4>
            <p>R$ 279,00</p>
            <p>Air Max Plus TN 1</p>
            <p1>“PROMOÇÃO”</p1>
            <button
                onclick="adicionarAoCarrinho('AirMax Plus TN1', 279.00, 'https://dcdn-us.mitiendanube.com/stores/004/131/792/products/19977bdd-f04b-418c-a657-3a2453f186df-6c68d8f23b71581d5717201887504235-480-0.jpeg')">Comprar</button>
        </div>
        <div class="produto">
            <img src="https://dcdn-us.mitiendanube.com/stores/004/131/792/products/19977bdd-f04b-418c-a657-3a2453f186df-6c68d8f23b71581d5717201887504235-480-0.jpeg"
                alt="AirMax Plus TN2">
            <h4>AirMax Plus TN2</h4>
            <p>R$ 299,00</p>
            <p>Air Max Plus TN 2 “Shadow”</p>
            <button
                onclick="adicionarAoCarrinho('AirMax Plus TN2', 299.00, 'https://dcdn-us.mitiendanube.com/stores/004/131/792/products/19977bdd-f04b-418c-a657-3a2453f186df-6c68d8f23b71581d5717201887504235-480-0.jpeg')">Comprar</button>
        </div>
        <div class="produto promo">
            <img src="https://dcdn-us.mitiendanube.com/stores/004/131/792/products/19977bdd-f04b-418c-a657-3a2453f186df-6c68d8f23b71581d5717201887504235-480-0.jpeg"
                alt="AirMax Plus TN3">
            <h4>AirMax Plus TN3</h4>
            <p>R$ 259,00</p>
            <p>Air Max Plus TN 3</p>
            <p1>“PROMOÇÃO”</p1>
            <button
                onclick="adicionarAoCarrinho('AirMax Plus TN3', 259.00, 'https://dcdn-us.mitiendanube.com/stores/004/131/792/products/19977bdd-f04b-418c-a657-3a2453f186df-6c68d8f23b71581d5717201887504235-480-0.jpeg')">Comprar</button>

        </div>
        <div class="produto">
            <img src="https://dcdn-us.mitiendanube.com/stores/004/131/792/products/19977bdd-f04b-418c-a657-3a2453f186df-6c68d8f23b71581d5717201887504235-480-0.jpeg"
                alt="AirMax Plus TN4">
            <h4>AirMax Plus TN4</h4>
            <p>R$ 289,00</p>
            <p>Air Max Plus TN 4 “Storm”</p>
            <button
                onclick="adicionarAoCarrinho('AirMax Plus TN4', 289.00, 'https://dcdn-us.mitiendanube.com/stores/004/131/792/products/19977bdd-f04b-418c-a657-3a2453f186df-6c68d8f23b71581d5717201887504235-480-0.jpeg')">Comprar</button>
        </div>
        <div class="produto">
            <img src="https://dcdn-us.mitiendanube.com/stores/004/131/792/products/19977bdd-f04b-418c-a657-3a2453f186df-6c68d8f23b71581d5717201887504235-480-0.jpeg"
                alt="AirMax Plus TN5">
            <h4>AirMax Plus TN5</h4>
            <p>R$ 249,00</p>
            <p>Air Max Plus TN 5 “Core”</p>
            <button
                onclick="adicionarAoCarrinho('AirMax Plus TN5', 249.00, 'https://dcdn-us.mitiendanube.com/stores/004/131/792/products/19977bdd-f04b-418c-a657-3a2453f186df-6c68d8f23b71581d5717201887504235-480-0.jpeg')">Comprar</button>

        </div>
    </section>

    <!--produtos 2-->
    <section class="produtos">
        <div class="produto promo">
            <img src="https://dcdn-us.mitiendanube.com/stores/004/131/792/products/19977bdd-f04b-418c-a657-3a2453f186df-6c68d8f23b71581d5717201887504235-480-0.jpeg"
                alt="AirMax Plus TN1">
            <h4>AirMax Plus TN1</h4>
            <p>R$ 279,00</p>
            <p>Air Max Plus TN 1</p>
            <p1>“PROMOÇÃO”</p1>
            <button
                onclick="adicionarAoCarrinho('AirMax Plus TN1', 279.00, 'https://dcdn-us.mitiendanube.com/stores/004/131/792/products/19977bdd-f04b-418c-a657-3a2453f186df-6c68d8f23b71581d5717201887504235-480-0.jpeg')">Comprar</button>
        </div>
        <div class="produto">
            <img src="https://dcdn-us.mitiendanube.com/stores/004/131/792/products/19977bdd-f04b-418c-a657-3a2453f186df-6c68d8f23b71581d5717201887504235-480-0.jpeg"
                alt="AirMax Plus TN2">
            <h4>AirMax Plus TN2</h4>
            <p>R$ 299,00</p>
            <p>Air Max Plus TN 2 “Shadow”</p>
            <button
                onclick="adicionarAoCarrinho('AirMax Plus TN2', 299.00, 'https://dcdn-us.mitiendanube.com/stores/004/131/792/products/19977bdd-f04b-418c-a657-3a2453f186df-6c68d8f23b71581d5717201887504235-480-0.jpeg')">Comprar</button>
        </div>
        <div class="produto promo">
            <img src="https://dcdn-us.mitiendanube.com/stores/004/131/792/products/19977bdd-f04b-418c-a657-3a2453f186df-6c68d8f23b71581d5717201887504235-480-0.jpeg"
                alt="AirMax Plus TN3">
            <h4>AirMax Plus TN3</h4>
            <p>R$ 259,00</p>
            <p>Air Max Plus TN 3</p>
            <p1>“PROMOÇÃO”</p1>
            <button
                onclick="adicionarAoCarrinho('AirMax Plus TN3', 259.00, 'https://dcdn-us.mitiendanube.com/stores/004/131/792/products/19977bdd-f04b-418c-a657-3a2453f186df-6c68d8f23b71581d5717201887504235-480-0.jpeg')">Comprar</button>

        </div>
        <div class="produto">
            <img src="https://dcdn-us.mitiendanube.com/stores/004/131/792/products/19977bdd-f04b-418c-a657-3a2453f186df-6c68d8f23b71581d5717201887504235-480-0.jpeg"
                alt="AirMax Plus TN4">
            <h4>AirMax Plus TN4</h4>
            <p>R$ 289,00</p>
            <p>Air Max Plus TN 4 “Storm”</p>
            <button
                onclick="adicionarAoCarrinho('AirMax Plus TN4', 289.00, 'https://dcdn-us.mitiendanube.com/stores/004/131/792/products/19977bdd-f04b-418c-a657-3a2453f186df-6c68d8f23b71581d5717201887504235-480-0.jpeg')">Comprar</button>
        </div>
        <div class="produto">
            <img src="https://dcdn-us.mitiendanube.com/stores/004/131/792/products/19977bdd-f04b-418c-a657-3a2453f186df-6c68d8f23b71581d5717201887504235-480-0.jpeg"
                alt="AirMax Plus TN5">
            <h4>AirMax Plus TN5</h4>
            <p>R$ 249,00</p>
            <p>Air Max Plus TN 5 “Core”</p>
            <button
                onclick="adicionarAoCarrinho('AirMax Plus TN5', 249.00, 'https://dcdn-us.mitiendanube.com/stores/004/131/792/products/19977bdd-f04b-418c-a657-3a2453f186df-6c68d8f23b71581d5717201887504235-480-0.jpeg')">Comprar</button>

        </div>
    </section>

    












  @include('footer.footer')