<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

class CalculatorController extends Controller
{
  public function actionIndex()
  {
    $result = null;
    $num1 = null;
    $num2 = null;
    $operation = null;

    // Verifica si se envió el formulario
    if (Yii::$app->request->isPost) {
      // Recupera los valores enviados por POST
      $num1 = Yii::$app->request->post('num1');
      $num2 = Yii::$app->request->post('num2');
      $operation = Yii::$app->request->post('operation');

      // Verifica que los valores sean numéricos
      if ($operation === 'dividir') {
        if ($num2 == 0) {
          $result = "Error: no se puede dividir entre 0.";
        } else {
          $result = $num1 / $num2;
        }
      } elseif ($operation === 'sumar') {
        $result = $num1 + $num2;
      } elseif ($operation === 'restar') {
        $result = $num1 - $num2;
      } elseif ($operation === 'multiplicar') {
        $result = $num1 * $num2;
      } else {
        $result = "Operación inválida";
      }
    }

    // Renderiza la vista y envía las variables a la misma
    return $this->render('index', [
      'num1' => $num1,
      'num2' => $num2,
      'operation' => $operation,
      'result' => $result,
    ]);
  }
}
