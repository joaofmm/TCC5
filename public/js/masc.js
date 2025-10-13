// Variáveis globais e elementos do DOM
let prev = document.getElementById('prev');
let next = document.getElementById('next');
let image = document.querySelector('.images');
let items = document.querySelectorAll('.images .item');
let contents = document.querySelectorAll('.content .item');

let rotate = 0;
let active = 0;
let countItem = items.length;
let rotateAdd = 360 / countItem;

// Funções do slider
function nextSlider() {
    active = active + 1 > countItem - 1 ? 0 : active + 1;
    rotate = rotate + rotateAdd;
    show();
}

function prevSlider() {
    active = active - 1 < 0 ? countItem - 1 : active - 1;
    rotate = rotate - rotateAdd;
    show();
}

function show() {
    image.style.setProperty("--rotate", rotate + 'deg');
    image.style.setProperty("--rotate", rotate + 'deg');
    contents.forEach((content, key) => {
        if (key == active) {
            content.classList.add('active');
        } else {
            content.classList.remove('active');
        }
    });
}

// Event listeners do slider
next.onclick = nextSlider;
prev.onclick = prevSlider;


// Carrinho de Compras
// Funções utilitárias para o carrinho
const cartUtils = {
    getCart: () => {
        try {
            return JSON.parse(localStorage.getItem('carrinho')) || [];
        } catch (error) {
            console.error("Erro ao obter o carrinho do localStorage:", error);
            return [];
        }
    },

    saveCart: (cart) => {
        try {
            localStorage.setItem('carrinho', JSON.stringify(cart));
        } catch (error) {
            console.error("Erro ao salvar o carrinho no localStorage:", error);
            alert("Erro ao salvar o carrinho. Verifique se o seu navegador permite o uso do localStorage.");
        }
    },

    updateCartCount: (cart) => {
        const cartCountElement = document.getElementById('cart-count');
        if (cartCountElement) {
            const totalItems = cart.reduce((acc, item) => acc + item.quantidade, 0);
            cartCountElement.textContent = totalItems;
        }
    },

    formatCurrency: (amount) => {
        return `R$ ${amount.toFixed(2)}`;
    }
};

// nav
window.addEventListener('scroll', function() {
    const nav = document.querySelector('nav');
    if (window.scrollY > 50) { /* Ajuste este valor para a distância de rolagem desejada */
        nav.classList.add('scrolled');
    } else {
        nav.classList.remove('scrolled');
    }
});




// Inicialização do carrinho
let carrinho = cartUtils.getCart();
cartUtils.updateCartCount(carrinho);
atualizarCarrinho();

// Funções de manipulação do carrinho
function adicionarAoCarrinho(nome, preco, imagem) {
    // Validação de dados
    if (!nome || typeof nome !== 'string' || nome.trim() === "") {
        console.error("Nome do produto inválido.");
        alert("Nome do produto inválido.");
        return;
    }
    if (!preco || typeof preco !== 'number' || preco <= 0) {
        console.error("Preço do produto inválido.");
        alert("Preço do produto inválido.");
        return;
    }
    if (!imagem || typeof imagem !== 'string' || imagem.trim() === "") {
        console.error("URL da imagem do produto inválido.");
        alert("URL da imagem do produto inválido.");
        return;
    }

    const novoItem = { nome, preco, imagem, quantidade: 1 };
    carrinho.push(novoItem);
    atualizarCarrinho();
    cartUtils.saveCart(carrinho);
    cartUtils.updateCartCount(carrinho);
}

function removerDoCarrinho(index) {
    if (index >= 0 && index < carrinho.length) {
        carrinho.splice(index, 1);
        atualizarCarrinho();
        cartUtils.saveCart(carrinho);
        cartUtils.updateCartCount(carrinho);
    } else {
        console.error("Índice inválido para remover do carrinho.");
    }
}

function atualizarQuantidade(index, quantidade) {
    if (index >= 0 && index < carrinho.length && quantidade > 0) {
        carrinho[index].quantidade = quantidade;
        atualizarCarrinho();
        cartUtils.saveCart(carrinho);
    } else {
        console.error("Índice ou quantidade inválidos para atualizar o carrinho.");
    }
}

function atualizarCarrinho() {
    const carrinhoHTML = document.getElementById("cart-items");
    const cartTotalElement = document.getElementById("cart-total");

    if (!carrinhoHTML || !cartTotalElement) {
        console.error("Elementos do carrinho não encontrados no DOM.");
        return;
    }

    carrinhoHTML.innerHTML = "";
    let total = 0;

    carrinho.forEach((item, index) => {
        const itemTotal = item.preco * item.quantidade;
        total += itemTotal;

        const li = document.createElement('li');
        li.classList.add('cart-item');
        li.innerHTML = `
            <img src="${item.imagem}" alt="${item.nome}" class="cart-item-image" onerror="this.onerror=null; this.src='URL_DA_IMAGEM_PADRAO'">
            <div class="cart-item-details">
                <span class="cart-item-name">${item.nome}</span>
                <div class="cart-item-quantity">
                    <button onclick="atualizarQuantidade(${index}, ${item.quantidade - 1})" class="quantity-btn" ${item.quantidade <= 1 ? 'disabled' : ''} aria-label="Diminuir quantidade">-</button>
                    <span class="quantity-value">${item.quantidade}</span>
                    <button onclick="atualizarQuantidade(${index}, ${item.quantidade + 1})" class="quantity-btn" aria-label="Aumentar quantidade">+</button>
                </div>
                <span class="cart-item-price">${cartUtils.formatCurrency(itemTotal)}</span>
            </div>
            <button onclick="removerDoCarrinho(${index})" class="remove-btn" aria-label="Remover item">❌</button>
        `;
        carrinhoHTML.appendChild(li);
    });

    cartTotalElement.textContent = `Total: ${cartUtils.formatCurrency(total)}`;
}

function finalizarPedido() {
    if (carrinho.length === 0) {
        alert("Seu carrinho está vazio!");
        return;
    }

    let mensagem = "*Pedido Premium Essence 🛍️*\n\n";
    carrinho.forEach((item, index) => {
        mensagem += `🟢 *${item.nome}* - Quantidade: ${item.quantidade} - ${cartUtils.formatCurrency(item.preco)} = ${cartUtils.formatCurrency(item.preco * item.quantidade)}\n`;
    });

    let total = carrinho.reduce((acc, item) => acc + (item.preco * item.quantidade), 0);
    mensagem += `\nTotal do pedido: ${cartUtils.formatCurrency(total)}`;

    const telefone = '5515996776872';
    const url = `https://wa.me/${telefone}?text=${encodeURIComponent(mensagem)}`;
    window.open(url, '_blank');
}

function toggleCart() {
    const cartElement = document.getElementById('cart');
    if (cartElement) {
        cartElement.classList.toggle('ativo');
    }
}

function adicionarAoCarrinho(nome, preco, imagem) {
    // Validação de dados (já implementada)

    // Verifica se o produto já existe no carrinho
    const itemExistente = carrinho.find(item => item.nome === nome && item.preco === preco && item.imagem === imagem);

    if (itemExistente) {
        // Se o produto já existe, incrementa a quantidade
        itemExistente.quantidade++;
    } else {
        // Se o produto não existe, adiciona um novo item
        const novoItem = { nome, preco, imagem, quantidade: 1 };
        carrinho.push(novoItem);
    }

    atualizarCarrinho();
    cartUtils.saveCart(carrinho);
    cartUtils.updateCartCount(carrinho);
}

function adicionarAoCarrinho(nome, preco, imagem) {
    // Validação de dados (já implementada)

    const itemExistente = carrinho.find(item => item.nome === nome && item.preco === preco && item.imagem === imagem);

    if (itemExistente) {
        itemExistente.quantidade++;
    } else {
        const novoItem = { nome, preco, imagem, quantidade: 1 };
        carrinho.push(novoItem);
    }

    atualizarCarrinho();
    cartUtils.saveCart(carrinho);
    cartUtils.updateCartCount(carrinho);

    // Adiciona a classe 'added' ao último item do carrinho para ativar a animação
    const cartItems = document.querySelectorAll('.cart-item');
    if (cartItems.length > 0) {
        cartItems[cartItems.length - 1].classList.add('added');
        // Remove a classe após a animação terminar
        setTimeout(() => {
            cartItems[cartItems.length - 1].classList.remove('added');
        }, 300);
    }
}

// Verifica se o carrinho está em cache
let carrinhoCache = localStorage.getItem('carrinhoCache');
if (carrinhoCache) {
    carrinho = JSON.parse(carrinhoCache);
    atualizarCarrinho();
    cartUtils.updateCartCount(carrinho);
}

// Salva o carrinho em cache
cartUtils.saveCart = (cart) => {
    try {
        localStorage.setItem('carrinho', JSON.stringify(cart));
        localStorage.setItem('carrinhoCache', JSON.stringify(cart)); // Salva no cache
    } catch (error) {
        console.error("Erro ao salvar o carrinho no localStorage:", error);
        alert("Erro ao salvar o carrinho. Verifique se o seu navegador permite o uso do localStorage.");
    }
};

// carregamento lento
function lazyLoadImages() {
    const lazyImages = document.querySelectorAll('.lazyload');
    lazyImages.forEach(img => {
        if (img.offsetTop < (window.innerHeight + window.pageYOffset)) {
            img.src = img.dataset.src;
            img.classList.remove('lazyload');
        }
    });
}

// Carrega as imagens visíveis inicialmente
lazyLoadImages();

// Carrega as imagens quando a página é rolada
window.addEventListener('scroll', lazyLoadImages);



// Inicialização
atualizarCarrinho();
