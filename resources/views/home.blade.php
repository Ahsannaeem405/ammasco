<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
    $( document ).ready(function() {
        
            var role="{{Auth::user()->role}}";
            var email="{{Auth::user()->email_verified_at}}";
            if(role=='1')
            {
                window.location.href= 'http://ammasco.herokuapp.com/public/admins/';
              
            }

            else if(role=='3' && email!= null)
            {
                window.location.href= 'http://ammasco.herokuapp.com/public/user/';
                
                
            }
            else
            {
                window.location.href= 'http://ammasco.herokuapp.com/public/email/verify'; 
                
            }
            
    
        });
</script>