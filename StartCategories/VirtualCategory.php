<?php

namespace StartCategories;

use StartCategories\AddRunnable;

class VirtualCategory implements AddRunnable
{
  public function AddData()
  {
    /**
     * Code
     * Скорее всего вызываешь свой метод AddData ($this->AddData),
     * но тогда наследуешь его, что не есть гуд, как вариант сделать его статическим 
     */
    echo 'Создалась VirtualCategory - метод Data <br>';
  }

  public function AddField()
  {
    /**
     * Code
     * Всё по аналогии с методом AddData
     */
    echo 'Создалась VirtualCategory - метод Field <hr>';
  }
}