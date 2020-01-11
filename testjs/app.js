// document.getElementById('button').addEventListener(
//     'click',loadDate);

//     function loadDate(){
//         //create an xhr object
//         const xhr=new XMLHttpRequest();

//         //OPEN
//         xhr.open('GET','data.txt',true);

//         //optional -used for spinner/loader
//         xhr.onprogress=function(){
//             console.log('readyState',xhr.readyState);
//         }

//         xhr.onload=function(){
//             console.log('hashika',xhr.readyState);
//             if(this.status===200){
//                 console.log(this.responseText);
//             }
//         }
//         xhr.send();
//     }




//using jason file

// document.getElementById('button').addEventListener('click',getJsonFile);

// function getJsonFile(e){

//     const xhr=new XMLHttpRequest();

//     xhr.open('GET','customer.json',true);

//     xhr.onload=function(){
//                     console.log('hashika',xhr.readyState);
//                     if(this.status===200){
//                         console.log(this.responseText);
//                     }
//                 }
//                 xhr.send();

// }

//using jason file

document.getElementById('button').addEventListener('click',getJsonFile);

function getJsonFile(e){

    const xhr=new XMLHttpRequest();

    xhr.open('GET','customer.json',true);

    xhr.onload=function(){
                    //console.log('hashika',xhr.readyState);
                    if(this.status===200){
                        const customers=JSON.parse(this.responseText);

                        let output='';

                        customers.forEach(function(customer){
                            output+=
                            <ul>
                                <li>Id :${customer.id}</li>
                                <li>Name:${customer.name}</li>
                                <li>Num :${customer.number}</li>
                                <li>Male :${customer.Male}</li>
                            </ul>
                        });
                        document.getElementById('button').innerHTML=output;

                        console.log(this.responseText);
                    }
                }
                xhr.send();

}