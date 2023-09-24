    <div class="modal" id="addPlaylist">
        <div class="modal-dialog">
            <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Select from playlist</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
            <form action="/cons" method="post">
                <!-- <p id="modalData"></p> -->
                <input type="hidden" id="musicID" name="musicID">
                <select  name="playlist" class="form-control" id ="playlist">
                <?php foreach($plays as $play): ?>
                        <option value="playlist"  value ="<?= isset($play['id'])? $play['id']: ''?>"><?=$play['playlist']?></option>
            <?php endforeach;?>
                </select>
                <input type="submit" name="add">
                </form>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>

            </div>
        </div>
        </div>
