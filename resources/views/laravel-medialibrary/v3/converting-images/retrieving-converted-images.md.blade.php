@extends('layout')

@section('pageTitle', 'Retrieving converted images')

@section('content')
You can retrieve the URL or path to a converted image by specifiying the conversion name in the `getUrl` and `getPath` functions:

```php
$mediaItems = $newsItem->getMedia('images');
$mediaItems[0]->getUrl('thumb');
$mediaItems[0]->getPath('thumb'); // Absolute path on it's disk
```

Because retrieving an URL for the first media item in a collection is such a common scenario, the `getFirstMediaUrl` convenience-method is provided. The first parameter is the name of the collection, the second the name of a conversion. There's also a `getFirstMediaPath`-variant that returns the absolute path on it's disk. 

```php
$urlToFirstListImage = $newsItem->getFirstMediaUrl('images', 'thumb');
$fullPathToFirstListImage = $newsItem->getFirstMediaPath('images', 'thumb');
```
@endsection