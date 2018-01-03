<div table-responsive">
    <table style="width: 100%; border: 1px solid #ddd; border-collapse: collapse;" class="table table-hover table-striped">
        <thead>
        <tr style="background: #f9f9f9;">
            <th style="padding: 5px; border: 1px solid #ddd;">Наименование</th>
            <th style="padding: 5px; border: 1px solid #ddd;">Cсылка на товар</th>
            <th style="padding: 5px; border: 1px solid #ddd;">Кол-во</th>
            <th style="padding: 5px; border: 1px solid #ddd;">Цена</th>
            <th style="padding: 5px; border: 1px solid #ddd;">Сумма</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($session['cart'] as $id => $item): ?>
            <tr>
                <td style="padding: 5px; border: 1px solid #ddd;"><?= $item['name']?></td>
                <td style="padding: 5px; border: 1px solid #ddd;"><?= \yii\helpers\Url::to(['product/view', 'id' => $id], true)?></td>
                <td style="padding: 5px; border: 1px solid #ddd;"><?= $item['qty']?></td>
                <td style="padding: 5px; border: 1px solid #ddd;"><?= $item['price']?></td>
                <td style="padding: 5px; border: 1px solid #ddd;"><?= $item['qty'] * $item['price']?></td>
            </tr>
        <?php endforeach?>
        <tr style="background: #f9f9f9; border: 1px solid #ddd;">
            <td colspan="4">Итого: </td>
            <td><?= $session['cart.qty']?></td>
        </tr>
        <tr style="background: #f9f9f9; border: 1px solid #ddd;">
            <td colspan="4">На сумму: </td>
            <td><?= $session['cart.sum']?></td>
        </tr>
        </tbody>
    </table>
</div>

