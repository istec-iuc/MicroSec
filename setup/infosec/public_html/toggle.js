document.addEventListener("DOMContentLoaded",function(){
    document.querySelectorAll('.sidebar .nav-link').forEach(function(element){
        element.addEventListener('click',function(e){
            let paraentElement = element.parentElement;
            let nextElement = element.nextElementSibling;
            if(nextElement){
                e.preventDefault();
                let myCollapse = new bootstrap.Collapse(nextElement);
                if(nextElement.classList.contains('show')){
                    myCollapse.hide();
                }else{
                    myCollapse.show();
                    var opened_menu = paraentElement.parentElement.querySelector('.submenu .show');
                    if(opened_menu){
                        new bootstrap.Collapse(opened_menu);
                    }
                }
            }
        });
    })
});