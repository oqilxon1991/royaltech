<?php
use yii\helpers\Html;
?>


<div class="col-md-6">
    <div class="top-header-left">
        <ul>
            <li>
                <div class="dropdown">
                    <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" aria-expanded="false">
                        <i class="fa fa-language"></i> <?= $current->name;?>  <i class="fa fa-angle-down" aria-hidden="true"></i>
                    </a>
                    <ul class="dropdown-menu" id="langs">
                        <?php foreach ($langs as $lang):?>
                            <li class="item-lang">
                                <?= Html::a($lang->name, '/'.$lang->url.Yii::$app->getRequest()->getLangUrl()) ?>
                            </li>
                        <?php endforeach;?>
                    </ul>
                </div>
            </li>
            <li>
                <div class="dropdown">
                    <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
                        USD  <i class="fa fa-angle-down" aria-hidden="true"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">СУМ </a></li>
                    </ul>
                </div>
            </li>
            <li>

            </li>
        </ul>
    </div>
</div>