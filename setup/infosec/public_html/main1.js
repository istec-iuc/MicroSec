$(document).ready(function () {
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });
});
 let btns = document.querySelectorAll('.btn');
 btns.forEach(el=>{
     el.addEventListener('click',function (){

     })
 })
 var myWindow;
 function closeWin() {
    myWindow.close();
    console.log('test');
  }