<?php

namespace StartCategories;

use StartCategories\AddRunnable;

class VirtualCategory implements AddRunnable
{
  public function AddData()
  {
    /**
     * Your code of method AddData
     */
    echo 'Создалась VirtualCategory - метод Data <br>';
  }

  public function AddField()
  {
    /**
     * Your code of method AddField
     */
    echo 'Создалась VirtualCategory - метод Field <hr>';
  }
}