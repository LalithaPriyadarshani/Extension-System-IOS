
<!DOCTYPE HTML>
<html lang="en">
    <head>
	    <!-- start: Meta -->
	    <meta charset="utf-8">
        <title>SimReg</title>
	    <meta name="apple-mobile-web-app-capable" content="yes"/>
	    <meta name="description" content="SimpliQ - Flat &amp; Responsive Bootstrap Admin Template.">
	    <meta name="author" content="Laky Sam">
	    <meta name="keyword" content="Test, Sample, Help">
	    <!-- end: Meta -->
	
	    <!-- start: Mobile Specific -->
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <!-- end: Mobile Specific -->
	
	    <!-- start: CSS -->
        <link rel="stylesheet" href="http://beta20.fidenz.com/simReg/simreg/assets/datatables/css/jquery.dataTables.css">
        <link rel="stylesheet" href="http://beta20.fidenz.com/simReg/simreg/assets/toastr/toastr.min.css">

	    <!--link href="http://beta20.fidenz.com/simReg/simreg/assets/css/bootstrap.min.css" rel="stylesheet"-->
	    <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="http://beta20.fidenz.com/simReg/simreg/assets/bootstrap/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="http://beta20.fidenz.com/simReg/simreg/assets/bootstrap/css/bootstrap-theme.min.css">

        
        <link href='http://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="http://beta20.fidenz.com/simReg/simreg/assets/css/custom.css">
        <link rel="stylesheet" href="http://beta20.fidenz.com/simReg/simreg/assets/fontawesome/css/font-awesome.min.css">
	    <!-- end: CSS -->

        <!-- start: JS -->
        <script src="http://beta20.fidenz.com/simReg/simreg/assets/js/jquery-2.1.0.min.js"></script>
        <script src="http://beta20.fidenz.com/simReg/simreg/assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="http://beta20.fidenz.com/simReg/simreg/assets/datatables/js/jquery.dataTables.js"></script>
        <script src="http://beta20.fidenz.com/simReg/simreg/assets/toastr/toastr.min.js"></script>
        <!-- end: JS-->

    </head>
    <body>

        <div>
            <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">                <!--start: Top Navigation-->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <nav class="navbar navbar-default" role="navigation">
                      <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                          </button>
                          <a class="navbar-brand" href="#">Mobitel: SimReg</a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                          <!--ul class="nav navbar-nav">
                            <li class="active"><a href="#">Link</a></li>
                            <li><a href="#">Link</a></li>
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                                <li class="divider"></li>
                                <li><a href="#">One more separated link</a></li>
                              </ul>
                            </li>
                          </ul-->
                          <!--form class="navbar-form navbar-left" role="search">
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="Search">
                            </div>
                            <button type="submit" class="btn btn-default">Submit</button>
                          </form-->
                          <ul class="nav navbar-nav navbar-right">
                            <!--li><a href="#">Link</a></li-->
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome, admin <b class="caret"></b></a>
                              <ul class="dropdown-menu">
                                <!--li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li-->
                                <li class="divider"></li>
                                <li><a href="http://beta20.fidenz.com/simReg/simreg/index.php/users/login/logout">Logout</a></li>
                              </ul>
                            </li>
                          </ul>
                        </div><!-- /.navbar-collapse -->
                      </div><!-- /.container-fluid -->
                    </nav>
                </div>
                <!--end: Top Navigation-->

                <!--start: Content Container-->
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        
                        <!--start: Left Nivagation-->
                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                    
                                <div class="list-group">
                                    <a data-nav="pending" href="http://beta20.fidenz.com/simReg/simreg/index.php/jobs/pending" class="list-group-item "><span class="badge">15</span> Pending Jobs</a>
                                    <a data-nav="completed" href="http://beta20.fidenz.com/simReg/simreg/index.php/jobs/completed" class="list-group-item"> Completed Jobs</a>
                                </div>
                                <div class="list-group">
                                                                      <a data-nav="sysuser" href="http://beta20.fidenz.com/simReg/simreg/index.php/users/system" class="list-group-item"> System Users</a>
                                    <a data-nav="agents" href="http://beta20.fidenz.com/simReg/simreg/index.php/users/agents" class="list-group-item"> Field Agents</a>
                                    <a data-nav="imgrepo" href="http://beta20.fidenz.com/simReg/simreg/index.php/imagerepo" class="list-group-item"> Image Repo</a>
                                    <a data-nav="error" href="http://beta20.fidenz.com/simReg/simreg/index.php/errorlog" class="list-group-item"> Error Log</a>
                                                                  </div>

                            </div>
                        <!--end: Left Nivagation-->
                        
                        <!--start: Dynamic Content-->
                            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
<meta name="pagetag" content="agents">
 <div class="panel panel-default">
    <div class="panel-body">
                                    
        <p class="lead">Field Agents <button type="button" data-toggle="modal" data-target="#addModel" class="btn btn-primary pull-right">Add</button></p>
        <br>

        <table id="table_id" class="dtable">
        <thead>
            <tr>
                <th>Code</th>
                <th>Name</th>
                <th>Pass</th>
                <th>Reg. Date</th>
                <th>action</th></th>
            </tr>
        </thead>
        <tbody>
            			                    
                    <tr>
                        <td>001</td>
                        <td>lakySam</td>
                        <td>123</td>
                        <td>2012-06-25 00:00:00</td>
                        <td>
                            <button type="button" data-toggle="modal" data-target="#updateModel" class="btn btn-primary btn-sm" onclick='loadUpdateForm(1)'><i class="fa fa-edit"></i></button>
                            <a class="btn btn-danger btn-sm" onclick="return confirm('Confirm this action?')" href="http://beta20.fidenz.com/simReg/simreg/index.php/users/system/delete/1"><i class="fa fa-trash-o"></i></a>
                        </td>
                        <input type="hidden" id="agent_1" value='{"_id":"1","agent_code":"001","agent_name":"lakySam","agent_pass":"123","agent_type":"1","reg_date":"2012-06-25 00:00:00","meta":"","Status":"1"}' />
                    </tr>

                                
                    <tr>
                        <td>002</td>
                        <td>narmada</td>
                        <td>1234</td>
                        <td>2014-04-02 06:28:36</td>
                        <td>
                            <button type="button" data-toggle="modal" data-target="#updateModel" class="btn btn-primary btn-sm" onclick='loadUpdateForm(2)'><i class="fa fa-edit"></i></button>
                            <a class="btn btn-danger btn-sm" onclick="return confirm('Confirm this action?')" href="http://beta20.fidenz.com/simReg/simreg/index.php/users/system/delete/2"><i class="fa fa-trash-o"></i></a>
                        </td>
                        <input type="hidden" id="agent_2" value='{"_id":"2","agent_code":"002","agent_name":"narmada","agent_pass":"1234","agent_type":"1","reg_date":"2014-04-02 06:28:36","meta":"","Status":"1"}' />
                    </tr>

                                
                    <tr>
                        <td>001</td>
                        <td>test</td>
                        <td>123</td>
                        <td>2014-04-25 03:48:03</td>
                        <td>
                            <button type="button" data-toggle="modal" data-target="#updateModel" class="btn btn-primary btn-sm" onclick='loadUpdateForm(3)'><i class="fa fa-edit"></i></button>
                            <a class="btn btn-danger btn-sm" onclick="return confirm('Confirm this action?')" href="http://beta20.fidenz.com/simReg/simreg/index.php/users/system/delete/3"><i class="fa fa-trash-o"></i></a>
                        </td>
                        <input type="hidden" id="agent_3" value='{"_id":"3","agent_code":"001","agent_name":"test","agent_pass":"123","agent_type":"1","reg_date":"2014-04-25 03:48:03","meta":"","Status":"1"}' />
                    </tr>

                                
                    <tr>
                        <td>1234</td>
                        <td>minali22</td>
                        <td>admin@123</td>
                        <td>2014-04-29 08:37:43</td>
                        <td>
                            <button type="button" data-toggle="modal" data-target="#updateModel" class="btn btn-primary btn-sm" onclick='loadUpdateForm(4)'><i class="fa fa-edit"></i></button>
                            <a class="btn btn-danger btn-sm" onclick="return confirm('Confirm this action?')" href="http://beta20.fidenz.com/simReg/simreg/index.php/users/system/delete/4"><i class="fa fa-trash-o"></i></a>
                        </td>
                        <input type="hidden" id="agent_4" value='{"_id":"4","agent_code":"1234","agent_name":"minali22","agent_pass":"admin@123","agent_type":"1","reg_date":"2014-04-29 08:37:43","meta":"","Status":"1"}' />
                    </tr>

                                
                    <tr>
                        <td>23</td>
                        <td>delete</td>
                        <td>cdcC</td>
                        <td>2014-05-02 10:37:52</td>
                        <td>
                            <button type="button" data-toggle="modal" data-target="#updateModel" class="btn btn-primary btn-sm" onclick='loadUpdateForm(5)'><i class="fa fa-edit"></i></button>
                            <a class="btn btn-danger btn-sm" onclick="return confirm('Confirm this action?')" href="http://beta20.fidenz.com/simReg/simreg/index.php/users/system/delete/5"><i class="fa fa-trash-o"></i></a>
                        </td>
                        <input type="hidden" id="agent_5" value='{"_id":"5","agent_code":"23","agent_name":"delete","agent_pass":"cdcC","agent_type":"1","reg_date":"2014-05-02 10:37:52","meta":"","Status":"1"}' />
                    </tr>

                                
                    <tr>
                        <td>31033</td>
                        <td>tttt</td>
                        <td>tttt</td>
                        <td>2014-05-02 10:51:32</td>
                        <td>
                            <button type="button" data-toggle="modal" data-target="#updateModel" class="btn btn-primary btn-sm" onclick='loadUpdateForm(6)'><i class="fa fa-edit"></i></button>
                            <a class="btn btn-danger btn-sm" onclick="return confirm('Confirm this action?')" href="http://beta20.fidenz.com/simReg/simreg/index.php/users/system/delete/6"><i class="fa fa-trash-o"></i></a>
                        </td>
                        <input type="hidden" id="agent_6" value='{"_id":"6","agent_code":"31033","agent_name":"tttt","agent_pass":"tttt","agent_type":"1","reg_date":"2014-05-02 10:51:32","meta":"","Status":"1"}' />
                    </tr>

                                
                    <tr>
                        <td> m m m m</td>
                        <td>nnm</td>
                        <td> m m </td>
                        <td>2014-05-02 10:51:58</td>
                        <td>
                            <button type="button" data-toggle="modal" data-target="#updateModel" class="btn btn-primary btn-sm" onclick='loadUpdateForm(7)'><i class="fa fa-edit"></i></button>
                            <a class="btn btn-danger btn-sm" onclick="return confirm('Confirm this action?')" href="http://beta20.fidenz.com/simReg/simreg/index.php/users/system/delete/7"><i class="fa fa-trash-o"></i></a>
                        </td>
                        <input type="hidden" id="agent_7" value='{"_id":"7","agent_code":" m m m m","agent_name":"nnm","agent_pass":" m m ","agent_type":"1","reg_date":"2014-05-02 10:51:58","meta":"","Status":"1"}' />
                    </tr>

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
        <h4 class="modal-title" id="myModalLabel">Add new agent</h4>
      </div>
      <div class="modal-body">
        
        <!--start: Agent Form-->
        <form class="form-horizontal" role="form" id="formAdd" action="http://beta20.fidenz.com/simReg/simreg/index.php/users/agents/add" method="post">
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Agent Code</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="acode" name="acode" placeholder="agent code">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Name</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="aname" name="aname" placeholder="user name">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-3 control-label">Password</label>
                <div class="col-sm-9">
                    <input type="password" class="form-control" id="apass" name="apass" placeholder="Password">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-3 control-label">User Type</label>
                <div class="col-sm-9">
                    <select class="form-control" id="atype" name="atype">
                      <option value="1">Agent</option>
                    </select>
                </div>
            </div>
        </form>
        <!--end: Agent Form-->

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="submitAdd()">Save</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal: End Agent -->

<!-- Modal: Update Agent -->
<div class="modal fade" id="updateModel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Update agent</h4>
      </div>
      <div class="modal-body">
        
        <!--start: Agent Form-->
        <form class="form-horizontal" role="form" id="formUpdate" action="http://beta20.fidenz.com/simReg/simreg/index.php/users/agents/update" method="post">
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Agent Code</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="uacode" name="uacode" placeholder="agent code">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Name</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="uaname" name="uaname" placeholder="user name">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-3 control-label">Password</label>
                <div class="col-sm-9">
                    <input type="password" class="form-control" id="uapass" name="uapass" placeholder="Password">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-3 control-label">User Type</label>
                <div class="col-sm-9">
                    <select class="form-control" id="uatype" name="uatype">
                      <option value="1">Agent</option>
                    </select>
                </div>
            </div>
            <input type="hidden" name="uaid" id="uaid" value="" />
        </form>
        <!--end: Agent Form-->

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="submitUpdate()">Update</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal: End Agent -->

<script type="text/javascript">

    function submitAdd() {

        if (!$('#acode').val() || !$('#aname').val() || !$('#apass').val()) {

        }
        else {
            $('#formAdd').submit();
        }
    }

    function loadUpdateForm(agentid) {
        var jsonS = $("#agent_" + agentid).val();
        var agent = JSON.parse(jsonS);

        $("#uaid").val(agent._id);
        $("#uacode").val(agent.agent_code);
        $("#uaname").val(agent.agent_name);
        $("#uapass").val(agent.agent_pass);
        $("#uatype").val(agent.agent_type);
    }

    function submitUpdate() {
        if (!$('#uaid').val() || !$('#uacode').val() || !$('#uaname').val() || !$('#uapass').val()) {
            alert("fields empty");
        }
        else {
            $('#formUpdate').submit();
        }
    }

</script>                            </div>
                        <!--end: Dynamic Content-->

                    </div>
                <!--end: Content Container-->
            </div>
        </div>

        <script type="text/javascript">
            $(document).ready(function () {
                $('#table_id').dataTable();
                var pagetag = $('meta[name=pagetag]').attr("content");
                $("a[data-nav='" + pagetag + "']").addClass('active');
            });
        </script>

        <script type="text/javascript">

            toastr.options = {
              "closeButton": false,
              "debug": true,
              "positionClass": "toast-top-full-width",
              "onclick": null,
              "showDuration": "300",
              "hideDuration": "1000",
              "timeOut": "5000",
              "extendedTimeOut": "1000",
              "showEasing": "swing",
              "hideEasing": "linear",
              "showMethod": "fadeIn",
              "hideMethod": "fadeOut"
            }

            
            
            
            
        </script>

    </body>
</html>