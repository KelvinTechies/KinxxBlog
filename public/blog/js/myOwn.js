var comment= document.querySelector('.btn-comm')
var cancel= document.querySelector('.btn-can')
var field=document.querySelector('.tArea')
btn=document.getElementsByTagName('button')

// bakup=field.getAttribute('placeholder')

newComments=document.querySelector('.newText')

field.onfocus=function () {
    this.setAttribute('placeholder', '')
    this.style.borderColor='#333';
    // btn.style.display='block'
    
}

cancel.onclick=(e)=>{
    e.preventDefault()
    btn.style.display='none'   
     
    field.value=''
}

// field.onblur=function () {
//     this.setAttribute('placeholder', bakup)
// }

comment.onclick=(e)=>{
    // e.preventDefault()   
     
    // newComments.innerText=field.value
    // console.log(newComments);
    
}


blue=document.querySelector('.blue')
blue.onclick(()=>{
body=document.getElementsByTagName('body')
    body.style='backgroundColor=blue'
})

// field.onclick=function () {
// }