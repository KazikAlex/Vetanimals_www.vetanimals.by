<div class="sidebar">
    <?php if(!dynamic_sidebar('sidebar')): ?>
        <div class="vidget">
            <ul>
                <?php wp_list_categories(array('title_li' => '', 'order' => 'DESC')); ?>
            </ul>
           
        </div>

    <?php endif; ?>
</div>
