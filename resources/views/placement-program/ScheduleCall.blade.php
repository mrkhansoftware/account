@if (isset($datas['isAccessAble']) && $datas['isAccessAble'])
@include('common.header',['datas'=>$datas,'title' =>'Meeting Schedule','page'=>'ScheduleCall','parent_page'=>'Placement Program'])

@include('common.scheduleCallComponent',['scheduleCallTypeName' => 'Placement'])

@include('common.footer')

@else
  Permission denied. Please contact administrator.
  @endif