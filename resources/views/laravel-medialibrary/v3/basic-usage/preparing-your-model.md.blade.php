@extends('layout')

@section('pageTitle', 'Preparing your model')

@section('content')
To associate media with a model, the model must implement the following interface and trait:

```php
namespace App\Models;

use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMedia;

class News extends Model implements HasMedia
{
    use HasMediaTrait;
   ...
}
```
@endsection