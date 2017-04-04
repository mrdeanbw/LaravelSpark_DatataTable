@extends('spark::layouts.app')

@section('content')
<home :user="user" inline-template>
    <div class="container">
        <!-- Application Dashboard -->
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading" style="text-align: center">Emergency Plan Templates</div>

                    <!--<div class="panel-body">
                       
                    </div>-->
                </div>
            </div>
        </div>

        

       <!-- Application Dashboard -->
       <div id="example_wrapper" class="dataTables_wrapper">
            
   
                <table id="example" class="display dataTable" cellspacing="0" width="100%" role="grid" ar
                ia-describedby="example_info" style="width: 100%; position: relative;">
					<thead>
						<tr role="row">
                        <!--<th class="reorder sorting_asc" tabindex="0" aria-controls="example" 
                            rowspan="1" colspan="1" aria-label="Order: activate to sort column descending" 
                            style="width: 40px;" aria-sort="ascending">Order</th>-->
                        <!--        
                        <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Title" style="width: 267px;">Title</th>
                        <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Author" style="width: 117px;">Author</th>
                        <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Duration" style="width: 60px;">Duration</th>
                        -->
                            <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Template Name" style="width: 267px;">Template Name</th>
                            <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Description" style="width: 150px;">Description</th>
                            <th class="sorting_enabled" rowspan="1" colspan="1" aria-label="Display Sequence" style="width: 60px;">Display Sequence</th>
                            <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="User Editable" style="width: 60px;">User Editable</th>
                            <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Required" style="width: 60px;">Required</th>
                            <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Type" style="width: 60px;">Type</th>
                            
                        </tr>
					</thead>
					<tfoot>
						<tr>
                            <!--<th class="reorder" rowspan="1" colspan="1">Order</th>-->
                            <th rowspan="1" colspan="1">Template Name</th>
                            <th rowspan="1" colspan="1">Description</th>
                            <th rowspan="1" colspan="1">Display Sequence</th>
                            <th rowspan="1" colspan="1">User Editable</th>
                            <th rowspan="1" colspan="1">Required</th>
                            <th rowspan="1" colspan="1">Type</th>
                        </tr>
					</tfoot>
	
                </table>
            
           </div>

        <!-- Application Dashboard -->
    </div>
</home>
@endsection
