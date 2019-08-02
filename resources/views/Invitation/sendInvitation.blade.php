@extends('layouts.app')
<div class="page">
    <div class="page-content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                           Send Invitation
                        </h3>
                        <div class="panel-body container-fluid">
                            <form method="post" action="{{route('sendInvite')}}">
                                <input type="hidden"value="{{substr($link,48,10)}}"name="token">
                                <div class="form-group form-material floating" data-plugin="formMaterial">
                                    <input type="text" class="form-control" value="{{$link}}" name="inviteLink" />
                                    <label class="floating-label">Invitation Link</label>
                                </div>
                                <div class="form-group form-material floating" data-plugin="formMaterial">
                                    <input type="email" class="form-control" name="inviteEmail" />
                                    <label class="floating-label">Email</label>
                                </div>
                                <div class="row">
{{--                                    <div class="col-md-2">--}}
{{--                                        <button class="btn btn-block btn-info">Generate Link</button>--}}
{{--                                    </div>--}}
                                    <div class="col-md-2">
                                        <button class="btn btn-block btn-success">Send Email</button>
                                    </div>
                                </div>
                                {{@csrf_field()}}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>