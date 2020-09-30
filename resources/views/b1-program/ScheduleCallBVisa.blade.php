@if (isset($datas['isAccessAble']) && $datas['isAccessAble'])
@include('common.header',['datas'=>$datas,'title' =>'','page'=>'page'])

@include('common.scheduleCallComponent',['scheduleCallTypeName' => 'B1'])

@include('common.footer')

@else
  Permission denied. Please contact administrator.
  @endif