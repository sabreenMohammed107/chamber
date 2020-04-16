<div class="table-responsive">
    <table class="table table-bordered text-center">
        <tr class="bg-brown text-white">
            <td>الاسم</td>
            <td>التليفون</td>
            <td>الوزارة</td>
            <td>البريد الإلكترونى	</td>
            <td>الموقع</td>
            <td>العنوان</td>
        </tr>
@foreach($agreements as $agreement)
        <tr>
            
            <td>
            @if(app()->getLocale()=='en')
                                            {{$agreement->en_name}}
					@else
                    {{$agreement->ar_name}}
					@endif   
            </td>
            <td>
        
                    {{$agreement->phone}}
					  
            </td>
            <td>
        
            @if(app()->getLocale()=='en')
                                            {{$agreement->manager_en_name}}
					@else
                    {{$agreement->manager_ar_name}}
					@endif   
					  
            </td>
            <td>
       
                    {{$agreement->email}}
					 
            </td>
            <td>
        
                    {{$agreement->website}}
				  
            </td>
            <td>
            @if(app()->getLocale()=='en')
                                            {{$agreement->en_address}}
					@else
                    {{$agreement->ar_address}}
					@endif   
            </td>
           
        </tr>

@endforeach



    </table>
</div>