@foreach(Announcement::all() as $ann)
    {{ $ann->ann_title }} <br>
    {{ $ann->ann_body }}
@endforeach