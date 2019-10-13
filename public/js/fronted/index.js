// Get the button
// var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
// window.onscroll = function() {scrollFunction()};

// function scrollFunction() {
//   if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
//     mybutton.style.display = "block";
//   } else {
//     mybutton.style.display = "none";
//   }
// }

// When the user clicks on the button, scroll to the top of the document
// function topFunction() {
//   document.body.scrollTop = 0;
//   document.documentElement.scrollTop = 0;
// }

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
