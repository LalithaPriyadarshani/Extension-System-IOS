<meta name="pagetag" content="persons">
 <div class="panel panel-default">
    <div class="panel-body">
                                    
        <p class="lead">Persons <button type="button" data-toggle="modal" data-target="#addModel" class="btn btn-primary pull-right">Add</button></p>
        <br>

        <table id="table_id" class="dtable">
        <thead>
            <tr>
                <th>key</th>
                <th>f_name</th>
                <th>l_name</th>
                <th>email</th>
                <th>image</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
            			                    
                    <?php foreach($persons as $person): ?>
                    <tr>
                        <td><?php echo $person['ckey'] ?></td>
                        <td><?php echo $person['f_name'] ?></td>
                        <td><?php echo $person['l_name'] ?></td>
                        <td><?php echo $person['email'] ?></td>
                        <td><?php echo $person['image'] ?></td>
                        <td>
                            <button type="button" data-toggle="modal" data-target="#updateModel" class="btn btn-primary btn-sm" onclick="loadUpdateForm('<?php echo $person['ckey'] ?>')"><i class="fa fa-edit"></i></button>
                            <a class="btn btn-danger btn-sm" onclick="return confirm('Confirm this action?')" href="<?php echo $base_url ?>index.php/persons/delete/<?php echo $person['ckey'] ?>"><i class="fa fa-trash-o"></i></a>
                        </td>
                        <input type="hidden" id="Person_<?php echo $person['ckey'] ?>" value='<?php echo json_encode($person) ?>'>
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
        <h4 class="modal-title" id="myModalLabel">Add new Person</h4>
      </div>
         <!--start: Agent Form-->
         <?php
	     $this->load->helper('form');
	
		echo form_open_multipart('persons/add');
		//echo form_open('persons/add');
		?>
        <div class="form-horizontal" role="form" id="formAdd" >
      <div class="modal-body">
        
       
            <div class="form-group">
                <label for="key" class="col-sm-3 control-label">Person Key</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="ckey" name="ckey" placeholder="person key">
                </div>
            </div>
            <div class="form-group">
                <label for="fname" class="col-sm-3 control-label">First Name</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="f_name" name="f_name" placeholder="first name">
                </div>
            </div>
           <div class="form-group">
                <label for="lname" class="col-sm-3 control-label">Last Name</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="l_name" name="l_name" placeholder="last name">
                </div>
            </div>
          <div class="form-group">
                <label for="email" class="col-sm-3 control-label">Email</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="email" name="email" placeholder="email">
                </div>
            </div>
          <div class="form-group">
                <label for="email" class="col-sm-3 control-label">Image</label>
                <div class="col-sm-9">
                    <input type="file" class="form-control" id="userfile" name="userfile" placeholder="image">
                </div>
            </div>
            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="sumbit" class="btn btn-primary" >Save</button>
      </div>
          </div>
          <?php echo form_close();
?>
<!--end: Agent Form-->
    </div>
  </div>
</div>
<!-- Modal: End Agent -->


<!-- Modal: update Agent -->
<div class="modal fade" id="updateModel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Edit Person</h4>
      </div>
         <!--start: Agent Form-->
          <?php
	     $this->load->helper('form');
	
		echo form_open_multipart('persons/update');
		//echo form_open('persons/add');
		?>
        <div class="form-horizontal" role="form" id="formUpdate">
      <div class="modal-body">
        
       
            <div class="form-group">
                <label for="key" class="col-sm-3 control-label">Person Key</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="ckey" name="ckey" placeholder="person key" readonly>
                </div>
            </div>
            <div class="form-group">
                <label for="fname" class="col-sm-3 control-label">First Name</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="f_name" name="f_name" placeholder="first name">
                </div>
            </div>
           <div class="form-group">
                <label for="lname" class="col-sm-3 control-label">Last Name</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="l_name" name="l_name" placeholder="last name">
                </div>
            </div>
          <div class="form-group">
                <label for="email" class="col-sm-3 control-label">Email</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="email" name="email" placeholder="email">
                </div>
            </div>
          <div class="form-group">
                <label for="email" class="col-sm-3 control-label">Image</label>
                <div class="col-sm-9">
                    <input type="file" class="form-control" id="userfile" name="userfile" placeholder="image">
                </div>
            </div>
            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="sumbit" class="btn btn-primary" >Save</button>
      </div>
          </div>
          <?php echo form_close();
?>
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
        var json = $('#Person_'+key).val();
        var person = JSON.parse(json);
        
        $("#formUpdate input[name='ckey']").val(person.ckey);
        $("#formUpdate input[name='f_name']").val(person.f_name);
        $("#formUpdate input[name='l_name']").val(person.l_name);
        $("#formUpdate input[name='email']").val(person.email);
        $("#formUpdate input[name='image']").val(person.image);

    }
</script>
