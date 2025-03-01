<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var string|null $num1 */
/** @var string|null $num2 */
/** @var string|null $operation */
/** @var string|null $result */

$this->title = 'CALCULADORA-LAB1';
?>
<h1><?= Html::encode($this->title) ?></h1>

<?php $form = ActiveForm::begin(); ?>

<!-- Número 1 -->
<div class="form-group">
  <?= Html::label('Número 1', 'num1') ?>
  <?= Html::textInput('num1', $num1, ['class' => 'form-control']) ?>
</div>

<!-- Número 2 -->
<div class="form-group">
  <?= Html::label('Número 2', 'num2') ?>
  <?= Html::textInput('num2', $num2, ['class' => 'form-control']) ?>
</div>

<!-- Operación -->
<div class="form-group">
  <?= Html::label('Operación', 'operation') ?>
  <?= Html::dropDownList('operation', $operation, [
    'sumar' => 'Sumar',
    'restar' => 'Restar',
    'multiplicar' => 'Multiplicar',
    'dividir' => 'Dividir',
  ], ['class' => 'form-control']) ?>
</div>

<!-- Botón -->
<div class="form-group">
  <?= Html::submitButton('Calcular', ['class' => 'btn btn-primary']) ?>
</div>

<?php ActiveForm::end(); ?>

<!-- Mostrar resultado -->
<?php if ($result !== null): ?>
  <h2>Resultado: <?= Html::encode($result) ?></h2>
<?php endif; ?>