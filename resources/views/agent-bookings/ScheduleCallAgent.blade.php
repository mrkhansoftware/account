@if (isset($datas['isAccessAble']) && $datas['isAccessAble'])
@include('common.header',['datas'=>$datas,'title' =>'Schedule a Call','page'=>'ScheduleCallAgent','parent_page'=>'Agent Bookings'])

@include('common.scheduleCallComponent',['scheduleCallTypeName' => 'Agent'])

@include('common.footer')

@else
  Permission denied. Please contact administrator.
  @endif