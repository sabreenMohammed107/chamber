<div class="table-responsive">
    <table class="table table-bordered text-center">
        <tr class="bg-brown text-white">
        <td>الاسم</td>
                           
                           <!-- <td>التاريخ</td> -->
                           <td>عرض</td>
        </tr>
@foreach($agreements as $agreement)
        <tr>
            
            <td>
            @if(app()->getLocale()=='en')
                                            {{$agreement->en_agreement}}
					@else
                    {{$agreement->ar_agreement}}
					@endif   
            </td>
          
            <td>
                            @if(app()->getLocale()=='en')
                            <a href="{{ asset('uploads/files/'.$agreement->en_file) }}" target="_blank"><i class="fa fa-eye"></i></a>
					@else
                    <a href="{{ asset('uploads/files/'.$agreement->ar_file) }}" target="_blank"><i class="fa fa-eye"></i></a>
					@endif  
                               
                            </td>
           
        </tr>

@endforeach



    </table>
</div>