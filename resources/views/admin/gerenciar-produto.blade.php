{{-- IMPORTAÇÃO DO BODY --}}
  @include('head.head')

  {{-- BARRA DE NAVEGAÇÃO --}}
  @include('barra-navegacao.menu')



<h1 class="titulo">Formulário de Contato</h1>
  <form action="https://formsubmit.co/joabebarreto542@gmail.com" method="POST" class="form" style="margin-bottom: 300px">
    <label for="name">Nome</label>
    <input type="text" name="name" id="name" required />
    <label for="email">E-mail</label>
    <input type="email" name="email" id="email" required />
    <label for="message">Mensagem</label>
    <textarea name="message" id="message" required></textarea>
    <input type="hidden" name="_captcha" value="false" />
    <input type="hidden" name="_next" value="http://127.0.0.1:5500/cont-obgd.html" />
    <button type="submit">Enviar</button>
  </form>









  @include('footer.footer')