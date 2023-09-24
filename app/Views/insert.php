<div class="modal" id="dan">
      <div class="modal-dialog">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Upload Music</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
          <form action="/insert" method="post">
            <!-- <p id="modalData"></p> -->
            <input type="hidden" id="id" name="id" >
          <input type="file" name ="file" required  value ="<?= isset($msc['file'])? $msc['file']: ''?>">
          <label>Artist: </label>
          <input type="text" name = "artist" placeholder = "artist" required>
          <label >Title: </label>
          <input type="text" name = "title" placeholder = "MusicTitle" required>
        <button type ="submit" class ="btn btn-success" name ="Insert">INSERT</button>
          </div>
          </form>
          <!-- Modal footer -->
          <div class="modal-footer">
            
            
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button> 
         </div>
        
          
          </div>
      </div>
    </div>
