document.addEventListener('DOMContentLoaded', function () {
    const selectBoxes = document.querySelectorAll('li.select_box');

    selectBoxes.forEach(box => {
        box.addEventListener('click', function () {
            // 모든 select_box 요소에서 'selected' 클래스 제거
            selectBoxes.forEach(b => b.classList.remove('selected'));

            // 클릭한 요소에 'selected' 클래스 추가
            this.classList.add('selected');
        });
    });

    const ABbtn = document.querySelectorAll('div.AB_btn')
    const SelectWrap = document.querySelector('div.select_wrap')
    const mainWrap=document.querySelector('section#main')

    ABbtn.forEach((item)=>{
        item.addEventListener('click',()=>{
            SelectWrap.classList.add('height_select')
         
        })
    })
});