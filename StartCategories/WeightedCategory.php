<?php

namespace StartCategories;

use StartCategories\AddRunnable;

class WeightedCategory implements AddRunnable
{
  public function AddData()
  {
    /**
     * Your code of method AddData
     */
    echo 'Создалась WeightedCategory - метод Data <br>';
  }

  public function AddField()
  {
    /**
     * Your code of method AddField
     */
    echo 'Создалась WeightedCategory - метод Field <hr>';
  }
}