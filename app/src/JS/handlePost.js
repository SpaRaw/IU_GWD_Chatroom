
const container = document.getElementById("posts");
let heighestIndex = 0;

window.addEventListener('load', ()=>{
    fetch("/api.php")
        .then(response=> response)
        .then(response => response.text())
        .then(body =>{
            let data = JSON.parse(body).obj;
            heighestIndex = data[0].ID;
            for(let post of data){
                let div = document.createElement("div");
                div.classList.add("postCard");
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


function fetchNewPosts(){
    console.log("fetch");
    fetch("/api.php")
        .then(response =>  response)
        .then(response => response.text())
        .then(body => {
            let data = JSON.parse(body).obj;
            let newHeighestIndex = data[0].ID;
            let newPosts = data.slice(0, newHeighestIndex-heighestIndex)
            if(newPosts.length != 0){
                while(newPosts.length > 0){
                    let newesPost = document.getElementsByClassName("postCard")[0]
                    let post = newPosts.pop();
                    console.log(post);
                    let div = document.createElement("div");
                    div.classList.add("postCard");
                    let header = document.createElement("h2");
                    header.innerHTML = post.user_name;

                    let text = document.createElement("p");
                    text.innerHTML = post.content;

                    div.appendChild(header);
                    div.appendChild(text);
                    container.insertBefore(div, newesPost);
                }
                heighestIndex = newHeighestIndex;
            }

        })
    setTimeout(fetchNewPosts, 500);
}

fetchNewPosts();