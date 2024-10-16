{** block-description:blog.recent_posts_scroller **}

{if $items}

<div class="ty-mb-l my_blog">  {* Добавлен класс my_blog *}
    <div class="ty-blog-recent-posts">

        {foreach from=$items item="page"}
            <div class="ty-blog-recent-posts__item">

                <div class="ty-blog-recent-posts__img-block">
                    <a href="{"pages.view?page_id=`$page.page_id`"|fn_url}">
                        {include file="common/image.tpl" obj_id=$page.page_id images=$page.main_pair}
                    </a>
                </div>

                <div class="ty-blog__header">  {* Новый контейнер для заголовка и даты *}
                    <a href="{"pages.view?page_id=`$page.page_id`"|fn_url}" class="ty-blog__title">{$page.page}</a>
                    <div class="ty-blog__date">{$page.timestamp|date_format:"`$settings.Appearance.date_format`"}</div>
                </div>

                {if $page.content}  {* Проверка, есть ли описание *}
                    <div class="ty-blog-recent-posts__description">
                        {$page.content|truncate:150}  {* Обрезаем описание до 150 символов *}
                    </div>
                {/if}

            </div>
        {/foreach}

    </div>
</div>

{/if}