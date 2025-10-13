  {{-- IMPORTAÇÃO DO BODY --}}
  @include('head.head')

  {{-- BARRA DE NAVEGAÇÃO --}}
  @include('barra-navegacao.menu')

  {{-- FIM BARRA DE NAVEGAÇÃO --}}

  <!--carrinho de compras-->
  <div class="cart" id="cart">
    <div class="cart-header">
      <h3>Carrinho</h3>
      <button class="close-cart" onclick="toggleCart()">X</button>
    </div>
    <ul id="cart-items"></ul>
    <div id="cart-total">Total: R$ 0,00</div>
    <button class="finalizar" onclick="finalizarPedido()">Finalizar Compra</button>
  </div>

  <!-- slide-carossel -->
  <section class="carrossel">
    <div class="slides">
      <img src="{{ asset('img/index/carrosel/1.png') }}" class="active" />
      <img src="{{ asset('img/index/carrosel/2.png') }}" />
      <img src="{{ asset('img/index/carrosel/3.png') }}" />
      <img src="{{ asset('img/index/carrosel/4.png') }}" />
    </div>
  </section>

  <!-- linha de COLEÇÕES -->
  <div class="divisor"><span>COLEÇÕES</span></div>

  <section class="colecao">
    <div class="item">
      <img src="{{ asset('img/index/coleções/1.jpeg') }}" alt="Nike 1">
      <div class="overlay">
        <h2>CATALOGO<br><span>MASCULINO</span></h2>
        <a href="./masc.html">VER MAIS</a>
      </div>
    </div>
    <div class="item">
      <img src="{{ asset('img/index/coleções/2.jpeg') }}" alt="Nike 2">
      <div class="overlay">
        <h2>CATALOGO<br><span>FEMININO</span></h2>
        <a href="./femi.html">VER MAIS</a>
      </div>
    </div>
    <div class="item">
      <img src="{{ asset('img/index/coleções/3.jpeg') }}" alt="Nike 3">
      <div class="overlay">
        <h2>CATALOGO<br><span>ACESSÓRIOS</span></h2>
        <a href="./aces.html">VER MAIS</a>
      </div>
    </div>
    <div class="item">
      <img src="{{ asset('img/index/coleções/4.jpeg') }}" alt="Nike 4">
      <div class="overlay">
        <h2>CATALOGO<br><span>TIME</span></h2>
        <a href="./tim.html">VER MAIS</a>
      </div>
    </div>
    <div class="item">
      <img src="{{ asset('img/index/coleções/5.jpeg') }}" alt="Nike 5">
      <div class="overlay">
        <h2>CATALOGO<br><span>PERFUMES</span></h2>
        <a href="./perf.html">VER MAIS</a>
      </div>
    </div>
  </section>

  <!-- linha de MAIS VENDIDO -->
  <div class="divisor"><span>MAIS VENDIDO</span></div>

  <section class="mais-vendido">
    <div class="produto">
      <a href="">
        <img src="{{ asset('img/index/david/RickOwens.jpg') }}" alt="AirMax Plus TN3" />
        <div class="descricao">
          <h3>Rick RickOwens</h3>
          <p>R$ 7.000</p>
          <span>Rick Owens</span>
          <a href="" class="botao-comprar"
            onclick="adicionarAoCarrinho('AirMax Plus TN1', 279.00, './img/index/david/RickOwens.jpg')">Comprar</a>
        </div>
      </a>
    </div>

    <div class="produto">
      <a href="">
        <img src="{{ asset('img/index/colecoes/test.jpg') }}" alt="AirMax Plus TN3" />
        <div class="descricao">
          <h3>AirMax Plus TN3</h3>
          <p>R$ 320,00</p>
          <span>Air Max Plus TN 3 “Red”</span>
          <a href="" class="botao-comprar"
            onclick="adicionarAoCarrinho('AirMax Plus TN1', 279.00, '{{ asset('img/index/colecoes/test.jpg') }}')">Comprar</a>
        </div>
      </a>
    </div>

    <div class="produto">
      <a href="">
        <img src="{{ asset('img/index/david/track led.jpg') }}" alt="AirMax Plus TN3" />
        <div class="descricao">
          <h3>Balenciaga</h3>
          <p>R$ 400,00</p>
          <span>Balenciaga Track Led</span>
          <a href="" class="botao-comprar"
            onclick="adicionarAoCarrinho('AirMax Plus TN1', 279.00, '{{ asset('img/index/coleções/test.jpg') }}')">Comprar</a>
        </div>
      </a>
    </div>

    <div class="produto">
      <a href="">
        <img src="{{ asset('img/index/david/jersey.jpg') }}" alt="AirMax Plus TN3" />
        <div class="descricao">
          <h3>Jersey Futebol</h3>
          <p>R$ 320,00</p>
          <span>Jersey Pirelli</span>
          <a href="" class="botao-comprar"
            onclick="adicionarAoCarrinho('AirMax Plus TN1', 279.00, '{{ asset('img/index/coleções/test.jpg') }}')">Comprar</a>
        </div>
      </a>
    </div>



    <div class="produto">
      <a href="">
        <img src="{{ asset('img/index/coleções/test.jpg') }}" alt="AirMax Plus TN3" />
        <div class="descricao">
          <h3>AirMax Plus TN3</h3>
          <p>R$ 320,00</p>
          <span>Air Max Plus TN 3 “Red”</span>
          <a href="" class="botao-comprar"
            onclick="adicionarAoCarrinho('AirMax Plus TN1', 279.00, '{{ asset('img/index/coleções/test.jpg') }}')">Comprar</a>
        </div>
      </a>
    </div>

    <div class="produto">
      <a href="">
        <img src="{{ asset('img/index/coleções/test.jpg') }}" alt="AirMax Plus TN3" />
        <div class="descricao">
          <h3>AirMax Plus TN3</h3>
          <p>R$ 320,00</p>
          <span>Air Max Plus TN 3 “Red”</span>
          <a href="" class="botao-comprar"
            onclick="adicionarAoCarrinho('AirMax Plus TN1', 279.00, '{{ asset('img/index/coleções/test.jpg') }}')">Comprar</a>
        </div>
      </a>
    </div>

    <div class="produto">
      <a href="">
        <img src="{{ asset('img/index/coleções/test.jpg') }}" alt="AirMax Plus TN3" />
        <div class="descricao">
          <h3>AirMax Plus TN3</h3>
          <p>R$ 320,00</p>
          <span>Air Max Plus TN 3 “Red”</span>
          <a href="" class="botao-comprar"
            onclick="adicionarAoCarrinho('AirMax Plus TN1', 279.00, '{{ asset('img/index/coleções/test.jpg') }}')">Comprar</a>
        </div>
      </a>
    </div>

    <div class="produto">
      <a href="">
        <img src="{{ asset('img/index/coleções/test.jpg') }}" alt="AirMax Plus TN3" />
        <div class="descricao">
          <h3>AirMax Plus TN3</h3>
          <p>R$ 320,00</p>
          <span>Air Max Plus TN 3 “Red”</span>
          <a href="" class="botao-comprar"
            onclick="adicionarAoCarrinho('AirMax Plus TN1', 279.00, '{{ asset('img/index/coleções/test.jpg') }}')">Comprar</a>
        </div>
      </a>
    </div>
  </section>


@include('footer.footer')