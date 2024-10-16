<?php
/* Smarty version 4.3.0, created on 2024-10-15 08:14:15
  from '0a66d044c534fb5ecb249ceacaec5486d6358ae1' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_670e86c7aa16c3_03127413',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_670e86c7aa16c3_03127413 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
.menu {
    width: 1200px;
    height: 40px;
    background-color: #006FE7;
    border-radius: 24px;
    display: flex;
    justify-content: space-around;
    align-items: center;
    font-family: 'Montserrat Alternates', sans-serif;
    overflow: hidden;
    position: relative; /* Для ограничения дочерних элементов */
}
.menu button {
    background-color: #006FE7;
    color: white;
    border: none;
    cursor: pointer;
    font-size: 13px;
    border-radius: 0;
    white-space: nowrap;
    margin: 0 5px;
    padding: 10px;
    flex-grow: 1;
    text-align: center;
    outline: none;
    transition: all 0.3s ease; /* Плавный переход */
}
.menu button.active {
    background-color: #1A2033;
}
.menu button:hover {
    background-color: #1A2033;
    padding: 12px 22px; /* Увеличиваем паддинги */
    margin: -3px 0; /* Корректируем отступы для верхнего и нижнего */
    box-shadow: 0 0 10px rgba(0,0,0,0.1); /* Легкая тень */
}
@media (max-width: 768px) {
    .menu {
        width: 100%;
        flex-direction: column;
        height: auto;
    }
    .menu button {
        width: 100%;
        text-align: left;
        margin: 5px 0;
        margin-left: 35px;
        padding: 10px;
    }
}
</style>
<section class="menu">
    <button>Одежда</button>
    <button>Электроника</button>
    <button>Спорт и отдых</button>
    <button>Канцелярские товары</button>
    <button>Мультимедиа</button>
    <button>Бренды</button>
    <button>Новинки</button>
    <button>Хиты продаж</button>
    <button>Акции</button>
</section>
<?php echo '<script'; ?>
>    const buttons = document.querySelectorAll('.menu button');
    buttons.forEach(button =&gt; {
        button.addEventListener('click', function() {
            buttons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');
        });
    });
<?php echo '</script'; ?>
><?php }
}
