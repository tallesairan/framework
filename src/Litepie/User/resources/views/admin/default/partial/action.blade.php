                    <div class="btn-group">

                        <button type="button" class="btn btn-xs btn-warning"><i class="fa fa-gears" aria-hidden="true"></i>&nbsp;Ações</button>
                        <button type="button" class="btn btn-xs btn-warning dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu item" role="menu">
                            <li><a id="view-revision" style="cursor:pointer;" data-toggle="modal" data-target="#revision-modal"><i class="fa fa-fw fa-history" aria-hidden="true"></i> Revisões</a></li>

                            <li><a id="view-workflow" style="cursor:pointer;" data-toggle="modal" data-target="#workflow-modal"><i class="fa fa-fw fa-exchange" aria-hidden="true"></i> Workflow</a></li>
                            <li class="divider"></li>

                            {{--<li><a class="action-modal" style="cursor:pointer;" data-toggle="modal" --}}
                            {{--data-title='Add Task'  data-url="{{guard_url('user/client/action/task/'.$client->getRouteKey())}}" data-target="#action-modal"><i class="fa fa-fw fa-tasks" aria-hidden="true"></i> Add Task</a></li>--}}

                            {{--<li><a class="action-modal" style="cursor:pointer;" data-toggle="modal" --}}
                            {{--data-title='Add Calendar'  data-url="{{guard_url('user/client/action/calendar/'.$client->getRouteKey())}}" data-target="#action-modal"><i class="fa fa-fw fa-calendar" aria-hidden="true"></i> Add Calendar</a></li>--}}
                            {{--<li class="divider"></li>--}}

                            <li><a class="action-link" style="cursor:pointer;" data-url="{{guard_url('user/client/action/print/'.$client->getRouteKey())}}"><i class="fa fa-fw fa-print" aria-hidden="true"></i> Imprimir</a></li>

                            <li><a class="action-link" style="cursor:pointer;" data-url="{{guard_url('user/client/action/pdf/'.$client->getRouteKey())}}"><i class="fa fa-fw fa-file-pdf-o" aria-hidden="true"></i> Download PDF</a></li>

                            <li><a class="action-link" style="cursor:pointer;" data-url="{{guard_url('user/client/action/excel/'.$client->getRouteKey())}}"><i class="fa fa-fw fa-file-excel-o" aria-hidden="true"></i> Download Excel</a></li>
                            <li class="divider"></li>

                            {{--<li><a class="action-modal" style="cursor:pointer;" data-toggle="modal" --}}
                            {{--data-title='Send mail to contact' data-url="{{guard_url('user/client/action/mail/'.$client->getRouteKey())}}" data-target="#action-modal"><i class="fa fa-fw fa-envelope-o" aria-hidden="true"></i> Send Mail</a></li>--}}

                            {{--<li><a class="action-modal" style="cursor:pointer;" data-toggle="modal" --}}
                            {{--data-title='Send SMS to contact' data-url="{{guard_url('user/client/action/sms/'.$client->getRouteKey())}}" data-target="#action-modal"><i class="fa fa-fw fa-comment-o" aria-hidden="true"></i> Send SMS</a></li>--}}
                            {{--<li class="divider"></li>--}}

                            <li><a class="action-clone" style="cursor:pointer;" data-method="GET" data-title="Clone" data-text="Do you want to duplicate this data?" data-url="{{guard_url('user/client/action/copy/'.$client->getRouteKey())}}"><i class="fa fa-fw fa-clone" aria-hidden="true"></i> Clonar</a></li>

                            <li><a class="action-method" data-method="POST" data-title="Archive" data-text="Do you want to change the status of this data?" data-url="{{guard_url('user/client/action/status/archive/'.$client->getRouteKey())}}" style="cursor:pointer;"><i class="fa fa-fw fa-archive" aria-hidden="true"></i> Arquivar</a></li>

                        </ul>
                    </div>
                    <button type="button" class="btn btn-success btn-sm" data-action='NEW' data-load-to='#user-client-entry' data-href="{{guard_url('user/client/create')}}"><i class="fa fa-plus-circle"></i> {{ trans('app.new') }}</button>
                    @if($client->id )
                    <button type="button" class="btn btn-primary btn-sm" data-action="EDIT" data-load-to='#user-client-entry' data-href="{{guard_url('user/client') }}/{{$client->getRouteKey()}}/edit"><i class="fa fa-pencil-square"></i> {{ trans('app.edit') }}</button>
                    <button type="button" class="btn btn-danger btn-sm" data-action="DELETE" data-load-to='#user-client-entry' data-datatable='#user-client-list' data-href="{{guard_url('user/client') }}/{{$client->getRouteKey()}}" >
                    <i class="fa fa-times-circle"></i> {{ trans('app.delete') }}
                    </button>
                    @endif

                    <div class="modal fade" id="action-modal">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header" style="background-color: #dd4b39; color: #fff;">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title">Add New Task</h4>
                                    <div class="popup_description">For {{$client->name}}</div>
                                </div>
                                <div class="modal-body">

                                </div>
                            </div>
                        </div>
                    </div>

<script type="text/javascript">
$( document ).ajaxComplete(function() {
    $('.action-modal').click(function(e){
        $('#action-modal .modal-title').text($(this).data('title'));
        $('#action-modal .modal-body').load($(this).data('url'));
        e.preventDefault();
    });

    $('.action-link').click(function(){
        $(this).attr('href',$(this).data('url'))
        $(this).attr("target", "_blank");
    });

    $('.action-clone').click(function(){
    
        var title   = $(this).data('title');
        var text    = $(this).data('text');
        var method  = $(this).data('method');
        var formUrl = $(this).data('url');
        
        swal({
            title: "Are you sure?",
            text: text,
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, "+ title +" it!",
            closeOnConfirm: false
        }, function(){
            $.ajax({
                url: formUrl,
                type: method,
                success:function(data, textStatus, jqXHR)
                {
                    swal("Copied!", 'Save the data after updation', "success");
                    $('#user-client-entry').html(data);
                }
            });
        });      
    });

    $('.action-method').click(function(){
        
            var title   = $(this).data('title');
            var text    = $(this).data('text');
            var method  = $(this).data('method');
            var formUrl = $(this).data('url');
            var formData = new FormData();
            formData.append('ids', arrayids);

            swal({
                title: "Are you sure?",
                text: text,
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, "+ title +" it!",
                closeOnConfirm: false
            }, function(){
                $.ajax({
                    url: formUrl,
                    type: method,
                    data: formData,
                    cache: false,
                    processData: false,
                    contentType: false,
                    dataType: 'json',
                    async: false,
                    success:function(data, textStatus, jqXHR)
                    {
                        swal(data.caption+"!", data.message, "success");
                        $('#user-client-list').DataTable().ajax.reload( null, false );
                        arrayids = [];
                    },
                    error:function(data, textStatus, jqXHR)
                    {
                        swal("Failed!", data.message, "error");
                    },
                });
            });

      
    });

});
</script>
@php
  $revisions    = $client->revisionHistory;
@endphp
<div class="modal fade" id="revision-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg ">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #dd4b39;color: #fff;">
                <button type="button" class="close" data-dismiss="modal" >&times;</button>
                <h3 class="modal-title">Update History</h3>
            </div>
            <div class="modal-body">
            <table id="revision-list" class="table table-striped  data-table" width="100%">
                <thead  class="list_head">
                    <th>User Name</th>
                    <th>Field</th>
                    <th>Old Value</th>
                    <th>New Value</th>
                    <th>Updated</th>
                </thead>
                <tbody>
                    @forelse($revisions as $key => $value)
                    <tr>
                        <td>{!! @$value->user->name !!}</td>
                        <td><strong>{!! trans(@$label.@$value->field) !!}</strong>({!!@$value->field !!})</td>
                        <td>{!! @$value->old_value !!}</td>
                        <td>{!! @$value->new_value !!}</td>
                        <td>{!! format_date($value->created_at) !!}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5">Nothing to display...</td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times-circle"></i> Close</button>
            </div>
        </div>
    </div>
</div>
