<meta name="pagetag" content="groups">
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
            			                    
               <!--     <tr>
                        <td>001</td>
                        <td>lakySam</td>
                        <td>123</td>
                        <td>2012-06-25 00:00:00</td>
                        <td>
                            <button type="button" data-toggle="modal" data-target="#updateModel" class="btn btn-primary btn-sm" onclick='loadUpdateForm(1)'><i class="fa fa-edit"></i></button>
                            <a class="btn btn-danger btn-sm" onclick="return confirm('Confirm this action?')" href="http://beta20.fidenz.com/simReg/simreg/index.php/users/system/delete/1"><i class="fa fa-trash-o"></i></a>
                        </td>
                        <input type="hidden" id="agent_1" value='{"_id":"1","agent_code":"001","agent_name":"lakySam","agent_pass":"123","agent_type":"1","reg_date":"2012-06-25 00:00:00","meta":"","Status":"1"}' />
                    </tr> -->
            
                    <?php foreach($groups as $group): ?>
                    <tr>
                        <td><?php echo $group['gkey'] ?></td>
                        <td><?php echo $group['name'] ?></td>
                        <td>
                            <button type="button" data-toggle="modal" data-target="#updateModel" class="btn btn-primary btn-sm" onclick="loadUpdateForm('<?php echo $group['gkey'] ?>')"><i class="fa fa-edit"></i></button>
                            <a class="btn btn-danger btn-sm" onclick="return confirm('Confirm this action?')" href="<?php echo $base_url ?>index.php/groups/delete/<?php echo $group['gkey'] ?>"><i class="fa fa-trash-o"></i></a>
                        </td>
                        <input type="hidden" id="Group_<?php echo $group['gkey'] ?>" value='<?php echo json_encode($group) ?>'>
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
        <h4 class="modal-title" id="myModalLabel">Add new Group</h4>
      </div>
         <!--start: Agent Form-->
        <form class="form-horizontal" role="form" id="formAdd" action="<?php echo $base_url ?>index.php/groups/add" method="post">
      <div class="modal-body">
        
       
            <div class="form-group">
                <label for="key" class="col-sm-3 control-label">Group Key</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="gkey" name="gkey" placeholder="group key">
                </div>
            </div>
            <div class="form-group">
                <label for="name" class="col-sm-3 control-label">Name</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="gname" name="gname" placeholder="group name">
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
        <h4 class="modal-title" id="myModalLabel">Add new Group</h4>
      </div>
         <!--start: Agent Form-->
        <form class="form-horizontal" role="form" id="formUpdate" action="<?php echo $base_url ?>index.php/groups/update" method="post">
      <div class="modal-body">
        
       
            <div class="form-group">
                <label for="key" class="col-sm-3 control-label">Group Key</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control"  id="gkey" name="gkey" placeholder="group key" readonly>
                </div>
            </div>
            <div class="form-group">
                <label for="name" class="col-sm-3 control-label">Name</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="gname" name="gname" placeholder="group name">
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
        var json = $('#Group_'+key).val();
        var group = JSON.parse(json);
        
        $("#formUpdate input[name='gkey']").val(group.gkey);
        $("#formUpdate input[name='gname']").val(group.name);
    }
</script>
