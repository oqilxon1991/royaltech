<option
        value="<?= $category['id']?>"
    <?php if ($category['id'] == $this->model->parent_id) echo ' selected'?>
    <?php if ($category['id'] == $this->model->id) echo ' disabled'?>
>
    <?= $tab . $category['name_ru']?></option>
<?php if( isset($category['childs']) ): ?>
    <ul class="dropdown-menu right">
            <?= $this->getMenuHtml($category['childs'], $tab . ' - ')?>
    </ul>
<?php endif;?>
