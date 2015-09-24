<meta name="pagetag" content="locations">
 <div class="panel panel-default">
    <div class="panel-body">
                                    
        <p class="lead">Locations <button type="button" data-toggle="modal" data-target="#addModel" class="btn btn-primary pull-right">Add</button></p>
        <br>

        <table id="table_id" class="dtable">
        <thead>
            <tr>
                <th>Key</th>
                <th>Name</th>
                <th>Description</th>
                <th>action</th></th>
            </tr>
        </thead>
        <tbody>
            			                    
                    <?php foreach($locations as $location): ?>
                    <tr>
                        <td><?php echo $location['lkey'] ?></td>
                        <td><?php echo $location['name'] ?></td>
                        <td><?php echo $location['description'] ?></td>
                        <td>
                            <button type="button" data-toggle="modal" data-target="#updateModel" class="btn btn-primary btn-sm" onclick="loadUpdateForm('<?php echo $location['lkey'] ?>')"><i class="fa fa-edit"></i></button>
                            <a class="btn btn-danger btn-sm" onclick="return confirm('Confirm this action?')" href="<?php echo $base_url ?>index.php/locations/delete/<?php echo $location['lkey'] ?>"><i class="fa fa-trash-o"></i></a>
                        </td>
                        <input type="hidden" id="Location_<?php echo $location['lkey'] ?>" value='<?php echo json_encode($location) ?>'>
                    </tr>
                    <?php endforeach ?>              
                    

        </tbody>
    </table>
    </div>
</div>

<!-- Modal: Add Agent -->
<div class="modal fade" id="addModel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Add new Location</h4>
      </div>
         <!--start: Agent Form-->
        <form class="form-horizontal" role="form" id="formAdd" action="<?php echo $base_url ?>index.php/locations/add" method="post">
      <div class="modal-body">
        
       
            <div class="form-group">
                <label for="key" class="col-sm-3 control-label">Location Key</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="lkey" name="lkey" placeholder="location key">
                </div>
            </div>
            <div class="form-group">
                <label for="name" class="col-sm-3 control-label">Name</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="name" name="name" placeholder="location name">
                </div>
            </div>
            <div class="form-group">
                <label for="name" class="col-sm-3 control-label">description</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="desc" name="desc" placeholder="description">
                </div>
            </div>
            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="sumbit" class="btn btn-primary" >Save</button>
      </div>
          </form>
<!--end: Agent Form-->
    </div>
  </div>
</div>
<!-- Modal: End Agent -->

<!-- Modal: Add Agent -->
<div class="modal fade" id="updateModel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Edit Location</h4>
      </div>
         <!--start: Agent Form-->
        <form class="form-horizontal" role="form" id="formUpdate" action="<?php echo $base_url ?>index.php/locations/update" method="post">
      <div class="modal-body">
        
       
            <div class="form-group">
                <label for="key" class="col-sm-3 control-label">Location Key</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="lkey" name="lkey" placeholder="location key" readonly>
                </div>
            </div>
            <div class="form-group">
                <label for="name" class="col-sm-3 control-label">Name</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="name" name="name" placeholder="location name">
                </div>
            </div>
            <div class="form-group">
                <label for="name" class="col-sm-3 control-label">description</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="desc" name="desc" placeholder="description">
                </div>
            </div>
            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="sumbit" class="btn btn-primary" >Save</button>
      </div>
          </form>
<!--end: Agent Form-->
    </div>
  </div>
</div>
<!-- Modal: End Agent -->

<script type="text/javascript">
    $( "#formAdd" ).submit(function( event )
    {
      //alert( "Handler for .submit() called." );
      //event.preventDefault();
        
    });
    
    $( "#formUpdate" ).submit(function( event )
    {
      //alert( "Handler for .submit() called." );
      //event.preventDefault();
        
    });
    
    function loadUpdateForm(key)
    {
        var json = $('#Location_'+key).val();
        var location = JSON.parse(json);
        
        $("#formUpdate input[name='lkey']").val(location.lkey);
        $("#formUpdate input[name='name']").val(location.name);
        $("#formUpdate input[name='desc']").val(location.description);
    }
</script>

