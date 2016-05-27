<script src="ckeditor/ckeditor.js"></script>
<script>
    function openModalNow(e){


        CKEDITOR.instances["editor1"].setData(document.getElementById("desc"+e.id).innerHTML);
        $('#frmTitle').val(document.getElementById("title"+e.id).innerHTML);
        $('#frmId').val(e.id);

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
<button data-target="modal1" class="btn modal-trigger">ADD</button>
<table border="1" id="myTable">
    <thead>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    @foreach($Job as $job)
    <tr>
        <td id="title{{ $job->id }}" class="title">{{ $job->job_title }}</td>
        <td id="desc{{ $job->id }}" class="desc">{{ $job->job_desc }}</td>
        <td class="status">
            <div class="switch">
                <label>
                    <input type="checkbox" value="{{ $job->ann_status }}" id="{{ $job->id }}">
                    <span class="lever"></span>
                </label>
            </div>
        </td>
        <td>    <button data-target="modal1" id="{{ $job->id }}" onclick="openModalNow(this)" >Edit</button> </td>
    </tr>
    @endforeach
</table>
<?php echo $Job->links(); ?>
<div id="modal1" class="modal">
    <div class="modal-content">
        {{ Form::open(array('url' => 'create_job')) }}
        {{ Form::hidden('job_id', Input::old('job_id'),array('id'=>'frmId')) }}
        {{ Form::text('job_title', Input::old('job_title'), array('placeholder' => 'Job Title' , 'id'=>'frmTitle')) }}
        <textarea name="editor1" id="editor1" rows="5" cols="80">

        </textarea>
        <script>
            CKEDITOR.replace( 'editor1' );
        </script>
        <p>{{ Form::submit('Submit!') }}</p>
        {{ Form::close() }}
    </div>
    <div class="modal-footer">
        <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Close</a>
    </div>
</div>