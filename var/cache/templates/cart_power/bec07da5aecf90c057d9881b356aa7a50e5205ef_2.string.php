<?php
/* Smarty version 4.3.0, created on 2024-10-14 23:29:56
  from 'bec07da5aecf90c057d9881b356aa7a50e5205ef' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_670e0be4bc5711_22742496',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_670e0be4bc5711_22742496 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
.products-section {
    max-width: 1200px;
    padding: 20px;
    margin: 0 auto;
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
    scroll-behavior: smooth;
}

.product-card {
    min-width: 280px;
    max-width: 280px;
    height: auto;
    background-color: white;
    border-radius: 19.96px;
    margin-right: 20px;
    box-shadow: 0 4px 8px rgb(0 0 0 / 7%);
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
    white-space: normal;
    overflow: visible;
}

.product-title, .product-stock, .product-price {
    word-wrap: break-word;
}

.product-title {
    font-family: 'Montserrat Alternates', sans-serif;
    font-size: 14px;
    font-weight: 500;
    line-height: 17.07px;
    margin-bottom: 5px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

.product-stock {
    font-family: 'Montserrat Alternates', sans-serif;
    font-size: 12px;
    font-weight: 500;
    line-height: 14.63px;
    color: green;
    margin-bottom: 10px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
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


@media (max-width: 768px) {
    .products-section {
        padding: 10px;
    }

    .products-header {
        flex-direction: column;
        align-items: flex-start;
    }

    .section-title {
        font-size: 22px;
    }

    .carousel-button img {
        width: 20px;
        height: 20px;
    }

    .product-card {
        min-width: 65vw;
        margin-right: 15px;
    }

    .product-image {
        width: 160px;
        height: 160px;
    }

    .product-title {
        font-size: 13px;
    }

    .product-stock {
        font-size: 11px;
    }

    .product-price {
        font-size: 18px;
    }

    .old-price {
        font-size: 13px;
    }
}


@media (max-width: 480px) {
    .product-card {
        min-width: 90vw; 
        margin-right: 10px;
    }

    .product-image {
        width: 140px;
        height: 140px;
    }

    .product-title {
        font-size: 12px;
    }

    .product-stock {
        font-size: 10px;
    }

    .product-price {
        font-size: 16px;
    }

    .old-price {
        font-size: 12px;
    }
}

</style>




<div class="products-section">
    <div class="products-header">
        <h2 class="section-title">Новинки</h2>
        <div class="carousel-buttons">
            <button class="carousel-button prev-button">
                <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['current_location'], ENT_QUOTES, 'UTF-8');?>
/design/themes/cart_power/media/images/prev_btn.svg" alt="prev">
            </button>
            <button class="carousel-button next-button">
                <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['current_location'], ENT_QUOTES, 'UTF-8');?>
/design/themes/cart_power/media/images/next_btn.svg" alt="next">
            </button>
        </div>
    </div>
    <div class="product-carousel" id="product-carousel">
        <!-- Товары будут сгенерированы автоматически -->
    </div>
</div>



<?php echo '<script'; ?>
>
    console.log("Скрипт загружен 10000000");

 const products = [
        {title: 'Dualshock 4', stock: 'В наличии', currentPrice: '5 800 Р', oldPrice: '6 300 Р', image: '{$config.current_location}/design/themes/cart_power/media/images/newpr1.svg'},
        {title: 'Футболка синяя', stock: 'В наличии', currentPrice: '5 800 Р', oldPrice: '6 300 Р', image: '{$config.current_location}/design/themes/cart_power/media/images/newpr2.svg'},
        {title: 'Футболка черная', stock: 'В наличии', currentPrice: '5 800 Р', oldPrice: '6 300 Р', image: '{$config.current_location}/design/themes/cart_power/media/images/newpr3.svg'},
        {title: 'Планшет', stock: 'В наличии', currentPrice: '5 800 Р', oldPrice: '6 300 Р', image: '{$config.current_location}/design/themes/cart_power/media/images/newpr4.svg'},
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
<?php echo '</script'; ?>
>

<?php }
}
