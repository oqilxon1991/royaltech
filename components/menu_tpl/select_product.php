<option
    value="<?= $category['id']?>"
    <?php if ($category['id'] == $this->model->category_id) echo ' selected'?>
>
    <?= $tab . $category['name_ru']?></option>
<?php if( isset($category['childs']) ): ?>
    <ul class="dropdown-menu right">
        <?= $this->getMenuHtml($category['childs'], $tab . ' - ')?>
    </ul>
<?php endif;?>
