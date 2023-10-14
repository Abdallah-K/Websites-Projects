$(function (){
    $(".hamburger").on('click', function(){
        $(".hamburger").toggleClass("active");
        $(".nav-menu").toggleClass("active");
    })

    document.querySelectorAll(".nav-link").forEach(n => n.addEventListener("click",() =>{
        $(".hamburger").removeClass("active");
        $(".nav-menu").removeClass("active");
    }))


    $(".like").on('click',function(){
        $(this).toggleClass("addlike");
    })

    $(".nxt").click(()=>{ 
        let pos = $(".slider").scrollLeft() + 200;
        $('.slider').animate({scrollLeft:pos},200);
    });

    $(".prev").click(()=>{ 
        let pos = $(".slider").scrollLeft() - 200;
        $('.slider').animate({scrollLeft:pos},200);
    });


    $("#motionnext").click(()=>{ 
        let pos = $(".cartmotion").scrollLeft() + 200;
        $('.cartmotion').animate({scrollLeft:pos},200);
    });

    $("#prevnext").click(()=>{ 
        let pos = $(".cartmotion").scrollLeft() - 200;
        $('.cartmotion').animate({scrollLeft:pos},200);
    });


    // $("#plus").click(()=>{
    //     var counter = 0;
    //     counter ++;
    //     $("#number").html(counter);
    // })


    // var splide = new Splide( '.splide', {
    //     type  : 'fade',
    //     rewind: true,
    // });
    //   splide.mount();
})


