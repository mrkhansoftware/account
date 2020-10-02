@if (isset($datas['isAccessAble']) && $datas['isAccessAble'])
@include('common.header_without_menu',['datas'=>$datas,'title' =>'Meeting Schedule','page'=>'ScheduleCallBVisa'])


@include('common.scheduleCallComponent',['scheduleCallTypeName' => 'J1Supervisor'])

@include('common.footer')

@else
  Permission denied. Please contact administrator.
  @endif