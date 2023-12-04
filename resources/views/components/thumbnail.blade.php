@php
if($type === 'shops'){
    $path = public_path('shops').'/';

}

if($type === 'products'){
    $path = public_path('products').'/';

}

@endphp

<div>
    @if(empty($filename))
    <img src="{{asset('storage/no_image.jpg')}}">
    @else
    <img src="{{asset($path . $filename)}}">
    @endif
</div>