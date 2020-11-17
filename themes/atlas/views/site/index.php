<?php if (isset($page) && $page): ?>
    <?php if ($page->widget && $page->widget_position == InfoPages::POSITION_TOP): ?>
        <?php $this->renderPartial('_index_view_widget', array('widget' => $page->widget, 'page' => $page, 'widgetTitles' => $page->widget_titles)); ?>
        <div class="clear"></div><br/>
    <?php endif; ?>
<?php endif; ?>

<?php if (isset($page) && $page): ?>
    <div class="search">
        <?php Yii::app()->controller->renderPartial('//site/inner-search', array('showHideFilter' => false)); ?>
    </div>
<?php endif; ?>

    <div class="clear"></div>

<?php if (isset($page) && $page): ?>
    <?php if ($page->widget && $page->widget_position == InfoPages::POSITION_BOTTOM): ?>
        <?php $this->renderPartial('_index_view_widget', array('widget' => $page->widget, 'page' => $page, 'widgetTitles' => $page->widget_titles)); ?>
    <?php endif; ?>
<?php endif; ?>