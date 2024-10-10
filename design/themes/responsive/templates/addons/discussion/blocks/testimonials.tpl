{** block-description:discussion_title_home_page **}

{assign var="discussion" value=0|fn_get_discussion:"E":true:$block.properties}

{if $discussion && $discussion.type != "D" && $discussion.posts}

{assign var="obj_prefix" value="`$block.block_id`000"}

{if $block.properties.outside_navigation == "Y"}
    <div class="ty-mb-l">
        <div class="ty-discussion-post-navigation">
            <div class="ty-discussion-post-prev" id="owl_prev_{$obj_prefix}">{include_ext file="common/icon.tpl" class="ty-icon-left-open-thin"}</div>
            <div class="ty-discussion-post-next" id="owl_next_{$obj_prefix}">{include_ext file="common/icon.tpl" class="ty-icon-right-open-thin"}</div>
        </div>
    </div>
{/if}

<div class="ty-mb-l">
    <div class="my_reviews">
        {foreach from=$discussion.posts item=post}
            <div class="ty-discussion-post__content">
                {hook name="discussion:items_list_row"}
                <a href="{"discussion.view?thread_id=`$discussion.thread_id`&post_id=`$post.post_id`"|fn_url}#post_{$post.post_id}">
                    <div class="ty-discussion-post" id="post_{$post.post_id}">
                        <!-- Контейнер для имени и даты -->
                        <div class="ty-discussion-post__info">
                            <span class="ty-discussion-post__author">{$post.name}</span>
                            <span class="ty-discussion-post__date">{$post.timestamp|date_format:"`$settings.Appearance.date_format`"}</span>
                        </div>

                        <!-- Оценка (если есть) -->
                        {if $discussion.type == "R" || $discussion.type == "B" && $post.rating_value > 0}
                        <div class="ty-discussion-post__rating">
                            {include file="addons/discussion/views/discussion/components/stars.tpl" stars=$post.rating_value|fn_get_discussion_rating}
                        </div>
                        {/if}

                        <!-- Сообщение пользователя -->
                        {if $discussion.type == "C" || $discussion.type == "B"}
                        <div class="ty-discussion-post__message">{$post.message|truncate:100|nl2br nofilter}</div>
                        {/if}
                        
                    </div>
                    
                </a>
                {/hook}
            </div>
            
        {/foreach}
    </div>
</div>
<!-- Кнопка "Посмотреть все" -->
<div class="ty-discussion-view-all ty-mt-l">
    <a href="{"discussion.view_all?object_id=`$object_id`&object_type=`$object_type`"|fn_url}" class="ty-btn ty-btn__secondary">
        {__("view_all")}
    </a>
</div>
<!-- Конец кнопки "Посмотреть все" -->

{/if}
