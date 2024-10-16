<div class="products-section">
    <div class="products-header">
        <h2 class="section-title">Новинки</h2>
        <div class="carousel-buttons">
            <button class="carousel-button prev-button">
                <img src="{$config.current_location}/design/themes/cart_power/media/images/prev_btn.svg" alt="prev">
            </button>
            <button class="carousel-button next-button">
                <img src="{$config.current_location}/design/themes/cart_power/media/images/next_btn.svg" alt="next">
            </button>
        </div>
    </div>
    <div class="product-carousel" id="product-carousel">
        <!-- Товары будут сгенерированы автоматически -->
    </div>
</div>

<p>Если вы видите этот текст, шаблон подключен правильно.</p>

<script>
    console.log("Скрипт загружен");

    const products = [
        {title: 'Dualshock 4', stock: 'В наличии', currentPrice: '5 800 Р', oldPrice: '6 300 Р', image: '{$config.current_location}/design/themes/cart_power/media/images/newpr1.svg'},
        {title: 'Футболка синяя', stock: 'В наличии', currentPrice: '5 800 Р', oldPrice: '6 300 Р', image: '{$config.current_location}/design/themes/cart_power/media/images/newpr2.svg'},
        {title: 'Футболка черная', stock: 'В наличии', currentPrice: '5 800 Р', oldPrice: '6 300 Р', image: '{$config.current_location}/design/themes/cart_power/media/images/newpr3.svg'},
        {title: 'Планшет', stock: 'В наличии', currentPrice: '5 800 Р', oldPrice: '6 300 Р', image: '{$config.current_location}/design/themes/cart_power/media/images/newpr4.svg'}
        {title: 'Dualshock 4', stock: 'В наличии', currentPrice: '5 800 Р', oldPrice: '6 300 Р', image: '{$config.current_location}/design/themes/cart_power/media/images/newpr1.svg'},
        {title: 'Футболка синяя', stock: 'В наличии', currentPrice: '5 800 Р', oldPrice: '6 300 Р', image: '{$config.current_location}/design/themes/cart_power/media/images/newpr2.svg'},
        {title: 'Футболка черная', stock: 'В наличии', currentPrice: '5 800 Р', oldPrice: '6 300 Р', image: '{$config.current_location}/design/themes/cart_power/media/images/newpr3.svg'},
        {title: 'Планшет', stock: 'В наличии', currentPrice: '5 800 Р', oldPrice: '6 300 Р', image: '{$config.current_location}/design/themes/cart_power/media/images/newpr4.svg'}
    ];

    const productCarousel = document.getElementById('product-carousel');
    console.log("Элемент product-carousel:", productCarousel);

    function generateProductCard(product) {
        console.log("Генерация карточки для продукта:", product.title);
        return `
            <div class="product-card">
                <img src="${product.image}" alt="${product.title}" class="product-image">
                <div class="product-info">
                    <div class="product-title">${product.title}</div>
                    <div class="product-stock">${product.stock}</div>
                    <div class="product-price">
                        <span class="current-price">${product.currentPrice}</span>
                        <span class="old-price">${product.oldPrice}</span>
                    </div>
                </div>
            </div>
        `;
    }

    products.forEach(product => {
        productCarousel.innerHTML += generateProductCard(product);
    });

    const prevButton = document.querySelector('.prev-button');
    const nextButton = document.querySelector('.next-button');

    nextButton.addEventListener('click', () => {
        productCarousel.scrollBy({ left: 300, behavior: 'smooth' });
    });

    prevButton.addEventListener('click', () => {
        productCarousel.scrollBy({ left: -300, behavior: 'smooth' });
    });
</script>
