
const container = document.getElementById("posts");
let heighestIndex = 0;

window.addEventListener('load', ()=>{
    fetch("/api.php")
        .then(response=> response)
        .then(response => response.text())
        .then(body =>{
            let data = JSON.parse(body).obj;
            heighestIndex = data[0].ID;
            console.log(data)
            for(let post of data){
                let div = document.createElement("div");
                let header = document.createElement("h2");
                header.innerHTML = post.user_name;

                let text = document.createElement("p");
                text.innerHTML = post.content;

                div.appendChild(header);
                div.appendChild(text);
                container.appendChild(div);
            }
        })
})


function displayPosts(){
    fetch("/api.php")
        .then(response =>  response)
        .then(response => response.text())
        .then(body => {
            console.log(JSON.parse(body).obj);
            for(let post of JSON.parse(body).obj){

            }
        })
    setTimeout(displayPosts, 500);
}
