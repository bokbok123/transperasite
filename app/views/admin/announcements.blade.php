<script src="ckeditor/ckeditor.js"></script>


<script>
    var roxyFileman = 'fileman/index.html';
    $(function(){
        CKEDITOR.replace( 'editor1',{filebrowserBrowseUrl:roxyFileman,
            filebrowserImageBrowseUrl:roxyFileman+'?type=image',
            removeDialogTabs: 'link:upload;image:upload'});
    });
    function openModalNow(e){


        CKEDITOR.instances["editor1"].setData(document.getElementById("desc"+e.id).innerHTML);
        $('#ann_title').val(document.getElementById("title"+e.id).innerHTML);
        $('#attach_file').val($('#attach'+e.id).html());
        $('#ann_id').val(e.id);
        $('#modal1').openModal();

    }
    $(document).ready(function(){
        // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
        $('.modal-trigger').leanModal({
                dismissible: true, // Modal can be dismissed by clicking outside of the modal
                opacity: .5, // Opacity of modal background
                in_duration: 300, // Transition in duration
                out_duration: 200, // Transition out duration
                ready: function() {  }, // Callback for Modal open
                complete: function() { $('#modal1').closeModal(); } // Callback for Modal close
            }
        );
    });
</script>

<button data-target="modal1" class="btn modal-trigger" style="margin-bottom: 15px">ADD</button>
<table>
    <thead>
    <tr>
        <th data-field="id">Title</th>
        <th data-field="content">Content</th>
        <th data-field="status">Status</th>
        <th data-field="action">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach(Announcement::all() as $data)
    <tr>
        <td id="title{{ $data->id }}">{{ $data->ann_title}}</td>
        <td id="desc{{ $data->id }}">{{ $data->ann_body}}</td>
        <td id="attach{{ $data->id }}">
            <div class="switch">
                <label>
                    <input type="checkbox" value="{{ $data->ann_status }}">
                    <span class="lever"></span>
                </label>
            </div>
        </td>
        <td><button class="btn" data-target="modal1" id="{{ $data->id }}" onclick="openModalNow(this)" >Edit</button></td>
    </tr>
    @endforeach
    </tbody>
</table>

<div id="modal1" class="modal">
    <div class="modal-content">
        {{ Form::open(array('url' => 'create_announcements', 'files' => true)) }}
        {{ Form::hidden('ann_id', Input::old('ann_id'),array('id'=>'ann_id')) }}
        {{ Form::text('ann_title', Input::old('ann_title'), array('placeholder' => 'Announncement Title', 'id'=>'ann_title')) }}
        <textarea name="editor1" id="editor1" rows="5" cols="80"></textarea>
        {{ Form::submit('Submit!') }}
        {{ Form::close() }}
    </div>
    <div class="modal-footer">
        <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Close</a>
    </div>
</div>