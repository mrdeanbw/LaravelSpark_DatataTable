@extends('spark::layouts.app')

@section('content')
<home :user="user" inline-template>
    <div class="container">
        <!-- Application Dashboard -->
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        Your application's dashboard.123
                    </div>
                </div>
            </div>
        </div>

        

       <!-- Application Dashboard -->
       <div id="example_wrapper" class="dataTables_wrapper">
            
                <div class="dt-buttons">
                    <a class="dt-button buttons-create" tabindex="0" aria-controls="example" href="#"><span>New</span></a>
                    <a class="dt-button buttons-selected buttons-edit" tabindex="0" aria-controls="example" href="#"><span>Edit</span></a>
                    <a class="dt-button buttons-selected buttons-remove" tabindex="0" aria-controls="example" href="#"><span>Delete</span></a>
                </div>
                <div id="example_filter" class="dataTables_filter">
                    <label>Search:<input type="search" class="" placeholder="" aria-controls="example"></label>
                </div>
                <table id="example" class="display dataTable" cellspacing="0" width="100%" role="grid" ar
                ia-describedby="example_info" style="width: 100%; position: relative;">
					<thead>
						<tr role="row">
                        <th class="reorder sorting_asc" tabindex="0" aria-controls="example" 
                            rowspan="1" colspan="1" aria-label="Order: activate to sort column descending" 
                            style="width: 40px;" aria-sort="ascending">Order</th>
                        <!--        
                        <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Title" style="width: 267px;">Title</th>
                        <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Author" style="width: 117px;">Author</th>
                        <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Duration" style="width: 60px;">Duration</th>
                        -->
                            <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Template Name" style="width: 267px;">Template Name</th>
                            <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Description" style="width: 117px;">Description</th>
                            <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="User Editable" style="width: 60px;">User Editable</th>
                            <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Required" style="width: 60px;">Required</th>
                            <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Type" style="width: 60px;">Type</th>
                            
                        </tr>
					</thead>
					<tfoot>
						<tr>
                            <th class="reorder" rowspan="1" colspan="1">Order</th>
                            <th rowspan="1" colspan="1">Template Name</th>
                            <th rowspan="1" colspan="1">Description</th>
                            <th rowspan="1" colspan="1">User Editable</th>
                            <th rowspan="1" colspan="1">Required</th>
                            <th rowspan="1" colspan="1">Type</th>
                        </tr>
					</tfoot>
				<tbody>
                
                <tr id="row_1" role="row" class="even selected"><td class="reorder sorting_1">2</td><td>The Final Empire: Mistborn</td><td>Brandon Sanderson12313</td><td>24h 39m</td></tr>
                <tr id="row_2" role="row" class="odd"><td class="reorder sorting_1">3</td><td>The Name of the Wind</td><td>Patrick Rothfuss</td><td>16h 23m</td></tr>
                <tr id="row_3" role="row" class="even"><td class="reorder sorting_1">4</td><td>The Blade Itself: The First Law</td><td>Joe Abercrombie</td><td>22h 20m</td></tr>
                <tr id="row_4" role="row" class="odd"><td class="reorder sorting_1">5</td><td>The Heroes</td><td>Joe Abercrombie</td><td>23h 10m</td></tr>
                <tr id="row_5" role="row" class="even"><td class="reorder sorting_1">6</td><td>Assassin's Apprentice: The Farseer Trilogy</td><td>Robin Hobb</td><td>17h 23m</td></tr>
                <tr id="row_6" role="row" class="odd"><td class="reorder sorting_1">7</td><td>The Eye of the World: Wheel of Time</td><td>Robert Jordan</td><td>30h 2m</td></tr>
                <tr id="row_7" role="row" class="even"><td class="reorder sorting_1">8</td><td>The Wise Man's Fear</td><td>Patrick Rothfuss</td><td>20h 11m</td></tr>
                <tr id="row_8" role="row" class="odd"><td class="reorder sorting_1">9</td><td>The Way of Kings: The Stormlight Archive</td><td>Brandon Sanderson</td><td>45h 34m</td></tr>
                <tr id="row_9" role="row" class="even"><td class="reorder sorting_1">10</td><td>The Lean Startup</td><td>Eric Ries</td><td>8h 43m</td></tr>
                <tr id="row_10" role="row" class="odd"><td class="reorder sorting_1">1</td><td>House of Suns</td><td>Alastair Reynolds</td><td>18275000h 0m</td></tr>
                </tbody></table>
            
           </div>

        <!-- Application Dashboard -->
    </div>
</home>
@endsection
