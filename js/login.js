document.addEventListener('DOMContentLoaded',()=>{
    const finishLog=document.querySelector('#OnPop')
    const finishPop=document.querySelector('.Pop_alert')
    const overlay = document.querySelector('div.overlay');

    finishLog.addEventListener('click',OpenPop)


    function OpenPop(){


        gsap.to(finishPop,{duration:.5,ease:'power1.out',opacity:1,onComplete:()=>{
            gsap.set(finishPop,{display:'block'})
        }})
        gsap.set(overlay, { display: 'block' });

        focus()
    }





})