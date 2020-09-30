@if (isset($datas['isAccessAble']) && $datas['isAccessAble'])
@include('common.header',['datas'=>$datas,'title' =>'','page'=>'page'])

@include('common.scheduleCallComponent',['scheduleCallTypeName' => 'Placement'])

@include('common.footer')

@else
  Permission denied. Please contact administrator.
  @endif