<meta name="pagetag" content="extensions">
 <div class="panel panel-default">
    <div class="panel-body">
                                    
        <p class="lead">Extensions <button type="button" data-toggle="modal" data-target="#addModel" class="btn btn-primary pull-right">Add</button></p>
        <br>

        <table id="table_id" class="dtable">
        <thead>
            <tr>
                <th>extension</th>
                <th>tel_no1</th>
                <th>tel_no2</th>
                <th>call type</th>
                <th>fax</th>
                <th>location</th>
                <th>action</th></th>
            </tr>
        </thead>
        <tbody>
            			                    
                     <?php foreach($extensions as $extension): ?>
                    <tr>
                        <td><?php echo $extension['extension_no'] ?></td>
                        <td><?php echo $extension['tel_no1'] ?></td>
                        <td><?php if($extension['tel_no2']!='0'){ echo $extension['tel_no2'];} else { echo "-";} ?></td>
                        <td><?php if($extension['call_type']=='1'){echo "Call";} else { echo "Call + Video Call";}  ?></td>
                        <td><?php echo $extension['fax'] ?></td>
                        <td><?php echo $extension['location'] ?></td>
                        <td>
                            <button type="button" data-toggle="modal" data-target="#updateModel" class="btn btn-primary btn-sm" onclick="loadUpdateForm('<?php echo $extension['extension_no'] ?>')"><i class="fa fa-edit"></i></button>
                            <a class="btn btn-danger btn-sm" onclick="return confirm('Confirm this action?')" href="<?php echo $base_url ?>index.php/extensions/delete/<?php echo $extension['extension_no'] ?>"><i class="fa fa-trash-o"></i></a>
                        </td>
                        <input type="hidden" id="Extension_<?php echo $extension['extension_no'] ?>" value='<?php echo json_encode($extension) ?>'>
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
        <h4 class="modal-title" id="myModalLabel">Add new Extension</h4>
      </div>
         <!--start: Agent Form-->
        <form class="form-horizontal" role="form" id="formAdd" action="<?php echo $base_url ?>index.php/extensions/add" method="post">
      <div class="modal-body">
        
       
            <div class="form-group">
                <label for="key" class="col-sm-3 control-label">Extension</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="ext_no" name="ext_no" placeholder="extension">
                </div>
            </div>
            <div class="form-group">
                <label for="name" class="col-sm-3 control-label">Tel no1</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="tel_no1" name="tel_no1" placeholder="telephone no1">
                </div>
            </div>
          <div class="form-group">
                <label for="name" class="col-sm-3 control-label">Tel no2</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="tel_no2" name="tel_no2" placeholder="telephone no2">
                </div>
            </div>
          <div class="form-group">
                <label for="name" class="col-sm-3 control-label">Call Type</label>
                <select id="call_type" name="call_type">
                  <option value="1">call</option>
                  <option value="2">call+video</option>
                </select>
            </div>
          <div class="form-group">
                <label for="name" class="col-sm-3 control-label">Fax</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="fax" name="fax" placeholder="fax">
                </div>
            </div>
          <div class="form-group">
                <label for="name" class="col-sm-3 control-label">Location</label>
                <select class="chzn-select" data-placeholder="select your options" style="width: 150px" id="ext_no" name="ext_no">
                        
                        <?php foreach($locations as $location): ?>
                            <option value="<?php echo $location['lkey'] ?>"><?php echo $location['name'] ?></option>
                        <?php endforeach ?>
                        
                    </select>
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
        <h4 class="modal-title" id="myModalLabel">Edit Extension</h4>
      </div>
         <!--start: Agent Form-->
        <form class="form-horizontal" role="form" id="formUpdate" action="<?php echo $base_url ?>index.php/extensions/update" method="post">
      <div class="modal-body">
        
       
            <div class="form-group">
                <label for="key" class="col-sm-3 control-label">Extension</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="ext_no" name="ext_no" placeholder="extension" readonly>
                </div>
            </div>
            <div class="form-group">
                <label for="name" class="col-sm-3 control-label">Tel no1</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="tel_no1" name="tel_no1" placeholder="telephone no1">
                </div>
            </div>
          <div class="form-group">
                <label for="name" class="col-sm-3 control-label">Tel no2</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="tel_no2" name="tel_no2" placeholder="telephone no2">
                </div>
            </div>
          <div class="form-group">
                <label for="name" class="col-sm-3 control-label">Call Type</label>
                <select id="call_type" name="call_type">
                  <option value="1">call</option>
                  <option value="2">call+video</option>
                </select>
            </div>
          <div class="form-group">
                <label for="name" class="col-sm-3 control-label">Fax</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="fax" name="fax" placeholder="fax">
                </div>
            </div>
          <div class="form-group">
                <label for="name" class="col-sm-3 control-label">Location</label>
                <div class="col-sm-9">
                    <select class="chzn-select" data-placeholder="select your options" style="width: 150px" id="ext_no" name="ext_no">
                        
                        <?php foreach($locations as $location): ?>
                            <option value="<?php echo $location['lkey'] ?>"><?php echo $location['name'] ?></option>
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
    
    function loadUpdateForm(key)
    {
        var json = $('#Extension_'+key).val();
        var extension = JSON.parse(json);
        
        $("#formUpdate input[name='ext_no']").val(extension.extension_no);
        $("#formUpdate input[name='tel_no1']").val(extension.tel_no1);
        $("#formUpdate input[name='tel_no2']").val(extension.tel_no2);
        $("#formUpdate input[name='call_type']").val(extension.call_type);
        $("#formUpdate input[name='fax']").val(extension.fax);
        $("#formUpdate input[name='location']").val(extension.location);
        
        
    }
    
    
    window.onload = function ()
    {
        $('.chzn-select').chosen();
        $('.chosen-drop').css({"width": "300px"});
    
    }
</script>