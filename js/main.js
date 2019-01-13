function myFunction() {
    
    if(document.getElementById("nav-search").style.opacity=="0.5")
    {
    		document.getElementById("search-box").style.display="none";
    		document.getElementById("nav-search").style.opacity="1";
    }
    else{
    	document.getElementById("search-box").style.display="block";
        document.getElementById("nav-search").style.opacity="0.5";
    }
}
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:2
        }
    }
})