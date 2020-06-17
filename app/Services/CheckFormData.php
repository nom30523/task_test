<?php

namespace App\Services;

class CheckFormData
{

  public static function checkGender($data) {
    if ($data->gender === 0) {
      $gender = '男性';
    } else {
      $gender = '女性';
    }

    return $gender;
  }

  public static function checkAge($data) {
    if ($data->age === 1) {
      $age = '〜19歳';
    } elseif ($data->age === 2) {
      $age = '20歳〜29歳';
    } elseif ($data->age === 2) {
      $age = '30歳〜39歳';
    } elseif ($data->age === 2) {
      $age = '40歳〜49歳';
    } elseif ($data->age === 2) {
      $age = '50歳〜59歳';
    } else {
      $age = '60歳以上';
    }

    return $age;
  }

}