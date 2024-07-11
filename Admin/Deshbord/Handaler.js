let Update_profile= document.querySelector('.img-cont');
let file_update= document.querySelector('.Update_profile');
let update_button= document.querySelector('.update_button');





Update_profile.addEventListener('click', function(){


    file_update.click()

})

let edit=document.querySelector('.gist_field');

let edit_gist_button= document.querySelector('.edit_gist');
edit_gist_button.addEventListener('click', function(){
  
    edit.contentEditable = "true";
    edit.style.border='2px solid #ddd';
    edit_gist_button.innerHTML='Update';


    edit.addEventListener('keyup', function(){
        console.log(edit.textContent)
        let input_data= document.getElementById('input_data');
        input_data.value=edit.textContent;


    




      })
      edit_gist_button.addEventListener('click', function(){
      edit_gist_button.name='edit_gist';
        edit_gist_button.type="submit";
        
    })
    



})





