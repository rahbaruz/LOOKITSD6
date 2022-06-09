<script src="{{asset('js/app.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="{{asset('js/auth.js')}}"></script>

<script>
    $(document).ready(function(){
        $.get("{{route('user_role')}}", function(data, status){
            if (data.user ==  'organization') {
                $("#my_events_nav").show()
            }else{
                $("#my_events_nav").hide()
            }
        });
    })
</script>