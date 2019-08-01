<?php

namespace Categories;

use ReloadCategory\Category;
use StartCategories\VolumeCategory;

class Volume extends Category
{
  public function makeCategory()
  {
    return new VolumeCategory();
  }
}