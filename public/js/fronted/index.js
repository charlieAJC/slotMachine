$(document).ready(function(){
    if (localStorage.getItem('account') == null || localStorage.getItem('account') == '') {
        // alert('第一次訪問頁面沒session');
        localStorage.setItem('account', '');
        $("#navLogin").show();
        $("#navRegister").show();
    } else {
        account = localStorage.getItem('account');
        $("#navbardrop").text(account + " ");
        $("#navBuy").show();
        $("#navAccount").show();
    }
  // console.log(localStorage.getItem('userName'));
})