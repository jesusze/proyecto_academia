const nav = document.querySelector('nav');

    window.addEventListener('scroll', function(){
        nav.classList.toggle('active', this.window.scrollY > 0)
    })

var indice=0;
$(".pagination li").eq(indice).css("background-color","white");
$(".pagination li").click(function(){
    
    indice=$(this).index();
    $(".pagination li").css("background-color","black");
    $(this).css("background-color","white");
    $(".slide").hide();
    $(".slide").eq(indice).fadeIn();
});
setInterval(function(){
    indice++;
    if(indice>2){
        indice=0;
    }
    $(".slide").hide();
    $(".slide").eq(indice).fadeIn();
    $(".pagination li").css("background-color","black");
    $(".pagination li").eq(indice).css("background-color","white");
},100000);
$(".right").click(function(){
    indice++;
    if(indice>2){
        indice=0;
    }
    $(".slide").hide();
    $(".slide").eq(indice).fadeIn();
    $(".pagination li").css("background-color","black");
    $(".pagination li").eq(indice).css("background-color","white");
});
$(".left").click(function(){
    indice--;
    if(indice<0){
        indice=2;
    }
    $(".slide").hide();
    $(".slide").eq(indice).fadeIn();
    $(".pagination li").css("background-color","black");
    $(".pagination li").eq(indice).css("background-color","white");
});