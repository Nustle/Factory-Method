<?php

namespace StartCategories;

use StartCategories\AddRunnable;

class VolumeCategory implements AddRunnable
{
  public function AddData()
  {
    /**
     * Your code of method AddData
     */
    echo 'Создалась VolumeCategory - метод Data <br>';
  }

  public function AddField()
  {
    /**
     * Your code of method AddField
     */
    echo 'Создалась VolumeCategory - метод Field <hr>';
  }
}