<script src="ckeditor/ckeditor.js"></script>


<script>
    var roxyFileman = 'fileman/index.html';
    $(function(){
        CKEDITOR.replace( 'editor1',{filebrowserBrowseUrl:roxyFileman,
            filebrowserImageBrowseUrl:roxyFileman+'?type=image',
            removeDialogTabs: 'link:upload;image:upload'});
    });
    function openModalNow(e){


        CKEDITOR.instances["editor1"].setData(document.getElementById("add"+e.id).innerHTML);
        $('#contactNumber').val(document.getElementById("con"+e.id).innerHTML);
        $('#emailAddress').val($('#email'+e.id).html());
        $('#id').val(e.id);
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

<table style="margin-top: 50px">
    <thead>
    <tr>
        <th data-field="id">Address</th>
        <th data-field="content">Contact Number</th>
        <th data-field="status">Email Address</th>
        <th data-field="action">Country Code</th>
        <th data-field="action">Status</th>
        <th data-field="action">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach(Address::all() as $data)
    <tr>
        <td id="add{{ $data->id }}">{{ $data->address}}</td>
        <td id="con{{ $data->id }}">{{ $data->contact}}</td>
        <td id="email{{ $data->id }}">{{ $data->email}}</td>
        <td id="cc{{ $data->id }}">{{ $data->country_code}}</td>
        <td id="stat{{ $data->id }}">
            <div class="switch">
                <label>
                    <input type="checkbox" value="{{ $data->status }}">
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
        {{ Form::open(array('url' => 'create_contacts', 'files' => true)) }}
        {{ Form::hidden('id', Input::old('id'),array('id'=>'id')) }}
        <textarea name="editor1" id="editor1" rows="5" cols="80"></textarea>
        {{ Form::text('contactNumber', Input::old('contactNumber'), array('placeholder' => 'Contact Number', 'id'=>'contactNumber')) }}
        {{ Form::text('emailAddress', Input::old('emailAddress'), array('placeholder' => 'Email Address', 'id'=>'emailAddress')) }}
        {{ Form::submit('Submit!') }}
        {{ Form::close() }}
    </div>
    <div class="modal-footer">
        <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Close</a>
    </div>
</div>