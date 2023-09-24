<div class="modal" id="createPlaylist">
      <div class="modal-dialog">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Create New Playlist</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
          <form action="/save" method="post">
            <!-- <p id="modalData"></p> -->
            <input type="hidden" id="id" name="id">
          <input type="text" name ="playlist" placeholder = "playlist name" required>
        <button type ="submit" class ="btn btn-success" name ="Save" data-bs-toggle ="modal"data-bs-target = "#myModal">Create</button>
          </div>
          </form>
          <!-- Modal footer -->
          <div class="modal-footer">
            
            
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button> 
         </div>
        
          
          </div>
      </div>
    </div>
