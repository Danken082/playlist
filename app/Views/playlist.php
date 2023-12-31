<div class="modal" id="myModal">
      <div class="modal-dialog">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Select from playlist</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
          <form action="/add" method="post">
            <!-- <p id="modalData"></p> -->
            <input type="hidden" id="musicID" name="musicID">
            <select  name="playlist" class="form-control" id ="playlist">
      <?php foreach($plays as $play): ?>
              <option value="playlist"><?=$play['playlist']?></option>
    <?php endforeach;?>
            </select>
            <input type="submit" name="add">
            </form>
          </div>
          <!-- Modal footer -->
          <div class="modal-footer">
          <button type="button"  class="btn btn-success"data-bs-toggle="modal" data-bs-target="#createPlaylist">Create New</button>
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          </div>

          </div>
      </div>
    </div>
