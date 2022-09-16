const img1=document.querySelectorAll('.logo div img')[0]
const img2=document.querySelectorAll('.logo div img')[1]
const img3=document.querySelectorAll('.logo div img')[2]
const logo_div1=document.querySelectorAll('.logo div')[0]
const logo_div2=document.querySelectorAll('.logo div')[1]
const logo_div3=document.querySelectorAll('.logo div')[2]
const logo_div=document.querySelectorAll('.logo div')


    logo_div1.addEventListener('mouseover',()=>{

    img1.classList.add('active')
    img2.classList.remove('active')
    img3.classList.remove('active')


    })
    logo_div2.addEventListener('mouseover',()=>{

    img1.classList.remove('active')
    img2.classList.add('active')
    img3.classList.remove('active')


    })
    logo_div3.addEventListener('mouseover',()=>{

    img1.classList.remove('active')
    img2.classList.remove('active')
    img3.classList.add('active')


    })
for(let logo_divs of logo_div){
logo_divs.addEventListener('mouseout',()=>{
    img1.classList.remove('active')
    img2.classList.remove('active')
    img3.classList.remove('active')   
})
}
