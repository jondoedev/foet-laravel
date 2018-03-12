@extends('layouts.main')

<link href="{{URL::to('plugins/fancybox/jquery.fancybox-1.3.4.css')}}" rel="stylesheet" type="text/css"/>

<script type="text/javascript">
    $(document).ready(function () {
        $("a.photo").fancybox();
    });
</script>


<script type="text/javascript">
    $('.photo_gallery').magnificPopup({
        delegate: 'a',
        type: 'image',
        gallery: {enabled: true}
    });
</script>

@section('content')

    <!-- Gallery -->

    <div class="wrapper bgded" style="background-color: rgba(242, 241, 238, 0.8); margin-bottom: 3%; margin-top: 200px; ">
        <div class="photo_gallery">
            @foreach($images as $image)
                <a rel="photo_gallery" class="photo" href="{{URL::to('/img/gallery/big/'.$image)}}"><img src="{{URL::to('/img/gallery/small/'. $image)}}"></a>
            @endforeach
        </div>
    </div>

@endsection