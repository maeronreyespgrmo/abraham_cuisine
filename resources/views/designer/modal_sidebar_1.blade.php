<!-- Modal -->
<div id="modal_sidebar_1" class="modal fade" role="dialog">
    <div class="modal-dialog">
  
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">

          <h4 class="modal-title"><b>Edit Logo</b></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form id="sidebar1logoForm" enctype="multipart/form-data">
            @csrf
            <input type="file" name="image" id="image">
            <br>
            <button class="btn btn-success" style="width:100px" type="submit">Save</button>
          </form>
        </div>
        {{-- <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
        </div> --}}
      </div>
  
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $('#sidebar1logoForm').on('submit', function(e){
        e.preventDefault();
    
        let formData = new FormData(this);
    
        $.ajax({
            type: 'POST',
            url: '/designer/sidebar_logo_1/image/update',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response){
                alert(response);
            },
            error: function(xhr){
                alert('Upload failed');
            }
        });
    });
    </script>