<?php

namespace StartCategories;

use StartCategories\AddRunnable;

class WeightedCategory implements AddRunnable
{
  public function AddData()
  {
    /**
     * Code
     */
    echo 'Создалась WeightedCategory - метод Data <br>';
  }

  public function AddField()
  {
    /**
     * Code
     */
    echo 'Создалась WeightedCategory - метод Field <hr>';
  }
}