@if (isset($datas['isAccessAble']) && $datas['isAccessAble'])
@include('common.header',['portal_program' =>isset($datas['portalProgram'])?$datas['portalProgram']:''])


@include('common.scheduleCallComponent',['scheduleCallTypeName' => 'B1'])

@include('common.footer')

@else
  Permission denied. Please contact administrator.
  @endif