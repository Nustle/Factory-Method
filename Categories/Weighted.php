<?php

namespace Categories;

use ReloadCategory\Category;
use StartCategories\WeightedCategory;

class Weighted extends Category
{
  public function makeCategory()
  {
    return new WeightedCategory();
  }
}