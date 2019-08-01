<?php

namespace ReloadCategory;

abstract class Category
{
  /**
   * Create object of our categories
   *
   * @return void
   */
  abstract public function makeCategory();

  public function getCategory()
  {
    $category = $this->makeCategory();

    $category->AddData();
    $category->AddField();
  }
}