{literal}
<style>
    .products-section {
        max-width: 1100px;
        margin: 0 auto;
        padding: 20px;
    }
    .products-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }
    .section-title {
        font-family: 'Montserrat Alternates', sans-serif;
        font-size: 28px;
        font-weight: 700;
        line-height: 34.13px;
        text-align: left;
    }
    .carousel-buttons {
        display: flex;
        gap: 10px;
    }
    .carousel-button {
        background: none;
        border: none;
        cursor: pointer;
    }
    .carousel-button img {
        width: 24px;
        height: 24px;
    }
    .product-carousel {
        display: flex;
        overflow: hidden;
        position: relative;
        white-space: nowrap;
        overflow-x: hidden;
    }
    .product-card {
        min-width: 280px;
        height: 208px;
        background-color: white;
        border-radius: 19.96px;
        margin-right: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: box-shadow 0.2s ease;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 10px;
    }
    .product-card:hover {
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
    }
    .product-image {
        width: 179px;
        height: 179px;
    }
    .product-info {
        text-align: left;
        width: 100%;
        padding: 10px 0;
    }
    .product-title {
        font-family: 'Montserrat Alternates', sans-serif;
        font-size: 14px;
        font-weight: 500;
        line-height: 17.07px;
        margin-bottom: 5px;
    }
    .product-stock {
        font-family: 'Montserrat Alternates', sans-serif;
        font-size: 12px;
        font-weight: 500;
        line-height: 14.63px;
        color: green;
        margin-bottom: 10px;
    }
    .product-price {
        font-family: 'Montserrat Alternates', sans-serif;
        font-size: 19px;
        font-weight: 700;
        line-height: 23.16px;
    }
    .old-price {
        font-family: 'Montserrat Alternates', sans-serif;
        font-size: 14px;
        font-weight: 500;
        line-height: 17.07px;
        text-decoration: line-through;
        margin-left: 10px;
        color: #999;
    }
</style>
{/literal}

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

{literal}
<script>
    console.log("Скрипт загружен");

    const products = [
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
{/literal}
