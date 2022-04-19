$(document).ready(function () {
    $("form").submit(function(){
        let user = $("#user").val();
        let pass = $("#pass").val();
        if (user == "" || pass == "") {
          alert("Please fill in the form before submitting");
        }
        else{
            $.post('../core/login_control.php', {username:user, password:pass},
                function(data){
                    alert(data);
                    if(data == "1"){
                        $('#errors').html('Success');
                    }
            });
        }
    });
})