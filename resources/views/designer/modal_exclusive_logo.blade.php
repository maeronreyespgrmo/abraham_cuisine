<!-- Modal -->
<div id="modal_banner_logo" class="modal fade" role="dialog">
    <div class="modal-dialog">
  
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">

          <h4 class="modal-title">Edit Logo</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form id="bannerlogoForm" enctype="multipart/form-data">
            @csrf
            <input type="file" name="image" id="image">
            <br>
            <button class="btn btn-success" style="width:100px" type="submit">Upload</button>
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
    $('#bannerlogoForm').on('submit', function(e){
        e.preventDefault();
    
        let formData = new FormData(this);
    
        $.ajax({
            type: 'POST',
            url: '/designer/banner_logo/update',
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