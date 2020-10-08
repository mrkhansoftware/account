@if (isset($datas['isAccessAble']) && $datas['isAccessAble'])
@include('common.header',['datas'=>$datas,'title' =>'Meeting Schedule','page'=>'ScheduleCallJvisa','parent_page'=>'J1 Program'])


@include('common.scheduleCallComponent',['scheduleCallTypeName' => 'J1'])

@include('common.footer')

@else
  Permission denied. Please contact administrator.
  @endif