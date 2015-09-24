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
                        <td>id</td>
                        <td>name</td>
                        <td>contact_extension</td>
                        <td>group</td>
                        <td>location</td>
                    </tr>

                                
                    

        </tbody>
    </table>
    </div>
</div>