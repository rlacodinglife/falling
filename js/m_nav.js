document.addEventListener("DOMContentLoaded", () => {
    const clickmenu = document.querySelector('div.bar')
    const clickmenuDiv = document.querySelectorAll('div.bar div')
    const clickmenu1 = document.querySelectorAll('.bar div.click')
    const clickmenu3 = document.querySelector('.m_menu')
    const clickmenu4 = document.querySelector('.m_menuw')
    const clickmenuUl = document.querySelector('.m_menu .m_menuw .mmenu')

    init()

    function init() {
        gsap.set(clickmenu3,{display:'none',width:'0%'})
    }


    clickmenu.addEventListener('click', function () {
        gsap.set(clickmenu3, {
            rigth: '60%', width: '60%', display: 'block', onComplete: () => {
                gsap.to(clickmenu3, { opacity: 1, duration: .5, ease: 'power1.out' })
            }
        })
        gsap.set(clickmenuUl, {
            display: 'block', onComplete: () => {
                gsap.to(clickmenuUl, { opacity: 1, duration: .1, ease: 'power1.out' })
            }
        })
        clickmenuDiv.forEach((item) => {
            item.classList.add('click')
        })
    })

    clickmenuDiv.forEach((item) => {
        item.addEventListener('click', function () {
            gsap.set(clickmenu3, {
                width: '0%', display: 'none', onComplete: () => {
                    gsap.to(clickmenu3, { opacity: 0, duration: .5, ease: 'power1.out' })
                }
            })
            gsap.set(clickmenuUl, {
                display: 'block', onComplete: () => {
                    gsap.to(clickmenuUl, { opacity: 0, duration: .1, ease: 'power1.out' })
                }
            })
            clickmenuDiv.forEach((item) => {
                item.classList.remove('click')
            })
        })
    })
    // clickmenuDiv.addEventListener('click',function(){
    //     gsap.set(clickmenu3,{width:'0%',display:'none',onComplete:()=>{
    //         gsap.to(clickmenu3,{opacity:0,duration:.5,ease:'power1.out'})
    //     }})
    //     gsap.set(clickmenuUl,{display:'block',onComplete:()=>{
    //         gsap.to(clickmenuUl,{opacity:0,duration:.1,ease:'power1.out'})
    //     }})
    //     clickmenuDiv.forEach((item)=>{
    //         item.classList.remove('click')
    //     })
    // })





    //     setting()
    //     Event()

    //     function Event() {
    //         clickmenu.addEventListener('click', showmenu)
    //         clickmenu3.addEventListener('mouseleave',closeMenu)
    //     }




    //     function setting() {
    //         gsap.set(clickmenuUl, { opacity: 0,display:'none' })
    //     }


    //     function showmenu() {



    //         clickmenuDiv.forEach((item) => {
    //             item.classList.add('click');
    //         });
    //         clickmenu.classList.add('click')

    //         gsap.set(clickmenu3, {
    //             width: '40%', display: 'block', opacity: 1, onComplete: () => {
    //                 gsap.to(clickmenu3, { duration: .5, ease: 'power1.out' })
    //             }
    //         })


    //         gsap.set(clickmenuUl, {display:'block',
    //             onComplete: () => {
    //                 gsap.to(clickmenuUl, { duration: .1, ease: 'power1.out', opacity: 1, })
    //             }
    //         })
    //     }

    //     function closeMenu() {
    //         gsap.to(clickmenu3, {
    //             duration: 0.5,
    //             opacity: 0,
    //             onComplete: () => {
    //                 gsap.set(clickmenu3, { display: 'none' });
    //             }
    //         });

    //         clickmenu1.forEach((item) => {
    //             item.classList.remove('click');
    //             gsap.set(item, { display: 'none', opacity: 0 });
    //         });

    //         gsap.set(clickmenuUl, {
    //             display: 'none',
    //             onComplete: () => {
    //                 gsap.to(clickmenuUl, { duration: 0.1, ease: 'power1.out', opacity: 0 });
    //             }
    //         });
    //     }





}








)
