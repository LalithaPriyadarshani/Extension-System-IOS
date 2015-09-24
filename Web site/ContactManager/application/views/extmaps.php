<meta name="pagetag" content="extmap">
 <div class="panel panel-default">
    <div class="panel-body">
                                    
        <p class="lead">Groups <button type="button" data-toggle="modal" data-target="#addModel" class="btn btn-primary pull-right">Add</button></p>
        <br>

        <table id="table_id" class="dtable">
        <thead>
            <tr>
                <th>Key</th>
                <th>Group</th>
                <th>Actions</th>

            </tr>
        </thead>
        <tbody>
            			                    
                    <?php foreach($extmaps as $extmap): ?>
                    <tr>
                        <td><?php echo $extmap['name'] ?></td>
                        <td><?php echo $extmap['extension_no'] ?></td>
                        <td>
                           <!-- <button type="button" data-toggle="modal" data-target="#updateModel" class="btn btn-primary btn-sm" onclick="loadUpdateForm('<?php echo $extmap['ckey'].'_'.$extmap['extension_no'] ?>')"><i class="fa fa-edit"></i></button> -->
                            <a class="btn btn-danger btn-sm" onclick="return confirm('Confirm this action?')" href="<?php echo $base_url ?>index.php/extmap/delete/<?php echo $extmap['ckey'].'/'.$extmap['extension_no'] ?>"><i class="fa fa-trash-o"></i></a>
                        </td>
                        <input type="hidden" id="Extmap_<?php echo $extmap['ckey'].'_'.$extmap['extension_no'] ?>" value='<?php echo json_encode($extmap) ?>'>
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
        <h4 class="modal-title" id="myModalLabel">Assign Extension</h4>
      </div>
         <!--start: Agent Form-->
        <form class="form-horizontal" role="form" id="formAdd" action="<?php echo $base_url ?>index.php/extmap/add" method="post">
      <div class="modal-body">
        
       
            <div class="form-group">
                <label for="key" class="col-sm-3 control-label">Person</label>
                <div class="col-sm-9">
                    <select class="chzn-select" data-placeholder="select your options" style="width: 300px" id="name" name="name">
                        
                        <?php foreach($extmaps as $extmap): ?>
                            <option value="<?php echo $extmap['ckey'] ?>"><?php echo $extmap['name'] ?></option>
                        <?php endforeach ?>
                        
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="key" class="col-sm-3 control-label">Extension</label>
                <div class="col-sm-9">
                    <select class="chzn-select" data-placeholder="select your options" style="width: 150px" id="ext_no" name="ext_no">
                        
                        <?php foreach($extensions as $extension): ?>
                            <option value="<?php echo $extension['extension_no'] ?>"><?php echo $extension['extension_no'] ?></option>
                        <?php endforeach ?>
                        
                    </select>
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
    
   /* function loadUpdateForm(key)
    {
        var json = $('#Group_'+key).val();
        var group = JSON.parse(json);
        
        $("#formUpdate input[name='gkey']").val(group.gkey);
        $("#formUpdate input[name='gname']").val(group.name);
    }   */
            
    window.onload = function ()
    {
        $('.chzn-select').chosen();
        $('.chosen-drop').css({"width": "300px"});
    
    }
</script>