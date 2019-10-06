const data=[
    {
        name: 'John Doe',
        age: 32,
        gender: 'male',
        lookingfor: 'female',
        location: 'Boston MA',
        image: 'https://randomuser.me/api/portraits/men/82.jpg'
      },
      {
        name: 'Jen Smith',
        age: 26,
        gender: 'female',
        lookingfor: 'male',
        location: 'Miami FL',
        image: 'https://randomuser.me/api/portraits/women/82.jpg'
      },
      {
        name: 'William Johnson',
        age: 38,
        gender: 'male',
        lookingfor: 'female',
        location: 'Lynn MA',
        image: 'https://randomuser.me/api/portraits/men/83.jpg'
      }

];

document.getElementById('next').addEventListener('click',nextProfile());

//newxt Event
function nextProfile(){
    
    //get values from array
    const currentProfile=profiles.next().value;
    if(currentProfile.name!==undefined){
    document.getElementById('profileDisplay').innerHTML=`
    <ul class="list-group">
        <li class="list-group-item">Name:${currentProfile.name}</li>
        <li class="list-group-item">Age:${currentProfile.age}</li>
        <li class="list-group-item">location:${currentProfile.location}</li>
        <li class="list-group-item">Preferance:${currentProfile.gender} looking for ${currentProfile.lookingfor}</li>
    </ul>
    `;
    document.getElementById('imageDisplay').innerHTML=
    document.getElementById('imageDisplay').innerHTML = `<img src="${currentProfile.image}">`;
    }else{
        window.Location.reload();
    }
}
const profies=profileIterator(data);
//profie iterator

function profileIterator(profies){
    const nameCount;

    return{
        next:function(){
            return nameCount<profies.length ?
             {value:profiles[nameCount++],done:false} :
             {done:true}
        }
    }
}