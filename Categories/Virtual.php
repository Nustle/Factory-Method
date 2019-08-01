<?php

namespace Categories;

use ReloadCategory\Category;
use StartCategories\VirtualCategory;

class Virtual extends Category
{
  public function makeCategory()
  {
    return new VirtualCategory();
  }
}