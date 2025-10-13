{{-- IMPORTAÇÃO DO BODY --}}
  @include('head.head')

  {{-- BARRA DE NAVEGAÇÃO --}}
  @include('barra-navegacao.menu')



<h1 class="titulo">Formulário de Contato</h1>
  <form action="{{ route('add-produto') }}" method="post" class="form" style="margin-bottom: 300px">
    @csrf
    
    <label for="nome">Nome do Produto</label>
    <input type="text" name="nome" id="nome" value="Arroz" required />

    <label for="descricao">Descrição</label>
    <input type="text" name="descricao" id="descricao" value="Arroz Branco" required />

    <label for="preco">Preço</label>
    <input type="text" name="preco" id="preco" value="10.00" required />

    <label for="quantidade">Quantidade</label>
    <input type="number" name="quantidade" id="quantidade" value="100" required />
    
    <label for="categoria">Categoria</label>
    <select name="categoria" id="categoria" required>
      <option value="Alimentos">Alimentos</option>
      <option value="Bebidas">Bebidas</option>
      <option value="Higiene">Higiene</option>
      <option value="Limpeza">Limpeza</option>
      <option value="Outros">Outros</option>
    </select> 
    <br><br>
    
    <input type="submit">Enviar</input>
  </form>









  @include('footer.footer')