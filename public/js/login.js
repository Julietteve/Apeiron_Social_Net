// let csrf = document.querySelector('meta[name="csrf-token"]').content
// let email = document.getElementById('email')
// let password = document.getElementById('password')
// let btn = document.querySelector('button[type=submit]')
//
//
//
//
//     btn.addEventListener('click', function (e){
//       e.preventDefault()
//
//       let form= new FormData
//       form.append ('_token', csrf)
//       form.append ('email', email.value)
//       form.append ('password', password.value)
//
//       fetch ('http://localhost:8000/api/login',{
//         method:'post',
//         body:form,
//       }) .then(function (res){
//         console.log(res.json())
//       })
//     })
