$(document).ready(function () {
    let nameFlag, acFlag, pwFlag;
    $('#name').focus(function () {
        $(this).css("border-color", "#006cff")
    })
    $('#name').blur(function () {
        $(this).css("border-color", "")
    })
    var rule1 = /^.+$/;
    $("#name").blur(function () {
        if (rule1.test($(this).val())) {
            $('.error1').text('')
            $(this).css("border-color", "green")
            nameFlag = true;
        } else {
            $('.error1').text('請輸入姓名')
            $(this).css("border-color", "red")
        }
    })
    var rule2 = /^\w{6,12}$/;
    $("#account").blur(function () {
        if (rule2.test($(this).val())) {
            $('.error2').text('')
            $(this).css("border-color", "green")
            acFlag = true;
        } else {
            $('.error2').text('請輸入6-12位英文或數字的帳號')
            $(this).css("border-color", "red")
        }
    })
    // var rule3=/^([\w\.\-]){1,64}\@([\w\.\-]){1,64}$/;
    // $("#email").blur(function(){
    //     if(rule3.test($(this).val())){
    //         $('.error3').text('')
    //         $(this).css("border-color","green")
    //     }else{
    //         $('.error3').text('')    
    //  中間一定要有一個@
    // '@'前後可以是英文, 數字, 符號.或_或-
    // '@'前後至少1個字，至多64個字
    // 例: a@aaa.aaa = true; @asdf123 = false; .@. = true
    //         $(this).css("border-color","red")
    //     }
    // })
    var rule4 = /^\w{6,12}$/;
    $("#password").blur(function () {
        if (rule4.test($(this).val())) {
            $('.error4').text('')
            $(this).css("border-color", "green")
            pwFlag = true;
        } else {
            $('.error4').text('請輸入6-12位英文或數字的密碼')
            $(this).css("border-color", "red")
        }
    })

    $("#register").click(function () {
        if ((nameFlag === true) && (acFlag === true) && (pwFlag === true)) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                } 
            });
            $.ajax({
                type: "post",
                url: "login/show",
                data: {
                    name: $('#name').val(),
                    account: $('#account').val(),
                    // email : $('#email').val(),
                    password: $('#password').val()
                },
                success: function (e) {
                    if (e == "success") {
                        // view("修改成功！"); 
                        alert("註冊成功！");
                        window.location.href = "login";
                    } else {
                        view(e);
                        alert("false");
                    }
                }
            });

        }
    })
});

// Disable form submissions if there are invalid fields
(function() {
    'use strict';
    window.addEventListener('load', function() {
      // Get the forms we want to add validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();