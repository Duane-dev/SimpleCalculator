<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimpleCalcuController extends Controller
{
  public function calcu($n1,$op,$n2){
    if ($op == "+" || $op == "add") {
        $result = $n1 + $n2;
    }elseif ($op == "-" || $op == "subtract") {
      $result = $n1 - $n2;
    }elseif ($op == "*" || $op == "multiply") {
      $result = $n1 * $n2;
    }elseif ($op == "/" || $op =="÷" || $op == "divide") {
      $result = $n1 / $n2;
    }
      return $result;
  }
}
