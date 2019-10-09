$(document).ready(function () {
    let acFlag, pwFlag;
    $('#account').focus(function () {
        $(this).css("border-color", "#006cff")
    })

    $('#account').blur(function () {
        $(this).css("border-color", "")
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

    $("#login").click(function () {
        // alert("123");

        if ((acFlag === true) && (pwFlag === true)) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "post",
                url: "login",
                data: {
                    account: $('#account').val(),
                    password: $('#password').val()
                },
                success: function (e) {
                    // console.log(e);
                    let msg = JSON.parse(e);
                    if (msg.status === 1) {
                        alert("登入成功！");
                        localStorage.setItem('account', msg.account);
                        window.location.href = "/";
                    } else {
                        alert("帳號或密碼錯誤");
                        $("#password").val("");
                    }
                }
            });

            $("#index").click(function () {
                window.location.href = 'index';
            })

        }
    });
});

// (function () {
//     'use strict';
//     window.addEventListener('load', function () {
//         // Get the forms we want to add validation styles to
//         var forms = document.getElementsByClassName('needs-validation');
//         // Loop over them and prevent submission
//         var validation = Array.prototype.filter.call(forms, function (form) {
//             form.addEventListener('submit', function (event) {
//                 if (form.checkValidity() === false) {
//                     event.preventDefault();
//                     event.stopPropagation();
//                 }
//                 form.classList.add('was-validated');
//             }, false);
//         });
//     }, false);
// })();