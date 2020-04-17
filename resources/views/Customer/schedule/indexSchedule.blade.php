<table class="table table-bordered text-center">
              <tr class="bg-brown text-white">
                <td>اسم الشعبة</td>
                <td>التاريخ</td>
                <td>الميعاد</td>
              </tr>
@foreach($schedules as $schedul)
 
<?php $dateTest = date_create($schedul->meeting_date) ;
$current=date_create(now());
?>
  
             
 <tr bgcolor="#eee">
                <td >
                    @if(date_format($dateTest,"d-m-Y")==date_format($current,"d-m-Y"))
                  <p class="awesome">اليوم*</p>
                  @endif
                  <a href="devisionPage.html" class="text-dark">
                  @if(app()->getLocale()=='en')
                            {{$schedul->en_title}} 
					@else
                    {{$schedul->ar_title}} 
                    @endif
                </a> </td>
                <td data-toggle="tooltip" data-placement="top" title="{{$schedul->en_title}}">
                  <a href="devisionPage.html" class="text-dark">
                  <?php $date = date_create($schedul->meeting_date) ?>
                                    {{ date_format($date,"d-m-Y") }}
                                  
                  </a>
                </td>
                <td  data-toggle="tooltip" data-placement="top" title="{{$schedul->en_title}}">
                  <a href="devisionPage.html" class="text-dark">
                  @if(app()->getLocale()=='en')
                            {{$schedul->en_schedule}} 
					@else
                    {{$schedul->ar_schedule}} 
                    @endif
                  </a>
                </td>
              </tr>

      @endforeach
             
            </table>

            <div class="row no-gutters my-5">
        <div class="col text-center"  style="margin-right: 45%">
          <div id="categorySchedule" class="block-27">
          {!! $schedules->links() !!}
          </div>
        </div>
      </div>