  
  
<!--barra de navegação-->
  <header>
    <nav class="navbar">
      <div class="logo">
        <img src="./img/index/logo2.png" alt="Logo Premium Essence" width="124" height="124" />
        <div class="logo-text">
          <span></span><br />
          <span></span>
        </div>
      </div>
      <ul class="nav-links">
        <li><a href="{{ route('pagina-inicial') }}" class="active">INÍCIO</a></li>
        <li><a href="{{ route('pagina-masculino') }}">MASCULINO</a></li>
        <li><a href="{{ route('pagina-feminino') }}">FEMININO</a></li>
        <li><a href="{{ route('pagina-acessorios') }}">ACESSÓRIOS</a></li>
        <li><a href="{{ route('pagina-time') }}">TIME</a></li>
        <li><a href="{{ route('pagina-kids') }}">KIDS</a></li>
        <li><a href="{{ route('pagina-contato') }}">CONTATO</a></li>
        <li class="cart-container">
          <span class="cart-icon" onclick="toggleCart()">🛒</span>
          <span class="cart-count" id="cart-count">0</span>
        </li>
      </ul>
    </nav>
  </header>