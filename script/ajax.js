$(document).ready(
    function(){
        $("#button-feedback").click(function(e){
            var name = '';
            var email ='';
            var comment = '';

            $.ajax({
                type: "POST",
                url: "send-feedback.php",
                data: ["name", "comment", "email"],
                success: function (response) {
                    if(response == 'valid'){
                        $('.toast-body').html('Ваш відгук відправлено. Дякуємо, що користувались нашими послугами.');
                    }else{
                        $('.toast-body').html('Упс! Щось пішло не так. Ваш відгук не відправлено. Спробуйте ще раз.')
                    }
                }
            });
        })
    }
)