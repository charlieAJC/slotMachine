$(document).ready(function () {
    $("#navLogout").click(function () {
        let msg = confirm("確認登出?");
        if(msg){
            // localStorage.setItem('account', '');
            // return true;
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                } 
            });
            $.ajax({
                type: "post",
                url: "logout",
                data: {
                    logout: '1'
                },
                success: function (e) {
                    if (e == 1) {
                        localStorage.removeItem('account');
                        window.location.href = "/";
                    }
                }
            });
        } else {
            return false;
        }
        
    })
})